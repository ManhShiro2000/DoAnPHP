@extends('admin.main')

@section('content')
<div class="row">
    <div class="col-12">
        @include('alert')
    </div>
    <form method="post" class="m-5 col-6">
        @csrf
        <div class="form-group">
            <label>Mã tiền tệ</label>
            <input type="text" class="form-control" name="code" placeholder="Nhập mã tiền tệ" value="{{old('code')}}">
        </div>
        <div class="form-group">
            <label>Nhập giá (VNĐ)</label>
            <input type="number" class="form-control" name="price" placeholder="Nhập giá" value="{{old('price')}}">
        </div>
        <div class="form-group">
            <label>Mô tả</label>
            <textarea class="form-control" name="description" cols="30" rows="10" placeholder="Nhập mô tả">{{old('description')}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Thêm mới</button>
        </form>
</div>
@endsection