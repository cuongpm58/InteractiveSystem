@extends('home.home')

@section('content')

<style type="text/css" media="screen">
	table{
		width: 100%;
	}
</style>		
<div>
	<h2>Yêu cầu khắc phục sự cố</h2>
</div>
<form action="" method="post" accept-charset="utf-8">
	<input type="hidden" name="_token" value="{!! csrf_token() !!}">
	<div class="styled-select table"> <h3>Thông Tin</h3>
		<table>
			<col width="180px">
			<tr>
				<td><label>Ngân Hàng: </label></td>
				<td colspan="3" ><textarea class="style-textarea" cols="35" rows="1" name="username">{!! Auth::user()->name !!}</textarea>
				</tr>		
			</tr>
			<tr>
				<td><label>Serial Number: </label></td>
				<td colspan="3" ><textarea class="style-textarea" cols="35" rows="1" name="serialnumber"></textarea>
				</tr>
			</tr>
			<tr>
				<td><label>ATM ID: </label></td>
				<td colspan="3" ><textarea class="style-textarea" cols="35" rows="1" name="atmid"></textarea>
				</tr>
			</tr>
			<td><label>Địa chỉ:</label></td>
				<td colspan="3" ><textarea class="style-textarea" cols="35" rows="1" name="address"></textarea>
				</tr>
			<tr>
				<td><label>Đơn vị quản lý: </label></td>
				<td colspan="3" ><textarea class="style-textarea" cols="35" rows="1" name="donviquanly"></textarea>
				</tr>	
			</tr>
			<tr>
				<td><label>Loại Máy: </label></td>
				<td>
					<select name="loaimay">
<!-- 						<option value=""></option> -->
						<option value="Agribank">Agribank</option>
						<option value="ACB">ACB</option>
						<option value="BIDV">BIDV</option>
						<option value="Techcombank">Techcombank</option>
						<option value="Vietinbank">Vietinbank</option>
						option
					</select>
				</td>		
			</tr>

			<tr>
			<tr>
				<td><label>Thời điểm xảy ra sự cố: </label></td>
				<td colspan="3" ><textarea class="style-textarea" cols="35" rows="1" name="time"></textarea>
				</tr>		
			</tr>
			<tr>
				<td><label>Trạng thái ATM: </label></td>
				<td>
					<select name="status">
						<!-- <option value=""></option> -->
						<option value="In Service">In Service</option>
						<option value="Out of Service">Out of Service</option>
					</select>
				</td>		
			</tr>

		</table>
	</div>
	<div class="styled-select table"> <h3>Liên Hệ</h3>
		<table>
			<col width="180px">
			<tr>
				<td><label>Họ Tên: </label></td>
				<td colspan="3" ><textarea class="style-textarea" cols="35" rows="1" name="namecontact"></textarea>
				</td>
			</tr>
			<td><label>Điện thoại: <label></td>
				<td colspan="3" ><textarea class="style-textarea" cols="35" rows="1" name="phonecontact"></textarea>
				</td>
			<tr>
				<td><label>Email: </label></td>
				<td colspan="3" ><textarea class="style-textarea" cols="35" rows="1" name="emailcontact"></textarea>
				</td>	
			</tr>
		</table>
	</div>
	@include('admin.blocks.error')
	<tr>
		<td></td>
		<td></td>	
		<td></td>
		<td>
		<button type="submit" class="btn btn-default">Save</button>
		<button type="submit" class="btn btn-default"><a href="home">Cancel</a></button>
		</td>
		</tr>		
</form>
@stop