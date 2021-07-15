<head>
    <title>{$l_allarticles} | {$title}</title>
</head>
<main>
<section class="pt-4">
	<div class="container">
		<div class="row">
            <div class="col-12">
				<div class="border p-4 text-center rounded-3">
					<h1>{$l_allarticles}</h1>
					<nav class="d-flex justify-content-center" aria-label="breadcrumb">
						<ol class="breadcrumb breadcrumb-dots m-0">
							<li class="breadcrumb-item"><a href="{$link}/homepage">{$l_homepage}</a></li>
							<li class="breadcrumb-item active">{$l_allarticles}</li>
						</ol>
					</nav>
				</div>
            </div>
        </div>
	</div>
</section>
<section class="position-relative pt-0">
	<div class="container" data-sticky-container>
		<div class="row">
        {if $articles_articles_nb == 0}
            <strong>{$l_noarticle}!</strong>
        {else}
            {foreach $articles_articles_req as $aar} 
			<!-- Main Post START -->
			<div class="col-lg-9">
				<!-- Card item START -->
				<div class="card mb-4">
					<div class="row">
						<div class="col-md-5">
							<img class="rounded-3" src="{$aar.img}" alt="">
						</div>
						<div class="col-md-7 mt-3 mt-md-0">
							<a href="{$link}/category/{$aar.category}" class="badge bg-danger mb-2"></i>{$aar.category}</a>
							<h3><a href="{$link}/article/{$aar.id}" class="btn-link stretched-link text-reset">{$aar.title}</a></h3>
							<p>{$aar.descr}</p>
							<!-- Card info -->
							<ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
								<li class="nav-item">
									<div class="nav-link">
										<div class="d-flex align-items-center position-relative">
											<span class="ms-3">{$l_by} <a href="{$link}/space/{$aar.author}" class="stretched-link text-reset btn-link">{$aar.author}</a></span>
										</div>
									</div>
								</li>
								<li class="nav-item">{$aar.datep|date_format:"%d/%m/%y"}</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- Card item END -->
            {/foreach}
        {/if}
		</div>
	</div>
</section>
</main>