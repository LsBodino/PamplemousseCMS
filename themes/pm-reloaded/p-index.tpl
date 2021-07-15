<head>
   <title>{$l_panel} - {$l_homepage} | {$title}</title>
</head>
<main>
   <section class="position-relative">
      <div class="container" data-sticky-container>
         <div class="row">
            <div class="mb-4">
               <h1 class="display-4">{$l_homepage}</h1>

               {*Most recent articles*}
               <div class="col-sm-4 col-12">
                  <div class="card">
                     <h5 class="card-header">{$l_mostrecentarticles}</h5>
                     <div class="card-body">
                        <p class="card-text">
                        {foreach $homepage_articles_req as $har}
                           <strong>{$har.id}</strong>: <a href="{$link}/article/{$har.id}" target="_blank">{$har.title}</a>
                           <br>
                           <span style="font-size:12px">{$l_published} {$har.datep|date_format:"%d/%m/%y"} {$l_by} <a href="{$link}/space/{$har.author}" target="_blank">{$har.author}</a> {$l_in} <a href="{$link}/category/{$har.category}" target="_blank">{$har.category}</a></span>
                           <hr>
                        {/foreach}
                        </p>
                     </div>
                  </div>
               </div>

               {*Most recent pages*}
               <div class="col-sm-4 col-12">
                  <div class="card">
                     <h5 class="card-header">{$l_mostrecentpages}</h5>
                     <div class="card-body">
                        <p class="card-text">
                        {foreach $homepage_pages_req as $hpr}
                           <strong>{$hpr.id}</strong>: <a href="{$link}/page/{$hpr.id}" target="_blank">{$hpr.title}</a>
                           <br>
                           <span style="font-size:12px">{$l_published} {$hpr.datep|date_format:"%d/%m/%y"} {$l_by} <a href="{$link}/space/{$hpr.author}" target="_blank">{$hpr.author}</a></span>
                           <hr>
                        {/foreach}
                        </p>
                     </div>
                  </div>
               </div>
               
               {*Most recent users*}
               <div class="col-sm-4 col-12">
                  <div class="card">
                     <h5 class="card-header">{$l_mostrecentusers}</h5>
                     <div class="card-body">
                        <p class="card-text">
                           {foreach $homepage_users_req as $hur}
                           <strong>{$hur.id}</strong>: <a href="{$link}/space/{$hur.username}" target="_blank">{$hur.username}</a>
                           <br>
                           <span style="font-size:12px">{$l_registrationdate}: {$hur.register|date_format:"%d/%m/%y"}</span>
                           <hr>
                           {/foreach}
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
</main>