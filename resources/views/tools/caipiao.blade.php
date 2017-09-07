@extends('tools.layout')

@section('title')
	彩票开奖查询
@endsection

@section('content')
<div class="container-fluid">
	<div class="panel panel-default">
	  <div class="panel-heading">彩票开奖查询</div>
	  <div class="panel-body">
		<form action="" class="form-inline">
			<div class="form-group">
			    <label for="type">彩种:</label>
			    <select id="type" name="type" class="form-control">
					<option value="dlt">大乐透</option>
				</select>
			</div>
			<div class="form-group">
			    <label id="time" for="time">期数:</label>
			    <select name="time" class="form-control">
					<option value="dlt">1234</option>
				</select>
			</div>
			<button type="submit" class="btn btn-primary" onclick="">查询</button>
		</form>

		<div class="panel-body">
		@if (! empty(Request::input('type')))
			@if (! empty($info))
			<table class="table table-bordered table-responsive">
	            <tbody>
					<tr>
						<td>手机号码段</td>
						<td>{{ $info['mobile'] }}</td>
					</tr>
					<tr>
						<td>区号</td>
						<td>{{ $info['areacode'] }}</td>
					</tr>
					<tr>
						<td>卡号归属地</td>
						<td>{{ $info['province'] }} {{ $info['city'] }}</td>
					</tr>
					<tr>
						<td>邮编</td>
						<td>{{ $info['postcode'] }}</td>
					</tr>
					<tr>
						<td>服务商</td>
						<td>{{ $info['corp'] }}</td>
					</tr>
					<tr>
						<td>卡类型</td>
						<td>{{ $info['card'] }}</td>
					</tr>
				</tbody>
			</table>
			@else
				没有查询结果 ^_^
			@endif
		@endif
		</div>
	  </div>
	</div>
</div>
@endsection
