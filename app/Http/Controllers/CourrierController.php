<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Http;
use DataTables;
use Validator;

class CourrierController extends Controller
{
    public function getData()
    {
        $response = Http::get('http://dev.ifca.co.id:8080/apiwebpbi/api/package-master/courier');
        $data = $response->object();
        return view('jawabanFE', compact('data', 'response'));
    }
    
}