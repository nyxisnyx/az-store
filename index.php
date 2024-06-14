<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <script defer type="module" src="./assets/js/script.js"></script>
    <title>AZ Store</title>
</head>
<body>
    <header>
        <?php
            include('./assets/backend/php/navbar.php');
        ?>
        <section id="header">
            <div class="headerLeft">
                <h1>Shoe the right <span class="highlight">one</span>.</h1>
                <div class="seeStore headerElement">See our store</div>
            </div>

            <div class="headerRight">
                <p class="nikeBrand headerElement">nike</p>
                <img src="/Becode/az-store/assets/images/shoes/shoe_one.png" class="headerElement">
            </div>
        </section>
    </header>
    <main>
        <h2><span class="highlight">Our</span> last products</h2>
        <section id="products">
            <?php 
            include('./assets/backend/php/main.php');
            ?>
        </section>
        <section id="featured">
            <img src="/Becode/az-store/assets/images/shoes/shoe_two.png" alt="Our beautiful purple Nike sneaker">
            <p id="bestQuality">We provide you the <span class="highlight">best</span> quality</p>
            <p id="aboutProduct">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia odit facilis necessitatibus explicabo ratione delectus?</p>
        </section>
        <section id="testimonials">
            <div class=testimonial>
                <img src="/Becode/az-store/assets/images/people/image-emily.jpg" alt="A white woman with blonde hair and a floral pattern on her pink shirt">
                <p class="testimTitle">Emily from xyz</p>
                <p class="testimText">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia odit facilis necessitatibus explicabo ratione delectus?</p>
            </div>
            <div class=testimonial>
                <img src="/Becode/az-store/assets/images/people/image-thomas.jpg" alt="A dark-skinned man with neatly-combed black hair and a short beard">
                <p class="testimTitle">Thomas from corporate</p>
                <p class="testimText">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia odit facilis necessitatibus explicabo ratione delectus?</p>
            </div>
            <div class=testimonial>
                <img src="/Becode/az-store/assets/images/people/image-jennie.jpg" alt="A white woman with short, dark hair and a black tank top">
                <p class="testimTitle">Jennie from Nike</p>
                <p class="testimText">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia odit facilis necessitatibus explicabo ratione delectus?</p>
            </div>
        </section>
    </main>
    <footer>
        <?php
            include('./assets/backend/php/footer.php');
        ?>
    </footer>
</body>
</html>