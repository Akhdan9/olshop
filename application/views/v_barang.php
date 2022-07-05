<div class="block-header">
<h1>Barang</h1>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-6">
                                    <h2>Barang</h2>
                                
                                </div>
                                <div class="col-xs-12 col-sm-6 align-right">
                                <br> <a href="#tambah"class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span>  Tambah</a>
                                </div>
                            </div>
                        <div class="body">
                        <div class="row">
                            <table class ="table table-hover table-striped">
                                <tr>
                                <th>NO </th><th>ID</th><th>Nama Barang</th><th>Harga</th><th>Stok</th><th>Nama kategori</th><th>Gambar</th><th colspan="2">Aksi</th>
                                </tr>
                                
                                <?php 
                                $no=0;
                                foreach ($data_barang as $dt_brg) {
                                    $no++;
                                    echo '<tr>
                                            <td>'.$no.'</td>
                                            <td>'.$dt_brg->id_barang.'</td>
                                            <td>'.$dt_brg->nama_barang.'</td>
                                            <td>'.$dt_brg->harga.'</td>
                                            <td>'.$dt_brg->stok.'</td>
                                            <td>'.$dt_brg->nama_kategori.'</td>
                                            <td><img src='.base_url("assets/gambar/$dt_brg->gambar").' width="120" height="100"</td>
                                            <td><a href="#update_barang" class="btn btn-warning" data-toggle="modal" onclick="tm_detail('.$dt_brg->id_barang.')">Update</a>
                                            <a href ='.base_url('index.php/barang/hapus_barang/'.$dt_brg->id_barang).' class="btn btn-success" onclick="return confirm(\'Anda yakin\')">Delete</a></td>
                                          </tr>';
                                }
                                ?>                              
                            </table>

                            <?php if ($this->session->flashdata('pesan')!=null): ?>
                            
                        
                           <div class="alert alert-danger"><?= $this->session->flashdata('pesan');?></div> 
                            <?php endif ?>
                            
                            </div>
                        </div>
                     </div>
 </div>

 <div class="modal fade" id="tambah">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Tambah Barang</h4>
      </div>
      <div class="modal-body">
        <form action="<?=base_url('index.php/barang/simpan_barang')?>" method="post" enctype="multipart/form-data">
          Nama Barang
        <input type="text" name="nama_barang" class="form-control"><br>
          Harga
        <input type="text" name="harga" class="form-control"><br>
          Stok
        <input type="text" name="stok" class="form-control"><br>
        Id kategori
        <select name="id_kategori" class="form-control">
        <?php
        foreach ($data_kategori as $kat) {
            echo"<option value='".$kat->id_kategori."'>".$kat->nama_kategori."</option>";
        }
        ?>
        </select>
        <br>
        Upload Gambar
        <input type="file" name="gambar" class="form-control">
          <input type="submit" name="simpan" value="Simpan" class="btn btn-success">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="update_barang">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Update Barang</h4>
      </div>
      <div class="modal-body">
        <form action="<?=base_url('index.php/barang/update_barang')?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_barang" id="id_barang">
          Nama Barang
        <input id="nama_barang" type="text" name="nama_barang" class="form-control"><br>
          Harga
        <input id="harga" type="text" name="harga" class="form-control"><br>
          Stok
        <input id="stok" type="text" name="stok" class="form-control"><br>
        Id kategori
        <select id="id_kategori" name="id_kategori" class="form-control">
        <?php
        foreach ($data_kategori as $kat) {
            echo"<option value='".$kat->id_kategori."'>".$kat->nama_kategori."</option>";
        }
        ?>
        </select>
        <br>
        Upload Gambar
        <input type="file" name="gambar" class="form-control">
          <input type="submit" name="simpan" value="Simpan" class="btn btn-success">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script>

    function tm_detail(id_brng){
        $.getJSON("<?=base_url()?>index.php/barang/get_detail_barang/" + id_brng,function(data)
        {
            $("#id_barang").val(data['id_barang']);
            $("#nama_barang").val(data['nama_barang']);
            $("#harga").val(data['harga']);
            $("#stok").val(data['stok']);
            $("#id_kategori").val(data['id_kategori']);
        });
    }

</script>