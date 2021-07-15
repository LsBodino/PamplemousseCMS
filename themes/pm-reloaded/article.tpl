{foreach $article_articles_req as $aar}
<head>
    <title>{$aar.title} | {$title}</title>
</head>
<section>
	<div class="container">
		<div class="row">
			<div class="col-lg-9 mx-auto pt-md-5">
                <a href="{$link}/category/{$aar.category}" class="badge bg-success mb-2">{$aar.category}</a>
				<h1 class="display-4">{$aar.title}</h1>
                <p class="lead">{$aar.descr}</p>
                <ul class="nav nav-divider align-items-center">
                    <li class="nav-item">
                        <div class="nav-link">
                            {$l_by} <a href="{$link}/author/{$aar.author}" class="text-reset btn-link">{$aar.author}</a>
                        </div>
                    </li>
                    <li class="nav-item">{$aar.datep|date_format:"%d/%m/%y"}</li>
                </ul>
                <img class="rounded mt-5" src="{$aar.img}" alt="Image">
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
      	        <p>{$aar.section}</p>
			</div>
			<!-- Main Content END -->
		</div>
	</div>
</section>
{/foreach}
