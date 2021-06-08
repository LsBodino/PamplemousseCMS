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
                <h2 class="display-6">{$l_editarticle}</h2>
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
                        <div class="form-floating">
                            <select name="article_pin" id="article_pin" class="form-select" required>
                                <option value="1"{if $ra.pin == 1} selected{/if}>{$l_yes}</option>
                                <option value="0"{if $ra.pin == 0} selected{/if}>{$l_no}</option>
                            </select>
                            <label>{$l_articlepin} :</label>
                            <br>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-primary btn-lg" value="{$l_publish}" />
                </form>
            </div>
        </div>
    </div>
</body>
{/foreach}