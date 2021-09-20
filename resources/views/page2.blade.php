<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Prelim Project</title>
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    </head>
    <body>

        <div class="container d-flex justify-content-center mt-5">

            <h1>
                ARAIS KRYSTILLE NICOLE
            </h1>
        </div>

        <div>
            <nav  class="d-flex aligns-items-center justify-content-center" style="height:200px">
                <ul class="d-flex list-unstyled ">
                    <li><a class="nav-link mt-5 text-secondary" href="{{url('/')}}">Page 1</a></li>
                    <li><a class="nav-link mt-5 h5 success" href="{{url('/page2')}}">Page 2</a></li>
                    <li><a class="nav-link mt-5 text-secondary" href="{{url('/page3')}}">Page 3</a></li>
                </ul>
            </nav>
        </div>



        <div  class="d-flex aligns-items-center justify-content-center">
            <footer class="badge bg-primary text-wrap">
                <h5>Integrative Programming & Technology Prelim Project</h5>
            </footer>
        </div>
        <link rel="stylesheet" href="{{asset('js/bootstrap.min.js')}}">
    </body>
</html>
