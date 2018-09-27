<div class="modal fade" id="tambahServer" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah Server</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden>&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form action="process/tambah_server.php" method="post">
          <div class="row">
            <div class="col">
              <div class="form-group">
                <label>Pilih Gedung</label>
                <?php
                  $sql = $db->query("SELECT * FROM gedung WHERE id_kantor = '".$_SESSION['id_kantor']."'");
                  $count = $sql->rowCount();
                ?>
                <select class="form-control" id="gedung1" name="gedung">
                  <option value="">Pilih Gedung</option>
                  <?php
                    if ($count > 0) {
                      while ($row = $sql->fetch()) {
                        echo '<option value="'.$row['id_gedung'].'">'.$row['nama_gedung'].'</option>';
                      }
                    } else {
                      echo '<option value="">Belum ada Data Gedung</option>';
                    }
                  ?>
                </select>
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label>Pilih Lantai</label>
                <select class="form-control" id="lantai1" name="lantai">
                  <option value="">Pilih Lantai Dahulu</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="form-group">
                <label>Pilih Ruangan</label>
                <select class="form-control" id="ruangan1" name="ruangan">
                  <option value="">Pilih Ruangan Dahulu</option>
                </select>
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
                <label>Sistem Operasi</label>
                <input type="text" class="form-control" name="sistem_operasi" placeholder="Windows 10">
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
                    <select class="input-group-text" name="size">
                      <option value="GB">GB</option>
                      <option value="TB">TB</option>
                    </select>
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
                <input type="text" class="form-control" placeholder="2018" aria-label="TAHUN" name="tahun" aria-describedby="tahun_addon">
              </div>
            </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <label>Processor</label>
                  <input type="text" class="form-control" name="processor" placeholder="Intel Xeon">
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <label>Tipe Server</label>
                  <input type="text" class="form-control" name="tipe_server" placeholder="X3100 M4">
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <label>Merek</label>
                  <input type="text" class="form-control" name="merek" placeholder="IBM">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <label>Fungsi Server</label>
                  <input type="text" class="form-control" name="fungsi_server" placeholder="Aplikasi GIS">
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
</div>
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
<?php }
$sql = $db->query("SELECT * FROM server");
while ($row = $sql->fetch()) {
?>
<div class="modal fade" id="editServer<?php echo $row['id_server'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Server [<b><?php echo $row['merk'] ?> - <?php echo $row['tipe_server'] ?></b>] | <small><?php echo $row['fungsi_server'] ?></small> </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden>&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form action="process/update_server.php" method="post">
          <table class="table">
            <input type="text" name="id_server" value="<?php echo $row['id_server'] ?>" hidden>
            <tbody>
              <tr>
                <td>Fungsi Server:</td>
                <td>
                  <div class="form-group">
                    <input class="form-control" type="text" name="fungsi" value="<?php echo $row['fungsi_server'] ?>">
                  </div>
                </td>
              </tr>
              <tr>
                <td>Sistem Operasi:</td>
                <td>
                  <div class="form-group">
                    <input class="form-control" type="text" name="os" value="<?php echo $row['sistem_operasi'] ?>">
                  </div>
                </td>
              </tr>
              <tr>
                <td>IP Address:</td>
                <td>
                  <div class="form-group">
                    <input class="form-control" type="text" name="ip" value="<?php echo $row['ip_address'] ?>">
                    <small>Gunakan titik sebagai pemisah. Ex: 192.168.1.1</small>
                  </div>
                </td>
              </tr>
              <tr>
                <td>MAC Address:</td>
                <td>
                  <div class="form-group">
                    <input class="form-control" type="text" name="mac" value="<?php echo $row['mac_address'] ?>">
                  </div>
                </td>
              </tr>
              <tr>
                <td>Serial Number:</td>
                <td>
                  <div class="form-group">
                    <input class="form-control" type="text" name="sn" value="<?php echo $row['serial_number'] ?>">
                  </div>
                </td>
              </tr>
              <tr>
                <td>Kapasitas HDD:</td>
                <td>
                  <div class="form-group">
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" value="<?php $qwe = explode(" ",$row['hard_disk']); echo $qwe[0] ?>" aria-label="HDD" name="hdd" aria-describedby="hdd_addon">
                      <div class="input-group-append">
                        <div class="input-group-append">
                          <select class="input-group-text" name="size">
                            <?php
                              $eqw = explode(" ",$row['hard_disk']);
                              if ($eqw[1] == 'TB') {
                            ?>
                            <option value="TB">TB</option>
                            <option value="GB">GB</option>
                            <?php
                          } else {
                            ?>
                            <option value="GB">GB</option>
                            <option value="TB">TB</option>
                            <?php
                          }
                            ?>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Ukuran RAM:</td>
                <td>
                  <div class="form-group">
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" value="<?php echo $row['ram'] ?>" aria-label="RAM" name="ram" aria-describedby="ram_addon">
                      <div class="input-group-append">
                        <span class="input-group-text" id="ram_addon">GB</span>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Processor yang digunakan:</td>
                <td>
                  <div class="form-group">
                    <input class="form-control" type="text" name="processor" value="<?php echo $row['cpu_processor'] ?>">
                  </div>
                </td>
              </tr>
              <tr>
                <td>Tahun:</td>
                <td>
                  <div class="form-group">
                    <input class="form-control" type="text" name="tahun" value="<?php echo $row['tahun'] ?>">
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
<?php }
$sql = $db->query("SELECT * FROM server");
while ($row = $sql->fetch()) {
?>
<div class="modal fade" id="hapusServer<?php echo $row['id_server'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Hapus Server <?php echo $row['merk'] ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden>&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <p style="font-weight:400">Anda yakin menghapus Server ini? Server ini sedang menjalankan <i><?php echo $row['fungsi_server'] ?>.</i></p>
      </div>

      <div class="modal-footer">
        <a href="process/hapus_server.php?id_server=<?php echo $row['id_server'] ?>" class="btn btn-danger btn-sm">Hapus</a>
      </div>
    </div>
  </div>
</div>
<?php } ?>
