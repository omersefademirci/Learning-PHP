<?php 

    //Categories
    $category = "Advecture";
    $category1 = "Drama";
    $category2 = "Comedy";
    $category3 = "Fear";

    $categories = array("Advecture","Drama","Comedy","Fear");
   
    //Content of Movies
    $movie_title = "Paper Lives";
    $movie_description = "Kağıt toplayarak geçinen ve sağlığı giderek kötüleşen Mehmet terk edilmiş bir çocuk bulur. Birden hayatına giren küçük Ali, onu kendi çocukluğuyla yüzleştirecektir. (18 yaş ve üzeri için uygundur)";
    $movie_img = "1.jpeg";
    $movie_number_comments = "23";
    $movie_number_like = "106";
    $movie_visiyon = "Yes";

    $movie1_title = "Walking Dead";
    $movie1_description = "Zombi kıyametinin ardından hayatta kalanlar, birlikte verdikleri ölüm kalım mücadelesinde insanlığa karşı duydukları umuda tutunur.";
    $movie1_img = "2.jpeg";
    $movie1_number_comments = "236";
    $movie1_number_like = "1023";
    $movie1_visiyon = "Yes";

    const title1 = "Popular Movies";

    $movies = array(
        "1" => array(
            "title" => "Paper Lives",
            "description" => "Kağıt toplayarak geçinen ve sağlığı giderek kötüleşen Mehmet terk edilmiş bir çocuk bulur. Birden hayatına giren küçük Ali, onu kendi çocukluğuyla yüzleştirecektir. (18 yaş ve üzeri için uygundur)",
            "img" => "1.jpeg",
            "number_comments" => "23",
            "number_like" => "106",
            "vision" => "Yes",
        ),
        "2" => array(
            "title" => "Walking Dead",
            "description" => "Zombi kıyametinin ardından hayatta kalanlar, birlikte verdikleri ölüm kalım mücadelesinde insanlığa karşı duydukları umuda tutunur.",
            "img" => "2.jpeg",
            "number_comments" => "53",
            "number_like" => "1446",
            "vision" => "Yes",
        ),
    );

     #diznin sonuna eleman ekleme
     array_push($categories,"Bilim Kurgu");
     #kategorileri alfabetik sırlama
     sort($categories);

    $movie = [
            "title" => "Lucifer",
            "description" => "Kağıt toplayarak geçinen ve sağlığı giderek kötüleşen Mehmet terk edilmiş bir çocuk bulur. Birden hayatına giren küçük Ali, onu kendi çocukluğuyla yüzleştirecektir. (18 yaş ve üzeri için uygundur)",
            "img" => "3.jpeg",
            "number_comments" => "23",
            "number_like" => "106",
            "vision" => "Yes",
        ];
     array_unshift($movies,$movie);
    
    #filmleri rast gele sıralama
    shuffle($movies);

    #h1 etiketi altına "5 kategoride 3 film listelenmiştir" yazısını dizinin eleman sayılarına göre yazdırınız

    $category_count = count($categories);
    $movie_count = count($movies);
    $category_movie_title = "{$category_count} kategoride {$movie_count} film listelenmiştir";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Blog App</title>
</head>
<body>
    
    <div class="container my-5">
    
        <div class="row">

            <div class="col-3">
                <ul class="list-group">
                    <li class="list-group-item"><?php echo $categories[0] ?></li>                
                    <li class="list-group-item"><?php echo $categories[1] ?></li>                
                    <li class="list-group-item"><?php echo $categories[2] ?></li>                
                    <li class="list-group-item"><?php echo $categories[3] ?></li>                
                    <li class="list-group-item"><?php echo $categories[4] ?></li>                
                </ul>
            </div>
            <div class="col-9">
                <h1 class="mb-4" style="text-align: center;"><?php echo title1 ?></h1>
                <h5><?php echo $category_movie_title ?></h5>
                <div class="card mb-3">
                    <div class="row">
                        <div class="col-3">
                            <img class="img-fluid" src="img/<?php echo $movies[1]["img"] ?>" alt="">
                        </div>
                        <div class="col-9">
                            <div class="card-body">                        
                                <h5 class="card-title"><a href="<?php echo strtolower(str_replace(' ','-',$movies[1]["title"]));?>"><?php echo $movies[1]["title"] ?></a></h5>
                                <p class="card-text">
                                    <?php echo substr(ucfirst(strtolower($movies[1]["description"])),0,200).'...' ?>
                                </p>
                                <div>
                                    <span class="badge bg-primary"><?php echo $movies[1]["number_comments"] ?></span>
                                    <span class="badge bg-primary"><?php echo $movies[1]["number_like"] ?></span>
                                    <span class="badge bg-warning"><?php echo $movies[1]["vision"] ?></span>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="row">
                        <div class="col-3">
                            <img class="img-fluid" src="img/<?php echo $movies[2]["img"] ?>" alt="">
                        </div>
                        <div class="col-9">
                            <div class="card-body">                        
                                <h5 class="card-title"><a href="<?php echo strtolower(str_replace(' ','-',$movies[2]["title"]));?>"><?php echo $movies[2]["title"] ?></a></h5>
                                <p class="card-text">
                                    <?php echo substr(ucfirst(strtolower($movies[2]["description"])),0,200).'...'?>
                                </p>
                                <div>
                                    <span class="badge bg-primary"><?php echo $movies[2]["number_comments"] ?></span>
                                    <span class="badge bg-primary"><?php echo $movies[2]["number_like"] ?></span>
                                    <span class="badge bg-warning"><?php echo $movies[2]["vision"] ?></span>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="row">
                        <div class="col-3">
                            <img class="img-fluid" src="img/<?php echo $movies[0]["img"] ?>" alt="">
                        </div>
                        <div class="col-9">
                            <div class="card-body">                        
                                <h5 class="card-title"><a href="<?php echo strtolower(str_replace(' ','-',$movies[0]["title"]));?>"><?php echo $movies[0]["title"] ?></a></h5>
                                <p class="card-text">
                                    <?php echo substr(ucfirst(strtolower($movies[0]["description"])),0,200).'...'?>
                                </p>
                                <div>
                                    <span class="badge bg-primary"><?php echo $movies[0]["number_comments"] ?></span>
                                    <span class="badge bg-primary"><?php echo $movies[0]["number_like"] ?></span>
                                    <span class="badge bg-warning"><?php echo $movies[0]["vision"] ?></span>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                </div>

            </div>
        
        
        </div>
    
    </div>



</body>
</html>