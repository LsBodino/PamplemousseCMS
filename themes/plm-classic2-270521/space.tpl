
{foreach $requser as $ru}
    <head>
        <title>{$l_spaceof} {$ru.username} | {$title}</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="center">
                    <h2>{$l_spaceof} {$ru.username}</h2>
                    <strong>{$l_username}:</strong> {$ru.username}<br>
                    <strong>{$l_rank}:</strong>
                    {if $ru.rank == 0} {$l_member} {/if}
                    {if $ru.rank == 1} {$l_editor} {/if}
                    {if $ru.rank == 2} {$l_admin} {/if}<br>
                    <strong>{$l_registrationdate}</strong>: {$ru.register|date_format:"%d/%m/%y"}<br>
                    <strong>{$l_lastlogin}</strong>: {$ru.lastlogin|date_format:"%d/%m/%y"}<br>
                    {if isset($smarty.session.id) && $ru.id == $smarty.session.id}
                        <br>
                        <a href="{$link}/settings" class="btn btn-danger btn-sm">{$l_settings}</a><br><br>
                        <a href="{$link}/logout" class="btn btn-danger btn-sm">{$l_logout}</a><br>
                    {/if}
                </div>
            </div>
        </div>
    </body>
{/foreach}