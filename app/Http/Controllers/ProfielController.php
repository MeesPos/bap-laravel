<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ProfielController extends Controller
{
    public function profiel() {
        $user = Auth::user();

        return view('profiel', ['user' => $user]);
    }

    public function aanpassen($id, Request $request) {
        echo $id;

        $data = $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email|min:8|max:70'
            ]
        );

        User::where('id', $id)->update($data);

        return back()->with('succes', 'Je gegevens zijn succesvol aangepast!');
    }

    public function twofactor() {
        $google2fa = app('pragmarx.google2fa');
        return $google2fa->generateSecretKey();
        $google2fa->setQRCodeBackend('svg');

        return view('auth.2fa');
    }
}
