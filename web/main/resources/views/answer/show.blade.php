<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Aloja</title>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .show {
                text-align: justify;
    width: 55%;
    display: inline-block;
            }
        </style>
    </head>
    <body>
        <div class="full-height">
            <div class="content">
                <div class="show">
                    <h3>{{$problem->number}}  ...  {{$problem->name}}</h3><br>
                    <pre>{{ $problem->description }}</pre><br>
                    <pre>{{$problem->input}}</pre><br>
                    <pre>{{$problem->output}}</pre><br>
                    <a href="/problems">All problems</a>
                </div>
            </div>
        </div>
    </body>
</html>