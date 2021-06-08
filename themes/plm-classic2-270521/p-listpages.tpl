<head>
    <title>{$l_panel} - {$l_listpages} | {$title}</title>
</head>
<body>
    <div class="container">
        <div class="center"> 
            <h2 class="display-6">{$l_listpages}</h2>
        </div>
        <div class="row">
            {if $nbpages == 0}
                <div class="center"> 
                    <strong>{$l_nopage}!</strong>
                </div>
            {else}
                {foreach $pages as $p}
                    <div class="col-md-9">
                        <a href="{$link}/panel/edit/pages/{$p.id}" class="list-group-item">
                        <h4 class="list-group-item-heading">{$p.title}</h4>
                        <br>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="{$link}/page/{$p.id}" role="button" class="btn btn-primary btn-sm">{$l_read}</a>
                        <br>
                        <a href="{$link}/panel/delete/pages/{$p.id}" role="button" class="btn btn-danger btn-sm">{$l_delete}</a>
                    </div>
                {/foreach}
            {/if}
        </div>
    </div>
</body>