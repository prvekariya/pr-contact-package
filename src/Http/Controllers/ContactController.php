<?php

namespace Pr\Contact\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Pr\Contact\Http\Models\Contact;
use Pr\Contact\Mail\ContactMailable;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function save(Request $req){
      Mail::to(config('contact.send_email_to'))->send(new ContactMailable($req->message,$req->name,$req->email));
      $contact = Contact::create($req->all());
      return redirect(route('contact'));
    }
}
