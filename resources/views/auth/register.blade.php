@extends('layouts.no-layout')

@section('content')
<link rel="stylesheet" href="stylesheet.css">

<style>
    .container {
        margin-top: 20px;
    }
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="font-size: 20px;">{{ __('会員情報登録') }}</div>

                <div class="card-body">
                    <form method="post" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('ユーザー名') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('メールアドレス') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('パスワード') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <form method="POST" action="{{ route('profiles.edit') }}">
                                    <!-- <button type="submit" class="btn btn-primary" style="width : 100%;" onclick="location.href='{{ route('profiles.edit') }}';">新規会員登録</button> -->
                                    <!-- <button type="submit" class="btn btn-primary" style="width : 100%;"><a href="{{ route('profiles.edit') }}">新規会員登録</a>å</button> -->
                                    <a href="{{ route('profiles.edit') }}" class="btn btn-primary" style="width : 100%;">新規会員登録</a>
                                </form>
                            </div>

                            <div class="col-md-6 offset-md-5">
                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('パスワードをお忘れの方はこちら') }}
                                </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection