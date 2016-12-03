<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        if (Auth::attempt(['email' => $request->username, 'password' => $request->password])) {
            $this->FlashNotification("Erfolgreicher Login.", "alert-success");
            return redirect('/Uebersicht');
        } else {
            $this->FlashNotification("Username oder Passwort falsch.", "alert-danger");
            return redirect('/Login');
        }
    }

    private function FlashNotification($message, $class) {
        \Session::flash('flash_message', $message);
        \Session::flash('flash_message_class', $class);
    }
}
