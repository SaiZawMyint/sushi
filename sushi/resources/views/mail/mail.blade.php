<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{$mailData['title']}}</title>
</head>
<body>
    <h1>{{$mailData['title']}}</h1>
    <p>
        Thank for using our service.
    </p>
    <br>
    <strong>Verify Code</strong> : <span>{{$mailData['code']}}</span>
</body>
</html>