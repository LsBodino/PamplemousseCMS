<head>
    <title>{$l_panel} - {$l_listarticles} | {$title}</title>
</head>
<section class="position-relative">
    <div class="container" data-sticky-container>
        <div class="row">
            <div class="mb-4">
                <h1 class="display-4">{$l_listarticles}</h1>
                <a href="{$link}/panel/create/articles" role="button" class="btn btn-success btn-lg">{$l_create}</a>
                <a href="{$link}/panel/trash/articles" role="button" class="btn btn-danger btn-lg">{$l_trash}</a>
            </div>
            <br>
            {if $list_articles_nb == 0}
                <div class="center"> 
                    <strong>{$l_noarticle}!</strong>
                </div>
            {else}
                {foreach $list_articles_req as $lar}
                    <div class="col-sm-6 col-12">
                        <div class="list-group-item">
                            <a href="{$link}/panel/edit/articles/{$lar.id}">
                                <h4 class="list-group-item-heading">{$lar.title}</h4>
                            </a>
                            <p class="list-group-item-text">{$lar.descr}</p>
                            <a href="{$link}/article/{$lar.id}" target="_blank" role="button" class="btn btn-primary btn-sm">{$l_read}</a>
                            <a href="{$link}/panel/edit/articles/{$lar.id}" role="button" class="btn btn-success btn-sm">{$l_edit}</a>
                            <a href="{$link}/panel/delete/articles/{$lar.id}" role="button" class="btn btn-danger btn-sm">{$l_delete}</a>
                        </div>
                    </div>
                {/foreach}
            {/if}
        </div>
    </div>
</section>