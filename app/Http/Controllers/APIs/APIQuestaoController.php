<?php

namespace App\Http\Controllers\APIs;

use App\Models\Questao\Questao;
use App\Http\Controllers\Controller;

class APIQuestaoController extends Controller
{
    public function JsonQuestoes(){
         return response(Questao::all());
    }
}
