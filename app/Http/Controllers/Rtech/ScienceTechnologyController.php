<?php

namespace App\Http\Controllers\Rtech;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ScienceTechnologyController extends Controller
{
    public function index()
    {
        return view('pages.rtech.science_technology');
    }
}