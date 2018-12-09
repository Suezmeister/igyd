<nav class="navbar navbar-light bg-light navbar-fixed-top">
    <div class="container-fluid">
        <a href="/home" class="navbar-brand">Hello, {{ Auth::user()->name }}. I Got Your Drink!</a>
        <a href="/logout" class="btn btn-success my-2 my-sm-0">Log Out</a>
    </div>
</nav>