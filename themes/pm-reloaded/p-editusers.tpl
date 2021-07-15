{foreach $user_req as $ur}
<head>
    <title>{$l_panel} - {$l_edituser} | {$title}</title>
</head>
<section class="position-relative">
    <div class="container" data-sticky-container>
        <div class="row">
            <div class="mb-4">
                <h1 class="display-4">{$l_edituser} ({$l_id} : {$ur.id})</h1>
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
                    footer: '<a href="{$link}/panel/users" class="btn btn-primary">{$l_ok}</a>',
                    allowOutsideClick: false,
                    allowEscapeKey: false
                    })
                    </script>
                {/if}
                <form method="POST">
                    <div class="form-group">
                        <div class="form-floating">
                            <input type="text" name="user_username" id="user_username" class="form-control" placeholder="{$ur.username}"/><br>
                            <label>{$l_username} ({$ur.username}) :</label>
                        </div>
                        <div class="form-floating">
                            <input type="email" name="user_mail" id="user_mail" class="form-control" placeholder="{$ur.mail}"/><br>
                            <label>{$l_email} ({$ur.mail}) :</label>
                        </div>
                        <div class="form-floating">
                            <select name="user_rank" id="user_rank" class="form-select">
                            {foreach $rank2 as $r}
                                <option value="{$r.id}"{if $ur.rank == $r.id} selected{/if}>{$r.title}</option>
                            {/foreach}
                            </select>
                            <label>{$l_rank} :</label>
                        </div>
                        <br>
                        <div class="form-floating">
                            <input type="password" name="user_pw" id="user_pw" class="form-control"/><br>
                            <label>{$l_pw} :</label>
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