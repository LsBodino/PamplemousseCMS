<head>
    <title>{$l_panel} - {$l_trash} - {$l_listpages} | {$title}</title>
</head>
<body>
    <div class="container">
        <div class="center"> 
            <h2 class="display-6">{$l_trash} - {$l_listpages}</h2>
        </div>
        <div class="row">
        {if $trash_pages_nb == 0}
            <div class="center"> 
                <strong>{$l_nopage}!</strong>
            </div>
            {else}
                {foreach $trash_pages_req as $tpr}
                <div class="col-sm-6 col-12">
                    <div class="list-group-item">
                        <h4 class="list-group-item-heading">{$tpr.title}</h4>
                        <a href="{$link}/panel/recover/pages/{$tpr.id}" role="button" class="btn btn-danger btn-sm">{$l_recover}</a>
                    </div>
                </div>
                {/foreach}
            {/if}
        </div>
    </div>
</body>