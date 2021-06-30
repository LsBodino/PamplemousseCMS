<head>
   <title>{$l_login} | {$title}</title>
</head>
<body>
   <div class="container">
      <div class="row">
         <div class="center">
            <h2 class="display-6">{$l_login}</h2>
            {if isset($error)}
               <script>
               Swal.fire({
               icon: 'error',
               title: "{$l_error}",
               text: "{$error}!",
               showConfirmButton: false,
               footer: '<a href="" class="btn btn-primary">OK</a>',
               allowOutsideClick: false,
               allowEscapeKey: false
               })
               </script>
            {/if}
            <div class="form-group">
               <form method="POST">
                  <div class="form-floating">
                     <input type="email" name="login_mail" id="login_mail" class="form-control" required/>
                     <label for="login_mail">{$l_email} :</label>
                  </div>
                  <br>
                  <div class="form-floating">
                     <input type="password" name="login_pw" id="login_pw" class="form-control" required/>
                     <label for="login_pw">{$l_pw} :</label>
                  </div>
                  <br>
                  <label for="remembercheckbox">{$l_rememberme} :</label> 
                  <input type="checkbox" class="form-check-input" name="rememberme" id="remembercheckbox" />
                  <br><br>
                  <input type="submit" class="btn btn-primary btn-lg" name="login" value="{$l_login}" />
               </form>
               <a href="{$link}/register" class="btn btn-primary btn-lg">{$l_register}</a>
            </div>
         </div>
      </div>
   </div>
</body>