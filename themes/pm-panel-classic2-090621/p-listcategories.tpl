<head>
    <title>{$l_panel} - {$l_categories} | {$title}</title>
</head>
<body>
    <div class="container">
        <div class="center">
            <h2 class="display-6">{$l_categories}</h2>
            <a href="{$link}/panel/create/categories/articles" role="button" class="btn btn-primary btn-lg">{$l_create}</a>
        </div>
        <br>
        <div class="row">
        {if $categories_nb == 0}
            <div class="center"> 
                <strong>{$l_nocategory}!</strong>
            </div>
        {else}
            {foreach $categories as $c}
            <div class="col-sm-3 col-6">
                <div class="list-group-item">
                    <a href="{$link}/panel/edit/categories/articles/{$c.id}">
                        <h4 class="list-group-item-heading">{$c.name}</h4>
                    </a>
                    <p class="list-group-item-text">{$c.tag}</p>
                    <a href="{$link}/panel/edit/categories/articles/{$c.id}" role="button" class="btn btn-success btn-sm">{$l_edit}</a>
                    {if $c.default == 0}
                    <a href="{$link}/panel/delete/categories/articles/{$c.id}" role="button" class="btn btn-danger btn-sm">{$l_delete}</a>
                    {/if}
                </div>
            </div>
            {/foreach}
        {/if}
        </div>
    </div>
</body>