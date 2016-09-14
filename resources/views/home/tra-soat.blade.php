@extends('home.home')

@section('content')

<style type="text/css" media="screen">
	table{
		width: 100%;
	}
</style>		
<div>
	<h2>Yêu cầu tra soát</h2>
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
				<td><label>Serial Number: </label></td>
				<td colspan="3" ><textarea class="style-textarea" cols="35" rows="1"></textarea>
				</tr>
			</tr>
			<tr>
				<td><label>ATM ID: </label></td>
				<td colspan="3" ><textarea class="style-textarea" cols="35" rows="1"></textarea>
				</tr>
			</tr>
			<td><label>Địa chỉ:</label></td>
				<td colspan="3" ><textarea class="style-textarea" cols="35" rows="1"></textarea>
				</tr>
			<tr>
				<td><label>Đơn vị quản lý: </label></td>
				<td colspan="3" ><textarea class="style-textarea" cols="35" rows="1"></textarea>
				</tr>	
			</tr>
			<tr>
				<td><label>Loại Máy: </label></td>
				<td>
					<select>
						<option value=""></option>
						<option value="">Agribank</option>
						<option value="">ACB</option>
						<option value="">BIDV</option>
						<option value="">Techcombank</option>
						<option value="">Vietinbank</option>
						option
					</select>
				</td>		
			</tr>
			<tr>
				<td><label>Mô tả yêu cầu: </label></td>
				<td>
					<select>
						<option value=""></option>
						<option value="">In Service</option>
						<option value="">Out of Service</option>
					</select>
				</td>		
			</tr>
			<tr>
			<tr>
				<td><label>Thông tin khác: </label></td>
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