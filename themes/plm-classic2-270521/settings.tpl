{foreach $requser as $ru}
<head>
    <title>{$l_settings} | {$title}</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="center">
                <h2>{$l_settings}</h2>
                {if isset($error)}
                <div class="alert alert-danger" role="alert"><strong>{$error}!</strong></div>
                {/if}
                <div class="form-group">
                    <form method="POST" action="" enctype="multipart/form-data">
                    <div class="form-floating">
                        <input type="text" name="newusername" id="newusername" class="form-control" value="{$ru.username}" /><br>
                        <label for="newusername">{$l_newusername} :</label>
                    </div>
                    <div class="form-floating">
                        <input type="email" name="newmail" id="newmail" class="form-control" value="{$ru.mail}" /><br>
                        <label for="newmail">{$l_newemail} :</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" name="newpw1" id="newpw1" class="form-control" /><br>
                        <label for="newpw1">{$l_newpw} :</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" name="newpw2" id="newpw1" class="form-control" /><br>
                        <label for="newpw2">{$l_newpwc} :</label>
                    </div>
                        <input type="submit" class="btn btn-danger btn-lg" value="{$l_edit}" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
{/foreach}