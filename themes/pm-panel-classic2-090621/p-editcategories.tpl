{foreach $category_req as $cr}
<head>
    <title>{$l_panel} - {$l_editcategory} | {$title}</title>
</head>
<body>
    <div class="center">
        <div class="container">
            <div class="row">
                <h2 class="display-6">{$l_editcategory}</h2>
                {if isset($success)}
                    <div class="alert alert-success" role="alert"><strong>{$success}!</strong></div>
                {/if}
                <form method="POST" action="{$link}/panel/form/editcategories">
                    <div class="form-group">
                        <input type="hidden" name="category_id" id="category_id" value="{$cr.id}">
                        <div class="form-floating">
                            <input type="text" name="category_name" id="category_name" class="form-control" value="{$cr.name}" required/><br>
                            <label>{$l_name} :</label>
                        </div>
                        <div class="form-floating">
                            <input type="text" name="category_tag" id="category_tag" class="form-control" value="{$cr.tag}" required/><br>
                            <label>{$l_tag} :</label>
                        </div>
                        <br>
                    </div>
                    <input type="submit" class="btn btn-primary btn-lg" value="{$l_publish}" />
                </form>
            </div>
        </div>
    </div>
</body>
{/foreach}