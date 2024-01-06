
<div class="modal fade" id="ajoutProfil" tabindex="-1">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Ajout Demande</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" >

                            <label for="">Image</label>
                            <input type="file" name="image" class="form-control">

                            <label for="">Libelle</label>
                            <input type="text" name="libelle" class="form-control">

                            <label for="">Salaire</label>
                            <input type="text" name="salaire" class="form-control">

                            <label for="">Description</label>
                            <textarea name="description" class="form-control" cols="10" rows="5"></textarea>

                            

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" name="ajoutOffre" class="btn btn-primary">Save </button>
                            </div>
                        </form>
                    </div>
                
                  </div>
                </div>
              </div><!-- End Basic Modal-->

</div>


<div class="card">
  <div class="card-header">
    Page Demande
  </div>
  <div class="card-body">
        <button class="btn btn-primary mt-5 float-end" data-bs-toggle="modal" data-bs-target="#ajoutProfil">Ajouter</button>
        <table id="datatablesSimple" class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Libelle</th>
                    <th scope="col">Description</th>
                    <th scope="col">Montant</th>
                   
                    <th scope="col">Action(s)</th>
                    </tr>
                </thead>
                <tbody>

                <?php foreach ($profils as  $p) { ?>
                   <tr>
                        <td> <?= $p[0]; ?> </td>
                        <td> <?= $p[1]; ?> </td>
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