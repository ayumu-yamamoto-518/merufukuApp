<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>

<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="" style="height: 39px;" alt="Merufuku">
        </a>

         <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav ml-auto">
                 @guest
                     {{-- 非ログイン --}}
                     <li class="nav-item">
                         <a class="btn btn-secondary ml-3" href="{{ route('register') }}" role="button">会員登録</a>
                     </li>
                     <li class="nav-item">
                         <a class="btn btn-outline-info ml-2" href="{{ route('login') }}" role="button">ログイン</a>
                     </li>
                 @else
                     {{-- ログイン済み --}}
                     <li class="nav-item dropdown ml-2">
                         {{-- ログイン情報 --}}
                         <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                             @if (!empty($user->avatar_file_name))
                                 <img src="/storage/avatars/{{$user->avatar_file_name}}" class="rounded-circle" style="object-fit: cover; width: 35px; height: 35px;">
                             @else
                                 <img src="/images/avatar-default.svg" class="rounded-circle" style="object-fit: cover; width: 35px; height: 35px;">
                             @endif
                             {{ $user->name }} <span class="caret"></span>
                         </a>
                     </li>
                 @endguest
             </ul>
         </div>
    </div>
</nav>

     <div id="app">  
         <main class="py-4">
             @yield('content')
         </main>
     </div>

 </body>
 </html>
