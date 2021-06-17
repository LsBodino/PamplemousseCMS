{foreach $page_req as $pr}
<head>
    <title>{$pr.title} | {$title}</title>
</head>
<body>   
    <div class="col-md-12">
        <div class="container">
            <div class="p-1 mb-4 bg-light rounded-3">
                <div class="center">
                    <h2 class="display-6">{$pr.title}</2>
                </div>
                <div class="jumbotron-contents">
                    <p>{$pr.section}</p>
                    <br>
                </div>
            </div>
        </div>
    </div>
</body>
{/foreach}