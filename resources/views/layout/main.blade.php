<!DOCTYPE html>
<html>
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ asset ('js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{ asset ('js/scripts.js') }}"></script>
    <link rel="stylesheet" href="{{ asset ('css/main.css') }}">
    <title>Employee portal</title>
</head>
<body>
    <div class="head" id="head">
        <div class="title" id="title">
            <h1>Welcome to employee portal</h1>
        </div>
        <div class="menu" id="menu">
            <a class="btn" id="btn">List</a>
            <a class="btn" id="btn">Salary</a>
        </div>
    </div>


        @yield('content')


    <div class="footer" id="footer">

    </div>
</body>
</html>
