<head>
    <title>{$l_panel} - {$l_trash} - {$l_listarticles} | {$title}</title>
</head>
<body>
    <div class="container">
        <div class="center"> 
            <h2 class="display-6">{$l_trash} - {$l_listarticles}</h2>
        </div>
        <div class="row">
            {if $nbarticles == 0}
                <div class="center"> 
                    <strong>{$l_noarticle}!</strong>
                </div>
            {else}
                {foreach $articles as $a}
                    <div class="col-md-9">
                        <div class="list-group-item">
                            <h4 class="list-group-item-heading">{$a.title}</h4>
                            <p class="list-group-item-text">{$a.descr}</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <a href="{$link}/panel/recover/articles/{$a.id}" role="button" class="btn btn-danger btn-sm">{$l_recover}</a>
                    </div>
                {/foreach}
            {/if}
        </div>
    </div>
</body>