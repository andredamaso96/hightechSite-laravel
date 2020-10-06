<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
session_start();


class ProductController extends Controller
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
    	return view('admin.add_product');
    }

    public function all_product(){

    	$this->AdminAuthCheck();
    	$all_product_info=DB::table('tbl_products')
    					->join('tbl_subcategories', 'tbl_products.subcategories_id','=','tbl_subcategories.subcategories_id')
    					->select('tbl_products.*','tbl_subcategories.subcategories_name')
    					->get();
    	$manage_product=view('admin.all_product')
    		->with('all_product_info',$all_product_info);

    	return view('admin_layout')
    		->with('admin.all_product', $manage_product);

    	//return view('admin.all_category');
    }

    public function save_product(Request $request){

    	$data=array();
    	$data['product_name']=$request->product_name;
    	$data['subcategories_id']=$request->subcategories_id;
    	$data['brands_name']=$request->brands_name;
    	$data['product_long_description']=$request->product_long_description;
        $data['publication_status']=$request->publication_status;
    	// $data['category_image']=$request->category_image;

        $image=$request->file('product_image');
        if ($image) {
            $image_name=Str::random(20);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='image/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path, $image_full_name);
            if ($success) {
                $data['product_image']=$image_url;
                    DB::table('tbl_products')->insert($data);
                    Session::put('message','Equipamento adicionado com sucesso!!');
                    return Redirect::to('/add-product');
                // echo "<pre>";
                // print_r($data);
                // echo "</pre>";
                // exit();
            }
        }
        
       $data['product_image']='';
    	DB::table('tbl_products')->insert($data);
    	Session::put('message', 'Equipamento adicionado sem Imagem!!');
    	return Redirect::to('/add-product');
    }

    public function unactive_product($product_id){

    	DB::table('tbl_products')
    		->where('product_id', $product_id)
    		->update(['publication_status' => 0]);
    	Session::put('message', 'Equipamento desativado com sucesso!!');
    		return Redirect::to('/all-product');
    }

    public function active_product($product_id){

    	DB::table('tbl_products')
    		->where('product_id', $product_id)
    		->update(['publication_status' => 1]);
    	Session::put('message', 'Equipamento ativado com sucesso!!');
    		return Redirect::to('/all-product');
    }

    public function delete_product($product_id){

    	DB::table('tbl_products')
    		->where('product_id', $product_id)
    		->delete();
    	Session::get('message', 'Equipamento removido com sucesso!!');
    	return Redirect::to('/all-product');

    }

    public function edit_product($product_id){

        $this->AdminAuthCheck();

        $product_info=DB::table('tbl_products')
                    ->where('product_id', $product_id)
                    ->first();
        $product_info=view('admin.edit_product')
            ->with('product_info',$product_info);
        return view('admin_layout')
            ->with('admin.edit_product', $product_info);

        //return view('admin.edit_category');

    }

    public function update_product(Request $request, $product_id){

        $data=array();
        $data['product_name']=$request->product_name;
        $data['product_long_description']=$request->product_long_description;
        $data['brands_name']=$request->brands_name;

        DB::table('tbl_products')
            ->where('product_id', $product_id)
            ->update($data);

            Session::get('message', 'Produto editado com sucesso!!');
            return Redirect::to('/all-product');

    }
}
