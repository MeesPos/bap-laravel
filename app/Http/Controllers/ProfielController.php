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
                'email' => 'required'
            ]
        );

        User::where('id', $id)->update($data);

        return back()->with('succes', 'Je gegevens zijn succesvol aangepast!');
    }
}
