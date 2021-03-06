<head>
    <script src="https://cdn.ckeditor.com/4.16.0/full/ckeditor.js"></script>
    <title>{$l_panel} - {$l_createarticle} | {$title}</title>
</head>
<section class="position-relative">
    <div class="container" data-sticky-container>
        <div class="row">
            <div class="mb-4">
                <h1 class="display-4">{$l_createarticle}</h1>
                {if isset($error)}
                    <script>
                    Swal.fire({
                    icon: 'error',
                    title: "{$l_error}",
                    text: "{$error}!",
                    showConfirmButton: false,
                    footer: '<a href="{$link}/panel/articles/create" class="btn btn-primary">{$l_ok}</a>',
                    allowOutsideClick: false,
                    allowEscapeKey: false
                    })
                    </script>
                {/if}
                {if isset($success)}
                    <script>
                    Swal.fire({
                    icon: 'success',
                    title: "{$l_success}",
                    text: "{$success}!",
                    showConfirmButton: false,
                    footer: '<a href="{$link}/panel/articles" class="btn btn-primary">{$l_ok}</a>',
                    allowOutsideClick: false,
                    allowEscapeKey: false
                    })
                    </script>
                {/if}
                <form method="POST">
                    <div class="form-group">
                        <div class="form-floating">
                            <input type="text" name="article_title" id="article_title" class="form-control" required/>
                            <label for="article_title">{$l_name} :</label>
                        </div>
                        <br>
                        <div class="form-floating">    
                            <input type="text" name="article_descr" id="article_descr" class="form-control" required/>
                            <label for="article_descr">{$l_descr} :</label>
                        </div>
                        <br>
                        <div class="form-floating">
                            <input type="url" name="article_img" id="article_img" class="form-control"/>
                            <label for="article_img">{$l_image} :</label>
                        </div>
                        <br>
                        <div class="form-floating">
                            <select name="article_category" id="article_category" class="form-select">
                                {foreach $category as $c}
                                    <option value="{$c.title}">{$c.title}</option>
                                {/foreach}
                            </select>
                            <label for="article_category">{$l_category} :</label>
                        </div>
                        <br>
                        <textarea name="article_section" id="article_section" class="form-control" row="25" cols="100" required></textarea>
                        <script>
                            CKEDITOR.replace( 'article_section' );
                        </script>
                        <br>
                        <div class="form-floating">
                            <select name="article_pin" id="article_pin" class="form-select" required>
                                <option value="1">{$l_yes}</option>
                                <option value="0"selected>{$l_no}</option>
                            </select>
                            <label>{$l_articlepin} :</label>
                            <br>
                        </div>
                    </div>
                    <br>
                    <input type="submit" class="btn btn-primary btn-lg" value="{$l_publish}" />
                </form>
            </div>
        </div>
    </div>
</section>