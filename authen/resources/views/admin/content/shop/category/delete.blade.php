@extends('admin.layouts.glance')

@section('title')
    Xóa danh mục sản phẩm
@endsection

@section('content')
    <h1>Xóa danh mục {{ $cat->id .' : '.$cat->name }}</h1>

    <div class="row">
        <div class="form-three widget-shadow">
            <form name="category" action="{{ url('admin/shop/category/'.$cat->id.'/delete') }}" method="post" class="form-horizontal">
                @csrf

                <div class="col-sm-offset-2">
                    <button type="submit" class="btn btn-success">Xóa</button>
                </div>
            </form>
        </div>
    </div>

@endsection
