<?php

namespace App\Http\Controllers\Rtech;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TechnicalServicesController extends Controller
{
    public function index()
    {
        return view('pages.rtech.technical_services');
    }
}
