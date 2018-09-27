<?php
$sql = $db->query("SELECT * FROM wifi");
while ($row = $sql->fetch()) {
?>
  <div class="modal fade" id="detailWifi<?php echo $row['id_wifi'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Detail Wifi [<b><?php echo $row['merk'] ?> - <?php echo $row['tipe'] ?></b>] | <small><?php echo $row['nama_ap'] ?></small> </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden>&times;</span>
          </button>
        </div>
        <?php
          $sql2 = $db->query("SELECT * FROM wifi");
          $data = $sql2->fetch();
        ?>
        <div class="modal-body">
          <table class="table">
            <tbody>
              <tr>
                <td>Nama Wifi:</td>
                <td><?php echo $data['nama_ap'] ?></td>
              </tr>
              <tr>
                <td>IP Address:</td>
                <td><?php echo $data['ip_address'] ?></td>
              </tr>
              <tr>
                <td>MAC Address:</td>
                <td><?php echo $data['mac_address'] ?></td>
              </tr>
              <tr>
                <td>Kapasitas:</td>
                <td><?php echo $data['kapasitas'] ?></td>
              </tr>
              <tr>
                <td>Tahun:</td>
                <td><?php echo $data['tahun'] ?></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="modal-footer">
          <span data-toggle="modal" data-target="#editWifi<?php echo $row['id_wifi'] ?>" >
            <button type="button" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="bottom" title="Edit data Wifi"><i class="fa fa-edit"></i></button>
          </span>
        </div>
      </div>
    </div>
  </div>
<?php } ?>
