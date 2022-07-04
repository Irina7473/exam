<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Главная</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('topics.index') }}">Категории</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('sounds.index')}}">Звуки</a>
                </li>
            </ul>
        </div>

        {{--Нужно обработать поиск по сайту--}}
        <form class="input-group mb-3 col align-self-end " role="search">
            <input class="form-control me-2" type="search" placeholder="Поиск по сайту" aria-label="Search">
            <button class="btn btn-info " type="submit">Найти</button>
        </form>

    </div>
</nav>
