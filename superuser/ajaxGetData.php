<script type="text/javascript">
  $(document).ready(function() {
    $('#kantor').on('change', function() {
      var idKantor = $(this).val();
      if (idKantor) {
        $.ajax({
          type: 'POST',
          url:  'ajaxData.php',
          data: 'id_kantor='+idKantor,
          success:function(html) {
            $('#gedung').html(html);
            $('#lantai').html('<option value="">Pilih Gedung Dahulu</option>')
          }
        })
      }
    });

    $('#gedung').on('change', function() {
      var idGedung = $(this).val();
      if (idGedung) {
        $.ajax({
          type: 'POST',
          url:  'ajaxData.php',
          data: 'id_gedung='+idGedung,
          success:function(html) {
            $('#lantai').html(html);
            $('#ruangan').html('<option value="">Pilih Lantai Dahulu</option>')
          }
        })
      }
    });

    $('#lantai').on('change', function() {
      var idLantai = $(this).val();
      if (idLantai) {
        $.ajax({
          type: 'POST',
          url:  'ajaxData.php',
          data: 'id_lantai='+idLantai,
          success:function(html) {
            $('#ruangan').html(html);
          }
        })
      }
    });
  })
</script>

<script type="text/javascript">
  $(document).ready(function() {
    $('#kantor1').on('change', function() {
      var idKantor = $(this).val();
      if (idKantor) {
        $.ajax({
          type: 'POST',
          url:  'ajaxData.php',
          data: 'id_kantor='+idKantor,
          success:function(html) {
            $('#gedung1').html(html);
            $('#lantai1').html('<option value="">Pilih Gedung Dahulu</option>')
          }
        })
      }
    });

    $('#gedung1').on('change', function() {
      var idGedung = $(this).val();
      if (idGedung) {
        $.ajax({
          type: 'POST',
          url:  'ajaxData.php',
          data: 'id_gedung='+idGedung,
          success:function(html) {
            $('#lantai1').html(html);
            $('#ruangan1').html('<option value="">Pilih Lantai Dahulu</option>')
          }
        })
      }
    });

    $('#lantai1').on('change', function() {
      var idLantai = $(this).val();
      if (idLantai) {
        $.ajax({
          type: 'POST',
          url:  'ajaxData.php',
          data: 'id_lantai='+idLantai,
          success:function(html) {
            $('#ruangan1').html(html);
          }
        })
      }
    });
  })
</script>
