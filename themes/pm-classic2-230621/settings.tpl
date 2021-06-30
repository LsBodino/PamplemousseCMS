{foreach $user_req as $ur}
<head>
    <title>{$l_settings} | {$title}</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="center">
                <h2 class="display-6">{$l_settings}</h2>
                {if isset($error)}
                    <script>
                    Swal.fire({
                    icon: 'error',
                    title: "{$l_error}",
                    text: "{$error}!",
                    showConfirmButton: false,
                    footer: '<a href="" class="btn btn-primary">OK</a>',
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
                    footer: '<a href="{$link}/space/{$ur.username}" class="btn btn-primary">OK</a>',
                    allowOutsideClick: false,
                    allowEscapeKey: false
                    })
                    </script>
                {/if}
                <div class="form-group">
                    <form method="POST" enctype="multipart/form-data">
                    <img class="rounded" style="width: 240px; height: 240px;" src="{$ur.profilepicture}">
                    <br><br>
                    <div class="form-floating">
                        <input type="url" name="profilepic_new" id="profilepic_new" class="form-control" value="{$ur.profilepicture}"><br>
                        <label for="profilepic_new">{$l_newprofilepic} :</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" name="username_new" id="username_new" class="form-control" value="{$ur.username}" /><br>
                        <label for="username_new">{$l_newusername} :</label>
                    </div>
                    <div class="form-floating">
                        <input type="email" name="mail_new" id="mail_new" class="form-control" value="{$ur.mail}" /><br>
                        <label for="mail_new">{$l_newemail} :</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" name="pw_new" id="pw_new" class="form-control" /><br>
                        <label for="pw_new">{$l_newpw} :</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" name="pw_new2" id="pw_new2" class="form-control" /><br>
                        <label for="pw_new2">{$l_newpwc} :</label>
                    </div>
                        <input type="submit" class="btn btn-primary btn-lg" value="{$l_edit}" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
{/foreach}