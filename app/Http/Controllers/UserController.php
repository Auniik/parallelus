<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function addUser(){
        return view('backend.users.add_user');
    }
    public function users(){
        $users = User::paginate(10);
        return view('backend.users.all_user', compact('users'));
    }
    public function saveUser(Request $request){
        
        $validateData = $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|unique:users|email',
            'password' => 'required|min:6',
            'password_confirmation' => 'required_with:password|same:password|min:6'
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        return redirect('/user/add')->withMessage('User Added Successfully!');
    }

    public function editUser($id){
        $user = User::findOrFail($id);
        return view('backend.users.edit_user', compact('user'));
    }

    public function updateUser(Request $request, User $user){
        $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|email|unique:users,email,'. $user->id,
            'password' => 'required|min:6',
            'password_confirmation' => 'required_with:password|same:password|min:6'
        ]);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        return redirect('/user/all')->withMessage('User Updated Successfully!');
    }

    public function deleteUser($id){
        $user = User::findOrFail($id);
        $user->delete();
        return redirect('/user/all')->withMessage('User Deleted.');
    }
}
