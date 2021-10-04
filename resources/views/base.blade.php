<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel_Test</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    
    <link rel="stylesheet" href="{{ asset('Design/Style.css')}}">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    @livewireStyles
</head>
            <header>
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Zone</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/region">Region</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/territory">Territory</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/user">User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/sku">SKU</a>
                    </li>
                    </ul>
                </nav>
            </header>
<body>
    {{$slot}}
</body>
@livewireScripts
</html>