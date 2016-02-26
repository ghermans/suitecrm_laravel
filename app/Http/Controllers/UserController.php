<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\createUserValidator;
use App\Http\Requests\changePasswordValidator;

use App\User;
use App\Countries;
use Mail;
use App\Timezones;


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
      $timezones = Timezones::all();
        return view('auth.create_user', ['countries' => $countries, 'timezones' => $timezones]);
    }

    /**
     * @param Request $request
     * @param createUserValidator $input
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
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

      $mailbox = env('MAIL_USERNAME');
      $mail_password = $request->get('password');
      \Session::flash('message', "User has been added to the portal");
      \Mail::send('emails.new_user', ['user' => $user, 'password' => $mail_password], function ($m) use ($user, $mailbox) {
                  $m->from($mailbox);
                  $m->to($user->email)->subject('Your portal credentials!');
              });

      return redirect('admin/users');
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
      $country_list = Countries::all();
      $user = User::find($id);
      $errors = \Session::get('msg');
      $timezones = Timezones::all();

      return view('auth.display_user', compact('user','country_list','errors','timezones'));

    }

    /**
     * @param $id
     * @param Request $request
     * @return mixed
     */
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

    /**
     * @param Request $request
     * @return mixed
     */
    public function update_profile(Request $request)
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

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
      $user = User::find($id);
      $user->delete();
      \Session::flash('message', "User has been removed from the portal");
      return redirect('admin/users');
    }

    public function profile()
    {
        $country_list = Countries::all();
        $timezones = Timezones::all();
        return view('auth/profile', ['countries' => $country_list, 'timezone' => $timezones]);
    }


    public function profile_chpass()
    {
      $user = \Auth::user();
        return view('auth/chpass', ['user' => $user]);
    }


    /**
     * @param Request $request
     * @param changePasswordValidator $input
     * @return mixed
     */
    public function update_chpass(Request $request, changePasswordValidator $input)
    {
        $user = \Auth::user();
        $user->password = bcrypt($request->get('password'));
        $user->update();

        \Session::flash('message', "Password has been updated");
        return \Redirect::back();
    }

}
