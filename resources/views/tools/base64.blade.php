@extends('tools.layout')

@section('title')
	base64编码/解码
@endsection

@section('content')
<div class="container-fluid">
	<div class="panel panel-default">
	  <div class="panel-heading">base64编码/解码</div>
	  <div class="panel-body">
		<div class="form-group">
		    <textarea id="base64_text" class="form-control input-lg" rows="10" placeholder="输入待转化的内容"></textarea>
		</div>
		<button type="button" class="btn btn-primary" onclick="$('#base64_text').val(base64($('#base64_text').val(), true));">base64编码</button>
		<button type="button" class="btn btn-primary" onclick="$('#base64_text').val(base64($('#base64_text').val(), false));">base64解码</button>
	  </div>
	</div>
</div>
@endsection
