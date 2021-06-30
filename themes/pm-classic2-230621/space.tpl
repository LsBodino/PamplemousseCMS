
{foreach $userspace_req as $ur}
    <head>
        <title>{$l_spaceof} {$ur.username} | {$title}</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="center">
                    <h2 class="display-6">{$l_spaceof} {$ur.username}</h2>
                    <img class="rounded" style="width: 120px; height: 120px;" src="{$ur.profilepicture}">
                    <br>
                    <br>
                    <strong>{$l_username}</strong> : {$ur.username}
                    <br>
                    {* <strong>{$l_rank}</strong> : 
                    <br> *}
                    <br>
                    <strong>{$l_registrationdate}</strong> : {$ur.register|date_format:"%d/%m/%y"}
                    <br>
                    <strong>{$l_lastlogin}</strong> : {$ur.lastlogin|date_format:"%d/%m/%y"}
                    <br>
                    {if isset($smarty.session.id) && $ur.id == $smarty.session.id}
                        <br>
                        <a href="{$link}/settings" class="btn btn-primary btn-sm">{$l_settings}</a><br><br>
                        <a href="{$link}/logout" class="btn btn-primary btn-sm">{$l_logout}</a><br>
                    {/if}
                </div>
            </div>
        </div>
    </body>
{/foreach}