@extends('layouts.app')

@section('content')
    @if (Auth::check())
        @include('tasks.index')
    @else
        <div class="center jumbotron">
            <div class="text-center">
            <h1>タスク管理へようこそ</h1>
                {{-- ユーザ登録ページへのリンク --}}
                {!! link_to_route('signup.get', '新規会員登録', [], ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection