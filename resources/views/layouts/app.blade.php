<!DOCTYPE html>

<style>
    body {
font-family: 'Ubuntu', sans-serif; 
}
.container {
    margin: 0px;
    padding: 0px;
}
</style>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BoB</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <style>
           
            .container{ 
                font-family: 'Josefin Sans','Yu Gothic UI', sans-serif;
            }
            img {
                max-width: 100%;
            }
        </style>
    </head>
    <body>
        @include('commons.navbar')
        

        <div class="container">
            @include('commons.error_messages')

            @yield('content')
        </div>
        
        @include('commons.footer')
    </body>
</html>