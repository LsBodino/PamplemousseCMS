<head>
    <script src="https://cdn.ckeditor.com/4.16.0/full/ckeditor.js"></script>
    <style>
    textarea.form-control {
        height: 50%;
    }
    </style>
    <title>{$l_panel} - {$l_createpage} | {$title}</title>
</head>
<body>
    <div class="center">
        <div class="container">
            <div class="row">
                <h2>{$l_createpage}</h2>
                {if isset($success)}
                    <div class="alert alert-success" role="alert"><strong>{$success}!</strong></div>
                {/if}
                <form method="POST">
                    <div class="form-group">
                        <div class="form-floating">
                            <input type="text" name="page_title" id="page_title" class="form-control" required/>
                            <label for="page_title">{$l_name}</label>
                        </div>
                        <br>
                        <textarea name="page_section" id="page_section" class="form-control" row="25" cols="100" required></textarea>
                        <script>
                            CKEDITOR.replace( 'page_section' );
                        </script>
                        {$l_pagemenu} :
                        <input type="radio" id="page_menu" name="page_menu" value="1" checked>
                        <label for="page_menu">{$l_yes}</label>
                        <input type="radio" id="page_menu" name="page_menu" value="0">
                        <label for="page_menu">{$l_no}</label>
                    </div>
                    <br>
                    <input type="submit" class="btn btn-danger btn-lg" value="{$l_publish}" />
                </form>
            </div>
        </div>
    </div>
</body>