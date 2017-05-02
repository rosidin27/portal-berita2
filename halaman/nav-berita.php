<?php 
  $queryKat = getKategori(); 
  $header = getHeader("data");
  $qField = getHeader("field");
  $arr_btn = array(array());
  $field = array_keys($qField->fetch(PDO::FETCH_ASSOC));


  if(isAdmin()){
    for($i = 1; $i < count($field); $i++){
      $arr_btn[$i][0] = '<div id="loading_'.$field[$i].'"></div>';
      $arr_btn[$i][1] = '<button class="edit" onclick="header(\''.$field[$i].'\',\'menu_b\',\''.$GLOBALS['BASE_URL'].'\');"><i class="icon-pencil"></i></button>';
    }
  }else{
    for($i = 1; $i < count($field); $i++){
      $arr_btn[$i][0] = "";
      $arr_btn[$i][1] = "";
    }
  }
  
  $isset = false;
  if(isset($level[1])){
    if($level[1]=="halaman" || $level[1]=="kategori"){
      $title = $header['header_i1'];
    }else{
      $title = $header['header_i2'];
      $isset = true; 
    }
  }else{
    $title = $header['header_i1'];
  }
?>
<div class="col-lg-3">
  <?= $arr_btn[1][0] ?>
  <div id="<?= $field[1] ?>" class="promo-text-blog"><?= $arr_btn[1][1] ?><strong><?= $header['header_f1']; ?></strong></div>
  <form action="" method="POST">
    <input class="blog-search" type="text" placeholder="Type your search...">
  </form>
  <?= $arr_btn[2][0] ?>
  <div id="<?= $field[2] ?>" class="promo-text-blog" style="padding-bottom: 0px;"><?= $arr_btn[2][1] ?><strong><?= $header['header_g1']; ?></strong></div>
  <p class="text-widget">
    <?= $arr_btn[3][0] ?>
    <div id="<?= $field[3] ?>"><?= $arr_btn[3][1] ?><?= $header['header_g2']; ?></div>
  </p>
  <?= $arr_btn[4][0] ?>
  <div id="<?= $field[4] ?>" class="promo-text-blog"><?= $arr_btn[4][1] ?><strong><?= $header['header_h1']; ?></strong></div>
  <ul class="blog-category">
    <?php while ($kat = $queryKat->fetch(PDO::FETCH_ASSOC)) { 
      echo"<li><i class='fa fa-angle-right'></i><a href='$GLOBALS[BASE_URL]/berita/kategori/$kat[id_kategori]'>$kat[kategori]</a></li>";
    } ?>
  </ul>
  <div class="tweet"></div>
      <script type="text/javascript">
        jQuery(function ($) {
          $(".tweet").tweet({
            modpath: 'assets/php/',
            username: "dankovtheme",
            avatar_size: 40,
            count: 3,
            loading_text: "loading tweet...",
            template: "{text}"
          });
        });
      </script>
  <?php if(!$isset) { echo $arr_btn[5][0]; } else { echo $arr_btn[6][0]; } ?>
  <div id="<?php if(!$isset) { echo $field[5]; } else { echo $field[6]; } ?>" class="promo-text-blog"><?php if(!$isset) { echo $arr_btn[5][1]; } else { echo $arr_btn[6][1]; } ?><strong><?= $title; ?></strong></div>
  <?php
    $more = getMoreBerita(@$berita['id_kategori'],@$isset,@$level[1]);
    while ($data = $more->fetch(PDO::FETCH_ASSOC)) {
      $string = $GLOBALS['BASE_URL']."/berita/".strtolower(str_replace(" ", "-", $data['judul']));
      if(strlen($data['judul']) > 32){
        $judul = "<a href='berita/$string-$data[id_berita]'><strong>".substr($data['judul'], 0,32)."...</strong></a>";
      }else{
        $judul = "<a href='berita/$string-$data[id_berita]'><strong>".$data['judul']."</strong></a>";
      }
      ?>
      <div class="row" style="margin-bottom: 15px;">
        <div class="col-lg-12">
          <a href="<?= $string."-".$data['id_berita']; ?>" title="<?= $data['judul']; ?>">
          <div class="cl-blog-img portfolio-image post-thumbnail">
            <img class="fit-view" style="height: 100px;" src="<?php echo "$GLOBALS[BASE_URL]/img/berita/".$data['gambar'];?>" alt="" ><?php echo $judul; ?></img>
          </div>
          </a>
        </div>
      </div>
  <?php
    }
  ?>
</div>

<?php
function getMoreBerita($kategori=null,$isset,$lvl1=null){

  if($lvl1!="kategori" && $lvl1!="halaman"){
    $id=str_replace("-","",strrchr($lvl1, "-"));  
  }else{
    $id="";
  }

  if($id!=""){
    $sql = "SELECT *FROM berita WHERE id_berita <> '".$id."' AND id_kategori = '".$kategori."' ORDER BY id_berita DESC LIMIT 3";
  }else{
    $sql = "SELECT *FROM berita ORDER BY viewers DESC LIMIT 3";
  }
  $query = PdoQuery($sql);
  return $query;
}

function getHeader($req){
    $sql = "SELECT *FROM menu_b ORDER BY id DESC";
    if($req == "data"){
      $data = PdoSelect($sql);
    }elseif($req == "field"){
      $data = PdoQuery($sql);
    }
    return $data;
  }
?>