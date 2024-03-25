<!DOCTYPE html>
<html>

<head>
    <title>Portafolio</title>

    {{-- style css --}}
    <link rel="stylesheet" href="{{ secure_asset('css/porta-style.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/contactame-style.css') }}">

    {{-- Style Font Family --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lusitana:wght@400;700&family=Work+Sans:wght@500&display=swap"
        rel="stylesheet">
    
    {{-- style icon --}}
    <script src="https://kit.fontawesome.com/44f111093f.js" crossorigin="anonymous"></script>
</head>

<body>
    
    <div style="display: flex; flex-direction: column; width: 100%; align-items: center" id="inicio">
        @yield('content')
        @yield('content-c')
    </div>
</body>

</html>
