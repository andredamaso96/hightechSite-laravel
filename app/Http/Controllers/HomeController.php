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

    public function show_product_by_subcategory($id, $subcategories_id){

        $product_by_subcategory=DB::table('tbl_products')
                        ->join('tbl_subcategories', 'tbl_products.subcategories_id','=','tbl_subcategories.subcategories_id')
                        ->join('tbl_compressors_products', 'tbl_subcategories.category_id','=','tbl_compressors_products.id')
                        ->select('tbl_products.*','tbl_compressors_products.product_name', 'tbl_subcategories.subcategories_name')
                        ->where('tbl_compressors_products.id', $id)
                        ->where('tbl_subcategories.subcategories_id', $subcategories_id)
                        ->where('tbl_products.publication_status', 1)
                        ->get();
        
        $product_by_name=DB::table('tbl_products')
                        ->join('tbl_subcategories', 'tbl_products.subcategories_id','=','tbl_subcategories.subcategories_id')
                        ->select('tbl_products.*')
                        ->where('tbl_subcategories.subcategories_id', $subcategories_id)
                        ->where('tbl_products.publication_status', 1)
                        ->get();


        $manage_product_by_category=view('view_compressors.subcategory_by_products')
            ->with('product_by_subcategory',$product_by_subcategory)
            ->with('product_by_name', $product_by_name);

        return view('homeCompressors')
            ->with('view_compressors.subcategory_by_products', $manage_product_by_category);

    }

    public function product_details_by_id($product_id){

    	$product_by_details=DB::table('tbl_products')
    					->select('tbl_products.*')
    					->where('tbl_products.product_id', $product_id)
    					->where('tbl_products.publication_status', 1)
                        ->first();
                        
        $specification_by_product=DB::table('tbl_specification')
                        ->join('tbl_products', 'tbl_specification.product_id', '=', 'tbl_products.product_id')
                        ->select('tbl_specification.*')
                        ->where('tbl_products.product_id', $product_id)
                        ->where('tbl_specification.publication_status', 1)
                        ->get();
        

    	$manage_product_by_details=view('view_compressors.product_details')
                        ->with('product_by_details',$product_by_details)
                        ->with('specification_by_product', $specification_by_product);

    	return view('homeCompressors')
    		->with('view_compressors.product_details', $manage_product_by_details);

    }

    public function show_projects(){

        $projects=DB::table('tbl_project')
                        ->select('tbl_project.*')
                        ->where('tbl_project.publication_status', 1)
                        ->get();
            

        $manage_project=view('view_technologies.projects')
            ->with('projects',$projects);
       

        return view('homeTechnologies')
            ->with('view_technologies.projects', $manage_project);

    }

    public function project_details_by_id($project_id){

    	$project_by_details=DB::table('tbl_project')
    					->select('tbl_project.*')
    					->where('tbl_project.project_id', $project_id)
    					->where('tbl_project.publication_status', 1)
                        ->first();
        

    	$manage_project_by_details=view('view_technologies.project_details')
                        ->with('project_by_details',$project_by_details);

    	return view('homeTechnologies')
    		->with('view_technologies.project_details', $manage_project_by_details);

    }

    
}