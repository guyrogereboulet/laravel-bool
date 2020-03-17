{{-- @dd(Request::route()->getName()) --}}
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>laravel-boolean</title>
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
  </head>
  <body>
    <div class="container">
      <nav class="navbar">
        <div class="logo">
          <img src="https://www.boolean.careers/images/common/logo.png" alt="">

        </div>
        <ul>
            <li><a class="{{(Request::route()->getName() == "static_page.home") ? 'active' : ''}}"href="{{route("static_page.home")}}">Home</a></li>
            <li><a href="#">Corso</a></li>
            <li>
              <a class="{{(Request::route()->getName() == "student.index") ? 'active' : ''}}"href="{{route("student.index")}}">Dopo Corso</a>
            </li>
            <li><a href="#">Lezione Gratuita</a></li>
            <li><a href="#">Candidati ora</a></li>
        </ul>
      </nav>
