<?php 

    if (isset($_POST['btnUpload']) && $_POST['btnUpload'] == "Upload") {
        
        // echo "<pre>";
        // print_r($_FILES);[]

        //gelen dosya sayısını gösterir
        $file_piece = count($_FILES["fileToUpload"]["name"]);
        
        //dosya boyutunu ayarlama * 2 - 3 ya da 4mb şeklinde
        $maxFileSize = (1024 * 1024) * 1;

        //kabul edilen dosya tipleir
        $fileTypes = array(
            "image/png",
            "image/jpg",
            "image/jpeg");

        for ($i=0; $i < $file_piece ; $i++) { 
            
            //geçiçi dosya yolunu alır
            $fileTmpPath = $_FILES["fileToUpload"]["tmp_name"][$i];
            
            //dosya ismi
            $fileName = $_FILES["fileToUpload"]["name"][$i];

            //dosya boyutu
            $fileSize = $_FILES["fileToUpload"]["size"][$i];

            //Dosya tipi
            $fileType = $_FILES["fileToUpload"]["type"][$i];

            // Gelen görsel tipi tanımladığımız tipler içerisinde mi
            if (in_array($fileType, $fileTypes)) {
                
                if ($fileSize > $maxFileSize) {
                    echo "Dosya uzantısı max 1mb olabilir"."<br>";

                }else{

                    $fileName_Arr = explode('.', $fileName);
                    $fileName_uzantisiz = $fileName_Arr[0];
                    $file_uzantisi = $fileName_Arr[1];

                    //yeni şifrelenmiş dosya adı
                    $newFileName = md5(rand(0,999999)).'.'.$file_uzantisi;

                    $dest_path = "img/".$newFileName;
                    //dosyayı kaydedeceğimiz konum.

                    //geçici dosya yolundan belirlediğimiz klasöre file aktarma işlemi
                    if (move_uploaded_file($fileTmpPath, $dest_path)) {
                        //dosya başarılı bir şekilde yüklendi ise
                        echo $newFileName." dosya yüklendi"."<br>";
                    }else{
                        echo $newFileName." dosya yüklenemedi"."<br>";
                    }
                }

            }else{
                echo "Dosya uzantısı geçersiz ";
                echo "Kabul edilen dosya tipleri: ".implode(", ", $fileTypes)."<br>";
            }


            
            
        }
    } 

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>

        <form method="POST" enctype="multipart/form-data">
            <input type="file" name="fileToUpload[]" multiple="multiple">
            <input type="submit" name="btnUpload" value="Upload">
            
        </form>
    
    </body>
</html>