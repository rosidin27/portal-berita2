
<?php 
$id = $id_berita;
$berita = getBerita(filter($id));
$queryBerita = getMore($berita['id_kategori']);
$keyword = explode(",", $berita['keyword']);
$string = $GLOBALS['BASE_URL']."/berita/".strtolower(str_replace(" ", "-", $berita['judul']));
?>
<div class="container marg75" style="margin-top: 2%">
  <div class="row">
    <div class="col-lg-9">
      <div class="cl-blog-naz">
        <div class="cl-blog-name" style="padding-left: 0px;"><strong><a href="<?= $string."-".$berita['id_berita']; ?>"><?php echo $berita['judul']; ?></a></strong></div>
        <div class="cl-blog-detail" style="margin-left: 0px;"><?php echo "Kategori <a href='$GLOBALS[BASE_URL]/berita/kategori/$berita[id_kategori]'>$berita[kategori]</a>  | Posted by  $berita[username] $berita[tanggal] | <strong>Dilihat $berita[viewers]x</strong>"; ?></div>
        <div class="cl-blog-line" style="margin-top: 5px; margin-bottom: 15px;"></div>
        <img class="col-md-8 col-sm-9" src="<?php echo "$GLOBALS[BASE_URL]/img/berita/".$berita['gambar'];?>">
        <p>
            <?php echo $berita['isi']; ?>
        </p> 
      </div>
      <div class="row marg50">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <div class="tags-blog-single">
              <ul class="tags-blog">
                <?php
                    for($i=0; $i < count($keyword); $i++){
                        echo "<li><a href='#'>$keyword[$i]</a></li>";
                    }
                ?>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <div class="soc-blog-single">
              <ul class="soc-blog">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      <div class="cl-blog-line" style="margin-top: 0px;"></div>
    </div> 
    <?php include "nav-berita.php"; ?>         
  </div>
</div>

<?php 
function getMore($kategori){
    $sql = "SELECT *FROM berita WHERE id_kategori='".$kategori."' ORDER BY id_berita DESC LIMIT 3";
    $jml = JumlahData($sql);
    if($jml < 3){
        $sql = "SELECT *FROM berita ORDER BY id_berita DESC LIMIT 3";
    }
    $query = PdoQuery($sql);

    return $query;
}
?>
<?php 
function getBerita($id){
    $sql = "SELECT a.id_kategori, a.judul, b.kategori, a.keyword, a.isi, a.gambar, a.username, a.tanggal, a.id_berita, a.viewers FROM berita a, kategori b WHERE a.id_kategori = b.id_kategori AND id_berita='".$id."'";
    
    $cek = JumlahData($sql);
    $data = PdoSelect($sql);

    if($cek > 0){
        PdoQuery("UPDATE berita SET viewers=viewers+1 WHERE id_berita='".$id."'");
        return $data;
    }else{
        echo "<script>alert('Not Found !'); window.location='$GLOBALS[BASE_URL]/berita'</script>";
        exit();
    }
}

?>