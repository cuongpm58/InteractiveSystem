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
		@include('admin.blocks.error')
		<table border="0">
			<col width=10%>
			<col width=15%>
			<col width=15%>
			<col width=30%>
			<tr>
				<td align="right"><label>Loại tài khoản:</label></td>
				<td>
					<select name = "level">
						<!-- <option value=""></option> -->
						<option value="3">Admin</option>
						<option value="2">CSE</option>
						<option value="1">Bank</option>
					</select>
				</td>
			</tr>
			<tr >
				<td align="right"><label>Tên tài khoản:</label></td>
				<td colspan="3" ><input type="text" name="username" value="{!!old('username')!!}"></td>
			</tr>
			<tr>
				<h3></h3>
			</tr>
			<tr >
				<td align="right"><label>Mật khẩu:</label></td>
				<td colspan="3" ><input type="password" name="password" value=""></td>
			</tr>
			<tr >
				<td align="right"><label>Nhập lại mật khẩu:</label></td>
				<td colspan="3" ><input type="password" name="repassword" value=""></td>
			</tr>
			<tr >
				<td align="right"><label>Tên ngân hàng:</label></td>
				<td colspan="3" ><input type="text" name="bankname" value="{!!old('bankname')!!}"></td>
			</tr>
			<tr >
				<td align="right"><label>Họ và tên:</label></td>
				<td colspan="3" ><input type="text" name="fullname" value="{!!old('fullname')!!}"></td>
			</tr>
			<tr>
			</tr>
			<tr >
				<td align="right"><label>Email:</label></td>
				<td colspan="3" ><input type="email" name="email" value="{!!old('email')!!}"></td>
			</tr>
			<tr >
				<td align="right"><label>Số điện thoại:</label></td>
				<td colspan="3" ><input type="text" name="phone" value="{!!old('phone')!!}"></td>
			</tr>
			<tr >
				<td align="right"><label>Địa chỉ:</label></td>
				<td colspan="3" ><input type="text" name="address" value="{!!old('address')!!}"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>	
				<td></td>
				<td>
					<button type="submit" class="btn btn-default" name="commit" value="">Đăng ký</button>
					<button type="submit" class="btn btn-default"><a href="home">Cancel</a></button>
				</td>
			</tr>
			<!-- @include('admin.blocks.error')					 -->
		</table>
	</div>
</form>
@stop