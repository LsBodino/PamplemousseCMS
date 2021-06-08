<head>
    <title>{$l_panel} - {$l_listarticles} | {$title}</title>
</head>
<body>
    <div class="container">
        <div class="center"> 
            <h2 class="display-6">{$l_listarticles}</h2>
        </div>
        <div class="row">
            {if $nbarticles == 0}
                <div class="center"> 
                    <strong>{$l_noarticle}!</strong>
                </div>
            {else}
                {foreach $articles as $a}
                    <div class="col-md-9">
                        <a href="{$link}/panel/edit/articles/{$a.id}" class="list-group-item">
                        <h4 class="list-group-item-heading">{$a.title}</h4>
                        <p class="list-group-item-text">{$a.descr}</p>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="{$link}/article/{$a.id}" role="button" class="btn btn-primary btn-sm">{$l_read}</a>
                        <br>
                        <a href="{$link}/panel/delete/articles/{$a.id}" role="button" class="btn btn-danger btn-sm">{$l_delete}</a>
                    </div>
                {/foreach}
            {/if}
        </div>
    </div>
</body>