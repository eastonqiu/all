@extends('tools.layout')

@section('title')
	Unix时间戳(Unix timestamp)转换工具
@endsection

@section('content')
<div class="container-fluid">
	<div class="panel panel-default">
	  <div class="panel-heading">Unix时间戳 => 北京时间</div>
	  <div class="panel-body">
		<div class="row">
		  <div class="col-lg-3">
		    <input id="ut_fromUnixtime" type="text" class="form-control" placeholder="Unix时间戳(秒)">
		  </div>
		  <div class="col-lg-1">
		    <button type="button" class="btn btn-block btn-primary" onclick="unix2Time()">转换</button>
		  </div>
		  <div class="col-lg-3">
		    <input id="ut_2TimeAtGMT8" type="text" class="form-control" placeholder="北京时间" disabled>
		  </div>
		</div>
	  </div>
	</div>

	<div class="panel panel-default">
	  <div class="panel-heading">北京时间 => Unix时间戳</div>
	  <div class="panel-body">
	  	<div class="row">
		  <div class="col-lg-4">
		  	<form id="ut_fromTimeForm" class="form-inline">
			    北京时间
			  	<input type="text" size=3 class="form-control">年
			  	<input type="text" size=1 class="form-control">月
			  	<input type="text" size=1 class="form-control">日
			  	<input type="text" size=1 class="form-control">时
			  	<input type="text" size=1 class="form-control">分
			  	<input type="text" size=1 class="form-control">秒
		  	</form>
		  </div>
		  <div class="col-lg-1">
		      <button type="button" class="btn btn-block btn-primary" onclick="time2Unix()">转换</button>
		  </div>
		  <div class="col-lg-3">
		      <input id="ut_2Unixtime" type="text" class="form-control" placeholder="Unix时间戳(秒)" disabled>
		  </div>
		</div>
	  </div>
	</div>
</div>
@endsection
