<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="{$link}/index">{$title}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="{$link}/index">{$l_homepage}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{$link}/articles">{$l_articles}</a>
                </li>
                {foreach $pages as $p} 
                    <li class="nav-item">
                        <a class="nav-link" href="{$link}/page/{$p.id}">{$p.title}</a>
                    </li>
                {/foreach}
                {if !isset($smarty.session.id)}
                    <li class="nav-item">
                        <a class="nav-link" href="{$link}/register">{$l_register}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{$link}/login">{$l_login}</a>
                    </li>
                {else}
                    <li class="nav-item">
                        <a class="nav-link" href="{$link}/space/{$smarty.session.id}">{$l_myspace}</a>
                    </li>
                    {foreach $requser as $ru}
                        {if $ru.rank >= 1}
                            <li class="nav-item">
                                <a class="nav-link" href="{$link}/panel/index">{$l_panel}</a>
                            </li>
                        {/if}
                    {/foreach}
                    <li class="nav-item">
                        <a class="nav-link" href="{$link}/logout">{$l_logout}</a>
                    </li>
                {/if}
            </ul>
        </div>
    </div>
</nav>
<br>
