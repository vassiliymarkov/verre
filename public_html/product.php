<?php
include "elems/header.php";
?>

<main>
    <section class="product_container">
        <div class="product_images_container">
            <div class="product_image">
                <img class="zoom" src="assets/img/broches/libellule_01_small.webp"
                    data-zoom-image="assets/img/broches/libellule_01.webp" />
            </div>
            <div class="product_image">
                <img class="zoom" src="assets/img/broches/libellule_02_small.webp"
                    data-zoom-image="assets/img/broches/libellule_02.webp" />
            </div>
            <!-- <div class="product_image">
            <img class="zoom" src="assets/img/broches/libellule_02_small.webp"
                data-zoom-image="assets/img/broches/libellule_02.webp" />
        </div>
        <div class="product_image">
            <img class="zoom" src="assets/img/broches/libellule_02_small.webp"
                data-zoom-image="assets/img/broches/libellule_02.webp" />
        </div> -->
        </div>

        <div class="product_info">
            <h1>Broche Libellule verte</h1>
            <p>4,28cm x 3,5cm</p>
            <p>38.50 &#8364;</p>

            <!-- <button class="add_to_cart">AJOUTER AU PANIER</button> -->
            <button class="add_to_cart">RESERVER</button>
            <span>* Vous pouvez réserver l'article le récupérer plus tard en payant votre achat en magasin</span>
        </div>
    </section>

    <div class="similar_products_title">
        <hr class="separator_short" />
        <h2>Produits similaires</h2>
        <hr class="separator_short" />
    </div>

    <section class="similar_products">

        <div class="similar_product">
            <div class="similar_product_image">
                <img src="assets/img/broches/libellule_03.webp" alt="">
            </div>
            <p>Broche Libellule transparente bleue</p>
        </div>
        <div class="similar_product">
            <div class="similar_product_image">
                <img src="assets/img/broches/papillon_01.webp" alt="">
            </div>
            <p>Broche Papillon marron</p>
        </div>
        <div class="similar_product">
            <div class="similar_product_image">
                <img src="assets/img/broches/papillon_02.webp" alt="">
            </div>
            <p>Broche Papillon bleue</p>
        </div>
    </section>

    <hr class="separator" />

</main>

<?php
include "elems/footer.php";
?>