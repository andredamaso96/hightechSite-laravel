<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
session_start();

class SpecificationController extends Controller
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
    	return view('admin.add_specification');
    }

    public function all_specification(){

    	$this->AdminAuthCheck();
    	$all_specification_info=DB::table('tbl_specification')
    					->join('tbl_products', 'tbl_products.product_id','=','tbl_specification.product_id')
    					->select('tbl_specification.*','tbl_products.product_name')
    					->get();
    	$manage_specification=view('admin.all_specification')
    		->with('all_specification_info',$all_specification_info);

    	return view('admin_layout')
    		->with('admin.all_specification', $manage_specification);

    	//return view('admin.all_category');
    }

    public function save_specification(Request $request){

    	$data=array();
    	$data['specification_name']=$request->specification_name;
    	$data['product_id']=$request->product_id;
    	$data['specification_serie']=$request->specification_serie;
    	$data['specification_url']=$request->specification_url;
        $data['publication_status']=$request->publication_status;
    	// $data['category_image']=$request->category_image;

        $image=$request->file('specification_image');
        //  echo "<pre>";
        // print_r($image);
        // echo "</pre>";
        if ($image) {
            $image_name=Str::random(20);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='image/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path, $image_full_name);
            if ($success) {
                $data['specification_image']=$image_url;
                    DB::table('tbl_specification')->insert($data);
                    Session::put('message','Especificação adicionado com sucesso!!');
                    return Redirect::to('/add-specification');
                // echo "<pre>";
                // print_r($data);
                // echo "</pre>";
                // exit();
            }
        }
        
       $data['specification_image']='';
    	DB::table('tbl_specification')->insert($data);
    	Session::put('message', 'Especificação adicionado sem Imagem!!');
    	return Redirect::to('/add-specification');
    }

    public function unactive_specification($specification_id){

    	DB::table('tbl_specification')
    		->where('specification_id', $specification_id)
    		->update(['publication_status' => 0]);
    	Session::put('message', 'Especificação desativado com sucesso!!');
    		return Redirect::to('/all-specification');
    }

    public function active_specification($specification_id){

    	DB::table('tbl_specification')
    		->where('specification_id', $specification_id)
    		->update(['publication_status' => 1]);
    	Session::put('message', 'Especificação ativado com sucesso!!');
    		return Redirect::to('/all-specification');
    }

    public function delete_specification($specification_id){

    	DB::table('tbl_specification')
    		->where('specification_id', $specification_id)
    		->delete();
    	Session::get('message', 'Especificação removido com sucesso!!');
    	return Redirect::to('/all-specification');

    }

    public function edit_specification($specification_id){

        $this->AdminAuthCheck();

        $specification_info=DB::table('tbl_specification')
                    ->where('specification_id', $specification_id)
                    ->first();
        $specification_info=view('admin.edit_specification')
            ->with('specification_info',$specification_info);
        return view('admin_layout')
            ->with('admin.edit_specification', $specification_info);

        //return view('admin.edit_category');

    }

    public function update_specification(Request $request, $specification_id){

        $data=array();
        $data['specification_name']=$request->specification_name;
        $data['specification_serie']=$request->specification_serie;
    	$data['specification_url']=$request->specification_url;

        DB::table('tbl_specification')
            ->where('specification_id', $specification_id)
            ->update($data);

            Session::get('message', 'Produto editado com sucesso!!');
            return Redirect::to('/all-specification');

    }
}
