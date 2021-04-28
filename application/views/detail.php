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
          <h2>Detail Produk</h2>
          <ol>
            <li><a href="<?php echo base_url()?>">Home</a></li>
            <li>Detile Produk</li>
          </ol>
        </div>
      </div>
    </section><!-- End Breadcrumbs -->




        <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container" data-aos="fade-up">

        <?php foreach($barang as $brg):?>

        <div class="row">

          <div class="image col-lg-6" style='background-image: url("<?php echo base_url(). 'asset/img/upload/'.$brg->gambar ?>");' data-aos="fade-right">
            
          </div>

          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
            
            <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
              <i class="bx bx-cube-alt"></i>
              <h4>Nama Produk</h4>
              <p><strong><?php echo $brg->nama_brg?></p>
            </div>
            <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
              <i class="bx bx-images"></i>
              <h4>Kategori</h4>
              <p><strong><?php echo $brg->kategori?></p>
            </div>
            <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
              <i class="icofont-stock-mobile"></i>
              <h4>Stok</h4>
              <p><strong><?php echo $brg->stok?></p>
            </div><hr>
            <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
              <i class="icofont-search-stock"></i>
              <h4>Harga</h4>
              <p><strong><?php echo "Rp. " .number_format($brg->harga,0,',','.')?></p>
            </div>
            <br><hr>

            <a href="<?php echo base_url('Dashboard/tambah_ke_keranjang/'.$brg->id_brg)?>" class="get-started-btn scrollto text-dark">Tambah ke Keranjang</a>
            <a href="<?php echo base_url('Dashboard/index')?>" class="get-started-btn scrollto text-dark btn-danger">Kembali</a>
          </div>
        </div>
      <?php endforeach; ?>

      </div>
    </section><!-- End Features Section -->

  







  </main><!-- End #main -->
<?php $this->load->View("user_partial/footer.php") ?>
</body>
<?php $this->load->View("user_partial/js.php") ?>
</html>