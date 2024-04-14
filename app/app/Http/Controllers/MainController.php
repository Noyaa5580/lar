<?php

namespace App\Http\Controllers;
use App\Models\ContactModel;
use Illuminate\Http\Request;

class MainController extends Controller
{
   public function home(){
    return view("welcome");
   }
   public function about(){
    return view("about");
   }
   public function review(){
    $reviews = new ContactModel();
    return view("review", ['reviews' => $reviews -> all()]);
   }
   public function review_check(Request $request){
    $valid = $request->validate([
        "email"=> "required|min:4|max:32",
        "subject"=> "required|min:4|max:32",
        "message"=> "required|min:12|max:500",
    ]);

    $review = new ContactModel();
    $review ->email = $request->input(key: 'email');
    $review ->subject = $request->input(key: 'subject');
    $review ->message = $request->input(key: 'message');

    $review->save();

    return redirect('review');
    }
}
