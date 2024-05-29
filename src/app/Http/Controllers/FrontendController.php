<?php

namespace App\Http\Controllers;

use App\Models\GurudanTenagaKependidikan;
use App\Models\JenisGTK;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $gurudantenagakependidikans = GurudanTenagaKependidikan::all(); 
        return view('frontend.index', compact('gurudantenagakependidikans'));
    }
}
