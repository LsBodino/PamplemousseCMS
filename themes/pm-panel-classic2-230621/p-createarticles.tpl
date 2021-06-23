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
            <h2 class="display-6">{$l_createarticle}</h2>
            {if isset($success)}
                <div class="alert alert-success" role="alert"><strong>{$success}!</strong></div>
            {/if}
            <form method="POST">
                <div class="form-group">
                    <div class="form-floating">
                        <input type="text" name="article_title" id="article_title" class="form-control" required/>
                        <label for="article_title">{$l_name} :</label>
                    </div>
                    <br>
                    <div class="form-floating">    
                        <input type="text" name="article_descr" id="article_descr" class="form-control" required/>
                        <label for="article_descr">{$l_descr} :</label>
                    </div>
                    <br>
                    <div class="form-floating">
                        <input type="url" name="article_img" id="article_img" class="form-control"/>
                        <label for="article_img">{$l_image} :</label>
                    </div>
                    <br>
                    <div class="form-floating">
                        <select name="article_category" id="article_category" class="form-select">
                            {foreach $category as $c}
                            <option value="{$c.name}">{$c.name}</option>
                            {/foreach}
                        </select>
                        <label for="article_category">{$l_category} :</label>
                    </div>
                    <br>
                    <label for="article_section">{$l_section} :</label> 
                    <textarea name="article_section" id="article_section" class="form-control" row="25" cols="100" required></textarea>
                    <script>
                        CKEDITOR.replace( 'article_section' );
                    </script>
                    <br>
                    <div class="form-floating">
                        <select name="article_pin" id="article_pin" class="form-select" required>
                            <option value="1">{$l_yes}</option>
                            <option value="0"selected>{$l_no}</option>
                        </select>
                        <label>{$l_articlepin} :</label>
                        <br>
                    </div>
                </div>
                <br>
                <input type="submit" class="btn btn-primary btn-lg" value="{$l_publish}" />
            </form>
         </div>
      </div>
   </div>
</body>