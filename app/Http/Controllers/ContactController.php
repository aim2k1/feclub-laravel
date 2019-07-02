<?php
namespace App\Http\Controllers;

use Illuminate\Mail\Mailer;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function send(Request $request, Mailer $mailer) {
        $mailer->to('markuszundel@googlemail.com')->send(new \App\Mail\Contact($request->all()));

        return redirect(route('contact'))->with('success', 'Ihre Email wurde varsandt.');
    }

    public function view() {
        $data['title'] = 'Contact';

        return view('contact', compact('data'));
    }
}
