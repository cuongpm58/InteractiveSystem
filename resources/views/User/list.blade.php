@extends('home.home')

@section('content')
<style type="text/css" media="screen">
	table {
		border-collapse: separate;
		width: 100%;
	}
	h3 {
		text-decoration: underline;
	}
</style>	
<label><h3 text-decoration="underline">SignUp</h3></label>
<br>
<br>
<form  action="" method="post" accept-charset="utf-8">
	<input type="hidden" name="_token" value="{!! csrf_token() !!}">
	<div class="styled-select table">
		<table border="1">
			<tr class="list_heading">
				<td class="id">STT</td>
				<td>Tên tài khoản</td>
				<td>Loại tài khoản</td>
				<td class="action_col">Quản lý?</td>
			</tr>
			<?php $i = 0 ?>
			@foreach($data as $item)
			<?php $i++; ?>
			<tr class="list_data">
				<td class="aligncenter">{!! $i !!}</td>
				<td class="list_td aligncenter">{!! $item["name"] !!}</td>
				<td class="list_td aligncenter">
					@if ($item['level'] == 1)
						<span>Bank</span>
					@elseif ($item['level'] == 2)
						<span>CSE</span>
					@else 
						<span>Admin</span>
					@endif
				</td>
				<td class="list_td aligncenter">
					<a href="#"><img src="public/image/sua.ico"></a>
					<a href="#"><img src="public/image/xoa.ico"></a>
				</td>
			</tr>
			@endforeach
		</table>
	</div>
</form>
@stop