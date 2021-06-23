<head>
   <title>{$l_panel} - {$l_homepage} | {$title}</title>
</head>
<body>
   <div class="container">
      <div class="row">
         <div class="center">
            <h2 class="display-6">{$l_homepage}</h2>
         </div>

         {*Most recent articles*}
         <div class="col-sm-4 col-12">
            <div class="card">
               <h5 class="card-header">{$l_mostrecentarticles}</h5>
               <div class="card-body">
                  <p class="card-text">
                  {foreach $articles as $a}
                  <strong>{$a.id}</strong>: <a href="{$link}/article/{$a.id}" target="_blank">{$a.title}</a>
                  <br>
                  <span style="font-size:12px">{$l_published} {$a.datep|date_format:"%d/%m/%y"} {$l_by} <a href="{$link}/space/{$a.author}" target="_blank">{$a.author}</a> {$l_in} <a href="{$link}/category/{$a.category}" target="_blank">{$a.category}</a></span>
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
                  {foreach $pages as $p}
                  <strong>{$p.id}</strong>: <a href="{$link}/page/{$p.id}" target="_blank">{$p.title}</a>
                  <br>
                  <span style="font-size:12px">{$l_published} {$p.datep|date_format:"%d/%m/%y"} {$l_by} <a href="{$link}/space/{$p.author}" target="_blank">{$p.author}</a></span>
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
                  {foreach $users as $u}
                  <strong>{$u.id}</strong>: <a href="{$link}/space/{$u.id}" target="_blank">{$u.username}</a>
                  <br>
                  <span style="font-size:12px">{$l_registrationdate}: {$u.register|date_format:"%d/%m/%y"}</span>
                  <hr>
                  {/foreach}
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>
</body>