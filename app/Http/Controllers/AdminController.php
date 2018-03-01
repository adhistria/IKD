<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
class AdminController extends Controller
{
    public function destroy(Request $request){
        $user = User::find($request->id);
        $user->delete();
        $request->session()->flash('alert-success', 'Admin was successful deleted!');
        return redirect()->route("editadmin");
    }
    public function showalladmin(){
        $users = User::all();
//        $idUser = Au::user()->id;
        return view('admin-editadmin')->with(['users'=>$users]);
    }

    public function updateprofile(Request $request){
        $id = Auth::user()->id;
        $user = User::find($id);
//        return $user;
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'username' => 'required|unique:users,username,'.$id,
            'email' => 'required|string|email|max:255|unique:users,email,'.$id,
            'password' => 'required|string|min:6|confirmed',
        ]);
        if ($validator->fails()) {
            return redirect()->route('editprofile')
                ->withErrors($validator)
                ->withInput();
        }
        $user->name= $request->name;
        $user->username= $request->username;
        $user->password= Hash::make($request->password);
        $user->email= $request->email;
        $user->name= $request->name;

        $user->save();
        $request->session()->flash('alert-success', 'Admin Profile was successful updated!');
        return redirect()->route("editprofile");
    }

    public function editprofile(){
        $id = Auth::user()->id;
        $user= User::find($id);
        return view('admin-editprofile')->with('user',$user);

    }
}
