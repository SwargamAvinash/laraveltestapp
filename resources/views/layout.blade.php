{{--The Layout Page Contains The fixed parts of the Page
    Its Like and Template to the All the Pages for the App We are going to Build--}}
<!DOCTYPE html>
<html>
<head>
    <title>@yield('title' , 'Swargam')</title>
</head>
<body>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/contact">Contact</a></li>
            <li><a href="/about">About</a></li>
        </ul>

        @yield('content')
</body>
</html>

