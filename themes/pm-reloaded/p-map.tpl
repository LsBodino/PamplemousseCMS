<head>
    <title>{$l_panel} {$l_map} | {$title}</title>
</head>
<body>
    <div class="container">
        <div class="center">
            <h2 class="display-6">{$l_map}</h2>
            <a href="{$link}/panel/index">{$l_homepage}</a><br>
            <a href="{$link}/panel/map">{$l_map}</a><br><br>
        </div>
        <div class="row">
        {foreach $map_ranks_req as $mrr}
            {if $mrr.p_articles == 1 || $mrr.p_categories == 1}
                <div class="col-sm-3 col-6">
                    <h4>{$l_articles}</h4>
                    {if $mrr.p_categories == 1}
                        <a href="{$link}/panel/categories/articles">{$l_categories}</a><br>
                    {/if}
                    {if $mrr.p_articles == 1}
                        <a href="{$link}/panel/create/articles">{$l_create}</a><br>
                        <a href="{$link}/panel/articles">{$l_list}</a><br>
                        <a href="{$link}/panel/trash/articles">{$l_trash}</a><br>
                    {/if}
                </div>
                <br>
            {/if}
            {if $mrr.p_pages == 1}
                <div class="col-sm-3 col-6">
                    <h4>{$l_pages}</h4>
                    <a href="{$link}/panel/create/pages">{$l_create}</a><br>
                    <a href="{$link}/panel/pages">{$l_list}</a><br>
                    <a href="{$link}/panel/trash/pages">{$l_trash}</a><br>
                </div>
                <br>
            {/if}
            {if $mrr.p_users}
                <div class="col-sm-3 col-6">
                    <h4>{$l_users}</h4>
                    <a href="{$link}/panel/users">{$l_list}</a><br>
                    <a href="{$link}/panel/ranks/users">{$l_ranks}</a><br>
                </div>
                <br>
            {/if}
            {if $mrr.p_configuration}
                <div class="col-sm-3 col-6">
                    <h4>{$l_config}</h4>
                    <a href="{$link}/panel/configuration">{$l_general}</a><br>
                </div>
                <br>
            {/if}
        {/foreach}
        </div>
    </div>
</body>