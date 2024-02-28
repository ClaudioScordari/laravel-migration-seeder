<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//Models
use App\Models\Train;

class TrainController extends Controller
{
    public function index(){
        $trains = Train::all(); // Tutti i treni
        return view('trains.index_trains', compact('trains'));
    }
}
