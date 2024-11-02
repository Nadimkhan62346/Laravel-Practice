<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Modelwasinat extends Model
{
    //hasfactory
    use Hasfactory,Notifiable ;

    //specify the table name   
    protected $table = 'wasinat';

// fillable fields for mass assigment
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    // fields to hide from arry or json representations

    protected $hidden = [
        'password',
        'remember_token',
    ];

    // enable timestamps

    public $timestamps = true;

    // Relationship:Auser have many posts
    public function posts(){
        return $this->hasMany(Post::class);
    }

     // Relationship: A user can have many comments
     public function comments(){
        return $this->hasMany(Comment::class);
     }

         // Example of an accessor to get the user's full name
         public function getFullNameAttribute()
         {
            return $this->Wasinat_Binte_Kaium;
         }

    // Example of mutator to hash the password before saving
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
     }

         // Example method to check if user is an admin
         public function isAdmin()
         {
            return $this->role === 'admin'; // Assuming there's a role column
         }
};
