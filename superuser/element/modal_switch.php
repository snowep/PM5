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
