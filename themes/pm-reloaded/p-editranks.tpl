{foreach $rank_req as $rr}
<head>
    <title>{$l_panel} - {$l_editrank} | {$title}</title>
</head>
<section class="position-relative">
    <div class="container" data-sticky-container>
        <div class="row">
            <div class="mb-4">
                <h1 class="display-4">{$l_editrank}</h1>
                {if isset($success)}
                    <script>
                    Swal.fire({
                        icon: 'success',
                        title: "{$l_success}",
                        text: "{$success}!",
                        showConfirmButton: false,
                        footer: '<a href="{$link}/panel/ranks/users" class="btn btn-primary">{$l_ok}</a>',
                        allowOutsideClick: false,
                        allowEscapeKey: false
                    })
                    </script>
                {/if}
                <form method="POST">
                    <div class="form-group">
                        <div class="form-floating">
                            <input type="text" name="rank_title" id="rank_title" class="form-control" value="{$rr.title}" required/><br>
                            <label>{$l_name} :</label>
                            <br>
                        </div>
                        <div class="form-floating">
                            <select name="rank_articles" id="rank_articles" class="form-select" required>
                                <option value="1"{if $rr.p_articles == 1} selected{/if}>{$l_yes}</option>
                                <option value="0"{if $rr.p_articles == 0} selected{/if}>{$l_no}</option>
                            </select>
                            <label>{$l_articles} - {$l_create} / {$l_edit} / {$l_delete} :</label>
                            <br>
                        </div>
                        <div class="form-floating">
                            <select name="rank_categories" id="rank_categories" class="form-select" required>
                                <option value="1"{if $rr.p_categories == 1} selected{/if}>{$l_yes}</option>
                                <option value="0"{if $rr.p_categories == 0} selected{/if}>{$l_no}</option>
                            </select>
                            <label>{$l_categories} - {$l_create} / {$l_edit} / {$l_delete} :</label>
                            <br>
                        </div>
                        <div class="form-floating">
                            <select name="rank_configuration" id="rank_configuration" class="form-select" required>
                                <option value="1"{if $rr.p_configuration == 1} selected{/if}>{$l_yes}</option>
                                <option value="0"{if $rr.p_configuration == 0} selected{/if}>{$l_no}</option>
                            </select>
                            <label>{$l_config} - {$l_edit} :</label>
                            <br>
                        </div>
                        <div class="form-floating">
                            <select name="rank_pages" id="rank_pages" class="form-select" required>
                                <option value="1"{if $rr.p_pages == 1} selected{/if}>{$l_yes}</option>
                                <option value="0"{if $rr.p_pages == 0} selected{/if}>{$l_no}</option>
                            </select>
                            <label>{$l_pages} - {$l_create} / {$l_edit} / {$l_delete} :</label>
                            <br>
                        </div>
                        <div class="form-floating">
                            <select name="rank_panelaccess" id="rank_panelaccess" class="form-select" required>
                                <option value="1"{if $rr.p_panelaccess == 1} selected{/if}>{$l_yes}</option>
                                <option value="0"{if $rr.p_panelaccess == 0} selected{/if}>{$l_no}</option>
                            </select>
                            <label>{$l_panel} :</label>
                            <br>
                        </div>
                        <div class="form-floating">
                            <select name="rank_ranks" id="rank_ranks" class="form-select" required>
                                <option value="1"{if $rr.p_ranks == 1} selected{/if}>{$l_yes}</option>
                                <option value="0"{if $rr.p_ranks == 0} selected{/if}>{$l_no}</option>
                            </select>
                            <label>{$l_ranks} - {$l_edit} :</label>
                            <br>
                        </div>
                        <div class="form-floating">
                            <select name="rank_users" id="rank_users" class="form-select" required>
                                <option value="1"{if $rr.p_users == 1} selected{/if}>{$l_yes}</option>
                                <option value="0"{if $rr.p_users == 0} selected{/if}>{$l_no}</option>
                            </select>
                            <label>{$l_users} - {$l_ban} / {$l_unban} :</label>
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