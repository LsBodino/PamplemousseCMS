{foreach $article_req as $ar}
<head>
    <title>{$ar.title} | {$title}</title>
</head>
<body>
    <div class="col-md-12">
        <div class="container">
            <div class="p-1 mb-4 bg-light rounded-3">
                <div class="center">
                    <img class="rounded mx-auto d-block img-fluid" style="width:50%;height:50%;" src="{$ar.img}">
                    <h2 class="display-6">{$ar.title}</h2>
                    <h5>{$ar.descr}</h5>
                    <span style="font-size:12px">{$l_published} {$ar.datep|date_format:"%d/%m/%y"} {$l_by} <a href="{$link}/space/{$ar.author}" target="_blank">{$ar.author}</a> {$l_in} <a href="{$link}/category/{$ar.category}" target="_blank">{$ar.category}</a></span>
                </div>
                <br>
                <div class="col-12">
                    <div class="p-2 border">
                        {$ar.section}
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
{/foreach}
