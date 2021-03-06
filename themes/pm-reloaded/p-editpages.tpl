{foreach $page_req as $pr}
<head>
    <script src="https://cdn.ckeditor.com/4.16.0/full/ckeditor.js"></script>
    <title>{$l_panel} - {$l_editpage} | {$title}</title>
</head>
<section class="position-relative">
    <div class="container" data-sticky-container>
        <div class="row">
            <div class="mb-4">
                <h1 class="display-4">{$l_editpage}</h1>
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
                            <input type="text" name="page_title" id="page_title" class="form-control" value="{$pr.title}" required/><br>
                            <label>{$l_name} :</label>
                        </div>
                        <label>{$l_section} :</label>
                        <textarea name="page_section" id="page_section" class="form-control" row="25" cols="100">{$pr.section}</textarea>
                        <script>
                            CKEDITOR.replace( 'page_section' );
                        </script>
                        <br>
                        <div class="form-floating">
                            <select name="page_menu" id="page_menu" class="form-select" required>
                                <option value="1"{if $pr.menu == 1} selected{/if}>{$l_yes}</option>
                                <option value="0"{if $pr.menu == 0} selected{/if}>{$l_no}</option>
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
{/foreach}