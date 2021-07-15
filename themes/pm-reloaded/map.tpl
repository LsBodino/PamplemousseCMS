<head>
    <title>{$l_map} | {$title}</title>
</head>
<section>
	<div class="container">
		<div class="row">
			<div class="col-lg-9 mx-auto pt-md-5">
				<h1 class="display-4">{$l_map}</h1>
                <a href="{$link}/index">{$l_homepage}</a><br>
                <a href="{$link}/map">{$l_map}</a><br><br>
            </div>
            <div class="col-sm-4 col-6">
                <h4>{$l_pages}</h4>
                {foreach $map_pages_req as $mpr}
                    <a href="{$link}/page/{$mpr.id}">{$mpr.title}</a><br>
                {/foreach}
            </div>
            <br>
            <div class="col-sm-4 col-6">
                <h4>{$l_articles}</h4>
                <a href="{$link}/articles">{$l_allarticles}</a><br>
                {foreach $map_categories_req as $mcr}
                    <a href="{$link}/category/{$mcr.title}">{$mcr.title}</a><br>
                {/foreach}
            </div>
            <br>
            <div class="col-sm-4 col-6">
                <h4>{$l_space}</h4>
                {if isset($smarty.session.id)}
                    <a href="{$link}/space/{$smarty.session.id}">{$l_myspace}</a><br>
                    <a href="{$link}/settings">{$l_settings}</a><br>
                    <a href="{$link}/logout">{$l_logout}</a><br>
                {else}
                    <a href="{$link}/login">{$l_login}</a><br>
                    <a href="{$link}/register">{$l_register}</a><br>
                {/if}
            </div>
            <br>
        </div>
    </div>
</section>