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
