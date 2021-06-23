<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{$link}/index">{$l_panel}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="{$link}/index">{$l_backwebsite}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{$link}/panel/index">{$l_homepage}</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="menu_articles" role="button" data-bs-toggle="dropdown" aria-expanded="false">{$l_articles}</a>
                    <ul class="dropdown-menu" aria-labelledby="menu_articles">
                        <li><a class="dropdown-item" href="{$link}/panel/categories/articles">{$l_categories}</a></li>
                        <li><a class="dropdown-item" href="{$link}/panel/create/articles">{$l_create}</a></li>
                        <li><a class="dropdown-item" href="{$link}/panel/articles">{$l_list}</a></li>
                        <li><a class="dropdown-item" href="{$link}/panel/trash/articles">{$l_trash}</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="menu_pages" role="button" data-bs-toggle="dropdown" aria-expanded="false">{$l_pages}</a>
                    <ul class="dropdown-menu" aria-labelledby="menu_pages">
                        <li><a class="dropdown-item" href="{$link}/panel/create/pages">{$l_create}</a></li>
                        <li><a class="dropdown-item" href="{$link}/panel/pages">{$l_list}</a></li>
                        <li><a class="dropdown-item" href="{$link}/panel/trash/pages">{$l_trash}</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="menu_users" role="button" data-bs-toggle="dropdown" aria-expanded="false">{$l_users}</a>
                    <ul class="dropdown-menu" aria-labelledby="menu_users">
                        <li><a class="dropdown-item" href="{$link}/panel/users">{$l_list}</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="menu_config" role="button" data-bs-toggle="dropdown" aria-expanded="false">{$l_config}</a>
                    <ul class="dropdown-menu" aria-labelledby="menu_config">
                        <li><a class="dropdown-item" href="{$link}/panel/configuration">{$l_general}</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<br>
