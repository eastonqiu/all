@extends('tools.index')

@section('title')
	在线二维码生成
@endsection

@section('content')
<div class="container-fluid">
	<div class="panel panel-default">
	  <div class="panel-heading">在线二维码生成</div>
	  <div class="panel-body">
		<div class="form-group">
		    <label>输入网址:</label>
		    <input id="qrcode_url" class="form-control" />
		</div>
		<button type="button" class="btn btn-primary" onclick="$('#qrcode').html('');$('#qrcode').qrcode({text: $('#qrcode_url').val()});">生成</button>
		<div class="row">
			<div id="qrcode" class="text-center"></div>
		</div>
	  </div>
	</div>
</div>
@endsection
