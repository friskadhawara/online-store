<?php $this->load->View("admin/partial/head.php") ?>
<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
            <?php $this->load->View("admin/partial/sidebar.php") ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
            <?php $this->load->View("admin/partial/topbar.php") ?>

                  



            <div class="container-fluid">
                <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambahbarang"><i class="fa fa-plus fa-sm"></i> Tambah Barang </button>
            </div>

            <div class="container-fluid">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Barang</h6>
                        </div>
                <div class="card-body">
                    <div class="table-responsive">
            <table class="table table-bordered dataTable1" id="dataTable1" width="100%" cellspacing="0">
                <thead>
                    <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Kategori</th> 
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Label</th>
                    <th>Keterangan</th>
                    <th colspan="3">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                <?php
                $no=1;
                foreach ($barang as $brg):?>
                     <tr>
                        <td><?php echo $no++;?></td>
                        <td><?php echo $brg->nama_brg;?></td> 
                        <td><?php echo $brg->kategori;?></td> 
                        <td><?php echo $brg->harga;?></td>
                        <td><?php echo $brg->stok;?></td>
                        <td><?php echo $brg->label;?></td>
                        <td><?php echo $brg->keterangan;?></td>
                        <?php 
                        $gambar=str_replace(".", '_', $brg->gambar);
                        ?>
                        <td><div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div></td>
                        <td><?php echo anchor('admin/Databarang/edit/'.$brg->id_brg, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
                        <td><?php echo anchor('admin/Databarang/hapus/'.$brg->id_brg.'/'.$gambar, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>')?></td>
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>
                    </div>
                </div>
            </div>
        </div>





<!-- Modal -->
<div class="modal fade" id="tambahbarang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Input Barang</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url('admin/Databarang/aksi_tambah')?>" method="post" enctype="multipart/form-data">
            
            <div class="form-group">
                <label>Nama Barang</label>
                <input type="text" name="nama_brg" class="form-control">
            </div> 

            <div class="form-group">
                <label>Kategori</label>
                <input type="text" name="kategori" class="form-control">
            </div>

            <div class="form-group">
                <label>Harga</label>
                <input type="text" name="harga" class="form-control">
            </div>

            <div class="form-group">
                <label>Stok</label>
                <input type="text" name="stok" class="form-control">
            </div>

            <div class="form-group">
                <label>Label</label>
                <input type="text" name="label" class="form-control">
            </div>

            <div class="form-group">
                <label>Keterangan</label>  
                <textarea class="form-control" name="keterangan"></textarea> 
            </div>

            <div class="form-group">
                <label>Gambar Produk</label>
                <input type="file" name="gambar" class="form-control">
            </div>

      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah</button>
      </div>
        </form>
    </div>
  </div>
</div>



            

            </div> <!-- End of Main Content -->
            <?php $this->load->View("admin/partial/footer.php") ?>
        </div><!-- End of Content Wrapper -->
    </div><!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <?php $this->load->View("admin/partial/logoutmodal.php") ?>
    <?php $this->load->View("admin/partial/js.php") ?>  
</body>
<script type="text/javascript">
    $(document).ready(function() {
  $('#dataTable1').DataTable();
    });
</script>

</html>
