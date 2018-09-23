<div class="modal fade" id="tambahWifi" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah Wifi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden>&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="process/tambah_wifi.php" method="post">
          <div class="row">
            <div class="col">
              <div class="form-group">
                <label>Pilih Kantor</label>
                <?php
                  $sql = $db->query("SELECT * FROM kantor");
                  $count = $sql->rowCount();
                ?>
                <select class="form-control" id="kantor3" name="kantor">
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
                <select class="form-control" id="gedung3" name="gedung">
                  <option value="">Pilih Kantor Dahulu</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="form-group">
                <label>Pilih Lantai</label>
                <select class="form-control" id="lantai3" name="lantai">
                  <option value="">Pilih Gedung Dahulu</option>
                </select>
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label>Pilih Ruangan</label>
                <select class="form-control" id="ruangan3" name="ruangan">
                  <option value="">Pilih Lantai Dahulu</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="form-group">
                <label>Nama Access Point</label>
                <input type="text" class="form-control" name="nama_ap" placeholder="PLN_Disjaya">
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
                <label>Merek</label>
                <input type="text" class="form-control" name="merek" placeholder="Aruba">
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label>Tipe</label>
                <input type="text" class="form-control" name="tipe" placeholder="105">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="form-group">
                <label>Tahun</label>
                <input type="text" class="form-control" placeholder="2018" aria-label="tahun" name="tahun">
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label>Kapasitas</label>
                <input type="text" class="form-control" name="kapasitas" placeholder="">
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
<?php }
$sql = $db->query("SELECT * FROM wifi");
while ($row = $sql->fetch()) {
?>
<div class="modal fade" id="editWifi<?php echo $row['id_wifi'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Wifi [<b><?php echo $row['merk'] ?> - <?php echo $row['tipe'] ?></b>] | <small><?php echo $row['nama_ap'] ?></small> </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden>&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form action="updatePC.php" method="post">
          <table class="table">
            <tbody>
              <tr>
                <td>Nama Wifi:</td>
                <td><input class="form-control" type="text" name="nama_ap" value="<?php echo $data['nama_ap'] ?>"></td>
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
                <td>Kapasitas:</td>
                <td>
                  <div class="form-group">
                    <input class="form-control" type="text" name="kapasitas" value="<?php echo $row['kapasitas'] ?>">
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
        </form>
      </div>

      <div class="modal-footer">
        <a href="process/update_wifi.php?id_wifi=<?php echo $row['id_wifi'] ?>" class="btn btn-success btn-sm">Update Data</a>
      </div>
    </div>
  </div>
</div>
<?php }
$sql = $db->query("SELECT * FROM wifi");
while ($row = $sql->fetch()) {
?>
<div class="modal fade" id="hapusWifi<?php echo $row['id_wifi'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Hapus Wifi <?php echo $row['merk'] ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden>&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <p style="font-weight:400">Anda yakin menghapus Wifi ini? Wifi ini sedang digunakan menggunakan nama <i><?php echo $row['nama_ap'] ?>.</i></p>
      </div>

      <div class="modal-footer">
        <a href="process/hapus_wifi.php?id_wifi=<?php echo $row['id_wifi'] ?>" class="btn btn-danger btn-sm">Hapus</a>
      </div>
    </div>
  </div>
</div>
<?php } ?>
