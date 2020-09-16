<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class OportunityController extends Controller
{
    public function index(){

        $this->AdminAuthCheck();

    	return view('admin.add_oportunity');
    }

    public function all_oportunity(){

        $this->AdminAuthCheck();

    	$all_oportunity_info=DB::table('tbl_oportunity')->get();
    	$manage_oportunity=view('admin.all_oportunity')
    		->with('all_oportunity_info',$all_oportunity_info);

    	return view('admin_layout')
    		->with('admin.all_oportunity', $manage_oportunity);

    	//return view('admin.all_oportunity');
    }

    public function save_oportunity(Request $request){

    	$data=array();
    	$data['oportunity_id']=$request->oportunity_id;
    	$data['title']=$request->oportunity_name;
    	$data['type_job']=$request->oportunity_type;
    	$data['category']=$request->oportunity_category;
    	$data['work_time']=$request->oportunity_time;
    	$data['location']=$request->oportunity_location;
    	$data['description']=$request->oportunity_description;
        $data['publication_satus']=$request->publication_satus;
        // $data['oportunity_image']=$request->oportunity_image;
        

        DB::table('tbl_oportunity')->insert($data);
        Session::put('message','Oportunidade adicionada com sucesso!!');
        return Redirect::to('/add-oportunity');

       
    	
    }

    public function unactive_oportunity($oportunity_id){

    	DB::table('tbl_oportunity')
    		->where('oportunity_id', $oportunity_id)
    		->update(['publication_satus' => 0]);
    	Session::put('message', 'Oportunidade desativada com sucesso!!');
    		return Redirect::to('/all-oportunity');
    }

    public function active_oportunity($oportunity_id){

    	DB::table('tbl_oportunity')
    		->where('oportunity_id', $oportunity_id)
    		->update(['publication_satus' => 1]);
    	Session::put('message', 'Oportunidade ativada com sucesso!!');
    		return Redirect::to('/all-oportunity');
    }

    public function edit_oportunity($oportunity_id){

        $this->AdminAuthCheck();

    	$oportunity_info=DB::table('tbl_oportunity')
    				->where('oportunity_id', $oportunity_id)
    				->first();
    	$oportunity_info=view('admin.edit_oportunity')
    		->with('oportunity_info',$oportunity_info);
    	return view('admin_layout')
    		->with('admin.edit_oportunity', $oportunity_info);

    	//return view('admin.edit_oportunity');

    }

    public function update_oportunity(Request $request, $oportunity_id){

    	$data=array();

    	$data['title']=$request->oportunity_name;
    	$data['type_job']=$request->oportunity_type;
    	$data['category']=$request->oportunity_category;
    	$data['work_time']=$request->oportunity_time;
    	$data['location']=$request->oportunity_location;
    	$data['description']=$request->oportunity_description;
   

    	DB::table('tbl_oportunity')
    		->where('oportunity_id', $oportunity_id)
    		->update($data);

    		Session::get('message', 'Oportunidade editada com sucesso!!');
    		return Redirect::to('/all-oportunity');

    }

    public function delete_oportunity($oportunity_id){

    	DB::table('tbl_oportunity')
    		->where('oportunity_id', $oportunity_id)
    		->delete();
    	Session::get('message', 'Oportunidade removida com sucesso!!');
    	return Redirect::to('/all-oportunity');

    }

    public function AdminAuthCheck(){

        $admin_id=Session::get('admin_id');
        if ($admin_id){
            return;
        }else{
            return Redirect::to('/admin')->send();
        }
    }
}
