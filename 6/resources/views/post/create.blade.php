{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'Home')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <form action="{{ action('PostController@create') }}" method="post" enctype="multipart/form-data">

                @if (count($errors) > 0)
                <ul>
                    @foreach($errors->all() as $e)
                    <li>{{ $e }}</li>
                    @endforeach
                </ul>
                @endif
                <div class="form-group row">
                    <label class="col-md-2" for="title">つぶやき</label>
                    <div class="col-md-10"></div>
                    <input type="text" class="form-control" name="body" placeholder="いまどうしてる？" value="{{ old('body') }}">
                </div>
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                {{ csrf_field() }}
                <input type="submit" value="つぶやく" class="btn btn-primary">
        </div>
        </form>
        <div class="card mb-2">
            @foreach($posts as $post)
            <div class="flex card mb-2 justify-between">
                @foreach($users as $user)
                @if($user->id == $post->user_id)
                <div class="flex flex-row justify-between w-full py-3">
                    <div class="flex flex-col border-box mx-4 border-b border-gray-200">{{ $user->name }}</div>
                    <div class="text-right">{{ $post->created_at }}</div>
                </div>
                <div class="flex flex-col border-box mx-4 border-b border-gray-200">{{ $post->body }}</div>
                @if(Auth::id() == $post->user_id)
                <div class="text-right">
                    <a href="{{ action('PostController@delete', ['id'=>$post->id]) }}">削除</a>
                </div>
                @endif
                @endif
                @endforeach
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection