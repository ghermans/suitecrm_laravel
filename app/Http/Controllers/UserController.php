<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\createUserValidator;
use App\User;
use App\Countries;

class UserController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
      $this->middleware('language');
  }

    public function index()
    {
        $users = User::all();
        return view('admin.users', ['users' => $users]);
    }

    public function create()
    {
      $countries = Countries::all();
        return view('auth.create_user', ['countries' => $countries]);
    }

    public function store(Request $request, createUserValidator $input)
    {

      $user = new User;
      $user->fname = $request->get('fname');
      $user->name = $request->get('name');
      $user->address = $request->get('address');
      $user->postal_code = $request->get('postal_code');
      $user->city = $request->get('city');
      $user->country = $request->get('country');
      $user->email = $request->get('email');
      $user->password = bcrypt($request->get('password'));
      $user->save();

      \Session::flash('message', "User has been added to the portal");
      return redirect('admin/users');
    }

    public function edit($id)
    {
      $country_list = Countries::all();
      $user = User::find($id);
      $errors = \Session::get('msg');
      return view('auth.display_user', compact('user','country_list','errors'));

    }

    public function updateUser($id, Request $request)
    {
        $user = User::find($id);
        $user->fname = $request->get('fname');
        $user->name = $request->get('name');
        $user->address = $request->get('address');
        $user->postal_code = $request->get('postal_code');
        $user->city = $request->get('city');
        $user->country = $request->get('country');
        $user->email = $request->get('email');
        $user->update();

        \Session::flash('message', "User details have been updated");
        return \Redirect::back();
    }

    public function destroy($id)
    {
      $user = User::find($id);
      $user->delete();
      return redirect('admin/users');
    }

    public function profile()
    {
        $country_list = Countries::all();
        return view('auth/profile', ['countries' => $country_list ]);
    }


    public function profile_chpass()
    {
        return view('auth/chpass');
    }


    public function chpassMethod(changePasswordValidator $input)
    {

    }

}
