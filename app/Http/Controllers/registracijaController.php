<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //DB fasada
use App\Models\User;

class registracijaController extends Controller
{
    //prikaz forme za registraciju
    public function prikaz_forme()
    {
        $user= new User();
        $user->name = 'mika';
        $user->email = 'nikola@gmfffail.com';
        $user->password = 'lozinka';

        $user->save();

        return view('registracija');
    }
}
