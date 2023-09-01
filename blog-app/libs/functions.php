<?php


function getCategories(){
    
}

function filmEkle(string $baslik, string $aciklama, string $resim,string $url, int $yorumSayisi=0,int $begeniSayisi=0,bool $vizyon=false) {
    
    
    // $new_item[count($_SESSION["filmler"]) + 1] = array(
    //     "baslik" => $baslik,
    //     "aciklama" => $aciklama,
    //     "resim" => $resimurl,
    //     "yorumSayisi" => $yorumSayisi,
    //     "begeniSayisi" => $begeniSayisi,
    //     "vizyon" => $vizyon
    // ); 

    // $_SESSION["filmler"] = array_merge($_SESSION["filmler"], $new_item);

    // foreach ($_SESSION["filmler"] as $key => $film) {
    //     $_SESSION["filmler"][$key]["url"] = strtolower($_SESSION["filmler"][$key]["baslik"]);
    //     $_SESSION["filmler"][$key]["url"] = str_replace([" ","ç"],["-","c"],$_SESSION["filmler"][$key]["url"]);
    // }


    $myfile = fopen("database.txt","a");
    $content = $baslik.'|'.$aciklama.'|'.$resim.'|'.$url.'|'.$yorumSayisi.'|'.$begeniSayisi.'|'.(int)$vizyon;
    fwrite($myfile,$content.'\n');
}

function kisaAciklama($aciklama, $limit) {
    if (strlen($aciklama) > $limit) {
        echo substr($aciklama,0,$limit)."...";
    } else {
        echo $aciklama;
    };
}

function getData(){
    $myfile = fopen("db.json","r");
    $size = filesize("db.json");
    $result = json_decode(fread($myfile,$size),true);

    fclose($myfile);
    return $result;
}
?>