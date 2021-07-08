<head>
    <title>{$l_register} | {$title}</title>
</head>
<body>
   <div class="center">
      <div class="container">
         <div class="row">
            <h2 class="display-6">{$l_register}</h2>
            {if $register == 0}
               <script>
               Swal.fire({
               icon: 'error',
               title: "{$l_error}",
               text: "{$l_registrationsclosed}",
               showConfirmButton: false,
               footer: '<a href="{$link}/index" class="btn btn-primary">{$l_ok}</a>',
               allowOutsideClick: false,
               allowEscapeKey: false
               })
               </script>
            {else}
               {if isset($error)}
                  <script>
                  Swal.fire({
                  icon: 'error',
                  title: "{$l_error}",
                  text: "{$error}!",
                  showConfirmButton: false,
                  footer: '<a href="" class="btn btn-primary">{$l_ok}</a>',
                  allowOutsideClick: false,
                  allowEscapeKey: false
                  })
                  </script>
               {/if}
               {if isset($success)}
                  <script>
                  Swal.fire({
                  icon: 'success',
                  title: "{$l_success}",
                  text: "{$success}!",
                  showConfirmButton: false,
                  footer: '<a href="{$link}/login" class="btn btn-primary">OK</a>',
                  allowOutsideClick: false,
                  allowEscapeKey: false
                  })
                  </script>
               {/if}
               <div class="form-group">
                  <form method="POST" action="">
                  <div class="form-floating">
                     <input type="text" class="form-control" id="username" name="username" required />
                     <label for="username">{$l_username} :</label>
                  </div>
                  <br>
                  <div class="form-floating">
                     <input type="email" class="form-control" id="mail" name="mail" required />
                     <label for="mail">{$l_email} :</label>
                  </div>
                  <br>
                  <div class="form-floating">
                     <input type="password" class="form-control" id="pw" required name="pw" />
                     <label for="pw">{$l_pw} :</label>
                  </div>
                  <br>
                  <div class="form-floating">
                     <input type="password" class="form-control" id="pw2" required name="pw2" />
                     <label for="pw2">{$l_pwc} :</label>
                  </div>
                  <br>
                  <input type="submit" class="btn btn-primary btn-lg" name="register" value="{$l_letsgo}!" />
                  </form>
               </div>
            {/if}
         </div>
      </div>
   </div>
</body>