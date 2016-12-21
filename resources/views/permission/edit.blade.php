@extends('layout.adminlte')
@section('content')

<div class="">
    <h3 class="">编辑权限</h3>
</div>
<div class="ibox-content">		
	<form  class="form-horizontal" id="FormView" action="/permission/store" method="post">
		<div class="form-group">
			<label class="col-sm-1 control-label">权限：</label>
			<div class="col-sm-10">
				<input type="text" name="name" value="{{$permission->name}}" placeholder="系统权限名" nullmsg="不可空" datatype="*">
			</div>
		</div>
		<div class="hr-line-dashed"></div>
		
		<div class="form-group">
			<label class="col-sm-1 control-label">权限显示名</label>
			<div class="col-sm-10">
				<input type="text" name="display_name" value="{{$permission->display_name}}" placeholder="用于显示权限名" nullmsg="不可空" datatype="*">
			</div>
		</div>
		<div class="hr-line-dashed"></div>
		
		<div class="form-group">
			<label class="col-sm-1 control-label">权限描述：</label>
			<div class="col-sm-10">
				<input type="text" name="description" value="{{$permission->description}}">
			</div>
		</div>
		<div class="hr-line-dashed"></div>
		
		<div class="form-group">
			<label class="col-sm-1 control-label" >分类名：</label>
			<div class="col-sm-10">
				<select name="cat" nullmsg="不可空" datatype="*">
					<option value="0"> --- </option>
					@foreach( $pc as $pclist) 
						<option value="{{$pclist->id}}" @if($pclist->id == $permission->cat ) selected="true" @endif >{{$pclist->showname}}</option>
					@endforeach
				</select>
			</div>
		</div>
		<div class="hr-line-dashed"></div>
		
		<div class="form-group">
			<label class="col-sm-1 control-label"></label>
			<div class="col-sm-10">
				<input type="hidden" name="pid" value="{{$permission_id}}">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<button class="btn btn-primary" type="submit">提交</button>
			</div>
		</div>
		<div class="hr-line-dashed"></div>
	</form>
</div>
@include('message')
@stop