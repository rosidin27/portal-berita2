<?php $galeri = getGaleri(); ?>
<div class="container-color marg75">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="promo-block">
          <center><?= $arr_btn[10][0] ?></center>
          <div id="<?= $field[10] ?>" class="promo-text"><?= $arr_btn[10][1] ?><?= $header['header_d1'] ?></div>
          <div class="center-line"></div>
        </div>
        <div id="loading_header_d2"></div>
        <div id="<?= $field[11] ?>" class="promo-paragraph"><?= $arr_btn[11][1] ?><?= $header['header_d2'] ?></div>
      </div>
    </div>
  </div>
  <div class="container marg50">
    <div><h3><?= $arr_btn[11][2] ?></h3>
      <div class="cbp-l-grid-projects" id="grid-container">
        <ul>
          <?php while($gal = $galeri->fetch(PDO::FETCH_ASSOC)) { ?>
          <li class="cbp-item" style="height: 70%">
            <div class="cbp-item-wrapper">
              <a href="<?php echo $GLOBALS['BASE_URL'].'/img/galeri/'.$gal['foto']; ?>" class="cbp-lightbox" data-title="Paint Drips">
                <div class="portfolio-dankovteam">
                  <div class="portfolio-image post-thumbnail"><img class="fit-view" src="<?php echo $GLOBALS['BASE_URL'].'/img/galeri/'.$gal['foto']; ?>" alt="Paint Drips">
                  </div>
                  <div class="portfolio-hover">
                    <p class="icon-links" style="text-decoration: none;">
                      <center ><strong style="color : white"><?php echo $gal['keterangan']; ?></strong></center>
                    </p>
                  </div>
                </div>
              </a>
            </div>
          </li>
          <?php } ?>
         </ul>
      </div>
    </div>  
  </div>
</div>
<?php 
  function getGaleri(){
    $sql_galeri = "SELECT foto,keterangan FROM galeri ORDER BY id_galeri DESC";
    $galeri = PdoQuery($sql_galeri);

    return $galeri;
  }
?>