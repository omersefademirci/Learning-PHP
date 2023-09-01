<?php
    require "libs/vars.php";
    require "libs/functions.php";  

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $baslik = $_POST["baslik"];
        $aciklama = $_POST["aciklama"];
        $resimurl = $_POST["resimurl"];
        $url = $_POST["url"];
        
        filmEkle($baslik, $aciklama, $resimur,$url);
        header('Location: index.php');
    }


?>

<?php include "views/_header.php" ?>
<?php include "views/_navbar.php" ?>

<div class="container my-5">

    <div class="row">

        <div class="col-3">
            <?php include "views/_menu.php" ?>     
        </div>
        <div class="col-9">
            <div class="card">
                <div class="card-body">
                    <form action="create.php" method="POST">
                        <div class="mb-3">
                            <label for="baslik" class="form-label">Başlık</label>
                            <input type="text" name="baslik" class="form-control" id="baslik">
                        </div>
                        <div class="mb-3">
                            <label for="aciklama" class="form-label">Açıklama</label>
                            <input type="text" name="aciklama" class="form-control" id="aciklama">
                        </div>
                        <div class="mb-3">
                            <label for="resimurl" class="form-label">Resim</label>
                            <input type="text" name="resimurl" class="form-control" id="resimurl">
                        </div>
                        <div class="mb-3">
                            <label for="url" class="form-label">Url</label>
                            <input type="text" name="url" class="form-control" id="url">
                        </div>

                        <div class="mb-3">
                            <input type="submit" name="login" value="Submit" class="btn btn-primary">
                        </div>
                        
                    </form>
                </div>
            </div>
           

        </div>    
    
    </div>

</div>

<?php include "views/_footer.php" ?>

