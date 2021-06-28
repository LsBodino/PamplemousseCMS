
<br>
<footer>
  <div class="center">
    <hr>
    <div class="container">
      <p class="textfooter">{$title} {$l_powered} <a href="#" id="versionpm">{$l_pamplemoussecms}</a> {$l_and} <a href="#" id="versionsm">{$l_smarty}</a> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#DA4453" class="bi bi-heart-fill" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
      </svg>
      <br>
      {$l_theme}: {$theme_name} {$l_by} <a href="{$theme_authorurl}" target="_blank">{$theme_author}</a><br>
      <a href="{$link}/map">{$l_map}</a> | <a href="http://pamplemoussecms.com" target="_blank">{$l_website}</a> | <a href="https://smarty.net" target="_blank">Smarty</a></p>
    </div>
  </div>
  <script>
    tippy('#versionpm', {
      content: "{$l_version}: {$version}",
    });
    tippy('#versionsm', {
      content: "{$l_version}: 3.1.39",
    });
  </script>
</footer>