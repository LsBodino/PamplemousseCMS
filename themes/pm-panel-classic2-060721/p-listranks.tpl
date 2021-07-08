<head>
    <title>{$l_panel} - {$l_listranks} | {$title}</title>
</head>
<body>
    <div class="container">
        <div class="center"> 
            <h2 class="display-6">{$l_listranks}</h2>
        </div>
        <div class="row">
        {foreach $ranks as $r}
            <div class="col-sm-4 col-12">
                <div class="list-group-item">
                {if $r.superadmin == 0}
                    <a href="{$link}/panel/edit/ranks/users/{$r.id}">
                        <h4 class="list-group-item-heading">{$r.title} ({$l_id}: {$r.id})</h4>
                    </a>
                    <a href="{$link}/panel/edit/ranks/users/{$r.id}" role="button" class="btn btn-success btn-sm">{$l_edit}</a>
                {else}
                    <h4 class="list-group-item-heading">{$r.title} ({$l_id}: {$r.id})</h4>
                    <p>{$l_cannotchangesuperadmin}.</p>
                {/if}
                </div>
            </div>
        {/foreach}
        </div>
    </div>
</body>