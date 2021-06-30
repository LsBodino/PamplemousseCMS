<head>
    <title>{$l_panel} - {$l_listusers} | {$title}</title>
</head>
<body>
    <div class="container">
        <div class="center"> 
            <h2 class="display-6">{$l_listusers}</h2>
        </div>
        <div class="row">
        {foreach $users as $u}
            <div class="col-sm-4 col-12">
                <div class="list-group-item">
                    <a href="#">
                        <h4 class="list-group-item-heading">{$u.username} ({$l_id}: {$u.id}) {if $u.ban == 1} - <strong>{$l_banned}</strong>{/if}</h4>
                    </a>
                    <p class="list-group-item-text">{$u.mail}</p>
                    {if $u.ban == 0}
                        {if $u.id != $smarty.session.id}
                            <a href="{$link}/panel/ban/users/{$u.id}" role="button" class="btn btn-danger btn-sm">{$l_ban}</a>
                        {else}
                            <p>{$l_banishoneself}.</p>
                        {/if}
                    {else}
                        <a href="{$link}/panel/unban/users/{$u.id}" role="button" class="btn btn-danger btn-sm">{$l_unban}</a>
                    {/if}
                </div>
            </div>
        {/foreach}
        </div>
    </div>
</body>