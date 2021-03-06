@extends('layout.adminlte')
@section('content')
<script>
  window.onload = function () { 
    new uploadPreview({ UpBtn: "up_img", DivShow: "imgdiv", ImgShow: "imgShow" });
  }
</script>

<div class="ibox float-e-margins">
  <div class="ibox-title">
    <h5>编辑颜色</h5>
  </div>
  <div class="ibox-content">
    <form class="form-horizontal"  action="/basecolor/store/{{ $Basecolor->ColorID }}" method="post"  enctype="multipart/form-data" id="FormView">
      <input type="hidden" name="_token" value="{{csrf_token()}}">
      <div class="form-group">
        <label class="col-sm-1 control-label">颜色名称</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="ColorName"  value="{{$Basecolor->ColorName}}" placeholder="编码" nullmsg="请填写编码" datatype="*" >
        </div>
      </div>
      <div class="hr-line-dashed"></div>
      <div class="form-group">
        <label class="col-sm-1 control-label">颜色值</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="ColorValue"  value="{{$Basecolor->ColorValue}}" placeholder="类型名称" nullmsg="请填写新闻类型名称" datatype="*" >
        </div>
      </div>
     
      <div class="hr-line-dashed"></div>
      <div class="form-group">
        <label class="col-sm-1 control-label">备注</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="Remark"  value="{{$Basecolor->Remark}}">
        </div>
      </div>
      <div class="hr-line-dashed"></div>
      <div class="form-group">
        <div class="col-sm-4 col-sm-offset-1">
          <button class="btn btn-primary" type="submit">提交</button>
          <button class="btn btn-white" type="submit">重置</button>
        </div>
      </div>
    </form>
  </div>
</div>
@include('message')
@stop