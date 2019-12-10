<!doctype html>
<html lang="en">

<head>
  <title>Controle de produtos</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link href="{{ url('assets/css/material-dashboard.css?v=2.1.1') }}" rel="stylesheet" />
</head>

<body>
  <div class="wrapper ">
    <div class="sidebar" data-color="azure" data-background-color="white">
      <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
      <div class="logo">
        <a href="#" class="simple-text logo-mini">
          TSI
        </a>
        <a href="#" class="simple-text logo-normal">
          Iffar
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="#0">
              <i class="material-icons">dashboard</i>
              <p>Produtos</p>
            </a>
          </li>
          <!-- your sidebar here -->
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg  navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#">Seja bem vindo, <b>{{ Auth()->user()->name }}</b> </a>
          </div>
        </div>
        <div class="navbar navbar-expand-lg float-right" aria-labelledby="navbarDropdown">
          <a class="btn btn-dark" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
            {{ __('Logout') }} <i class="material-icons">
              exit_to_app
            </i>
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          @yield('content');
          <!-- your content here -->
        </div>
      </div>

      <!-- init footer -->
      <footer class="footer">
        <div class="container-fluid">
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, produzido por
            Alunos TSI.
          </div>
          <!-- your footer here -->
        </div>
      </footer>
    </div>
  </div>
</body>

</html>