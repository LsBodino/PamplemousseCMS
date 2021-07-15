{foreach $settings_users_req as $sur}
<head>
    <title>{$l_settings} | {$title}</title>
</head>
<main>
    <section>
        <div class="container">
            <div class="row">
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
                    footer: '<a href="{$link}/space/{$sur.username}" class="btn btn-primary">{$l_ok}</a>',
                    allowOutsideClick: false,
                    allowEscapeKey: false
                    })
                    </script>
                {/if}
                <div class="col-md-10 col-lg-8 col-xl-6 mx-auto">
                    <div class="bg-primary-soft rounded p-4 p-sm-5">
                        <h2>{$l_settings}</h2>
                        <!-- Form START -->
                        <form class="mt-4" method="POST">
                            <!-- Profilepicture -->
                            <div class="mb-3">
                                <label class="form-label" for="settings_profilepicture">{$l_newprofilepic}</label>
                                <input type="url" class="form-control" id="settings_profilepicture" name="settings_profilepicture" value="{$sur.profilepicture}">
                            </div>
                            <!-- Username -->
                            <div class="mb-3">
                                <label class="form-label" for="settings_username">{$l_newusername}</label>
                                <input type="text" class="form-control" id="settings_username" name="settings_username" value="{$sur.username}">
                            </div>
                            <!-- Email -->
                            <div class="mb-3">
                                <label class="form-label" for="settings_mail">{$l_newemail}</label>
                                <input type="email" class="form-control" id="settings_mail" name="settings_mail" value="{$sur.mail}">
                            </div>
                            <!-- Password -->
                            <div class="mb-3">
                                <label class="form-label" for="settings_pw">{$l_newpw}</label>
                                <input type="password" class="form-control" id="settings_pw" name="settings_pw" placeholder="*********">
                            </div>
                            <!-- Password -->
                            <div class="mb-3">
                                <label class="form-label" for="settings_pwc">{$l_newpwc}</label>
                                <input type="password" class="form-control" id="settings_pwc" name="settings_pwc" placeholder="*********">
                            </div>
                            <!-- Button -->
                            <div class="row align-items-center">
                                <div class="col-sm-4">
                                    <button type="submit" name="settings" class="btn btn-success">{$l_edit}</button>
                                </div>
                            </div>
                        </form>
                        <!-- Form END -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
{/foreach}