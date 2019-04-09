@extends('admin.layouts.glance')
@section('title')
    Quản trị menu items
@endsection
@section('content')
    <h1>Quản trị menu items</h1>
    <div style="margin: 20px 0">
        <a href="{{ url('admin/menuitems/create') }}" class="btn btn-success">Thêm MenuItem</a>
    </div>
    <div class="tables">
        <div class="table-responsive bs-example widget-shadow">
            <h4>Tổng Số:</h4>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Tên</th>
                    <th>Parent</th>
                    <th>Menu</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($menuitems as $items)
                    <tr>
                        <th scope="row">{{ $items->id }}</th>
                        <td>{{ $items->name }}</td>
                        <td>{{ $items->parent_id }}</td>
                        <td>{{ $items->menu_id }}</td>
                        <td>
                            <a href="{{ url('admin/menuitems/'.$items->id.'/edit') }}" class="btn btn-warning">Sửa</a>
                            <a href="{{url('admin/menuitems/'.$items->id.'/delete')}}" class="btn btn-danger">Xóa</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $menuitems->links() }}
        </div>
    </div>
@endsection