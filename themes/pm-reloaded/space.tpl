{foreach $space_users_req as $sur}
<head>
    <title>{$l_spaceof} {$sur.username} | {$title}</title>
</head>
<main>
<section class="pt-4">
	<div class="container">
	    <div class="row">
            <div class="col-12">
				<div class="bg-primary-soft d-md-flex p-3 p-sm-4 my-3 text-center text-md-start rounded">
                    <div class="me-0 me-md-4">
                        <div class="avatar avatar-xxl">
                            <img class="avatar-img rounded-circle" src="{$sur.profilepicture}" alt="avatar">
                        </div>
                    </div>
					<!-- Info -->
					<div>
                        <h2 class="m-0">{$sur.username}</h2>
                        <small>{$l_lastlogin} : {$sur.lastlogin|date_format:"%d/%m/%y"} | {$l_registrationdate} : {$sur.register|date_format:"%d/%m/%y"}</small>
						<p class="my-2">{$sur.signature}</p>
                        {if isset($smarty.session.id) && $sur.id == $smarty.session.id}
                            <br>
                            <a href="{$link}/settings" class="btn btn-primary btn-sm">{$l_settings}</a><br>
                        {/if}					
					</div>
				</div>
				<!-- Author info END -->
            </div>
        </div>
	</div>
</section>
<section class="position-relative pt-0">
	<div class="container">
	    <div class="row">
            <div class="col-12 mb-3">
                <h2>{$l_latestarticlesof} {$sur.username}</h2>
            </div>
			<!-- Main Post START -->
			<div class="col-12">
				<div class="row gy-4">
                    {foreach $space_articles_req as $sar}
					<!-- Card item START -->
					<div class="col-sm-6 col-lg-4">
						<div class="card">
							<!-- Card img -->
							<div class="position-relative">
								<img class="card-img" src="{$sar.img}" alt="Card image">
								<div class="card-img-overlay d-flex align-items-start flex-column p-3">
									<!-- Card overlay bottom -->
									<div class="w-100 mt-auto">
										<!-- Card category -->
										<a href="{$link}/category/{$sar.category}" class="badge bg-warning mb-2">{$sar.category}</a>
									</div>
								</div>
							</div>
							<div class="card-body px-0 pt-3">
								<h4 class="card-title"><a href="{$link}/article/{$sar.id}" class="btn-link text-reset fw-bold">{$sar.title}</a></h4>
								<p class="card-text">{$sar.descr}</p>
								<!-- Card info -->
								<ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
									<li class="nav-item">
										<div class="nav-link">
											<div class="d-flex align-items-center position-relative">
												<span class="ms-3">{$l_by} <a href="{$link}/space/{$sar.author}" class="stretched-link text-reset btn-link">{$sar.author}</a></span>
											</div>
										</div>
									</li>
									<li class="nav-item">{$sar.datep|date_format:"%d/%m/%y"}</li>
								</ul>
							</div>
						</div>
					</div>
                    {/foreach}
					<!-- Card item END -->
				</div>
			</div>
			<!-- Main Post END -->
		</div>
	</div>
</section>
</main>
{/foreach}