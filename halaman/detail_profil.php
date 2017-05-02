<?php
  $profil = getProfil();
  $des_profil = $profil['detail_profil'];
?>
<div class="container marg75">
  <div class="row">
    <div class="col-lg-12">
      <div class="dankovteam-shortcode-promo-block">
        <div class="promo-block">
          <div class="promo-text">Profil Perusahaan</div>
            <div class="center-line"></div>
            <div class="promo-paragraph">We are big company</div>
          </div>
        </div>
        <div class="cl-blog-naz">
        <div class="cl-blog-line" style="margin-top: 5px; margin-bottom: 15px;"></div>
        <img class="col-md-8 col-sm-12" src="<?php echo "$GLOBALS[BASE_URL]/img/profil/".$profil['foto_profil']; ?>">
        <p>
        <?php echo $des_profil; ?>
        </p> 
      </div>
      <div class="cl-blog-line" style="margin-top: 0px;"></div>
    </div>        
  </div>
</div>
<?php
  function getProfil(){
    $sql_profil = "SELECT *FROM profil ORDER BY id_profil DESC LIMIT 1";
    $profil = PdoSelect($sql_profil);

    return $profil;
  }

?>