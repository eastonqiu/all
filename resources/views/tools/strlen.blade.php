@extends('tools.index')

@section('title')
	在线计算字符串长度
@endsection

@section('content')
<div class="container-fluid">
	<div class="panel panel-default">
	  <div class="panel-heading">在线计算字符串长度</div>
	  <div class="panel-body">
		<div class="form-group">
		    <label>输入字符串:</label>
		    <textarea id="strlen_text" class="form-control input-lg" rows="10"></textarea>
		</div>
		<button type="button" class="btn btn-primary" onclick="alert($('#strlen_text').val().length);">计算长度</button>
	  </div>
	</div>
</div>
@endsection
