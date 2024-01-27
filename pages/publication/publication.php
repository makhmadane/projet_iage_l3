<div class="row">
    <?php foreach ($offresAct as  $o) { ?>
    <div class="card col-md-3" >
    <div class="card-header">
        <?php echo $o[1] ?>
    </div>
    <div class="card-body">
        <h5 class="card-title"><?php echo $o[3] ?>  frcfa</h5>
        <p class="card-text"> <?php echo $o[2] ?></p>
      
    </div>
    <div class="card-footer">
    <a href="#" class="btn btn-primary">Deposer</a> 
    </div>
    </div>

    <?php }?>
</div>
