<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
      $this->middleware('language');
  }

    public function index()
    {
      return view('admin.welcome');
    }

    public function connector()
    {
      $url = \Config::get("suitecrm.url");
      $username = \Config::get("suitecrm.username");
      return view('admin.connector', compact('url', 'username'));
    }


    public function store_connector(Request $request, ConnectorValidator $input)
    {
      // This needs to be written into a middleware.
       \Config::set('suitecrm.url', $request->get('hostname'));
       \Config::set('suitecrm.url', $request->get('username'));
       \Config::set('suitecrm.password', $request->get('password'));
    }
}
