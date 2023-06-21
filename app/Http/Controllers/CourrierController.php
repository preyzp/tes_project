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
        return view('courrierView', compact('data', 'response'));
    }

    public function formindex()
    {
        $table = "select facility_type, descs from mgr.fm_facility_type";
        $datadrop = DB::connection('IFCAPBI')->select($table);
        return view('facility', compact('datadrop', 'table'));

    }

    public function save(Request $request)
    {
        $data = array(
            'trxcode' => $request->trxcode,
            'description' => $request->description,
            'facility_type' => $request->facilitytype,
            'price' => $request->price,
        );

        $insert = DB::connection('mysql')->table('trx')->insert($data);

        return redirect()->route('facilitydata');
    }

    public function index()
    {
        $data = DB::table('trx')->get();
        return view('facilityindex', compact('data'));
    }
    
}