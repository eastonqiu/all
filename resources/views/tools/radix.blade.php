@extends('tools.index')

@section('title')
	在线进制转换
@endsection

@section('content')
<div class="container-fluid">
	<div class="panel panel-default">
	  <div class="panel-heading">在线进制转换</div>
	  <div class="panel-body">
	  	<div class="form-group">
			<form class="form-inline">
				<select id="num_input_format" class="form-control">
				  <option value="2">2进制</option>
				  <option value="8">8进制</option>
				  <option value="10" selected>10进制</option>
				  <option value="16">16进制</option>
				</select>
				<div class="form-group">
				  <input type="text" class="form-control" id="num_input" placeholder="输入待转换的数字">
				</div>
			</form>
		</div>
		<div class="form-group">
			<button type="button" class="btn btn-primary" onclick="$('#num_output').val(parseInt($('#num_input').val(), $('#num_input_format').val()).toString($('#num_output_format').val()));">转换</button>
		</div>
		<form class="form-inline">
			<select id="num_output_format" class="form-control">
			  <option value="2">2进制</option>
			  <option value="8">8进制</option>
			  <option value="10">10进制</option>
			  <option value="16" selected>16进制</option>
			</select>
			<div class="form-group">
			  <input id="num_output" type="text" class="form-control" disabled placeholder="转换结果" />
			</div>
		</form>
	  </div>
	</div>
</div>
@endsection
