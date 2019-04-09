<?php
include "template/header.php";
 ?>

 <div class="row mt-5">
    <section class="col-lg-9 t_center">
      <h2 class="text-center">Nos derniers posts</h2>
      <div class="container-fluide">
        <div class="row">
          <?php
            //we loop to retrieve all posts
            foreach ($posts as $key => $post) {
          ?>
          <article class="col-lg-6 my-4">
            <img class="card-img-top" src="img/Aaziza.jpg" alt="chevrolet impala noire">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title"><?php echo $post["title"] ?></h5>
                <p class="card-text"><?php echo $post["chapô"] ?></p>
                <p class="card-text"><?php echo $post["contents"] ?></p>
                <p class="card-text"><?php echo $post["author"] ?></p>
                <p class="card-text"><?php echo $post["publication_date"] ?></p>
                <p class="card-text"><?php echo $post["chapô"] ?></p>
            <?php
            var_dump($posts);
            //we loop to retrieve all comments
            foreach ($comments as $key => $comment) {
            ?>      
            <p class="card-text"><?php echo $post["contennts"] ?></p>
              </div>
              <div class="card-body">
                <?php
                 ?>
              </div>
            </div>
          </article>
          <?php
          //we close the loop
            }
           ?>
        </div>
      </div>
    </section>
  </div>

 <?php
 include "template/footer.php"
  ?>
