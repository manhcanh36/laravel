@extends('admin.layouts.glance')
@section('title')
    Xóa bài viết
@endsection
@section('content')
    <h1>Xóa bài viết {{ $post->id .' : '.$post->name }}</h1>

    <div class="row">
        <div class="form-three widget-shadow">
            <form name="category" action="{{ url('admin/content/post/'.$post->id.'/delete') }}" method="post" class="form-horizontal">
                @csrf

                <div class="col-sm-offset-2">
                    <button type="submit" class="btn btn-success">Xóa</button>
                </div>
            </form>
        </div>
    </div>
@endsection