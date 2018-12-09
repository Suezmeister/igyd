<nav class="navbar navbar-light bg-light navbar-fixed-top">
    <div class="container-fluid">
        <div class="col-md-4">
            <a href="/home" class="navbar-brand">Hello, {{ Auth::user()->name }}. I Got Your Drink!</a>
        </div>
        <div class="col-md-4">
            <h2 style="font-weight:bold;text-align:center">Please Choose Your Cafe</h2>
        </div>
        <div class="col-md-1 offset-md-3">
            <a href="/logout" class="btn btn-success my-2 my-sm-0">Log Out</a>
        </div>
    </div>
</nav>