<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/app.css" type="text/css" />
  </head>
  <body>
    <ol class="breadcrumb">
      <li><a href="http://localhost:8000/editoras">Editoras</a></li>
      <li><a href="http://localhost:8000/livros">Livros</a></li>
      <li class="active"><--Menu</li>
    </ol>


    <div class="container">

      <div class="page-header">
        <h1>@yield('page-header-content')</h1>
      </div>

      @yield('content')

    </div>

    <script src="/js/app.js" type="text/javascript"></script>
  </body>
</html>
