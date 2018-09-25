<div class="modal fade" id="tambahPegawai" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah PC</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden>&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form action="process/tambah_pc.php" method="post">
          <div class="row">
            <div class="col">
              <div class="form-group">
                <label>Pilih Kantor</label>
                <?php
                  $sql = $db->query("SELECT * FROM kantor");
                  $count = $sql->rowCount();
                ?>
                <select class="form-control" id="kantor" name="kantor">
                  <option value="">Pilih Kantor</option>
                  <?php
                    if ($count > 0) {
                      while ($row = $sql->fetch()) {
                        echo '<option value="'.$row['id_kantor'].'">'.$row['nama_kantor'].'</option>';
                      }
                    } else {
                      echo '<option value="">Belum ada Data Kantor</option>';
                    }
                  ?>
                </select>
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label>Pilih Gedung</label>
                <select class="form-control" id="gedung" name="gedung">
                  <option value="">Pilih Kantor Dahulu</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="form-group">
                <label>Pilih Lantai</label>
                <select class="form-control" id="lantai" name="lantai">
                  <option value="">Pilih Gedung Dahulu</option>
                </select>
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label>Pilih Ruangan</label>
                <select class="form-control" id="ruangan" name="ruangan">
                  <option value="">Pilih Lantai Dahulu</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="form-group">
                <label>Jenis</label>
                <select class="form-control" id="jenis" name="jenis">
                  <option value="">Pilih Jenis</option>
                  <option value="pc">PC</option>
                  <option value="laptop">Laptop</option>
                </select>
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label>Sistem Operasi</label>
                <input type="text" class="form-control" name="sistem_operasi" placeholder="Windows 10">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="form-group">
                <label>IP Address</label>
                <input type="text" class="form-control" name="ip_address" placeholder="192.168.10.5">
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label>MAC Address</label>
                <input type="text" class="form-control" name="mac_address" placeholder="00-E0-4D-B9-5C-47">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="form-group">
                <label>Serial Number</label>
                <input type="text" class="form-control" name="serial_number" placeholder="SN">
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label>Processor</label>
                <input type="text" class="form-control" name="processor" placeholder="Intel Core i9-8950HK">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="form-group">
                <label>HDD</label>
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="500" aria-label="HDD" name="hdd" aria-describedby="hdd_addon">
                  <div class="input-group-append">
                    <div class="input-group-append">
                      <select class="input-group-text" name="size">
                        <option value="GB">GB</option>
                        <option value="TB">TB</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label>RAM</label>
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="16" aria-label="RAM" name="ram" aria-describedby="ram_addon">
                  <div class="input-group-append">
                    <span class="input-group-text" id="ram_addon">GB</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label>Tahun</label>
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="2018" aria-label="Tahun" name="tahun" aria-describedby="tahun_addon">
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="form-group">
                <label>Keterangan</label>
                <textarea class="form-control" name="ket" rows="3"></textarea>
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
<?php
$sql = $db->query("SELECT pc.id_pc, pc.jenis, pegawai.nama FROM pc LEFT JOIN pegawai ON pc.id_pc = pegawai.id_pc");
while ($row = $sql->fetch()) {
?>
<div class="modal fade" id="hapusPC<?php echo $row['id_pc'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Hapus <?php if ($row['jenis'] == 'pc') { echo strtoupper($row['jenis'])." [".$row['id_pc']."]"; } else { echo ucfirst($row['jenis'])." [".$row['id_pc']."]"; } ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden>&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <p style="font-weight:400">Anda yakin menghapus PC ini? PC ini sedang digunakan oleh <i><?php echo $row['nama'] ?></i></p>
      </div>

      <div class="modal-footer">
        <a href="process/hapus_pc.php?id_pc=<?php echo $row['id_pc'] ?>" class="btn btn-danger btn-sm">Hapus</a>
      </div>
    </div>
  </div>
</div>
<?php }
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
      <div class="modal-footer">
        <span data-toggle="modal" data-target="#editPegawai<?php echo $row['id_pegawai'] ?>" >
          <button type="button" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="bottom" title="Edit data <?php if ($row['jenis'] == 'pc') { echo strtoupper($row['jenis']); } else { echo ucfirst($row['jenis']); } ?>"><i class="fa fa-edit"></i></button>
        </span>
      </div>
    </div>
  </div>
</div>
<?php }
$sql = $db->query("SELECT * FROM pegawai");
while ($row = $sql->fetch()) {
?>
<div class="modal fade" id="editPegawai<?php echo $row['id_pegawai'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Pegawai</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden>&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form action="process/update_pegawai.php" method="post">
          <table class="table">
            <tbody>
              <input type="text" name="id_pegawai" value="<?php echo $row['id_pegawai'] ?>" hidden>
              <tr>
                <td>Nama Pegawai:</td>
                <td>
                  <div class="form-group">
                    <input class="form-control" type="text" name="nama" value="<?php echo $row['nama'] ?>">
                  </div>
                </td>
              </tr>
              <tr>
                <td>Jabatan:</td>
                <td>
                  <div class="form-group">
                    <input class="form-control" type="text" name="jabatan" value="<?php echo $row['jabatan'] ?>">
                  </div>
                </td>
              </tr>
              <tr>
                <td>Struktural:</td>
                <td>
                  <div class="form-group">
                    <select class="form-control" name="struktural">
                      <?php
                        if ($row['struktural'] == '0') {
                      ?>
                      <option value="0">0</option>
                      <option value="1">1</option>
                      <?php
                    } else {
                      ?>
                      <option value="1">1</option>
                      <option value="0">0</option>
                      <?php
                    }
                      ?>
                    </select>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>

          <div class="modal-footer">
            <button type="submit" name="button" class="btn btn-primary float-right">Update Data</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php } ?>
