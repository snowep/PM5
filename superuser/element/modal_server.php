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
                <label>Pilih Kantor</label>
                <?php
                  $sql = $db->query("SELECT * FROM kantor");
                  $count = $sql->rowCount();
                ?>
                <select class="form-control" id="kantor1" name="kantor">
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
                <select class="form-control" id="gedung1" name="gedung">
                  <option value="">Pilih Kantor Dahulu</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="form-group">
                <label>Pilih Lantai</label>
                <select class="form-control" id="lantai1" name="lantai">
                  <option value="">Pilih Gedung Dahulu</option>
                </select>
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label>Pilih Ruangan</label>
                <select class="form-control" id="ruangan1" name="ruangan">
                  <option value="">Pilih Lantai Dahulu</option>
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
