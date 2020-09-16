<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

class HomeController extends Controller
{
    public function index(){
        return view('pages.home_content');
    }

    public function oportunity_by_id($oportunity_id){

        $oportunities=DB::table('tbl_oportunity')
        ->select('tbl_oportunity.*')
        ->where('tbl_oportunity.oportunity_id', $oportunity_id)
        ->where('tbl_oportunity.publication_satus', 1)
        ->first();

        $manage_oportunities=view('pages.job')
    		->with('oportunities',$oportunities);

    	return view('layout')
    		->with('pages.job', $manage_oportunities);
    }



    
}