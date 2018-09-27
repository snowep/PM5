<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Daftar PC</h3>
  </div>
  <div class="box-body">
    <div class="row">
      <div class="card-columns">
    <?php
        while ($row = $sqlPc->fetch()) {
    ?>
        <div class="card mb-3">
          <div class="card-body">
            <h5 class="card-title">
              <?php if ($row['jenis'] == 'pc') { echo strtoupper($row['jenis'])." | ".$row['processor']; } else { echo ucfirst($row['jenis'])." | ".$row['processor']; } ?>
            </h5>
            <p><?php echo $row['ip_address'] ?></p>
            <span data-toggle="modal" data-target="#detailPC<?php echo $row['id_pc'] ?>" >
              <button type="button" class="btn btn-dark btn-sm" data-toggle="tooltip" data-placement="bottom" title="Detail <?php if ($row['jenis'] == 'pc') { echo strtoupper($row['jenis']); } else { echo ucfirst($row['jenis']); } ?>"><i class="fa fa-eye"></i></button>
            </span>
          </div>
        </div>
          <?php
              }
          ?>

        </div>
    </div>
  </div>
  <!-- /.box-header -->
  <!-- ./box-body -->
</div>
