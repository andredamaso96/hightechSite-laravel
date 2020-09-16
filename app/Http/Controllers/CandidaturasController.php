<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

class CandidaturasController extends Controller
{
    public function index(){
        return view('pages.home_content');
    }

    // public function show_oportunity($oportunity_id){

    //     $oportunities=DB::table('tbl_oportunity')
    //     ->select('tbl_oportunity.*','tbl_oportunity.title','tbl_oportunity.type_job','tbl_oportunity.category','tbl_oportunity.brands_name')
    //     ->where('tbl_oportunity.publication_status', 1)
    // }
}
