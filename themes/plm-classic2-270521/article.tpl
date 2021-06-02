{foreach $reqarticle as $ra}
<head>
    <title>{$ra.title} | {$title}</title>
</head>
<body>
    <div class="col-md-12">
        <div class="container">
            <div class="jumbotron">
                <div class="center">
                    <img class="rounded mx-auto d-block" src="{$ra.img}">
                    <h2>{$ra.title}</h2>
                    <h6>{$ra.descr}</h6>
                    {$l_published} {$ra.datep|date_format:"%d/%m/%y"} {$l_by} {$ra.author}
                </div>
                <div class="jumbotron-contents">
                    <p>{$ra.section}</p>
                    <br>
                </div>
            </div>
        </div>
    </div>
</body>
{/foreach}
