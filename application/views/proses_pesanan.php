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
            <li>Invoice</li>
          </ol>
        </div>
      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">

        <div class="alert alert-success">
        	<p class="text-center align-middle">Selamat, Pesanan anda berhasil</p>
        </div>
        
      </div>
    </section>

  







  </main><!-- End #main -->
<?php $this->load->View("user_partial/footer.php") ?>
</body>
<?php $this->load->View("user_partial/js.php") ?>
</html>