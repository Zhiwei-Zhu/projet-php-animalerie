






<div class="carousel">
<div class="slides">
    <img src="https://picsum.photos/1280/720?random=1" alt="slide image" class="slide">
    <img src="https://picsum.photos/1280/720?random=2" alt="slide image" class="slide">
    <img src="https://picsum.photos/1280/720?random=3" alt="slide image" class="slide">
</div>
<div class="controls">
    <div class="control prev-slide">&#9668;</div>
    <div class="control next-slide">&#9658;</div>
</div>
</div>
  <script>
      const delay = 3000; //ms

      const slides = document.querySelector(".slides");
      const slidesCount = slides.childElementCount;
      const maxLeft = (slidesCount - 1) * 100 * -1;

      let current = 0;

      function changeSlide(next = true) {
          if (next) {
              current += current > maxLeft ? -100 : current * -1;
          } else {
              current = current < 0 ? current + 100 : maxLeft;
          }

          slides.style.left = current + "%";
      }

      let autoChange = setInterval(changeSlide, delay);
      const restart = function() {
          clearInterval(autoChange);
          autoChange = setInterval(changeSlide, delay);
      };

      // Controls
      document.querySelector(".next-slide").addEventListener("click", function() {
          changeSlide();
          restart();
      });

      document.querySelector(".prev-slide").addEventListener("click", function() {
          changeSlide(false);
          restart();
      });
  </script>




<style type="text/css">

    $carousel-height: 250px;
    $control-size: 50px;

    body {
        background: #3e3e3e;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }

    .carousel {
        width: 80vw;
        height: $carousel-height;
        border-radius: 3px;
        overflow: hidden;
        position: relative;
        box-shadow: 0 3px 6px rgba(0, 0, 0, 0.2);

    &:hover .controls {
         opacity: 1;
     }

    .controls {
        opacity: 0;
        display: flex;
        position: absolute;
        top: 50%;
        left: 0;
        justify-content: space-between;
        width: 100%;
        z-index: 99999;
        transition: all ease 0.5s;

    .control {
        margin: 0 5px;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 40px;
        width: 40px;
        border-radius: 50%;
        background-color: rgba(255, 255, 255, 0.7);
        opacity: .5;
        transition: ease .3s;
        cursor: pointer;

    &:hover {
         opacity: 1;
     }
    }
    }

    .slides {
        position: absolute;
        top: 50%;
        left: 0;
        transform: translateY(-50%);
        display: flex;
        width: 100%;
        transition: 1s ease-in-out all;

    .slide {
        min-width: 100%;
        min-height: $carousel-height;
        height: auto;
    }
    }
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