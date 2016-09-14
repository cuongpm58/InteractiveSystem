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
<label><h3 text-decoration="underline">Chỉnh sửa thông tin cá nhân</h3></label>
<br>
<br>
<form  action="" method="get" accept-charset="utf-8">
	<div class="styled-select table">
		<table border="0">
			<col width=10%>
			<col width=15%>
			<col width=15%>
			<col width=30%>
			<tr >
				<td align="right"><label>Họ và tên: </label></td>
				<td colspan="3" ><textarea class="style-textarea" cols="35" rows="1"></textarea></td>
			</tr>
			<tr>
			</tr>
			<tr >
				<td align="right"><label>Email:</label></td>
				<td colspan="3" ><textarea class="style-textarea" cols="35" rows="1"></textarea></td>
			</tr>
			<tr >
				<td align="right"><label>Phone:</label></td>
				<td colspan="3" ><textarea class="style-textarea" cols="35" rows="1"></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td></td>	
				<td></td>
				<td>
					<button type="button" class="btn btn-primary">Save</button>
					<button type="button" class="btn btn-default">Cancel</button>
				</td>
			</tr>																						
		</table>
		
	</div>
</form>

@stop