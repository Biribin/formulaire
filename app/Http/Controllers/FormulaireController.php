<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formulaire;
class FormulaireController extends Controller
{
    //
    public function formulaire()
    {
        return view('auth.formulaire');
    }

}
