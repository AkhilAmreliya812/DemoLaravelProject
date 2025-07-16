<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- @include('common.header') -->

    <h2>Home page</h2>

    <div>
        @if (Session::has('error'))
            <div class="w3-panel w3-red" role="alert">
                {{ Session::get('error') }}
            </div>
        @endif
        @if (Session::has('success'))
            <div class="w3-panel w3-green" role="alert">
                {{ Session::get('success') }}
            </div>
        @endif
    </div>

    <x-message-banner message="error : Wrong credantials" class="error" />
    <x-message-banner message="Warnning : Something went wrong" class="warnning" />

    <style>
        .success {
            background-color: #89ce89;
            color: white;
            padding: 5px;
            margin: 5px;
            display: inline-block;
        }

        .error {
            background-color: #d38a8a;
            color: red;
            padding: 5px;
            margin: 5px;
            display: inline-block;
        }

        .warnning {
            background-color: #dbdb8e;
            color: yellow;
            padding: 5px;
            margin: 5px;
            display: inline-block;
        }
    </style>



</body>

</html>
