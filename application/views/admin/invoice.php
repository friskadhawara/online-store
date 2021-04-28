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
                   <h4>Invoice Pemesanan Produk</h4>

                   <table class="table table-bordered table-hover table-stripped">
                       <tr>
                           <th>Id Invoice</th>
                           <th>Nama Pemesan</th>
                           <th>Alamat Pengiriman</th>
                           <th>Tanggal Pemesanan</th>
                           <th>Batas Pembayaran</th>
                           <th>Aksi</th>
                       </tr>
                       <?php foreach ($invoice as $inv) :?>
                        <tr>
                            <td><?php echo $inv->id?></td>
                            <td><?php echo $inv->nama?></td>
                            <td><?php echo $inv->alamat?></td>
                            <td><?php echo $inv->tgl_pesan?></td>
                            <td><?php echo $inv->batas_bayar?></td>
                            <td><?php echo anchor('admin/Invoice/detail/'.$inv->id,'<div class="btn btn-sm btn-primary">Detail</div>')?></td>
                        </tr>
                       <?php endforeach;?>
                   </table>
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