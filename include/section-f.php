<?php $queryBerita = getBerita(); ?>
<div class="container marg75">
  <div class="row">
    <div class="col-lg-12">
      <div class="promo-block">
        <center><?= $arr_btn[12][0] ?></center>
        <div id="<?= $field[12] ?>" class="promo-text"><?= $arr_btn[12][1] ?><?= $header['header_e1'] ?></div>
        <div class="center-line"></div>
      </div>
      <?= $arr_btn[13][0] ?>
      <div id="<?= $field[13] ?>" class="promo-paragraph"><?= $arr_btn[13][1] ?><?= $header['header_e2'] ?></div>
    </div>
  </div>
  <div class="row marg50"><h3 style="padding-left: 15px;"><?= $arr_btn[13][2] ?></h3>
    <?php 
      while($berita = $queryBerita->fetch(PDO::FETCH_ASSOC)){
      $desc = "";
      if(strlen($berita['isi']) > 100){
          $desc = substr($berita['isi'], 0,250)."...";
      }else{
          $desc = $berita['isi'];
      }
      $string = strtolower(str_replace(" ", "-", $berita['judul']));
    ?>
    <div class="col-lg-4">
      <div class="blog-main">
        <div class="blog-images">
          <div class="post-thumbnail">
            <div class="single-item"></div>
            <div class="single-action">
              <span><a href="<?= $GLOBALS['BASE_URL'] ?>/berita/<?php echo $string."-".$berita['id_berita']; ?>"><i class="icon-magnifying-glass"></i></a></span>
            </div>
            <img class="fit-view" src="<?= $GLOBALS['BASE_URL'] ?>/img/berita/<?php echo $berita['gambar']; ?>" alt="You fully seems stand inquietude own">
          </div>
        </div>
        <div class="blog-name"><a href="<?= $GLOBALS['BASE_URL'] ?>/berita/<?php echo $string."-".$berita['id_berita']; ?>"><?php echo $berita['judul']; ?></a></div>
        <div class="blog-desc"><?php echo "Posted by ".$berita['username']." ".$berita['tanggal']; ?></div>
      </div>
    </div>
    <?php } ?>
  </div>
  <div class="col-lg-12" style="margin-top: 50px;">
    <div class="button-center"><a href="<?= $GLOBALS['BASE_URL'] ?>/berita" class="btn btn-primary" style="width: 100px;">More</a></div>
  </div>         
</div>
<?php 
function getBerita(){
    $sql = "SELECT *FROM berita ORDER BY id_berita DESC LIMIT 3";
    $query = PdoQuery($sql);

    return $query;
}
?>