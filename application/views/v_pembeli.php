<h1>Pembeli</h1>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-6">
                                    <h2>Pembeli</h2>
                                
                                </div>
                                <div class="col-xs-12 col-sm-6 align-right">
                                <br> <a href="#tambah"class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span>  Tambah</a>
                                </div>
                            </div>
                        <div class="body">
                        <div class="row">
                            <table class ="table table-hover table-striped">
                                <tr>
                                <th>NO </th><th>ID</th><th>Nama Pembeli</th><th>alamat</th><th>No Telp</th><th>Username</th><th>Password</th><th colspan="2">Aksi</th>
                                </tr>
                                
                                <?php 
                                $no=0;
                                foreach ($data_pembeli as $dt_pmbl) {
                                    $no++;
                                    echo '<tr>
                                            <td>'.$no.'</td>
                                            <td>'.$dt_pmbl->id_pembeli.'</td>
                                            <td>'.$dt_pmbl->nama_pembeli.'</td>
                                            <td>'.$dt_pmbl->alamat.'</td>
                                            <td>'.$dt_pmbl->no_telp.'</td>
                                            <td>'.$dt_pmbl->username.'</td>
                                            <td>'.$dt_pmbl->password.'</td>
                                            <td><a href="#update_pembeli" class="btn btn-warning" data-toggle="modal" onclick="tm_detail('.$dt_pmbl->id_pembeli.')">Update</a>
                                            <a href ='.base_url('index.php/pembeli/hapus_pembeli/'.$dt_pmbl->id_pembeli).' class="btn btn-success" onclick="return confirm(\'Anda yakin\')">Delete</a></td>
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
        <h4 class="modal-title">Tambah Pembeli</h4>
      </div>
      <div class="modal-body">
        <form action="<?=base_url('index.php/pembeli/simpan_pembeli')?>" method="post">
          Nama pembeli
        <input type="text" name="nama_pembeli" class="form-control"><br>
          Alamat
        <input type="text" name="alamat" class="form-control"><br>
          No telp
        <input type="text" name="no_telp" class="form-control"><br>
        Username
        <input type="text" name="username" class="form-control"><br>
        Password
        <input type="password" name="password" class="form-control"><br>
          <input type="submit" name="simpan" value="Simpan" class="btn btn-success">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="update_pembeli">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Update Pembeli</h4>
      </div>
      <div class="modal-body">
        <form action="<?=base_url('index.php/pembeli/update_pembeli')?>" method="post">
        <input type="hidden" name="id_pembeli" id="id_pembeli">
          Nama Pembeli
        <input id="nama_pembeli" type="text" name="nama_pembeli" class="form-control"><br>
          Alamat
        <input id="alamat" type="text" name="alamat" class="form-control"><br>
        No telp
        <input id="no_telp" type="text" name="no_telp" class="form-control"><br>
        Username
        <input id="username" type="text" name="username" class="form-control"><br>
        Password
        <input id="password" type="text" name="password" class="form-control"><br>
        <br>
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

    function tm_detail(id_pmbl){
        $.getJSON("<?=base_url()?>index.php/pembeli/get_detail_pembeli/" + id_pmbl,function(data)
        {
            $("#id_pembeli").val(data['id_pembeli']);
            $("#nama_pembeli").val(data['nama_pembeli']);
            $("#alamat").val(data['alamat']);
            $("#no_telp").val(data['no_telp']);
            $("#username").val(data['username']);
            $("#password").val(data['password']);
        });
    }

</script>