
<div class="modal fade" id="ajoutProfil" tabindex="-1">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Ajout Utilisateur</h5>
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
                            <input type="text" name="password" class="form-control">

                            <label for="">Type</label>
                            <select name="type" id="" class="form-control">
                                <?php foreach ($profils as  $p) { ?>
                                    <option value="<?= $p[0] ?>"><?= $p[1] ?></option>
                                <?php } ?>
                            </select>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" name="ajoutUser" class="btn btn-primary">Save </button>
                            </div>
                        </form>
                    </div>
                
                  </div>
                </div>
              </div><!-- End Basic Modal-->

</div>


<div class="card">
  <div class="card-header">
    Page Utilisateur
  </div>
  <div class="card-body">
        <button class="btn btn-primary mt-5 float-end" data-bs-toggle="modal" data-bs-target="#ajoutProfil">Ajouter</button>
        <table id="datatablesSimple" class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nom</th>
                    <th scope="col">prenom</th>
                    <th scope="col">Login</th>
                    <th scope="col">Type</th>
                   
                    <th scope="col">Action(s)</th>
                    </tr>
                </thead>
                <tbody>

                <?php foreach ($users as  $p) { ?>
                   <tr>
                        <td> <?= $p[0]; ?> </td>
                        <td> <?= $p[1]; ?> </td>
                        <td> <?= $p[2]; ?> </td>
                        <td> <?= $p[3]; ?> </td>
                        <td> <?= $p[4]; ?> </td>
                        <td>
                            <button class="btn btn-outline-primary">Modifier</button>
                            <a class="btn btn-outline-danger"  href="?page=deleteProfil&&id=<?= $p[0]; ?> ">Supprimer</a>
                        </td>
                   </tr>
                <?php } ?>

                   
                </tbody>
        </table>
  </div>
</div>