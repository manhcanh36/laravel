@extends('admin.layouts.glance')
@section('title')
    Xóa tag
@endsection
@section('content')
    <h1>Xóa tag {{ $menu->id .' : '.$menu->name }}</h1>

    <div class="row">
        <div class="form-three widget-shadow">
            <form name="category" action="{{ url('admin/menu/'.$menu->id.'/delete') }}" method="post" class="form-horizontal">
                @csrf

                <div class="col-sm-offset-2">
                    <button type="submit" class="btn btn-success">Xóa</button>
                </div>
            </form>
        </div>
    </div>
@endsection