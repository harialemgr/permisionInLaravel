<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomesController extends Controller
{
    public function index(){
        return view('layout.app');
    }
    public function dataStore(){
        return view('datastore.index');
    }
}
