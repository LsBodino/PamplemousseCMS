{foreach $article_req as $ar}
<head>
    <title>{$ar.title} | {$title}</title>
</head>
<body>
    <div class="col-md-12">
        <div class="container">
            <div class="p-1 mb-4 bg-light rounded-3">
                <div class="center">
                    <img class="rounded mx-auto d-block" src="{$ar.img}">
                    <h2 class="display-6">{$ar.title}</h2>
                    <h5>{$ar.descr}</h5>
                    <span style="font-size:12px">{$l_published} {$ar.datep|date_format:"%d/%m/%y"} {$l_by} {$ar.author} {$l_in} {$ar.category}</span>
                </div>
                <div class="jumbotron-contents">
                    <p>{$ar.section}</p>
                    <br>
                </div>
            </div>
        </div>
    </div>
</body>
{/foreach}
