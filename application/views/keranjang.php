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
          <h2>Keranjang Belanja</h2>
          <ol>
            <li><a href="<?php echo base_url()?>">Home</a></li>
            <li>Char</li>
          </ol>
        </div>
      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">

        <table class="table table-bordered table-striped table-hover">
          <tr align="center">
            <th>No</th>
            <th>Nama Produk</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Sub Total</th>
          </tr>
          <?php
          $no=1;
          foreach ($this->cart->contents() as $item): ?>

          <tr>
            <td align="center"><?php echo $no++; ?></td>
            <td><?php echo $item['name'] ?></td>
            <td align="center"><?php echo $item['qty'] ?></td>
            <td align="right">Rp. <?php echo number_format($item['price'],0,',','.')  ?></td>
            <td align="right">Rp. <?php echo number_format($item['subtotal'],0,',','.')  ?></td>
          </tr>
          
        <?php endforeach; ?>
          <tr>
            <td colspan="4"></td>
            <td align="right">Rp. <?php echo number_format($this->cart->total(),0,',','.')  ?></td>
          </tr>
        </table>

        <div align="right">
          <a href="<?php echo base_url('Dashboard/hapus_keranjang')?>">
            <div class="btn btn-sm btn-danger">Hapus Keranjang</div>
          </a>
          <a href="<?php echo base_url('Dashboard/index')?>">
            <div class="btn btn-sm btn-primary">Lanjut Belanja</div>
          </a>
          <a href="<?php echo base_url('Dashboard/pembayaran')?>">
            <div class="btn btn-sm btn-success">Checkout</div>
          </a>
        </div>
      </div>
    </section>

  







  </main><!-- End #main -->
<?php $this->load->View("user_partial/footer.php") ?>
</body>
<?php $this->load->View("user_partial/js.php") ?>
</html>