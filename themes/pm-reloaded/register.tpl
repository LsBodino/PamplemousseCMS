<head>
   <title>{$l_register} | {$title}</title>
</head>
<main>
   <section>
      <div class="container">
         <div class="row">
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
               footer: '<a href="{$link}/login" class="btn btn-primary">{$l_ok}</a>',
               allowOutsideClick: false,
               allowEscapeKey: false
               })
               </script>
            {/if}
            <div class="col-md-10 col-lg-8 col-xl-6 mx-auto">
               <div class="bg-primary-soft rounded p-4 p-sm-5">
                  <h2>{$l_register}</h2>
                  <!-- Form START -->
                  <form class="mt-4" method="POST">
                     <!-- Username -->
                     <div class="mb-3">
                        <label class="form-label" for="register_username">{$l_username}</label>
                        <input type="text" class="form-control" id="register_username" name="register_username" placeholder="{$l_username}" required>
                     </div>
                     <!-- Email -->
                     <div class="mb-3">
                        <label class="form-label" for="register_mail">{$l_email}</label>
                        <input type="email" class="form-control" id="register_mail" name="register_mail" placeholder="{$l_email}" required>
                     </div>
                     <!-- Password -->
                     <div class="mb-3">
                        <label class="form-label" for="register_pw">{$l_pw}</label>
                        <input type="password" class="form-control" id="register_pw" name="register_pw" placeholder="*********" required>
                     </div>
                     <!-- Password -->
                     <div class="mb-3">
                        <label class="form-label" for="register_pwc">{$l_pwc}</label>
                        <input type="password" class="form-control" id="register_pwc" name="register_pwc" placeholder="*********" required>
                     </div>
                     <!-- Button -->
                     <div class="row align-items-center">
                        <div class="col-sm-4">
                           <button type="submit" name="register" class="btn btn-success">{$l_letsgo}</button>
                        </div>
                        <div class="col-sm-8 text-sm-end">
                           <span><a href="{$link}/login"><u>{$l_haveaccount}</u></a></span>
                        </div>
                     </div>
                  </form>
                  <!-- Form END -->
               </div>
            </div>
         {/if}
         </div>
      </div>
   </section>
</main>