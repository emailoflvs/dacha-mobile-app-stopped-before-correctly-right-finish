@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dacha') }}</div>


                    <div class="links">
                        <a href="/user">Users</a>
                        {{--            <a href="https://laracasts.com">Laracasts</a>--}}
                        {{--            <a href="https://laravel-news.com">News</a>--}}
                        {{--            <a href="https://blog.laravel.com">Blog</a>--}}
                        {{--            <a href="https://nova.laravel.com">Nova</a>--}}
                        {{--            <a href="https://forge.laravel.com">Forge</a>--}}
                        {{--            <a href="https://vapor.laravel.com">Vapor</a>--}}
                        {{--            <a href="https://github.com/laravel/laravel">GitHub</a>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
