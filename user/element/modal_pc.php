<?php
$sql = $db->query("SELECT pc.id_pc, pc.jenis, pegawai.nama FROM pc LEFT JOIN pegawai ON pc.id_pc = pegawai.id_pc");
while ($row = $sql->fetch()) {
?>
<div class="modal fade" id="detailPC<?php echo $row['id_pc'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Detail <?php if ($row['jenis'] == 'pc') { echo strtoupper($row['jenis'])." [".$row['id_pc']."]"; } else { echo ucfirst($row['jenis'])." [".$row['id_pc']."]"; } ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden>&times;</span>
        </button>
      </div>
<?php
  $sql2 = $db->query("SELECT * FROM pc INNER JOIN pegawai ON pc.id_pc = pegawai.id_pc WHERE pc.id_pc = '".$row['id_pc']."'");
  $data = $sql2->fetch();
 ?>
      <div class="modal-body">
        <table class="table">
          <tbody>
            <tr>
              <td>Pengguna:</td>
              <td><?php echo $data['nama'] ?></td>
            </tr>
            <tr>
              <td>Sistem Operasi:</td>
              <td><?php echo $data['sistem_operasi'] ?></td>
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
              <td>Serial Number:</td>
              <td><?php echo $data['serial_number'] ?></td>
            </tr>
            <tr>
              <td>Kapasitas HDD:</td>
              <td><?php echo $data['hard_disk'] ?></td>
            </tr>
            <tr>
              <td>Ukuran RAM:</td>
              <td><?php echo $data['ram'] ?> GB</td>
            </tr>
            <tr>
              <td>Processor yang digunakan:</td>
              <td><?php echo $data['processor'] ?></td>
            </tr>
            <tr>
              <td>Tahun:</td>
              <td><?php echo $data['tahun'] ?></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<?php } ?>
