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
                   <h4>Detail Pesanan <div class="btn btn-sm btn-success">No. Invoice: <?php echo $invoice->id?></div></h4>

                   <table class="table table-bordered table-hover table-stripped">
                       <tr>
                           <th>No</th>
                           <th>Nama Produk</th>
                           <th>Jumlah Pesanan</th>
                           <th>Harga Satuan</th>
                           <th>Sub-Total</th>
                       </tr>
                       <?php 
                       $total=0;
                       foreach ($pesanan as $psn) :
                        $subtotal=$psn->jumlah * $psn->harga;
                        $total += $subtotal;?>
                        <tr>
                            <td><?php echo $psn->id_brg?></td>
                            <td><?php echo $psn->nama_brg?></td>
                            <td><?php echo $psn->jumlah?></td>
                            <td><?php echo number_format($psn->harga,0,',','.')?></td>
                            <td><?php echo number_format($subtotal,0,',','.')?></td>
                        </tr>
                       <?php endforeach;?>

                       <tr>
                         <td colspan="4" align="right">Grand Total</td>
                         <td align="right">Rp. <?php echo number_format($total,0,',','.')?></td>
                       </tr>
                   </table>
                   <a href="<?php echo base_url('admin/invoice/index')?>"><div class="btn btn-sm btn-primary"> Kembali </div></a>
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