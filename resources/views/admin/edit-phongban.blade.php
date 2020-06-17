@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
            <header class="panel-heading">
                Cập nhật thông tin phòng ban
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
                    <form class="cmxform form-horizontal " id="signupForm" action="{{ URL::to('/update-phongban/'.$edit_value->id)}}" novalidate="novalidate" method="post">
                        {{ csrf_field() }}  
                           <div class="form-group ">
                            <label for="lastname" class="control-label col-lg-3">Tên phòng ban</label>
                            <div class="col-lg-6">
                                <input class=" form-control" id="name" value="{{ $edit_value->phongban_name }}" name="name" type="text">
                            </div>
                        </div> 
                        <?php endforeach ?>
                        
                        <!-- <div class="form-group ">
                            <label for="username" class="control-label col-lg-3">Tài khoản</label>
                            <div class="col-lg-6">
                                <input class="form-control " id="username" name="username" type="text">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="password" class="control-label col-lg-3">Mật khẩu</label>
                            <div class="col-lg-6">
                                <input class="form-control " id="password" name="password" type="password">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="confirm_password" class="control-label col-lg-3">Xác nhận mật khẩu</label>
                            <div class="col-lg-6">
                                <input class="form-control " id="confirm_password" name="confirm_password" type="password">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="email" class="control-label col-lg-3">Email</label>
                            <div class="col-lg-6">
                                <input class="form-control " id="email" name="email" type="email">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="newsletter" class="control-label col-lg-3 col-sm-3">Nhận thông báo tin tức</label>
                            <div class="col-lg-6 col-sm-9">
                                <input type="checkbox" style="width: 20px" class="checkbox form-control" id="newsletter" name="newsletter">
                            </div>
                        </div> -->

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