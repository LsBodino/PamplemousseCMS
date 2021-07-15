{foreach $category_categories_req as $ccr}
<head>
    <title>{$ccr.title} | {$title}</title>
</head>
<main>
    <section class="position-relative">
        <div class="container" data-sticky-container>
            <div class="row">
                <div class="col-lg-9">
                    <div class="mb-4">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-dots">
                                <li class="breadcrumb-item"><a href="{$link}/homepage"></i>{$l_homepage}</a></li>
                                <li class="breadcrumb-item"><a href="#">{$l_category}</a></li>
                                <li class="breadcrumb-item active">{$ccr.title}</li>
                            </ol>
                        </nav>
                        <h1 class="display-4">{$ccr.title}</h1>
                        {if $ccr.def == 1}
                            <span class="badge bg-danger fs-6 my-2">{$l_defaultcategory}</span>
                        {/if}
                    </div>
                    <!-- Categorie Detail START -->
                    <div class="row gy-4">
                    {/foreach}
                    {foreach $category_articles_req as $car}
                        <!-- Card item START -->
                        <div class="col-sm-6">
                            <div class="card">
                                <!-- Card img -->
                                <div class="position-relative">
                                    <img class="card-img" src="{$car.img}" alt="">
                                    <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                                        <div class="w-100 mt-auto">
                                            <!-- Card category -->
                                            <a href="{$link}/category/{$car.category}" class="badge bg-success mb-2">{$car.category}</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body px-0 pt-3">
                                    <h4 class="card-title"><a href="{$link}/article/{$car.id}" class="btn-link text-reset fw-bold">{$car.title}</a></h4>
                                    <p class="card-text">{$car.descr}</p>
                                    <!-- Card info -->
                                    <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                        <li class="nav-item">
                                            <div class="nav-link">
                                                <div class="d-flex align-items-center position-relative">
                                                    <span class="ms-3">{$l_by} <a href="{$link}/space/{$car.author}" class="stretched-link text-reset btn-link">{$car.author}</a></span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nav-item">{$car.datep|date_format:"%d/%m/%y"}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    {/foreach}
                    <!-- Card item END -->
                    </div>
                </div>
                <!-- Main Post END -->
            </div> <!-- Row end -->
        </div>
    </section>
</main>