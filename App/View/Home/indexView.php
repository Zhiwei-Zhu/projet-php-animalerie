
<div class="container">
    <div class="mt-5 text-align">
        <h2>Présentation de l'association</h2>
    </div>
    <div class="mt-5 text-align">
        <p>On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.' est qu'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour 'Lorem Ipsum' vous conduira vers de nombreux sites qui n'en sont encore qu'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d'y rajouter de petits clins d'oeil, voire des phrases embarassantes).</p>
    </div>
</div>





<div class="carousel-wrapper">
    <div class="carousel">
        <?php foreach ($animals as $animal) : ?>
        <?php if($animal->type === "chien"): ?>
            <img src="https://lemagduchien.ouest-france.fr/images/dossiers/2019-06/chien-heureux-064736.jpg" alt="slide image" class="carousel__photo">
        <?php endif; ?>
        <?php if($animal->type === "chat"): ?>
            <img src="http://www.leparisien.fr/resizer/74wMQIeXKLDUKuKvSzJQME_0ULg=/932x582/arc-anglerfish-eu-central-1-prod-leparisien.s3.amazonaws.com/public/KNVYKZBDTTOXNO37FEVDTD5DJU.jpg" alt="slide image" class="carousel__photo">
        <?php endif; ?>
        <?php if($animal->type === "oiseaux"): ?>
            <img src="https://secure.img1-fg.wfcdn.com/im/07292327/resize-h800-w800%5Ecompr-r85/1166/116615321/Jeremy+Artful+12+in+x+6+in+x+8+in+Birdhouse.jpg" alt="slide image" class="carousel__photo">
        <?php endif; ?>


        <div class="carousel__button--next"></div>
        <div class="carousel__button--prev"></div>

    </div>
    <?php endforeach ?>
</div>




  <script>

      !(function(d){
          var itemClassName = "carousel__photo";
          items = d.getElementsByClassName(itemClassName),
              totalItems = items.length,
              slide = 0,
              moving = true;


          function setInitialClasses() {


              items[totalItems - 1].classList.add("prev");
              items[0].classList.add("active");
              items[1].classList.add("next");
          }

          // Set click events to navigation buttons

          function setEventListeners() {
              var next = d.getElementsByClassName('carousel__button--next')[0],
                  prev = d.getElementsByClassName('carousel__button--prev')[0];

              next.addEventListener('click', moveNext);
              prev.addEventListener('click', movePrev);
          }


          function disableInteraction() {
              moving = true;

              setTimeout(function(){
                  moving = false
              }, 500);
          }

          function moveCarouselTo(slide) {


              if(!moving) {


                  disableInteraction();


                  var newPrevious = slide - 1,
                      newNext = slide + 1,
                      oldPrevious = slide - 2,
                      oldNext = slide + 2;


                  if ((totalItems - 1) > 3) {


                      if (newPrevious <= 0) {
                          oldPrevious = (totalItems - 1);
                      } else if (newNext >= (totalItems - 1)){
                          oldNext = 0;
                      }


                      if (slide === 0) {
                          newPrevious = (totalItems - 1);
                          oldPrevious = (totalItems - 2);
                          oldNext = (slide + 1);
                      } else if (slide === (totalItems -1)) {
                          newPrevious = (slide - 1);
                          newNext = 0;
                          oldNext = 1;
                      }




                      items[oldPrevious].className = itemClassName;
                      items[oldNext].className = itemClassName;


                      items[newPrevious].className = itemClassName + " prev";
                      items[slide].className = itemClassName + " active";
                      items[newNext].className = itemClassName + " next";
                  }
              }
          }


          function moveNext() {


              if (!moving) {


                  if (slide === (totalItems - 1)) {
                      slide = 0;
                  } else {
                      slide++;
                  }


                  moveCarouselTo(slide);
              }
          }


          function movePrev() {


              if (!moving) {


                  if (slide === 0) {
                      slide = (totalItems - 1);
                  } else {
                      slide--;
                  }


                  moveCarouselTo(slide);
              }
          }


          function initCarousel() {
              setInitialClasses();
              setEventListeners();


              moving = false;
          }


          initCarousel();

      }(document));

  </script>

<style type="text/css">
    .carousel-wrapper {
        overflow: hidden;
        width: 90%;
        margin: auto;
    }

    .carousel-wrapper * {
        box-sizing: border-box;
    }


    .carousel {
        -webkit-transform-style: preserve-3d;
        -moz-transform-style: preserve-3d;
        transform-style: preserve-3d;
    }

    .carousel__photo {
        opacity: 0;
        position: absolute;
        top:0;
        width: 100%;
        margin: auto;
        padding: 1rem 4rem;
        z-index: 100;
        transition: transform .5s, opacity .5s, z-index .5s;
    }

    .carousel__photo.initial,
    .carousel__photo.active {
        opacity: 1;
        position: relative;
        z-index: 900;
    }

    .carousel__photo.prev,
    .carousel__photo.next {
        z-index: 800;
    }

    .carousel__photo.prev {
        transform: translateX(-100%);
    }

    .carousel__photo.next {
        transform: translateX(100%);
    }

    .carousel__button--prev,
    .carousel__button--next {
        position: absolute;
        top:50%;
        width: 3rem;
        height: 3rem;
        background-color: #FFF;
        transform: translateY(-50%);
        border-radius: 50%;
        cursor: pointer;
        z-index: 1001;
        border:1px solid black;

    }

    .carousel__button--prev {
        left:0;
    }

    .carousel__button--next {
        right:0;
    }

    .carousel__button--prev::after,
    .carousel__button--next::after {
        content: " ";
        position: absolute;
        width: 10px;
        height: 10px;
        top: 50%;
        left: 54%;
        border-right: 2px solid black;
        border-bottom: 2px solid black;
        transform: translate(-50%, -50%) rotate(135deg);
    }

    .carousel__button--next::after {
        left: 47%;
        transform: translate(-50%, -50%) rotate(-45deg);
    }
</style>

<div class="recherche mt-5"></div>
<div class="affichage mt-5 justify-content-around">
<?php foreach ($produits as $produit) :?>
    <div class="card" style="width: 18rem;">
    <?php if ($produit->type_animal === "chien"): ?>
        <img class="card-img-top" src="https://cdn.pixabay.com/photo/2015/07/22/13/21/kibble-855419_960_720.jpg" alt="Produit pour chien">
        <?php endif; ?>
    <?php if ($produit->type_animal === "chat"): ?>
        <img class="card-img-top" src="https://image.shutterstock.com/image-photo/ceramic-bowl-dried-pet-food-260nw-1047394765.jpg" alt="Produit pour chat">
        <?php endif; ?>
    <?php if ($produit->type_animal === "oiseaux"): ?>
        <img class="card-img-top" src="https://secure.img1-fg.wfcdn.com/im/07292327/resize-h800-w800%5Ecompr-r85/1166/116615321/Jeremy+Artful+12+in+x+6+in+x+8+in+Birdhouse.jpg" alt="Produit pour oiseaux">
        <?php endif; ?>
        <div class="card-body">
            <h5 class="card-title"></h5>
            <div class="card-text">
                <p>Nom: <?= $produit->nom ?></p>
                <p>Catégorie: <?= $produit->type_animal ?></p>
                <p>Prix: <?= $produit->prix ?></p>
                <p>Stock: <?= $produit->stock ?> </p>
            </div>
            <a href="<?= $produit->id ?>" class="btn btn-primary">Voir en détail</a>
        </div>
    </div>
</div>
<?php endforeach ?>


<div class="container mt-5">
    <form action="index.php?page=dons" method="POST">
        <div class="form-group">
            <label for="montant">Montant</label>
            <input type="text" class="form-control" id="montant" name="montant" value="">
        </div>
    <?php if (isset($_SESSION["user"])): ?>
        <button href="#" type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
</div>

<?php else :?>
    <button href="#" type="submit" disabled >Enregistrer</button>
<?php endif  ?>



