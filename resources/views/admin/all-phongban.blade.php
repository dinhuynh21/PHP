@extends('admin_layout')
@section('admin_content')
	
<div class="table-agile-info">
 	<div class="panel panel-default">
    <div class="panel-heading">
     Danh sách phòng ban
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
            <th>Tên phòng ban</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($all_phongban as $key => $phongban): ?>
          <tr data-expanded="true">
            <td>{{ $phongban->phongban_name }}</td>
            <td>
              <a href="{{ URL::to('edit-phongban/'.$phongban->id) }}" class="active" ui-toggle-class="">
                <i style="padding-right: 5px" class="fa fa-pencil-square-o text-success text-active"></i></a> |
              <a onclick="return confirm('Chắn chắn muốn XÓA ?')" href="{{ URL::to('delete-phongban/'.$phongban->id) }}" class="active" ui-toggle-class="">
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