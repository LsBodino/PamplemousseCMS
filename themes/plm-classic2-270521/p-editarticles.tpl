{foreach $reqarticle as $ra}
<head>
    <style> textarea.form-control {
        height: 50%;
    } </style>
    <script src="https://cdn.ckeditor.com/4.16.0/full/ckeditor.js"></script>
    <title>{$l_panel} - {$l_editarticle} | {$title}</title>
</head>
<body>
    <div class="center">
        <div class="container">
            <div class="row">
                <h2>{$l_editarticle}</h2>
                {if isset($success)}
                    <div class="alert alert-success" role="alert"><strong>{$success}!</strong></div>
                {/if}
                <form method="POST" action="{$link}/panel/form/editarticles">
                    <div class="form-group">
                        <input type="hidden" name="article_id" id="article_id" value="{$ra.id}">
                        <div class="form-floating">
                            <input type="text" name="article_title" id="article_title" class="form-control" value="{$ra.title}" required/><br>
                            <label>{$l_name} :</label>
                        </div>
                        <div class="form-floating">
                            <input type="text" name="article_descr" id="article_descr" class="form-control" value="{$ra.descr}" required/><br>
                            <label>{$l_descr} :</label>
                        </div>
                        <div class="form-floating">
                            <input type="text" name="article_img" id="article_img" class="form-control" value="{$ra.img}" required/><br>
                            <label>{$l_image} :</label>
                        </div>
                        <label>{$l_section} :</label>
                        <textarea name="article_section" id="article_section" class="form-control" row="25" cols="100">{$ra.section}</textarea>
                        <script>
                            CKEDITOR.replace( 'article_section' );
                        </script>
                        <br>
                        <label>{$l_articlepin} :</label>
                        {if $ra.pin == 1}
                            <input type="radio" id="article_pin" name="article_pin" value="1" checked>
                            <label for="article_pin">{$l_yes}</label>
                            <input type="radio" id="article_pin" name="article_pin" value="0">
                            <label for="article_pin">{$l_no}</label>
                        {else}
                            <input type="radio" id="article_pin" name="article_pin" value="1">
                            <label for="article_pin">{$l_yes}</label>
                            <input type="radio" id="article_pin" name="article_pin" value="0" checked>
                            <label for="article_pin">{$l_no}</label>
                        {/if}
                    </div>
                    <input type="submit" class="btn btn-danger btn-lg" value="{$l_publish}" />
                </form>
            </div>
        </div>
    </div>
</body>
{/foreach}