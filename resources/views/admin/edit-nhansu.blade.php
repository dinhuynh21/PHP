@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
            <header class="panel-heading">
                Cập nhật thông tin nhân sự
                <span class="tools pull-right">
                    <a class="fa fa-chevron-down" href="javascript:;"></a>
                    <a class="fa fa-cog" href="javascript:;"></a>
                    <a class="fa fa-times" href="javascript:;"></a>
                 </span>
            </header>
            <div class="panel-body">
                <?php
                $message =  Session::get('message');
                if($message){
                    echo '<span class="text-alert" style="color:red;text-align:center">'.$message.'</span>';
                    Session::put('message',null);
                }
                ?>
                <div class="form" >
                    <?php foreach ($edit as $key => $edit_value): ?>
                    <form class="cmxform form-horizontal " id="signupForm" action="{{ URL::to('/update-nhansu/'.$edit_value->id)}}" novalidate="novalidate" method="post">
                        {{ csrf_field() }}  
                           <div class="form-group ">
                            <label class="control-label col-lg-3">Tên nhân sự</label>
                            <div class="col-lg-4">
                                <input class=" form-control" id="name" value="{{ $edit_value->name }}" name="name" type="text">
                            </div>
                        </div> 
                        <div class="form-group ">
                            <label class="control-label col-lg-3">Phòng ban</label>
                            <div class="col-lg-4">
                                <input class="form-control " value="{{ $edit_value->phongban_id }}" id="phongban_id" name="phongban_id" type="text">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label  class="control-label col-lg-3">Giới tính</label>
                            <div class="col-lg-4">
                                <input class="form-control" value="{{ $edit_value->gioitinh }}" id="gioitinh" name="gioitinh" type="text">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="control-label col-lg-3">Tuổi</label>
                            <div class="col-lg-4">
                                <input class="form-control" value="{{ $edit_value->tuoi }}" id="tuoi" name="tuoi" type="number">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="control-label col-lg-3">Địa chỉ</label>
                            <div class="col-lg-4">
                                <input class="form-control" value="{{ $edit_value->diachi }}" id="diachi" name="diachi" type="text">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="email" class="control-label col-lg-3">Email</label>
                            <div class="col-lg-4">
                                <input class="form-control" value="{{ $edit_value->email }}" id="email" name="email" type="email">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="control-label col-lg-3 col-sm-3">Số điện thoại</label>
                            <div class="col-lg-4 col-sm-9">
                                <input type="text" value="{{ $edit_value->sdt }}" id="sdt" name="sdt">
                            </div>
                        </div>
                        <?php endforeach ?>
                        <div class="form-group">
                            <div class="col-lg-offset-3 col-lg-6">
                                <button class="btn btn-primary" name="" type="submit">Cập nhật</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

    </div>
</div>
@endsection