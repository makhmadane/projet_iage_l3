
<div class="modal fade" id="ajoutProfil" tabindex="-1">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">S'INSCRIRE SUR LA PLATEFORME</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" >
                            <label for="">Nom</label>
                            <input type="text" name="nom" class="form-control">

                            <label for="">Prenom</label>
                            <input type="text" name="prenom" class="form-control">

                            <label for="">Login</label>
                            <input type="text" name="login" class="form-control">
                            
                            
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control">

                            

                            <div class="modal-footer">
                                
                                <button type="submit" name="ajoutUser" class="btn btn-primary">Se connecter </button>
                            </div>
                        </form>
                    </div>
                
                  </div>
                </div>
              </div><!-- End Basic Modal-->

</div>



<div class="container">

<section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

        <div class="d-flex justify-content-center py-4">
          <a href="index.html" class="logo d-flex align-items-center w-auto">
            <img src="assets/img/logo.png" alt="">
            <span class="d-none d-lg-block">GESTION IAGE</span>
          </a>
        </div><!-- End Logo -->

        <div class="card mb-3">

          <div class="card-body">

            <div class="pt-4 pb-2">
              <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
              <p class="text-center small">Enter your username & password to login</p>
            </div>

            <form class="row g-3 needs-validation" novalidate  method="POST">

            <div <?php echo isset($error)? "": "hidden"?>  class="row alert alert-danger">
                        <?php echo $error ?>
             </div>

              <div class="col-12">
                <label for="yourUsername" class="form-label">Username</label>
                <div class="input-group has-validation">
                  <span class="input-group-text" id="inputGroupPrepend">@</span>
                  <input type="text" name="username" class="form-control" id="yourUsername" required>
                  <div class="invalid-feedback">Please enter your username.</div>
                </div>
              </div>

              <div class="col-12">
                <label for="yourPassword" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="yourPassword" required>
                <div class="invalid-feedback">Please enter your password!</div>
              </div>

         
                

              <div class="col-12">
                <button class="btn btn-primary w-100" type="submit" name="login">Login</button>
              </div>
              <div class="col-12">
                <p class="small mb-0"> <a href="#" data-bs-toggle="modal" data-bs-target="#ajoutProfil">S'inscrire sur la plateforme</a></p>
              </div>
            </form>

          </div>
        </div>

        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
          Designed by <a href="https://bootstrapmade.com/">L3IAGE KM</a>
        </div>

      </div>
    </div>
  </div>

</section>

</div>