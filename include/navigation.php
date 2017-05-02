<?php
$active = "class='current-menu-item'";
if(isset($_GET['page'])){
  if($_GET['page']=="home"){
    $home = true;
  }elseif($_GET['page']=="profil"){
    $profil = true;
  }elseif($_GET['page']=="visi"){
    $visi = true;
  }elseif($_GET['page']=="misi"){
    $misi = true;
  }elseif($_GET['page']=="berita"){
    $berita = true;
  }elseif($_GET['page']=="kontak"){
    $kontak = true;
  }else{
    $home = true;
  }
}
?>
<header>
  <div class="page_head">
      <div id="nav-container" class="nav-container" style="height: auto; border-bottom: 1px solid #eee;">
          <nav role="navigation">
              <div class="container">
                  <div class="row">
                      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 pull-left">
                          <div class="logo">
                              <a href="<?php echo $GLOBALS['BASE_URL']; ?>"><img src="<?= $GLOBALS['BASE_URL'] ?>/assets/images/logo.png" alt="Logo"></a>
                          </div>
                      </div>
                      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-6 pull-right">
                        <div class="menu dankovteam-menu-wrapper">
                          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"></button>
                        <div class="navbar-collapse collapse">
                          <div class="menu-main-menu-container">
                            <ul>
                              <li <?php if(isset($home)) echo $active; ?> ><a href="<?php echo $GLOBALS['BASE_URL']; ?>/home">Beranda</a></li>
                              <li <?php if(isset($profil)) echo $active; ?> ><a href="<?php echo $GLOBALS['BASE_URL']; ?>/home#profil">Profil</a></li>
                              <li <?php if(isset($visi)) echo $active; ?> ><a href="<?php echo $GLOBALS['BASE_URL']; ?>/home#visi">Visi</a></li>
                              <li <?php if(isset($misi)) echo $active; ?> ><a href="<?php echo $GLOBALS['BASE_URL']; ?>/home#misi">Misi</a></li>
                              <li <?php if(isset($berita)) echo $active; ?> ><a href="<?php echo $GLOBALS['BASE_URL']; ?>/berita">Berita</a></li>
                              <li <?php if(isset($kontak)) echo $active; ?> ><a href="<?php echo $GLOBALS['BASE_URL']; ?>/home#kontak">Kontak</a></li>
                              <li <?php if(isset($kontak)) echo $active; ?> ><a href="<?php echo $GLOBALS['BASE_URL']; ?>/sitemap">Peta Situs</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                      </div>
                  </div>
              </div>
          </nav>
      </div>
  </div>
</header>