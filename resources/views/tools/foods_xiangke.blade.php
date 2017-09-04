@extends('tools.index')

@section('title')
	在线查询食物相克
@endsection

@section('content')
<div class="container-fluid">
	<div class="panel panel-default">
	  <div class="panel-heading">在线查询食物相克</div>
	  <div class="panel-body">
		<form action="">
			<div class="form-group">
			    <label>查询哪些食物不能一起吃，多个食物用空格隔开:</label>
			    <input name="foods" type="text" class="form-control" value="{{ Request::input('foods') ? : '西红柿 虾 螃蟹' }}" />
			</div>
			<button type="submit" class="btn btn-primary" onclick="">查询</button>
		</form>

		<div class="panel-body">
		@if (! empty(Request::input('foods')))
			@if (! empty($xiangkeList))
			<table class="table table-bordered table-responsive">
				<thead>
	            <tr>
	                <th>相克组合</th>
	                <th>原因</th>
	            </tr>
	            </thead>
	            <tbody>
					@foreach($xiangkeList as $k => $v)
					<tr>
						<td>{{ $k }}</td>
						<td>{{ $v }}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			@else
				这些食物不相克 ^_^
			@endif
		@endif
		</div>
	  </div>
	</div>
</div>
@endsection
