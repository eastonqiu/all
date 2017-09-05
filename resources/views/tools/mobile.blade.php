@extends('tools.layout')

@section('title')
	手机归属地查询
@endsection

@section('content')
<div class="container-fluid">
	<div class="panel panel-default">
	  <div class="panel-heading">手机归属地查询</div>
	  <div class="panel-body">
		<form action="">
			<div class="form-group">
			    <label>输入手机号码:</label>
			    <input name="mobile" type="text" class="form-control" value="{{ Request::input('mobile') }}" />
			</div>
			<button type="submit" class="btn btn-primary" onclick="">查询</button>
		</form>

		<div class="panel-body">
		@if (! empty(Request::input('mobile')))
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
