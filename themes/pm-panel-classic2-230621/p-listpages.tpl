<head>
    <title>{$l_panel} - {$l_listpages} | {$title}</title>
</head>
<body>
    <div class="container">
        <div class="center"> 
            <h2 class="display-6">{$l_listpages}</h2>
            <a href="{$link}/panel/create/pages" role="button" class="btn btn-primary btn-lg">{$l_create}</a>
            <a href="{$link}/panel/trash/pages" role="button" class="btn btn-danger btn-lg">{$l_trash}</a>
        </div>
        <br>
        <div class="row">
            {if $pages_nb == 0}
                <div class="center"> 
                    <strong>{$l_nopage}!</strong>
                </div>
            {else}
                {foreach $pages as $p}
                <div class="col-sm-6 col-12">
                    <div class="list-group-item">
                        <a href="{$link}/panel/edit/pages/{$p.id}">
                        <h4 class="list-group-item-heading">{$p.title}</h4>
                        </a>
                        <a href="{$link}/page/{$p.id}" target="_blank" role="button" class="btn btn-primary btn-sm">{$l_read}</a>
                        <a href="{$link}/panel/edit/pages/{$p.id}" role="button" class="btn btn-success btn-sm">{$l_edit}</a>
                        <a href="{$link}/panel/delete/pages/{$p.id}" role="button" class="btn btn-danger btn-sm">{$l_delete}</a>
                    </div>
                </div>
                {/foreach}
            {/if}
        </div>
    </div>
</body>