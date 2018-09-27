<?php
$sql = $db->query("SELECT * FROM pegawai LEFT JOIN pc ON pegawai.id_pc = pc.id_pc");
while ($row = $sql->fetch()) {
?>
<div class="modal fade" id="detailPegawai<?php echo $row['id_pegawai'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Detail Pegawai</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden>&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <table class="table">
          <tbody>
            <tr>
              <td>Nama Pegawai:</td>
              <td><?php echo $row['nama'] ?></td>
            </tr>
            <tr>
              <td>ID <?php if ($row['jenis'] == 'pc') { echo strtoupper($row['jenis']); } else { echo ucfirst($row['jenis']); } ?> yang digunakan:</td>
              <td><a href="#" data-toggle="modal" data-target="#detailPC<?php echo $row['id_pc'] ?>"><?php echo $row['id_pc'] ?></a></td>
            </tr>
            <tr>
              <td>Jabatan:</td>
              <td><?php echo $row['jabatan'] ?></td>
            </tr>
            <tr>
              <td>Struktural:</td>
              <td><?php echo $row['struktural'] ?></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<?php } ?>
