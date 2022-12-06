<div class="container-fluid">
    <div class="row text-center">

        <?php foreach ($kamar as $kmr) : ?>

            <div class="card" style="width: 18rem;">
              <img src="..." class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?php echo $kmr->id_tipe ?></h5>
                <small><?php echo $kmr->status_kamar ?></small><br>
                <a href="#" class="btn btn-primary">Book Now</a>
                <a href="#" class="btn btn-success">Detail</a>
            </div>
        </div>

    <?php endforeach; ?>
</div>
</div>