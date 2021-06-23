<head>
    <title>{$l_map} | {$title}</title>
</head>
<body>
    <div class="container">
        <div class="center">
            <h2 class="display-6">{$l_map}</h2>
            <a href="{$link}/index">{$l_homepage}</a><br>
            <a href="{$link}/map">{$l_map}</a><br><br>
        </div>
        <div class="row">
            <div class="col-sm-4 col-6">
                <h4>{$l_pages}</h4>
                {foreach $pages_map as $pm}
                    <a href="{$link}/page/{$pm.id}">{$pm.title}</a><br>
                {/foreach}
            </div>
            <br>
            <div class="col-sm-4 col-6">
                <h4>{$l_articles}</h4>
                <a href="{$link}/articles">{$l_articles}</a><br>
            </div>
            <br>
            <div class="col-sm-4 col-6">
                <h4>{$l_space}</h4>
                {if isset($smarty.session.id)}
                    <a href="{$link}/space/{$smarty.session.id}">{$l_myspace}</a><br>
                    <a href="{$link}/settings">{$l_settings}</a><br>
                    <a href="{$link}/logout">{$l_logout}</a><br>
                {else}
                    <a href="{$link}/login">{$l_login}</a><br>
                    <a href="{$link}/register">{$l_register}</a><br>
                {/if}
            </div>
            <br>
        </div>
    </div>
</body>