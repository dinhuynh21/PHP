<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();
class nhansu extends Controller
{
    public function themnhansu(){
    	$allphongban = DB::table('tbl_phongban')->get();
    	$manage_phongban = view('admin.add-nhansu')->with('all_phongban',$allphongban);
    	return view('admin_layout')->with('admin.add-nhansu',$manage_phongban);
    }
    public function allnhansu(){
    	$allnhansu = DB::table('tbl_nhanvien')->get();
    	$manage_nhansu = view('admin.all-nhansu')->with('all_nhansu',$allnhansu);
    	return view('admin_layout')->with('admin.all-nhansu',$manage_nhansu);	
    }
    public function savenhansu(Request $request){
    	$data = array();
    	$data['name'] = $request->name;
    	$data['phongban_id'] = $request->phongban_id;
    	$data['gioitinh'] = $request->gioitinh;
    	$data['tuoi'] = $request->tuoi;
    	$data['diachi'] = $request->diachi;
    	$data['email'] = $request->email;
    	$data['sdt'] = $request->sdt;
    	DB::table('tbl_nhanvien')->insert($data);
    	Session::put('message','Thêm nhân sự thành công');	
    	return Redirect::to('add-nhansu');
    }
    public function editnhansu($id){
    	$editnhansu = DB::table('tbl_nhanvien')->where('id',$id)->get();
    	$manage_nhansu = view('admin.edit-nhansu')->with('edit',$editnhansu);
    	return view('admin_layout')->with('admin.edit-nhansu',$manage_nhansu);	
    }
    public function deletenhansu($id){
    	DB::table('tbl_nhanvien')->where('id',$id)->delete();
    	//Session::put('message','Cập nhật phòng ban thành công1');
    	return Redirect::to('all-nhansu');
    }
    public function updatenhansu(Request $request,$id){
    	$data = array();
        $data['name'] = $request->name;
        $data['phongban_id'] = $request->phongban_id;
        $data['gioitinh'] = $request->gioitinh;
        $data['tuoi'] = $request->tuoi;
        $data['diachi'] = $request->diachi;
        $data['email'] = $request->email;
        $data['sdt'] = $request->sdt;
    	DB::table('tbl_nhanvien')->where('id',$id)->update($data);
    	//Session::put('message','Cập nhật phòng ban thành công1');
    	return Redirect::to('all-nhansu');
    }
}
