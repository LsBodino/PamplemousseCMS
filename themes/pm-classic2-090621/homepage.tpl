<head>
  <title>{$l_homepage} | {$title}</title>
</head>
<body>
  <div class="container">
  {if !isset($smarty.session.id)}
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>{$l_notregistered}!</strong>
      <p>{$l_notregisteredsection1} {$title}. {$l_notregisteredsection2}! <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-laughing" viewBox="0 0 16 16">
      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
      <path d="M12.331 9.5a1 1 0 0 1 0 1A4.998 4.998 0 0 1 8 13a4.998 4.998 0 0 1-4.33-2.5A1 1 0 0 1 4.535 9h6.93a1 1 0 0 1 .866.5zM7 6.5c0 .828-.448 0-1 0s-1 .828-1 0S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 0-1 0s-1 .828-1 0S9.448 5 10 5s1 .672 1 1.5z"/>
      </svg></p>
    </div>
  {/if}
    <div class="center">
      <h2 class="display-6">{$l_homepage}</h2>
      <h3>{$l_mostrecentarticles}</h3>
      <div class="row">
      {if $articles_nb == 0}
        <strong>{$l_noarticle}!</strong>
      {else}
        {foreach $articles_pin as $ap} 
        <div class="card mb-3" style="max-width: 540px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img class="card-img-top" src="{$ap.img}">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">{$ap.title} <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#DA4453" class="bi bi-pin-angle-fill" viewBox="0 0 16 16">
                <path d="M9.828.722a.5.5 0 0 1 .354.146l4.95 4.95a.5.5 0 0 1 0 .707c-.48.48-1.072.588-1.503.588-.177 0-.335-.018-.46-.039l-3.134 3.134a5.927 5.927 0 0 1 .16 1.013c.046.702-.032 1.687-.72 2.375a.5.5 0 0 1-.707 0l-2.829-2.828-3.182 3.182c-.195.195-1.219.902-1.414.707-.195-.195.512-1.22.707-1.414l3.182-3.182-2.828-2.829a.5.5 0 0 1 0-.707c.688-.688 1.673-.767 2.375-.72a5.922 5.922 0 0 1 1.013.16l3.134-3.133a2.772 2.772 0 0 1-.04-.461c0-.43.108-1.022.589-1.503a.5.5 0 0 1 .353-.146z"/>
                </svg></h5>
                <p class="card-text">{$ap.descr}</p>
                <a href="{$link}/article/{$ap.id}" class="btn btn-primary">{$l_read} »</a>
              </div>
            </div>
          </div>
        </div>
        {/foreach}
        {foreach $articles_nopin as $anp} 
        <div class="card mb-8" style="max-width: 540px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img class="card-img-top" src="{$anp.img}">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">{$anp.title}</h5>
                <p class="card-text">{$anp.descr}</p>
                <a href="{$link}/article/{$anp.id}" class="btn btn-primary">{$l_read} »</a>
              </div>
            </div>
          </div>
        </div>
        {/foreach}
      {/if}
      </div>
    </div>
  </div>
</body>