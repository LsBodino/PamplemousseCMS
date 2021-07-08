<head>
    <title>{$l_panel} - {$l_listarticles} | {$title}</title>
</head>
<body>
    <div class="container">
        <div class="center"> 
            <h2 class="display-6">{$l_listarticles}</h2>
            <a href="{$link}/panel/create/articles" role="button" class="btn btn-primary btn-lg">{$l_create}</a>
            <a href="{$link}/panel/trash/articles" role="button" class="btn btn-danger btn-lg">{$l_trash}</a>
        </div>
        <br>
        <div class="row">
        {if $articles_nb == 0}
            <div class="center"> 
                <strong>{$l_noarticle}!</strong>
            </div>
        {else}
            {foreach $articles as $a}
                <div class="col-sm-6 col-12">
                    <div class="list-group-item">
                        <a href="{$link}/panel/edit/articles/{$a.id}">
                            <h4 class="list-group-item-heading">{$a.title}</h4>
                        </a>
                        <p class="list-group-item-text">{$a.descr}</p>
                        <a href="{$link}/article/{$a.id}" target="_blank" role="button" class="btn btn-primary btn-sm">{$l_read}</a>
                        <a href="{$link}/panel/edit/articles/{$a.id}" role="button" class="btn btn-success btn-sm">{$l_edit}</a>
                        <a href="{$link}/panel/delete/articles/{$a.id}" role="button" class="btn btn-danger btn-sm">{$l_delete}</a>
                    </div>
                </div>
            {/foreach}
        {/if}
        </div>
    </div>
</body>