<head>
    <title>{$l_panel} - {$l_config} - {$l_general} | {$title}</title>
</head>
<section class="position-relative">
    <div class="container" data-sticky-container>
        <div class="row">
            <div class="mb-4">
                <h1 class="display-4">{$l_config} - {$l_general}</h1>
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
                    footer: '<a href="{$link}/panel/configuration" class="btn btn-primary">{$l_ok}</a>',
                    allowOutsideClick: false,
                    allowEscapeKey: false
                    })
                    </script>
                {/if}
                <div class="form-group">
                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-floating">
                            <input type="text" name="config_wsname" id="config_wsname" class="form-control" value="{$title}" required/><br>
                            <label>{$l_name} :</label>
                        </div>
                        <div class="form-floating">
                            <input type="text" name="config_wsdescr" id="config_wsdescr" class="form-control" value="{$descr}"/><br>
                            <label>{$l_descr} :</label>
                        </div>
                        <div class="form-floating">
                            <input type="text" name="config_wslink" id="config_wslink" class="form-control" value="{$link}" required/><br>
                            <label>{$l_link} :</label>
                        </div>
                        <div class="form-floating">
                            <select name="config_wslang" id="config_wslang" class="form-select" required>
                            {foreach $config_lang as $cl}
                            <option value="{$cl.id}"{if $cl.id == $lang}selected {/if}>{$cl.name} ({$cl.id})</option>
                            {/foreach}
                            </select>
                            <label>{$l_lang} :</label><br>
                        </div>
                        <div class="form-floating">
                            <input type="text" name="config_wstheme" id="config_wstheme" class="form-control" value="{$theme}" required/><br>
                            <label>{$l_theme} :</label>
                        </div>
                        <div class="form-floating">
                            <input type="text" name="config_wspaneltheme" id="config_wspaneltheme" class="form-control" value="{$paneltheme}" required/><br>
                            <label>{$l_paneltheme} :</label>
                        </div>
                        <div class="form-floating">
                            <select name="config_register" id="config_register" class="form-select" required>
                                <option value="1"{if 1 == $register}selected {/if}>{$l_yes}</option>
                                <option value="0"{if 0 == $register}selected {/if}>{$l_no}</option>
                            </select>
                            <label>{$l_registrationwebsite} :</label><br>
                        </div>
                        <input type="submit" class="btn btn-primary btn-lg" value="{$l_edit}" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>