<!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

      <!-- <h1 class="logo"><a href="<?php //echo base_url('') ?>">QHomeMart<span>.</span></a></h1> -->
       <a href="<?php echo base_url('') ?>" class="logo"><img src="<?php echo base_url('asset/img/qhomemart-new.png')?>" alt="" class="img-fluid"></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="<?php echo base_url('')?>">Home</a></li>
          <li><a href="<?php echo base_url('Dashboard/index')?>#catalog">Catalog</a></li>
          <li class="drop-down"><a href="<?php echo base_url('Dashboard/index')?>#kategori">Kategori</a>
            <ul>
              <li>
                <a href="#">
                 <i class="icofont-building-alt"></i>
                  <span>Bahan Bangunan</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="icofont-jar"></i>
                  <span>Dapur</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="icofont-picture"></i>
                  <span>Dekorasi Rumah</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="icofont-addons"></i>
                  <span>Elektronik</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="icofont-wall"></i>
                  <span>Floor & Wall</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="icofont-dining-table"></i>
                  <span>Furniture</span>
                </a>
              </li>
              <li><a href="#">Houseware</a></li>
              <li>
                <a href="#">
                  <i class="icofont-paint-brush"></i>
                  <span>Painting</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="icofont-food-basket"></i>
                  <span>Qhomefood</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="icofont-bathtub"></i>
                  <span>Sanitary</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="icofont-fix-tools"></i>
                  <span>Tools & Hardware</span>
                </a>
              </li>
            </ul>
          </li>
          <li><a href="<?php echo base_url('Dashboard/index')?>#team">Our Brand</a></li>
          <li><a href="https://www.bjhomejogja.com/">Blog</a></li>
          <li><a href="<?php echo base_url('Dashboard/index')?>#contact">Contact Us</a></li>
          <li><a href="<?php echo base_url('Dashboard/about')?>">About</a></li>

        </ul>
      </nav><!-- .nav-menu -->

      <div class="navbar">
        <ul class="navbar navbar-nav navbar-right">
          <li>

             <a href="<?php echo base_url('Dashboard/detile_keranjang')?>" class="icofont-shopping-cart">
             <span style="color: #ffc107">
                <?php
                   $keranjang = '' .$this->cart->total_items().' items'
                ?>
                <?php echo $keranjang; ?>
             </span>
           </a> 
          </li>          
        </ul>
        <div class="navbar"></div>
        <ul class="navbar navbar-nav navbar-right">
                <!-- <a href="#about" class="icofont-ui-user"></a> -->
                 <?php if ($this->session->userdata('username')) {  ?> 
                 <li><div>Selamat Datang <?php echo $this->session->userdata('username') ?></div></li>
                 <li> <?php echo anchor('auth/logout'), 'Logout' ?></li>
                 <?php } else { ?> 
                 <li><?php echo anchor('auth/login', 'Login'); ?></li>
                 <?php } ?>
                 </ul>
      </div>

     
    
      <!-- <a href="#about" class="get-started-btn scrollto">Shopping</a> -->
      <div><br><br><br></div>
    </div>

    <div class="container align-items-center">
      <form action="" method="post">
        <input type="text" placeholder="Search..">
      </form>
    </div>
  </header>

  <!-- End Header -->