<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link collapsed" href="<?= base_url('home/dashboard') ?>">
        <i class="bi bi-house" style="font-size: 25px;"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->
 <?php if (session()->get('level')==1){ ?>
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-menu-button-wide" style="font-size: 25px;"></i><span>Data Master</span><i
          class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="<?= base_url('home/siswa') ?>">
            <i class="bi bi-cart-fill" style="font-size: 15px;"></i><span>Siswa</span>
          </a>
        </li>
        <li>
          <a href="<?= base_url('home/user') ?>">
            <i class="ri-creative-commons-by-fill" style="font-size: 15px;"></i><span>User</span>
          </a>
        </li>
        <li>
          <a href="<?= base_url('home/tabelpembayaran') ?>">
            <i class="ri-group-fill" style="font-size: 15px;"></i><span>Pembayaran</span>
          </a>
        </li>
        


      </ul>
    </li><!-- End Data Master Nav -->
    

    
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-journal-text" style="font-size: 25px;"></i><span>Laporan</span><i
          class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="<?= base_url('home/laporanbarang') ?>">
            <i class="bi bi-cart-fill" style="font-size: 15px;"></i><span>Pembayaran</span>
          </a>
        </li>
       

      </ul>
    </li><!-- End Laporan Nav -->
    <?php }
    if(session()->get('level')==2){?>


<li class="nav-item">
      <a class="nav-link collapsed" href="users-profile.html">
        <i class="bi bi-person"></i>
        <span>Pembayaran</span>
      </a>
    </li>
<?php }?>




    <li class="nav-heading">Pages</li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="users-profile.html">
        <i class="bi bi-person"></i>
        <span>Profile</span>
      </a>
    </li><!-- End Profile Page Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="pages-contact.html">
        <i class="bi bi-envelope"></i>
        <span>Contact</span>
      </a>
    </li><!-- End Contact Page Nav -->

  


  </ul>

</aside>

<main id="main" class="main">