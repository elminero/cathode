<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        @yield('title')
    </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <style>

        .error {
            color: red;
        }

        .error-border {
            border-color: red;
        }

        .float-right {
            float: right;
        }

        .clear-both {
            clear:both
        }

        .completed {
            text-decoration: line-through;
        }

    </style>

</head>
<body>

    @yield('content')

</body>
</html>
