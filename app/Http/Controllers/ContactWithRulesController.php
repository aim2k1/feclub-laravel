<?php
namespace App\Http\Controllers;

use Illuminate\Mail\Mailer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactWithRulesController extends Controller
{
    public function send(Request $request, Mailer $mailer) {
        $rules = [
            'name' => 'required',
            'email' => 'required|email',
        ];

        $messages = [
            'name.required' => 'Gib bitte deinen Namen ein.',
            'email.required' => 'Gib bitte deine E-Mail-Adresse ein.',
            'email.email' => 'Gibt bitte eine korrekte E-Mail-Adresse ein.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect(route('contact'))->withErrors($validator)->withInput();
        }

        $mailer->to('example@example.de')->send(new \App\Mail\Contact($request->all()));

        return redirect(route('contact'))->with('success', 'Ihre Email wurde varsandt.');
    }

    public function view() {
        $data['title'] = 'Contact';

        return view('contactWithRules', compact('data'));
    }
}
