<?php

namespace App\Http\Controllers;
Use App\Mail\lloyds;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;


use Illuminate\Http\Request;

class SendmailController extends Controller
{
    //
public function index(Request $req) {

    $title = $req->title;
    $sendermail = $req->sendermail;
    $clientemail = $req->clientemail;
    $message = $req->message;
    $clientname = $req->clientname;
    $sendername = $req->sendername;

    $emaildata = ['email_body' => $message, 'email_header' => $title];

    $out = Mail::send("emails.lloyds", $emaildata, function($message) {
        $message->to( $clientemail, $clientname )->subject
           ($title);
        $message->from( $sendermail ,$sendername );
     });

     if ($out) {
        # code...
        Alert::success("Mail sent", "Mail sent succesfully");
        return back();
     } else {
        # code...
        Alert::error("Failed to send mail" ,"Mail sending Failed");
        return back();
     }


     // Mail::to($clientemail)->bcc("gettingsnano@gmail.com")->send(new lloyds($emaildata));






}
}
