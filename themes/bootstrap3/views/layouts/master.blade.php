<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Bootstrap 3 Shopavel Theme</title>

        @stylesheets('application')
    </head>
    <body>
        <nav class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="brand" href="/">Shopavel</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            {{-- @foreach(Category::all() as $category)
                                <li><a href="{{ URL::route('category.show', ['category' => $category]) }}">{{ $category->title }}</a></li>
                            @endforeach --}}
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <div class="container">
            @yield('content')
        </div>

        <footer class="container">
            <p>Shopavel - <a href="http://shopavel.org">shopavel.org</a></p>
        </footer>
    </body>
</html>