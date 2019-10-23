<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{route('diction')}}" method="post">
    @csrf
<table border="1">
    <tr>
        <td>English</td>
        <td><input type="text" name="eng" placeholder="input English"></td>
    </tr>
    <tr>
        <td><button type="submit" value="transfer">Change</button></td>
    </tr>
</table>
</form>
</body>
</html>
