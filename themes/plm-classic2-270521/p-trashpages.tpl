<head>
    <title>{$l_panel} - {$l_trash} - {$l_listpages} | {$title}</title>
</head>
<body>
    <div class="container">
        <div class="center"> 
            <h2 class="display-6">{$l_trash} - {$l_listpages}</h2>
        </div>
        <div class="row">
            {if $nbpages == 0}
                <div class="center"> 
                    <strong>{$l_nopage}!</strong>
                </div>
            {else}
                {foreach $pages as $p}
                    <div class="col-md-9">
                        <div class="list-group-item">
                            <h4 class="list-group-item-heading">{$p.title}</h4>
                            <br>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <a href="{$link}/panel/recover/pages/{$p.id}" role="button" class="btn btn-danger btn-sm">{$l_recover}</a>
                    </div>
                {/foreach}
            {/if}
        </div>
    </div>
</body>