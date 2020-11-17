<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\ContactUsMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function sendMail(Request $request){
        Mail::to(env('MAIL_TO_ADDRESS','abnbearing@mailinator.com'))->send(new ContactUsMail($request->all()));
        return response()->json(['message' => 'Email sent']);
    }
}
