@extends('admin_layout')
@section('admin_content')
	
<div class="table-agile-info">
 	<div class="panel panel-default">
    <div class="panel-heading">
     Danh sách nhân sự cục bộ
    </div>
    <div>
      <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
        <thead>
          <tr>
            <th>Tên nhân sự</th>
            <th>Tên giới tính</th>
            <th>Mã phòng  ban</th>
            <th>Tuổi</th>
            <th>Địa chỉ</th>
            <th>Email</th>
            <th>Số điện thoại</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($all_nhansu as $key => $nhansu): ?>
          <tr data-expanded="true">
            <td>{{ $nhansu->name }}</td>
            <td>{{ $nhansu->gioitinh }}</td>
            <td>{{ $nhansu->phongban_id }}</td>
            <td>{{ $nhansu->tuoi }}</td>
            <td>{{ $nhansu->diachi }}</td>
            <td>{{ $nhansu->email }}</td>
            <td>{{ $nhansu->sdt }}</td>

            <td>
              <a href="{{ URL::to('edit-nhansu/'.$nhansu->id) }}" class="active" ui-toggle-class="">
                <i style="padding-right: 5px" class="fa fa-pencil-square-o text-success text-active"></i></a> |
              <a onclick="return confirm('Chắn chắn muốn XÓA ?')" href="{{ URL::to('delete-nhansu/'.$nhansu->id) }}" class="active" ui-toggle-class="">
                <i style="padding-left: 5px" class="fa fa-times text-danger-text"></i>
              </a>
            </td>
          </tr> 
          <?php endforeach ?>         
        </tbody>
      </table>
    </div>
  </div>
</div>

@endsection