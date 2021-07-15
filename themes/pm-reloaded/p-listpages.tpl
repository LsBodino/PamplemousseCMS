<head>
    <title>{$l_panel} - {$l_listpages} | {$title}</title>
</head>
<section class="position-relative">
    <div class="container" data-sticky-container>
        <div class="row">
            <div class="mb-4">
                <h1 class="display-4">{$l_listpages}</h1>
                <a href="{$link}/panel/create/pages" role="button" class="btn btn-success btn-lg">{$l_create}</a>
                <a href="{$link}/panel/trash/pages" role="button" class="btn btn-danger btn-lg">{$l_trash}</a>
            </div>
            <br>
            {if $list_pages_nb == 0}
                <div class="center"> 
                    <strong>{$l_nopage}!</strong>
                </div>
            {else}
                {foreach $list_pages_req as $lpr}
                    <div class="col-sm-6 col-12">
                        <div class="list-group-item">
                            <a href="{$link}/panel/edit/pages/{$lpr.id}">
                            <h4 class="list-group-item-heading">{$lpr.title}</h4>
                            </a>
                            <a href="{$link}/page/{$lpr.id}" target="_blank" role="button" class="btn btn-primary btn-sm">{$l_read}</a>
                            <a href="{$link}/panel/edit/pages/{$lpr.id}" role="button" class="btn btn-success btn-sm">{$l_edit}</a>
                            <a href="{$link}/panel/delete/pages/{$lpr.id}" role="button" class="btn btn-danger btn-sm">{$l_delete}</a>
                        </div>
                    </div>
                {/foreach}
            {/if}
        </div>
    </div>
</section>