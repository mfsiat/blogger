<nav class="navbar navbar-expand-md navbar-dark bg-dark">
<div class="container">
    <a class="navbar" href="/">{{config('app.name', 'Blog')}}</a>
    <div id="navbar" class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="/about">About</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="/services">Services</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="/posts">Blog</a>
        </li>
        </ul> 
        <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="/posts/create">Create Post</a>
            </li>
        </ul>
    </div>
</div>  
</nav>