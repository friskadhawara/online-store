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
                <h3><i class="fas fa-edit"></i>EDIT DATA BARANG</h3><br>

                <?php foreach($barang as $brg): ?>
                    <form method="post" action="<?php echo base_url().'admin/Databarang/update' ?>" class="user">

                        <input type="hidden" name="id_brg" class="form-control" value="<?php echo $brg->id_brg?>">

                        <div class="for-group">
                            <label>Nama Barang</label>
                            <input type="text" name="nama_brg" class="form-control" value="<?php echo $brg->nama_brg?>">
                        </div> <br>

                        <div class="for-group">
                            <label>Kategori</label>
                            <input type="text" name="kategori" class="form-control" value="<?php echo $brg->kategori?>">
                        </div><br>

                        <div class="for-group">
                            <label>harga</label>
                            <input type="text" name="harga" class="form-control" value="<?php echo $brg->harga?>">
                        </div><br>

                        <div class="for-group">
                            <label>stok</label>
                            <input type="text" name="stok" class="form-control" value="<?php echo $brg->stok?>">
                        </div><br>

                        <div class="for-group">
                            <label>label</label>
                            <input type="text" name="label" class="form-control" value="<?php echo $brg->label?>">
                        </div><br>

                        <div class="for-group">
                            <label>Keterangan</label>
                            <textarea type="text" style="width:600px; height:250px" name="keterangan" class="form-control"><?php echo $brg->keterangan?></textarea><br>
                        </div>

                        <button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>

                    </form>
                <?php endforeach; ?>
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

</html>
