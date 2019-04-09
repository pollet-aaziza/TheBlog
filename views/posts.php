<?php
include "../template/header.php";
 ?>

 <div class="row mt-5">
    <section class="col-lg-9 t_center">
      <h2>Nos derniers postes</h2>
      <div class="container-fluide">
        <div class="row">
          <?php
            //On boucle pour afficher tous les posts contenus dans la variable posts
            foreach ($posts as $key => $post) {
          ?>
          <article class="col-lg-6 my-4">
            <img class="card-img-top" src="img/Aaziza.jpg" alt="chevrolet impala noire">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title"><?php echo $post["title"] ?></h5>
                <p class="card-text"><?php echo $post["publication_date"] ?></p>
                <p class="card-text"><?php echo $post["chapô"] ?></p>
              </div>
              <div class="card-body">
                <?php
                // affiche moi ce post dans la page single celui-ci est stocké dans $post en le recuperant par son id.
                 echo "<a href='post.php?id=" .$post['id'] . "'>Voir détail</a>";
                 ?>
              </div>
            </div>
          </article>
          <?php
          //On ferme la boucle
            }
           ?>
        </div>
      </div>
    </section>
  </div>

 <?php
 include "Template/footer.php"
  ?>
