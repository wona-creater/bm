<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class userController extends Controller
{
    //


   public function view () {

    $user = Auth::user();
    return view ('user.dashboard');
   }

   public function deposit () {

    $user = Auth::user();
    return view ('user.deposit');
   }


   public function deposithistory () {

    $user = Auth::user();
    return view ('user.deposithis');
   }

   public function withdrawal () {

    $user = Auth::user();
    return view ('user.withdrawal');
   }
   public function withdrawalhistory () {

    $user = Auth::user();
    return view ('user.withdrawalhis');
   }


   public function invest () {

    $user = Auth::user();
    return view ('user.invest');
   }
   public function investhistory () {

    $user = Auth::user();
    return view ('user.investhis');
   }




}
