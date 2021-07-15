<head>
   <title>{$l_login} | {$title}</title>
<main>
   <section>
      <div class="container">
         <div class="row">
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
         <div class="col-md-10 col-lg-8 col-xl-6 mx-auto">
            <div class="p-4 p-sm-5 bg-primary-soft rounded">
               <h2>{$l_login}</h2>
               <!-- Form START -->
               <form method="POST" class="mt-4">
                  <!-- Email -->
                  <div class="mb-3">
                     <label class="form-label" for="login_mail">{$l_email}</label>
                     <input type="email" class="form-control" name="login_mail" id="login_mail" placeholder="{$l_email}" required>
                  </div>
                  <!-- Password -->
                  <div class="mb-3">
                     <label class="form-label" for="login_pw">{$l_pw}</label>
                     <input type="password" class="form-control" name="login_pw" id="login_pw" placeholder="*********" required>
                  </div>
                  <!-- Checkbox -->
                  <div class="mb-3 form-check">
                     <input type="checkbox" class="form-check-input" id="rememberme" name="rememberme">
                     <label class="form-check-label" for="rememberme">{$l_rememberme}</label>
                  </div>
                  <!-- Button -->
                  <div class="row align-items-center">
                     <div class="col-sm-4">
                        <button type="submit" name="login" class="btn btn-success">{$l_login}</button>
                     </div>
                     <div class="col-sm-8 text-sm-end">
                        <span><a href="{$link}/register"><u>{$l_dontaccount}</u></a></span>
                     </div>
                  </div>
               </form>
               <!-- Form END -->
            </div>
         </div>
      </div>
   </section>
</main>