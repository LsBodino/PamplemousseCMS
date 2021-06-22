{foreach $category_req as $c}
<head>
    <title>{$l_category}: {$c.name} | {$title}</title>
</head>
<body>
    <div class="container">
        <div class="center">
            <h2 class="display-6">{$l_category}: {$c.name}</h2>
            {/foreach}
            <div class="row">
                {if $articles_nb == 0}
                    <strong>{$l_noarticle}!</strong>
                {else}
                    {foreach $articles_req as $a} 
                    <div class="card mb-8" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-sm-4">
                                <img class="card-img-top" src="{$a.img}">
                            </div>
                            <div class="col-sm-8">
                                <div class="card-body">
                                    <h5 class="card-title">{$a.title}</h5>
                                    <p class="card-text">{$a.descr}</p>
                                    <a href="{$link}/article/{$a.id}" class="btn btn-primary">{$l_read} »</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {/foreach}
                {/if}
            </div>
        </div>
    </div>
</body>