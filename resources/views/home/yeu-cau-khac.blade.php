@extends('home.home')

@section('content')

<style type="text/css" media="screen">
	table{
		width: 100%;
	}
</style>		
<div>
	<h2>Yêu cầu khác</h2>
</div>
<form action="" method="get" accept-charset="utf-8">
	<div class="styled-select table"> <h3>Thông Tin</h3>
		<table>
			<col width="180px">
			<tr>
				<td><label>Ngân Hàng: </label></td>
				<td colspan="3" ><textarea class="style-textarea" cols="35" rows="1">{!! Auth::user()->name !!}</textarea>
				</tr>		
			</tr>
			<tr>
				<td><label>Loại yêu cầu khác: </label></td>
				<td colspan="3" ><textarea class="style-textarea" cols="35" rows="1"></textarea>
				</tr>
			</tr>
			<tr>
				<td><label>Mô tả yêu cầu: </label></td>
				<td colspan="3" ><textarea class="style-textarea" cols="35" rows="1"></textarea>
				</tr>
			</tr>
			
		</table>
	</div>
	<div class="styled-select table"> <h3>Liên Hệ</h3>
		<table>
			<col width="180px">
			<tr>
				<td><label>Họ Tên: </label></td>
				<td colspan="3" ><textarea class="style-textarea" cols="35" rows="1"></textarea>
				</tr>
			</tr>
			<td><label>Điện thoại: <label></td>
				<td colspan="3" ><textarea class="style-textarea" cols="35" rows="1"></textarea>
				</tr>
			<tr>
				<td><label>Email: </label></td>
				<td colspan="3" ><textarea class="style-textarea" cols="35" rows="1"></textarea>
				</tr>	
			</tr>
		</table>
	</div>
	<tr>
		<td margin="right">
			<button type="button" class="btn btn-primary">Save</button>
			<button type="button" class="btn btn-default">Cancel</button>
		</td>
	</tr>
</form>
@stop