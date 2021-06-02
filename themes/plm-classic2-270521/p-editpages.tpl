{foreach $reqpage as $rp}
<head>
    <style> textarea.form-control {
        height: 50%;
    } </style>
    <script src="https://cdn.ckeditor.com/4.16.0/full/ckeditor.js"></script>
    <title>{$l_panel} - {$l_editpage} | {$title}</title>
</head>
<body>
    <div class="center">
        <div class="container">
            <div class="row">
                <h2>{$l_editpage}</h2>
                {* {if isset($success)}
                    <div class="alert alert-success" role="alert"><strong>{$success}!</strong></div>
                {/if} *}
                <form method="POST" action="{$link}/panel/form/editpages">
                    <div class="form-group">
                        <input type="hidden" name="page_id" id="page_id" value="{$rp.id}">
                        <div class="form-floating">
                            <input type="text" name="page_title" id="page_title" class="form-control" value="{$rp.title}" required/><br>
                            <label>{$l_name} :</label>
                        </div>
                        <label>{$l_section} :</label>
                        <textarea name="page_section" id="page_section" class="form-control" row="25" cols="100">{$rp.section}</textarea>
                        <script>
                            CKEDITOR.replace( 'page_section' );
                        </script>
                        <br>
                        <label>{$l_pagemenu} :</label>
                        {if $rp.menu == 1}
                            <input type="radio" id="page_menu" name="page_menu" value="1" checked>
                            <label for="page_menu">{$l_yes}</label>
                            <input type="radio" id="page_menu" name="page_menu" value="0">
                            <label for="page_menu">{$l_no}</label>
                        {else}
                            <input type="radio" id="page_menu" name="page_menu" value="1">
                            <label for="page_menu">{$l_yes}</label>
                            <input type="radio" id="page_menu" name="page_menu" value="0" checked>
                            <label for="page_menu">{$l_no}</label>
                        {/if}
                    </div>
                    <br>
                    <input type="submit" class="btn btn-danger btn-lg" value="{$l_publish}" />
                </form>
            </div>
        </div>
    </div>
</body>
{/foreach}