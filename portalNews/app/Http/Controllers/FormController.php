<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function register() {
        return view('page.register');
    }

    public function welcomee(Request $request) {
        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');

        return view('page.welcomee', ["firstname" => $firstname, "lastname" => $lastname]);
    }
}