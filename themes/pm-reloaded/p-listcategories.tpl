<head>
    <title>{$l_panel} - {$l_categories} | {$title}</title>
</head>
<section class="position-relative">
    <div class="container" data-sticky-container>
        <div class="row">
            <div class="mb-4">
                <h1 class="display-4">{$l_categories}</h1>
                <a href="{$link}/panel/create/categories/articles" role="button" class="btn btn-primary btn-lg">{$l_create}</a>
            </div>
            <br>
            {if $list_categories_nb == 0}
                <div class="center"> 
                    <strong>{$l_nocategory}!</strong>
                </div>
            {else}
                {foreach $list_categories_req as $lcr}
                    <div class="col-sm-3 col-6">
                        <div class="list-group-item">
                            <a href="{$link}/panel/edit/categories/articles/{$lcr.id}">
                                <h4 class="list-group-item-heading">{$lcr.title}</h4>
                            </a>
                            <p class="list-group-item-text">{$lcr.tag}</p>
                            <a href="{$link}/panel/edit/categories/articles/{$lcr.id}" role="button" class="btn btn-success btn-sm">{$l_edit}</a>
                            {if $lcr.def == 0}
                                <a href="{$link}/panel/delete/categories/articles/{$lcr.id}" role="button" class="btn btn-danger btn-sm">{$l_delete}</a>
                            {/if}
                        </div>
                    </div>
                {/foreach}
            {/if}
        </div>
    </div>
</section>