<head>
    <title>{$l_articles} | {$title}</title>
</head>
<body>
    <div class="container">
        <div class="center">
        <h2 class="display-6">{$l_articles}</h2>
            <div class="row">
            {if $articles_nb == 0}
                <strong>{$l_noarticle}!</strong>
            {else}
                {foreach $articles as $a} 
                <div class="card mb-8" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                        <img class="card-img-top" src="{$a.img}">
                        </div>
                        <div class="col-md-8">
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