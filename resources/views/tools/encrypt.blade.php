@extends('tools.index')

@section('title')
	在线加密/解密
@endsection

@section('content')
<script src="//cdn.bootcss.com/crypto-js/3.1.9/crypto-js.js"></script>
<div class="container-fluid">
	<div class="panel panel-default">
	  <div class="panel-heading">在线加密/解密</div>
	  <div class="panel-body">
	  	<div class="form-group">
			<div class="row">
			  <div class="col-lg-6">
			    <textarea id="encrypt_en_text" class="form-control input-lg" rows="10" placeholder="输入需加密的内容"></textarea>
			  </div>
			  <div class="col-lg-6">
			    <textarea id="encrypt_de_text" class="form-control input-lg" rows="10" placeholder="输入需解密的内容"></textarea>
			  </div>
			</div>
		</div>
		<form class="form-inline">
			<div class="form-group">
			  <input type="text" class="form-control" id="encrypt_pwd" placeholder="输入密码">
			</div>
			<select id="encrypt_algorithm" class="form-control">
			  <option value="AES">AES</option>
			  <option value="DES">DES</option>
			  <option value="RC4">RC4</option>
			  <option value="Rabbit">Rabbit</option>
			</select>
			<button type="button" class="btn btn-primary" onclick="$('#encrypt_de_text').val(crypto($('#encrypt_algorithm').val(), $('#encrypt_en_text').val(), $('#encrypt_pwd').val(), true));">加密</button>
			<button type="button" class="btn btn-primary" onclick="$('#encrypt_en_text').val(crypto($('#encrypt_algorithm').val(), $('#encrypt_de_text').val(), $('#encrypt_pwd').val(), false));">解密</button>
			<button type="button" class="btn btn-danger" onclick="$('#encrypt_en_text').val('');$('#encrypt_de_text').val('');">清空</button>
		</form>
	  </div>
	</div>
</div>
@endsection
