@extends('tools.layout')

@section('title')
	在线URL编码/解码
@endsection

@section('content')
<div class="container-fluid">
	<div class="panel panel-default">
	  <div class="panel-heading">在线URL编码/解码</div>
	  <div class="panel-body">
		<div class="form-group">
		    <textarea id="urlencode_text" class="form-control input-lg" rows="10" placeholder="输入待转化的内容"></textarea>
		</div>
		<button type="button" class="btn btn-primary" onclick="$('#urlencode_text').val(encodeURI($('#urlencode_text').val()));">UrlEncode编码</button>
		<button type="button" class="btn btn-primary" onclick="$('#urlencode_text').val(decodeURI($('#urlencode_text').val()));">UrlDecode解码</button>
	  </div>
	</div>
</div>
@endsection
