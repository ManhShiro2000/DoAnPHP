@extends('admin.main')

@section('content')
    @include('alert')
    <div class="card p-1 mt-1" style="width: 200px">
        <button type="button" class="btn btn-primary btn-block" onclick="location.href = '/admin/currency/create'"><i class="fas fa-plus-circle"></i> Thêm mới</button>
    </div>

    <div class="card-body table-responsive p-0" id="table-data">
      <table class="table table-hover text-nowrap">
        @include('alert')
        <thead class="bg-danger">
          <tr>
            <th>#</th>
            <th>Mã tiền tệ</th>
            <th>Giá (VNĐ)</th>
            <th>Mô tả</th>
            <th>Operations</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($currencies as $item)
        <tr id="data-{{$item->id}}">
            <td>{{$item->id}}</td>
            <td class="code">{{$item->code}}</td>
            <td class="price">{{$item->price}}</td>
            <td class="description">{{$item->description}}</td>
            <td class="op" style="word-spacing: 10px;">
                <a href="#" onclick="removeRow('{{$item->id}}')"><i class="fas fa-trash-alt text-danger"></i></a>
                <a href="javascript:void(0)" onclick="editCurrency({{$item->id}})"><i class="fas fa-pen text-info"></i></a>
            </td>
        </tr>
        @endforeach
        </tbody>
      </table>
      <div class="ml-3">
        {{ $currencies->links() }}
      </div>
    </div>
@endsection
