<head>
  <title>{$l_homepage} | {$title}</title>
</head>
<main>
<section class="position-relative">
	<div class="container" data-sticky-container>
		<div class="row">
			<!-- Main Post START -->
			<div class="col-lg-9">
				<!-- Title -->
				<div class="mb-4">
					<h2 class="m-0">{$l_homepage}</h2>
				</div>
				<div class="row gy-4">
        {if $homepage_articles_nb == 0}
          <strong>{$l_noarticle}!</strong>
        {else}
					<!-- Card item START -->
          {foreach $homepage_articles_pin_req as $hapr}
            <div class="col-sm-6">
              <div class="card">
                <!-- Card img -->
                <div class="position-relative">
                  <img class="card-img" src="{$hapr.img}" alt="{$hapr.title}">
                  <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                    <!-- Card overlay bottom -->
                    <div class="w-100 mt-auto">
                      <!-- Card category -->
                      <a href="{$link}/category/{$hapr.category}" class="badge bg-success mb-2">{$hapr.category}</a>
                      <a href="#" class="badge bg-danger mb-2">{$l_articlepinned}</a>
                    </div>
                  </div>
                </div>
                <div class="card-body px-0 pt-3">
                  <h4 class="card-title"><a href="{$link}/article/{$hapr.id}" class="btn-link text-reset fw-bold">{$hapr.title}</a></h4>
                  <p class="card-text">{$hapr.descr}</p>
                  <!-- Card info -->
                  <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                    <li class="nav-item">
                      <div class="nav-link">
                        <div class="d-flex align-items-center position-relative">
                          <span class="ms-3">{$l_by} <a href="{$link}/space/{$hapr.author}" class="stretched-link text-reset btn-link">{$hapr.author}</a></span>
                        </div>
                      </div>
                    </li>
                    <li class="nav-item">{$hapr.datep|date_format:"%d/%m/%y"}</li>
                  </ul>
                </div>
              </div>
            </div>
            {/foreach}
            {foreach $homepage_articles_nopin_req as $hanr}
              <div class="col-sm-6">
              <div class="card">
                <!-- Card img -->
                <div class="position-relative">
                  <img class="card-img" src="{$hanr.img}" alt="{$hanr.title}">
                  <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                    <!-- Card overlay bottom -->
                    <div class="w-100 mt-auto">
                      <!-- Card category -->
                      <a href="{$link}/category/{$hanr.category}" class="badge bg-success mb-2">{$hanr.category}</a>
                    </div>
                  </div>
                </div>
                <div class="card-body px-0 pt-3">
                  <h4 class="card-title"><a href="{$link}/article/{$hanr.id}" class="btn-link text-reset fw-bold">{$hanr.title}</a></h4>
                  <p class="card-text">{$hanr.descr}</p>
                  <!-- Card info -->
                  <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                    <li class="nav-item">
                      <div class="nav-link">
                        <div class="d-flex align-items-center position-relative">
                          <span class="ms-3">{$l_by} <a href="{$link}/space/{$hanr.author}" class="stretched-link text-reset btn-link">{$hanr.author}</a></span>
                        </div>
                      </div>
                    </li>
                    <li class="nav-item">{$hanr.datep|date_format:"%d/%m/%y"}</li>
                  </ul>
                </div>
              </div>
            </div>
          {/foreach}
					<!-- Card item END -->
        {/if}
				</div>
			</div>
			<!-- Main Post END -->
			<!-- Sidebar START -->
			<div class="col-lg-3 mt-5 mt-lg-0">
				<div data-sticky data-margin-top="80" data-sticky-for="767">
					<div class="row">
						<!-- Recent post widget START -->
						<div class="col-12 col-sm-6 col-lg-12">
							<h4 class="mt-4 mb-3">{$l_mostrecentarticles}</h4>
              {foreach $homepage_articles_req as $har}
							<!-- Recent post item -->
							<div class="card mb-3">
								<div class="row g-3">
									<div class="col-4">
										<img class="rounded" src="{$har.img}" alt="">
									</div>
									<div class="col-8">
										<h6><a href="{$link}/article/{$har.id}" class="btn-link stretched-link text-reset fw-bold">{$har.title}</a></h6>
										<div class="small mt-1">{$har.datep|date_format:"%d/%m/%y"}</div>
									</div>
								</div>
							</div>
						<!-- Recent post widget END -->
            {/foreach}
					</div>
				</div>
			</div>
			<!-- Sidebar END -->
		</div>
	</div>
</section>