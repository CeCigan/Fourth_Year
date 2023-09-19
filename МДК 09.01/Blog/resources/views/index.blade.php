<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style>
        .form-row {
            display: flex;
            justify-content: end
        }
    </style>
    <title>Главная</title>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a href="#" class="navbar-brand">Мой блог</a>
            <button class="navbar-toggler" type = 'button' data-toggle='collapse' data-target= '#navbarSupportedContent' 
            aria-controls='navbarSupportedContent' aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id = 'navbarSupportedContent'>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a href="#" class="nav-link">Автор</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Портфолио</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Контакты</a>
                    </li>
                </ul>

                <form action="" class="form-row my-2 my-lg-0">
                    <input type="search" class="form-control mr-sm-2" name = 'search' placeholder="Поиск" aria-label="Поиск">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Поиск</button>
                </form>
            </div>
        </nav>

        <h1>Все посты</h1>
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-6 mb-4">
                    <div class="card">
                        <div class="card-header">{{$post->title}}</div>
                        <div class="card-body">
                            <img src="..{{$post->img ?? asset('../images/default.jpg')}}" alt="" class="img-fluid">
                            <p class="mt-3 mb-0">{{$post->excerpt}}</p>
                        </div>
                        <div class="card-footer">
                            <div class="clearfix">
                                <span class="float-end">
                                    Автор: {{$post->author}}<br>
                                    Дата: {{date_format($post->created_at, 'Y H:i')}}
                                </span>
                                <a href="" class="btn btn-dark float-right">Читать далее</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>