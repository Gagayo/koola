<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ route('home') }}">{{ config('app.name')}}</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li class="{{ set_active_route('home') }}"><a href="{{ route('home') }}">Home</a></li>
        <li class="{{ set_active_route('about') }}"><a href="{{ route('about') }}">About</a></li>
        <li><a href="#activities">Activities</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Laravel</a></li>
            <li><a href="#">laravel.io</a></li>
            <li><a href="#">larael News</a></li>
            <li><a href="#">koola.com</a></li>
          </ul>
        </li>
         <li class="{{ set_active_route('contact.create') }}"><a href="{{ route('contact.create') }}">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
            <li><a href="#register">Register</a></li>
            <li><a href="#login">Login</a></li>
          </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>