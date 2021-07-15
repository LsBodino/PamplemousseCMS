<head>
    <script src="https://cdn.ckeditor.com/4.16.0/full/ckeditor.js"></script>
    <title>{$l_panel} - {$l_createpage} | {$title}</title>
</head>
<section class="position-relative">
    <div class="container" data-sticky-container>
        <div class="row">
            <div class="mb-4">
                <h1 class="display-4">{$l_createpage}</h1>
                {if isset($error)}
                    <script>
                    Swal.fire({
                    icon: 'error',
                    title: "{$l_error}",
                    text: "{$error}!",
                    showConfirmButton: false,
                    footer: '<a href="" class="btn btn-primary">{$l_ok}</a>',
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
                    footer: '<a href="{$link}/panel/pages" class="btn btn-primary">{$l_ok}</a>',
                    allowOutsideClick: false,
                    allowEscapeKey: false
                    })
                    </script>
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
                        <br>
                        <div class="form-floating">
                            <select name="page_menu" id="page_menu" class="form-select" required>
                                <option value="1">{$l_yes}</option>
                                <option value="0" selected>{$l_no}</option>
                            </select>
                            <label>{$l_pagemenu} :</label>
                            <br>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-primary btn-lg" value="{$l_publish}" />
                </form>
            </div>
        </div>
    </div>
</section>