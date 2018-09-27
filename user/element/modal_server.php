<?php
$sql = $db->query("SELECT * FROM server");
while ($row = $sql->fetch()) {
?>
  <div class="modal fade" id="detailServer<?php echo $row['id_server'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Detail Server [<b><?php echo $row['merk'] ?> - <?php echo $row['tipe_server'] ?></b>] | <small><?php echo $row['fungsi_server'] ?></small> </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden>&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <table class="table">
            <tbody>
              <tr>
                <td>Fungsi Server:</td>
                <td><?php echo $row['fungsi_server'] ?></td>
              </tr>
              <tr>
                <td>Sistem Operasi:</td>
                <td><?php echo $row['sistem_operasi'] ?></td>
              </tr>
              <tr>
                <td>IP Address:</td>
                <td><?php echo $row['ip_address'] ?></td>
              </tr>
              <tr>
                <td>MAC Address:</td>
                <td><?php echo $row['mac_address'] ?></td>
              </tr>
              <tr>
                <td>Serial Number:</td>
                <td><?php echo $row['serial_number'] ?></td>
              </tr>
              <tr>
                <td>Kapasitas HDD:</td>
                <td><?php echo $row['hard_disk'] ?></td>
              </tr>
              <tr>
                <td>Ukuran RAM:</td>
                <td><?php echo $row['ram'] ?> GB</td>
              </tr>
              <tr>
                <td>Processor yang digunakan:</td>
                <td><?php echo $row['cpu_processor'] ?></td>
              </tr>
              <tr>
                <td>Tahun:</td>
                <td><?php echo $row['tahun'] ?></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="modal-footer">
          <span data-toggle="modal" data-target="#editServer<?php echo $row['id_server'] ?>" >
            <button type="button" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="bottom" title="Edit data Server"><i class="fa fa-edit"></i></button>
          </span>
        </div>
      </div>
    </div>
  </div>
<?php } ?>
