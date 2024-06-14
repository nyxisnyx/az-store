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
            <p>We provide you the <span class="highlight">best</span> quality</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia odit facilis necessitatibus explicabo ratione delectus? Iure praesentium necessitatibus ipsum eos quae possimus exercitationem, voluptatum magni porro illo beatae facere quo?</p>
        </section>
        <section id="testimonials">
            
        </section>
    </main>
    <footer>
        <?php
            include('./assets/backend/php/footer.php');
        ?>
    </footer>
</body>
</html>