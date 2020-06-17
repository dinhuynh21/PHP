<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();
class phongban extends Controller
{
    public function themphongban(){
    	return view('admin.add-phongban');
    }
    public function allphongban(){
    	$allphongban = DB::table('tbl_phongban')->get();
    	$manage_phongban = view('admin.all-phongban')->with('all_phongban',$allphongban);
    	return view('admin_layout')->with('admin.all-phongban',$manage_phongban);	
    }
    public function savephongban(Request $request){
    	$data = array();
    	$data['phongban_name'] = $request->name;
    	DB::table('tbl_phongban')->insert($data);
    	Session::put('message','Thêm phòng ban thành công');
    	return Redirect::to('add-phongban');
    }
    public function editphongban($id){
    	$editphongban = DB::table('tbl_phongban')->where('id',$id)->get();
    	$manage_phongban = view('admin.edit-phongban')->with('edit',$editphongban);
    	return view('admin_layout')->with('admin.edit-phongban',$manage_phongban);	
    }
    public function deletephongban($id){
    	DB::table('tbl_phongban')->where('id',$id)->delete();
    	//Session::put('message','Cập nhật phòng ban thành công1');
    	return Redirect::to('all-phongban');
    }
    public function updatephongban(Request $request,$id){
        $data = array();
        $data['phongban_name'] = $request->name;
    	DB::table('tbl_phongban')->where('id',$id)->update($data);
    	//Session::put('message','Cập nhật phòng ban thành công1');
    	return Redirect::to('all-phongban');
    }
}
