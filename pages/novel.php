<?php
require_once("database/database.php");
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $books = getSearchNovel($_POST);
} else {
    $books = getAllNovelBook();
}
?>
<div class="d-flex justify-content-center p-4 mb-2 mt-2d">
    <form action="" method="post" class="col-lg-6 col-md-8 col-sm-8 col-12">
        <div class="d-flex justify-content-between">
            <input type="search" class="form-control" placeholder="Search book..." name="word">
            <button type="submit" class="btn btn-success fa fa-search"></button>
        </div>
    </form>
</div>
<div class="container rounded p-4 mb-2 mt-2" style="background-color:#fff;">
    <h2 class="font-weight-light text-center">Full of Novel Books</h2>
    <br>
    <div class="row">
        <?php foreach ($books as $book) : ?>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-3">
                <div class="card">
                    <a href="mypdf/<?= $book['book_pdf'] ?>" target="_blank"><img class="card-img" style="height: 270px;" src="images/book/<?= $book['book_img'] ?>" alt=""></a>
                    <div class="card-body" style="height: 100px;">
                        <p class="card-title"><?= $book['title'] ?></p>
                        <span class="card-subtitle mb-2 font-weight-light"><?= $book['date'] ?></span>
                    </div>
                    <a href="detial.php?id=<?= $book['book_id'] ?>" class="btn btn-danger" style="border-radius: 20px; width: 230px; margin: 10px">Detail</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>