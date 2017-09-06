@extends('tools.layout')

@section('title')
	htaccess转nginx
@endsection

@section('content')
<div class="container-fluid">
	<div class="panel panel-default">
	  <div class="panel-heading">htaccess转nginx</div>
	  <div class="panel-body">
		<form action="" method="post">
			{{csrf_field()}}
			<div class="form-group">
			    <label>apache htaccess:</label>
				@if (! empty(Request::input('htaccess')))
			    <textarea name="htaccess" class="form-control" rows=10>{{ Request::input('htaccess') }}</textarea>
				@else
				<textarea name="htaccess" class="form-control" rows=10>
RewriteEngine On

RewriteRule ^(.*)/$ /$1 [L,R=301]

RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule ^ index.php [L]
				</textarea>
				@endif
			</div>
			<button type="submit" class="btn btn-primary" onclick="">转换</button>
		</form>
	  </div>

		<div class="panel-body">
		@if (! empty(Request::input('htaccess')))
			@if (! empty($info))
			<textarea class="form-control" rows=10 disabled>{{ $info }}</textarea>
			@else
				没有结果 ^_^
			@endif
		@endif
		</div>
	</div>
</div>
@endsection
