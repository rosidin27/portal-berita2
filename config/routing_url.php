<?php
include "koneksi.php";

$address = "portal-berita2";

$base_url = $GLOBALS['BASE_URL'];

$url = $_SERVER['REQUEST_URI'];
$exp = explode("/", $url);
$level = array();
//echo "$url<br>$base_url<br>";
//exit();
$index=0;
for ($i=0; $i < count($exp); $i++) { 
	if($exp[$i]!=$address && $exp[$i]!="?" && $exp[$i]!="index.php"  && $exp[$i]!=null){
		//echo "$i ".$exp[$i]."<br>";
	}
	if($exp[$i]=="index.php"){
		echo "<meta http-equiv='refresh' content='0,/$address/home'>";
	}elseif($exp[$i]!=$address && $exp[$i]!="?" && $exp[$i]!=null){
		array_push($level, $exp[$i]);
	}
}
//exit();

include "include/header.php";
include "include/navigation.php";

if(count($level)>0){
	for($i=0; $i < count($level); $i++){
		if($level[0]=="berita"){
			if(isset($level[1])){
				if($level[1] == "kategori" && isset($level[2])){
					$id_kategori = $level[2];
					include "halaman/berita.php";
				}elseif($level[1] == "halaman" && isset($level[2])){
					$halaman = $level[2];
					include "halaman/berita.php";
				}else{
					$id_berita = str_replace("-","",strrchr($level[1], "-"));
					include "halaman/detail_berita.php";
				}
			}else{
				include "halaman/berita.php";
			}
		}elseif($level[0]=="profil"){
			include 'halaman/detail_profil.php';
		}elseif($level[0]=="home"){
			if($i <= 0){
				home();
			}
		}elseif($level[0]=="login"){
			include "login.php";
		}elseif($level[0]=="logout"){
			include "logout.php";
		}elseif($level[0]=="sitemap"){
			include "halaman/sitemap.php";
		}
	}
}else{
	home();
}

include "include/footer.php";
include "include/js-footer.php";
function home(){
    include "include/slider.php";
    //include "include/galeri.php";
    include "include/profil.php";
    include "include/section-b.php";
    //include "include/section-c.php";
    //include "include/section-d.php";
    //include "include/section-e.php";
    include "include/section-f.php";
    //include "include/footer.php";
 }
function error(){
	echo "<meta http-equiv='refresh' content='0,$base_url'>";
	exit();
}

function getKategori(){
	$sql = "SELECT DISTINCT(a.id_kategori), b.kategori FROM berita a, kategori b WHERE a.id_kategori = b.id_kategori";
	$query = PdoQuery($sql);

	return $query;
}
?>