<div class="modal fade" id="tambahSwitch" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah Switch</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden>&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form action="process/tambah_switch.php" method="post">
          <div class="row">
            <div class="col">
              <div class="form-group">
                <label>Pilih Kantor</label>
                <?php
                  $sql = $db->query("SELECT * FROM kantor");
                  $count = $sql->rowCount();
                ?>
                <select class="form-control" id="kantor2" name="kantor">
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
                <select class="form-control" id="gedung2" name="gedung">
                  <option value="">Pilih Kantor Dahulu</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="form-group">
                <label>Pilih Lantai</label>
                <select class="form-control" id="lantai2" name="lantai">
                  <option value="">Pilih Gedung Dahulu</option>
                </select>
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label>Pilih Ruangan</label>
                <select class="form-control" id="ruangan2" name="ruangan">
                  <option value="">Pilih Lantai Dahulu</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="form-group">
                <label>Nama Switch</label>
                <input type="text" class="form-control" name="nama_switch" placeholder="Server Switch">
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label>Tipe Switch</label>
                <input type="text" class="form-control" name="switch_type" placeholder="25100-48">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="form-group">
                <label>MAC Address</label>
                <input type="text" class="form-control" name="mac_address" placeholder="00-E0-4D-B9-5C-47">
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label>IP Address</label>
                <input type="text" class="form-control" name="ip_address" placeholder="192.168.1.1">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col">
              <div class="form-group">
                <label>Merek</label>
                <input type="text" class="form-control" name="merek" placeholder="HP">
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label>Tahun</label>
                <input type="text" class="form-control" placeholder="18" aria-label="tahun" name="tahun" aria-describedby="tahun_addon">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="form-group">
                <label>Jumlah Port</label>
                <input type="text" class="form-control" name="jumlah_port" placeholder="">
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
$sql = $db->query("SELECT * FROM switch");
while ($row = $sql->fetch()) {
?>
  <div class="modal fade" id="detailSwitch<?php echo $row['id_switch'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Detail Switch [<b><?php echo $row['merk'] ?> - <?php echo $row['switch_type'] ?></b>] | <small><?php echo $row['nama_switch'] ?></small> </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden>&times;</span>
          </button>
        </div>
        <?php
          $sql2 = $db->query("SELECT * FROM switch");
          $data = $sql2->fetch();
        ?>
        <div class="modal-body">
          <table class="table">
            <tbody>
              <tr>
                <td>IP Address:</td>
                <td><?php echo $data['ip_address'] ?></td>
              </tr>
              <tr>
                <td>MAC Address:</td>
                <td><?php echo $data['mac_address'] ?></td>
              </tr>
              <tr>
                <td>Jumlah Port:</td>
                <td><?php echo $data['jumlah_port'] ?></td>
              </tr>
              <tr>
                <td>Tahun:</td>
                <td><?php echo $data['tahun'] ?></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="modal-footer">
          <span data-toggle="modal" data-target="#editSwitch<?php echo $row['id_switch'] ?>" >
            <button type="button" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="bottom" title="Edit data Server"><i class="fa fa-edit"></i></button>
          </span>
        </div>
      </div>
    </div>
  </div>
<?php }
$sql = $db->query("SELECT * FROM switch");
while ($row = $sql->fetch()) {
?>
<div class="modal fade" id="editSwitch<?php echo $row['id_switch'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Switch [<b><?php echo $row['merk'] ?> - <?php echo $row['switch_type'] ?></b>] | <small><?php echo $row['nama_switch'] ?></small> </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden>&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form action="process/update_switch.php" method="post">
          <table class="table">
            <tbody>
              <input type="text" name="id_switch" value="<?php echo $row['id_switch'] ?>" hidden>
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
                <td>Jumlah Port:</td>
                <td>
                  <div class="form-group">
                    <input class="form-control" type="text" name="jm_port" value="<?php echo $row['jumlah_port'] ?>">
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
$sql = $db->query("SELECT * FROM switch");
while ($row = $sql->fetch()) {
?>
<div class="modal fade" id="hapusSwitch<?php echo $row['id_switch'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Hapus Switch <?php echo $row['merk'] ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden>&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <p style="font-weight:400">Anda yakin menghapus switch ini? Switch ini digunakan untuk <i><?php echo $row['nama_switch'] ?>.</i></p>
      </div>

      <div class="modal-footer">
        <a href="process/hapus_switch.php?id_switch=<?php echo $row['id_switch'] ?>" class="btn btn-danger btn-sm">Hapus</a>
      </div>
    </div>
  </div>
</div>
<?php } ?>
