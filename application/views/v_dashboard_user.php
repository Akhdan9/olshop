<h2>Selamat Datang BukaTutup</h2>
<div class="col-md-12">
    <div class ="row"><input type="text" id="cari" name="cari" class="form-control" placeholder="Cari disini"></div> <br>
    <div class="row">
    <div id="tampil_barang"></div>
    </div> <!-- end row -->
</div> <!-- end col -->

<div class="modal fade" id="detail_barang">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Detail Barang</h4>
      </div>
      <div class="modal-body">
        <div class="col-md-6">
            <div id="gambar"></div>
        </div>
        <div class="col-md-6">
            <div id="deskripsi"></div>
            <div id="jumlah"></div>
            <br>
            <div id="btn"></div>
            <br>
            <div id="pesan"></div>
        </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script type="text/javascript">
//cari barang
    $("#cari").on('keyup', function(){
        $.getJSON("<?=base_url()?>index.php/get_barang/cari/"+$("#cari").val(),
        function(data){
            var datanya="";
            $.each(data,function(key,dt){
                datanya+=
                '<div class="col-xs-6 col-md-3"><a href="#detail_barang" '+
                'class="thumbnail text-center" data-toggle="modal" onclick="tm_detail('+dt['id_barang']+')" style="text-decoration:none">'+
                '<img style="height:100px" src="<?=base_url('assets/gambar/')?>'+
                dt['gambar']+'" alt="...">'+dt['nama_barang']+'<br>'+dt['harga']+
                '</a>'+
                '</div>';
            });
            $("#tampil_barang").html(datanya);
        });
    });

//menampilkan semua barang
    $.getJSON("<?=base_url()?>index.php/get_barang",
        function(data1){
            var datanya="";
            $.each(data1,function(key,dt){
                datanya+=
                '<div class="col-xs-6 col-md-3"><a href="#detail_barang" '+
                'class="thumbnail text-center" data-toggle="modal" onclick="tm_detail('+dt['id_barang']+')" style="text-decoration:none">'+
                '<img style="height:100px" src="<?=base_url('assets/gambar/')?>'+
                dt['gambar']+'" alt="...">'+dt['nama_barang']+'<br>'+dt['harga']+
                '</a>'+
                '</div>';
            });
            $("#tampil_barang").html(datanya);
        });

//tampilkan detail barang
function tm_detail(id_barang){
    $.getJSON("<?=base_url()?>index.php/get_barang/detail/"+id_barang,function(data){
        $("#gambar").html(
            '<img src="<?=base_url()?>assets/gambar/'+data['gambar']+'" style="width:100%">'
        );

        $("#deskripsi").html(
            '<table class="table table-hover table-striped">'+
            '<tr><td>Nama Barang</td><td>'+data['nama_barang']+'</td></tr>'+
            '<tr><td>Harga Barang</td><td>'+data['harga']+'</td></tr>'+
            '<tr><td>Stok Barang</td><td>'+data['stok']+'</td></tr>'+
            '<tr><td>Stok Barang</td><td>'+data['nama_kategori']+'</td></tr>'+
            '</table>'
        );
        $("#jumlah").html(
            '<input type="number" id="jumlah_item" value="1" class="form-control">'
        );
        $("#btn").html('<button id="beli" onclick="beli('+data['id_barang']+')" class="btn btn-info">Beli</button>' +
        '<a href = "<?=base_url()?>index.php/trans" class="btn btn-danger">Check Out</a>');
    });
}

//menambahkan barang ke keranjang
function beli (id_barang){
    var jumlah=$("#jumlah_item").val();
    $("#pesan").hide();
    $("#pesan").removeClass("alert alert-success");
    $.getJSON("<?=base_url()?>index.php/trans/tambah_cart/"+id_barang+"/"+jumlah, function(hasil){
        
        $("#cart").html(hasil['total_cart']);
        $("#pesan").html("Item anda telah ditambahkan ke cart");
        $("#pesan").addClass('alert alert-success');
        $("#pesan").show('animate');
        setTimeout(function(){
            $("#pesan").hide('fade');
        }, 3000);

    });
}
</script>