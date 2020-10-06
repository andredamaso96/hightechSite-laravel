<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
session_start();

class ProjectController extends Controller
{

    public function AdminAuthCheck(){

        $admin_id=Session::get('admin_id');
        if ($admin_id){
            return;
        }else{
            return Redirect::to('/admin')->send();
        }
    }

    public function index()
    {
    	$this->AdminAuthCheck();	
    	return view('admin.add_project');
    }

    public function all_project(){

    	$this->AdminAuthCheck();
    	$all_project_info=DB::table('tbl_project')->get();
    					
    	$manage_project=view('admin.all_project')
    		->with('all_project_info',$all_project_info);

    	return view('admin_layout')
            ->with('admin.all_project', $manage_project);
            
            

    	//return view('admin.all_category');
    }

    public function save_project(Request $request){

    	$data=array();
    	$data['project_name']=$request->project_name;
    	$data['project_location']=$request->project_location;
    	$data['project_date']=$request->project_date;
    	$data['project_long_description']=$request->project_long_description;
        $data['publication_status']=$request->publication_status;
    	// $data['category_image']=$request->category_image;

        $image=$request->file('project_image');
        if ($image) {
            $image_name=Str::random(20);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='image/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path, $image_full_name);
            if ($success) {
                $data['project_image']=$image_url;
                    DB::table('tbl_project')->insert($data);
                    Session::put('message','Obra adicionado com sucesso!!');
                    return Redirect::to('/add-project');
                // echo "<pre>";
                // print_r($data);
                // echo "</pre>";
                // exit();
            }
        }
        
       $data['project_image']='';
    	DB::table('tbl_project')->insert($data);
    	Session::put('message', 'Obra adicionado sem Imagem!!');
    	return Redirect::to('/add-project');
    }

    public function unactive_project($project_id){

    	DB::table('tbl_project')
    		->where('project_id', $project_id)
    		->update(['publication_status' => 0]);
    	Session::put('message', 'Equipamento desativado com sucesso!!');
    		return Redirect::to('/all-project');
    }

    public function active_project($project_id){

    	DB::table('tbl_project')
    		->where('project_id', $project_id)
    		->update(['publication_status' => 1]);
    	Session::put('message', 'Equipamento ativado com sucesso!!');
    		return Redirect::to('/all-project');
    }

    public function delete_project($project_id){

    	DB::table('tbl_project')
    		->where('project_id', $project_id)
    		->delete();
    	Session::get('message', 'Equipamento removido com sucesso!!');
    	return Redirect::to('/all-project');

    }

    public function edit_project($project_id){

        $this->AdminAuthCheck();

        $project_info=DB::table('tbl_project')
                    ->where('project_id', $project_id)
                    ->first();
        $project_info=view('admin.edit_project')
            ->with('project_info',$project_info);
        return view('admin_layout')
            ->with('admin.edit_project', $project_info);

        //return view('admin.edit_category');

    }

    public function update_project(Request $request, $project_id){

        $data=array();
        $data['project_name']=$request->project_name;
        $data['project_location']=$request->project_location;
    	$data['project_date']=$request->project_date;
    	$data['project_long_description']=$request->project_long_description;

        DB::table('tbl_project')
            ->where('project_id', $project_id)
            ->update($data);

            Session::get('message', 'Obra editado com sucesso!!');
            return Redirect::to('/all-project');

    }
}
