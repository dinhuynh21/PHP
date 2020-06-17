@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
            <header class="panel-heading">
                Thêm nhân sự mới
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
                    <form class="cmxform form-horizontal " id="signupForm" action="{{ URL::to('/save-nhansu')}}" novalidate="novalidate" method="post">
                        {{ csrf_field() }}
                        <div class="form-group ">
                            <label for="lastname" class="control-label col-lg-3">Tên nhân viên</label>
                            <div class="col-lg-4">
                                <input class=" form-control" id="name" name="name" type="text">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="control-label col-lg-3">Phòng ban</label>
                            <div class="col-lg-4">
                                <select name="phongban_id">
                                    <?php foreach ($all_phongban as $key => $phongban): ?>
                                        <option value="{{ $phongban->id}}">{{ $phongban->phongban_name }}</option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="control-label col-lg-3">Giới tính</label>
                            <div class="col-lg-4">
                                <input class="form-control " id="gioitinh" name="gioitinh" type="text">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label  class="control-label col-lg-3">Tuổi</label>
                            <div class="col-lg-4">
                                <input class="form-control " id="tuoi" name="tuoi" type="number">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label  class="control-label col-lg-3">Địa chỉ</label>
                            <div class="col-lg-4">
                                <input class="form-control " id="diachi" name="diachi" type="text">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="email" class="control-label col-lg-3">Email</label>
                            <div class="col-lg-4">
                                <input class="form-control " id="email" name="email" type="email">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="control-label col-lg-3 col-sm-3">Số điện thoại</label>
                            <div class="col-lg-4 col-sm-9">
                                 <input class="form-control " id="sdt" name="sdt" type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-offset-3 col-lg-6">
                                <button class="btn btn-primary" name="" type="submit">Thêm nhân viên</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

    </div>
</div>
@endsection