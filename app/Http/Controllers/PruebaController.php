<?php

namespace Distry\Http\Controllers;

use Illuminate\Http\Request;

class PruebaController extends Controller
{
    public function prueba($parametro){
        return "dsjhdjlkdsj ksdjsjd jsdjskldj ".$parametro;
    }
}
