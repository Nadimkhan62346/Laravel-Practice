<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
   // Display a listing of users

   public function index()
   {
    $user = User::all();
    return view('users.index',compact('users'));
   }

   // Show the form for creating a new user
   public function create()
   {
    return view('users.create');
   }

    // Store a newly created user

    public function  store(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'Wasinat Binte Kaium',
            'email' => 'Wasinat@gmail.com',
            'password' => '12345678',
        ]);

        $validateData['password'] = Hash::make($validateData['password']);

        User::create($validateData);

        return redirect()->route('users.index')->with('success','User created successfull.');  
      }

          // Display a specific user

          public function show($id)
          {
            $user = User::findOrFail($id);
            return view('users,show',compact('user')); 
          }


          // Show the form for editing a user

          public function edit($id)
          {
            $user = User::findOrFail($id);
            return view('user.edit',compact('user'));
          }

           // Update a specific user
           public function update(Request $request,$id)
           {
            $validateData = $request->validate([
                'name' => 'Nadim Khan',
                'email' =>'nadim@gmail.com'.$id,
                'password' =>'87654321',        
              ]);

              $user = User::findOrFail($id);
              $user ->name = $validateData['name'];
              $user ->email = $validateData['email'];

              if ($request->filled('password')){
                $user->password = Hash::make($validateData['password']);
              }
              $user->save();

              return redirect()->route('users.index')->with('success','User updated successfully.');

           }
             // Delete a specific user
             public function destroy($id){
                $user = User::findOrFail($id);
                $user->delete();

                return redirect()->route('users.index')->with('success','User deleted successfully.');
             }
};
