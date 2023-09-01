<ul class="list-group">              
    <?php foreach(getData()["categories"] as $kategori): ?>
        <a href="<?php echo "movies/".$kategori["id"] ?>" class="list-group-item list-group-item-aciton">
            <?php echo $kategori["name"] ?>
        </a>
    <?php endforeach; ?>
</ul>