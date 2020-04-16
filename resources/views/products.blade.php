<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Products</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <h2>Products</h2>

        <h3>Download Speed Greater than 5000 Kb/s and DialUp</h3>
        <table class="table table-bordered table-striped table-dark">
            <thead>
            <tr>
                <th>Name</th>
                <th>Upload Speed (KB/s)</th>
                <th>Download Speed (KB/s)</th>
                <th>Technology</th>
                <th>Static IP</th>
            </tr>
            </thead>
            @foreach($categoryOne as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->upload_speed }}</td>
                    <td>{{ $product->download_speed }}</td>
                    <td>{{ ucfirst($product->technology) }}</td>
                    <td>{{ ($product->static_ip == 1) ? 'Yes' : 'No' }}</td>
                </tr>
            @endforeach
        </table>

        <h3>Upload Speed Less than 500 Kb/s and Fibre And Static IP</h3>
        <table class="table table-bordered table-striped table-dark">
            <thead>
            <tr>
                <th>Name</th>
                <th>Upload Speed (KB/s)</th>
                <th>Download Speed (KB/s)</th>
                <th>Technology</th>
                <th>Static IP</th>
            </tr>
            </thead>
            @foreach($categoryTwo as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->upload_speed }}</td>
                    <td>{{ $product->download_speed }}</td>
                    <td>{{ ucfirst($product->technology) }}</td>
                    <td>{{ ($product->static_ip == 1) ? 'Yes' : 'No' }}</td>
                </tr>
            @endforeach
        </table>


    </div>
</div>
</body>
</html>
