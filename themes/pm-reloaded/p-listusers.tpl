<head>
    <title>{$l_panel} - {$l_listusers} | {$title}</title>
</head>
<body>
    <div class="container">
        <div class="center"> 
            <h2 class="display-6">{$l_listusers}</h2>
        </div>
        <div class="row">
        {foreach $list_users_req as $lur}
            <div class="col-sm-4 col-12">
                <div class="list-group-item">
                    <a href="{$link}/panel/edit/users/{$lur.id}">
                        <h4 class="list-group-item-heading">{$lur.username} ({$l_id}: {$lur.id}) {if $lur.ban == 1} - <strong>{$l_banned}</strong>{/if}</h4>
                    </a>
                    <p class="list-group-item-text">{$lur.mail}</p>
                    <a href="{$link}/panel/edit/users/{$lur.id}" role="button" class="btn btn-success btn-sm">{$l_edit}</a>
                    {if $lur.ban == 0}
                        {if $lur.id != $smarty.session.id}
                            <a href="{$link}/panel/ban/users/{$lur.id}" role="button" class="btn btn-danger btn-sm">{$l_ban}</a>
                        {else}
                            <p>{$l_banishoneself}.</p>
                        {/if}
                    {else}
                        <a href="{$link}/panel/unban/users/{$lur.id}" role="button" class="btn btn-danger btn-sm">{$l_unban}</a>
                    {/if}
                </div>
            </div>
        {/foreach}
        </div>
    </div>
</body>