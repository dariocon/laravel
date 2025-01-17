<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $metaTitle ?? 'Default title' }}</title>
    {{-- <link rel="stylesheet" href="{{ asset('resources/css/app.css')}}"> --}}
    {{-- @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <style>.card-img-top {
        height: 200px; 
        object-fit: cover; 
        width: 100%; 
    }
    </style>
    @include('partials.navigation')
    @session('status')
    <div class="alert alert-success" role="alert">   
      {{session('status')}}
 </div> 
 @endsession
    {{ $slot }}

    @if (isset($sidebar))


    <div id="sidebar">
        <h3>Sidebar</h3>
        <div>{{ $sidebar }}</div>
    </div>
    @endif
</body>
</html>