<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewpoint" content="width=device-width, initial-scale=1">

  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('title', 'sailorbbs') - {{ setting('site_name', '转型之路') }}</title>

  <meta name="description" content="@yield('description', setting('seo_description', '转型必胜！'))" />

  <meta name="keyword" content="@yield('keyword', setting('seo_keyword', 'sailorbbs 不破不立！'))" />

  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  
  @yield('styles')


</head>

<body>
  <div id="app" class="{{ route_class() }}-page">

    @include('layouts._header')

    <div class="container">
      @include('shared._messages')
      @yield('content')
    </div>

    @include('layouts._footer')

  </div>


  <script src="{{ mix('js/app.js') }}"></script>

  @if (app()->isLocal())
    @include('sudosu::user-selector')
  @endif
  
  @yield('scripts')




</body>
</html>
