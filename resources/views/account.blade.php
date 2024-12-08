<html>
<head>
    <title>Georgia O'Keeffe Exhibitions</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Baloo+Bhaijaan">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amiri">
    <link rel="stylesheet" href="{{asset('css/account.css')}}">
    <script src="{{asset('js/account.js')}}" defer></script>
</head>
<body>
    @include('include.header')

    @if(auth()->user()->is_member && auth()->user()->membership)
    @include('include.account-member')
@else
    @include('include.account-non-member')
@endif


</body>
</html>
