{foreach $reqpage as $rp}
    <head>
        <title>{$rp.title} | {$title}</title>
    </head>
    <body>   
        <div class="col-md-12">
            <div class="container">
                <div class="jumbotron">
                    <div class="center">
                        <h2>{$rp.title}</h2>
                    </div>
                    <div class="jumbotron-contents">
                        <p>{$rp.section}</p>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </body>
{/foreach}