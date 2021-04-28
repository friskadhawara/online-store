<?php $this->load->View("user_partial/head.php") ?>
<body> 
  <?php $this->load->View("user_partial/header.php") ?>
  <main id="main"> 
<!-- ======= BG Header ======= -->
    <section id="bgtop" class="cta">
      <div class="container" data-aos="zoom-in">
      </div><br><br>
    </section>





     <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Pembayaran</h2>
          <ol>
            <li><a href="<?php echo base_url()?>">Home</a></li>
            <li>Checkout</li>
          </ol>
        </div>
      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">

        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-8">
            <div class="btn btn-sm btn-success">
              <?php
              $grand_total = 0;
              if ($keranjang= $this->cart->contents()) {
                foreach ($keranjang as $item)
                {
                  $grand_total=$grand_total+$item['subtotal'];
                }
                echo "<h4>Total Belanja Anda: Rp. " .number_format($grand_total,0,',','.');
              }
              ?>
            </div><br><br>
            <h3>Input Alamat Pengiriman dan Pembayaran</h3>
            <form method="post" action="<?php echo base_url('Dashboard/proses_pesanan')?>">
              <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" name="nama" placeholder="Nama Lengkap Anda">
              </div>
              <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat" placeholder="Alamat Lengkap Anda">
              </div>
              <div class="form-group">
                <label>No Telepon</label>
                <input type="text" name="no_telp" placeholder="Nomor Telepon Anda">
              </div>
              <div class="form-group">
                <label>Pilih Provinsi</label>
                <select class="form-control" id="provinsi">
                   <option>Select Provinsi</option>
                   <?php 
                    // echo var_export(current($provinsi),true);

                   foreach($province->rajaongkir->results as $p){?>
                    <option value="<?php $p->province_id?>"><?php echo $p?></option>
                   <?php } ?>
                   
                </select>
              </div>
                            
            </form>
<?php
 var_dump ($province);
                      ?>

          </div>
          
          <div class="col-md-2"></div>
        </div>
        
      </div>
    </section>

  







  </main><!-- End #main -->
<?php $this->load->View("user_partial/footer.php") ?>
</body>
<?php $this->load->View("user_partial/js.php") ?>
</html>