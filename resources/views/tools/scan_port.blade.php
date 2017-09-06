@extends('tools.layout')

@section('title')
	端口扫描
@endsection

@section('content')
<div class="container-fluid">
	<div class="panel panel-default">
	  <div class="panel-heading">端口扫描</div>
	  <div class="panel-body">
		<form action="">
			<div class="form-group">
			    <label>服务器:</label>
			    <input name="server" type="text" class="form-control" value="{{ Request::input('server') }}" placeholder="www.baidu.com" />
			</div>
			<div class="form-group">
			    <label>端口(逗号隔开):</label>
			    <input name="ports" type="text" class="form-control" value="{{ Request::input('ports') }}" placeholder="80,443" />
			</div>
			<button type="submit" class="btn btn-primary" onclick="">扫描</button>单次扫描端口数不超过10个
		</form>

		<div class="panel-body">
		@if (! empty(Request::input('server')))
			@if (! empty($info))
			<table class="table table-bordered table-responsive">
				<thead>
	            <tr>
	                <th>端口</th>
	                <th>协议</th>
					<th>状态</th>
					<th>TTL</th>
	            </tr>
	            </thead>
	            <tbody>
					@foreach($info as $v)
					<tr>
						<td>{{ $v['port'] }}</td>
						<td>{{ $v['proto'] }}</td>
						<td>{{ $v['status'] }}</td>
						<td>{{ $v['ttl'] }}</td>
					</tr>
					@endforeach
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
