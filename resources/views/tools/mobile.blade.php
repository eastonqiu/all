@extends('tools.index')

@section('title')
	手机归属地查询
@endsection

@section('content')
<div class="container-fluid">
	<div class="panel panel-default">
	  <div class="panel-heading">手机归属地查询</div>
	  <div class="panel-body">
		<div class="form-group">
		    <label>输入手机号:</label>
		    <input id="mobile" class="form-control" />
		</div>
		<button type="button" class="btn btn-primary" onclick="">查询</button>
	  </div>
	</div>
</div>
@endsection
