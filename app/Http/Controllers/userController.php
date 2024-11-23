<?php

namespace App\Http\Controllers;

use App\Models\Deposit;
use App\Models\Token;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class userController extends Controller
{
    //


   public function view () {

    $user = Auth::user();
    return view ('user.dashboard',compact('user'));
   }

   public function deposit () {

    $user = Auth::user();
    $deposits = $user->deposits;

    $tokens = Token::all();
    return view ('user.deposit', compact('tokens','deposits'));
   }


   public function deposithistory (Request $request) {

    $user = Auth::user();

    $request->validate([
        'amount' => 'required|numeric|min:0.01',
        'transaction_id' => 'required|string',
        'image' => 'nullable|image|mimes:jpg,png,jpeg,gif',
    ]);

    // Handle the image upload if any
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('uploads', 'public');
    } else {
        $imagePath = null;
    }

    // Store the deposit
    Deposit::create([
        'user_id' => auth()->id(),
        'transaction_id' => $request->transaction_id,
        'amount' => $request->amount,
        'status' => 'pending',
        'image' => $imagePath,
    ]);

    return redirect()->route('user.deposithis')->with('success', 'Deposit requested successfully.');
    // return view ('user.deposithis');
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
