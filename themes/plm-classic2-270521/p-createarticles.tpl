<head>
    <style>
        textarea.form-control {
        height: 50%;
        }
    </style>
    <script src="https://cdn.ckeditor.com/4.16.0/full/ckeditor.js"></script>
    <title>{$l_panel} - {$l_createarticle} | {$title}</title>
</head>
<body>
   <div class="center">
      <div class="container">
         <div class="row">
            <h2>{$l_createarticle}</h2>
            {if isset($success)}
                <div class="alert alert-success" role="alert"><strong>{$success}!</strong></div>
            {/if}
            <form method="POST">
                <div class="form-group">
                    <div class="form-floating">
                        <input type="text" name="article_title" id="article_title" class="form-control" required/><br>
                        <label for="article_title">{$l_name} :</label>
                    </div>
                    <div class="form-floating">    
                        <input type="text" name="article_descr" id="article_descr" class="form-control" required/><br>
                        <label for="article_descr">{$l_descr} :</label>
                    </div>
                    <div class="form-floating">
                        <input type="url" name="article_img" id="article_img" class="form-control" required/><br>
                        <label for="article_img">{$l_image} :</label>
                    </div>
                    <label for="article_section">{$l_section} :</label> 
                    <textarea name="article_section" id="article_section" class="form-control" row="25" cols="100" required></textarea>
                    <script>
                        CKEDITOR.replace( 'article_section' );
                    </script><br>
                    {$l_articlepin} :
                    <input type="radio" id="article_pin" name="article_pin" value="1">
                    <label for="article_pin">{$l_yes}</label>
                    <input type="radio" id="article_pin" name="article_pin" value="0" checked>
                    <label for="article_pin">{$l_no}</label>
                </div>
                <br>
                <input type="submit" class="btn btn-danger btn-lg" value="{$l_publish}" />
            </form>
         </div>
      </div>
   </div>
</body>