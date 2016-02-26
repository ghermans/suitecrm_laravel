<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\User as User;

class UserTableSeeder extends Seeder {

/**
   * Run the database seeds.
   *
   * @return void
*/
    public function run()
    {

      // Truncate method.
      \DB::statement('SET foreign_key_checks=0');
      User::truncate();
      \DB::statement('SET foreign_key_checks=1');

      $user = new User();
      $user->fname = 'Admin';
      $user->name  = 'User';
      $user->address = 'Foobar street 4';
      $user->city = 'Brussels';
      $user->country = 'Belgium';
      $user->email = 'admin@suiteportal.net';
      $user->password = bcrypt("demo123456");

      if ($user->save()) {
        $assign = User::find($user->id);
        Bouncer::assign('admin')->to($assign);
        Bouncer::refreshFor($assign);
      }else(Log::alert('admin user registration failed'));
    }
  }
