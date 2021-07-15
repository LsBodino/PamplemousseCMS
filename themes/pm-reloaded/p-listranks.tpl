<head>
    <title>{$l_panel} - {$l_listranks} | {$title}</title>
</head>
<section class="position-relative">
    <div class="container" data-sticky-container>
        <div class="row">
            <div class="mb-4">
                <h1 class="display-4">{$l_listranks}</h1>
            </div>
            {foreach $list_ranks_req as $lrr}
                <div class="col-sm-4 col-12">
                    <div class="list-group-item">
                        {if $lrr.superadmin == 0}
                            <a href="{$link}/panel/edit/ranks/users/{$lrr.id}">
                                <h4 class="list-group-item-heading">{$lrr.title} ({$l_id}: {$lrr.id})</h4>
                            </a>
                            <a href="{$link}/panel/edit/ranks/users/{$lrr.id}" role="button" class="btn btn-success btn-sm">{$l_edit}</a>
                        {else}
                            <h4 class="list-group-item-heading">{$lrr.title} ({$l_id}: {$lrr.id})</h4>
                            <p>{$l_cannotchangesuperadmin}.</p>
                        {/if}
                    </div>
                </div>
            {/foreach}
        </div>
    </div>
</section>