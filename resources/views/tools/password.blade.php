@extends('tools.index')

@section('title')
	在线随机密码生成
@endsection

@section('content')
<div class="container-fluid">
	<div class="panel panel-default">
	  <div class="panel-heading">在线随机密码生成</div>
	  <div class="panel-body">
		<div class="form-group">
			<label>密码长度</label>
		    <input id="psw_size" class="form-control" value="16" />
		</div>
		<div class="form-group">
			<div id="psw_text"></div>
		</div>
		<button type="button" class="btn btn-primary" onclick="$('#psw_text').html(randomPassword($('#psw_size').val()));">随机密码</button>
	  </div>
	</div>
</div>
@endsection
