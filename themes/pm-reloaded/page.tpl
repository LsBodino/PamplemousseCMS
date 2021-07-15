{foreach $page_req as $pr}
    <head>
    <title>{$pr.title} | {$title}</title>
</head>
<section>
	<div class="container">
		<div class="row">
			<div class="col-lg-9 mx-auto pt-md-5">
				<h1 class="display-4">{$pr.title}</h1>
            </div>
        </div>
	</div>
</section>
<!-- Main START -->
<section class="pt-0">
	<div class="container position-relative">
		<div class="row">
			<!-- Main Content START -->
			<div class="col-lg-9 mx-auto">
      	        <p>{$pr.section}</p>
			</div>
			<!-- Main Content END -->
		</div>
	</div>
</section>
{/foreach}