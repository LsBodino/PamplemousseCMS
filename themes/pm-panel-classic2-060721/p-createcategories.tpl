<head>
    <title>{$l_panel} - {$l_createcategory} | {$title}</title>
</head>
<body>
    <div class="center">
        <div class="container">
            <div class="row">
                <h2 class="display-6">{$l_createcategory}</h2>
                {if isset($success)}
                    <script>
                    Swal.fire({
                    icon: 'success',
                    title: "{$l_success}",
                    text: "{$success}!",
                    showConfirmButton: false,
                    footer: '<a href="{$link}/panel/categories/articles" class="btn btn-primary">{$l_ok}</a>',
                    allowOutsideClick: false,
                    allowEscapeKey: false
                    })
                    </script>
                {/if}
                {if isset($error)}
                    <script>
                    Swal.fire({
                    icon: 'error',
                    title: "{$l_error}",
                    text: "{$error}!",
                    showConfirmButton: false,
                    footer: '<a href="{$link}/panel/categories/articles" class="btn btn-primary">OK</a>',
                    allowOutsideClick: false,
                    allowEscapeKey: false
                    })
                    </script>
                {/if}
                <form method="POST">
                    <div class="form-group">
                        <div class="form-floating">
                            <input type="text" name="category_name" id="category_name" class="form-control" required/>
                            <label for="category_name">{$l_name}</label>
                        </div>
                        <br>
                        <div class="form-floating">
                            <input type="text" name="category_tag" id="category_tag" class="form-control" required/>
                            <label for="category_tag">{$l_tag}</label>
                        </div>
                        <br>
                    </div>
                    <input type="submit" class="btn btn-primary btn-lg" value="{$l_publish}" />
                </form>
            </div>
        </div>
    </div>
</body>