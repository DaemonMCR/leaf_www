<?php
$title = "LeafOS ROM"; // Set the page title
include 'includes/header.php';
include 'includes/nav.php';
?>
<main class="main-content">
    <section class="content-section">
        <div class="section-bar">Welcome to the Leaf OS Project!</div>
        <p class="leaf-features">LeafOS is a no-nonsense custom ROM designed to give you exactly what you need without the fluff. We've cut out the unnecessary clutter and included only the essentials, so you get a clean, efficient Android experience.</p>
        <p class="leaf-features">Ready to upgrade your device? Let's get started with LeafOS!</p>
        <a href="download.php" class="get-leaf-button">Get LeafOS</a>
        <div class="section-bar">Leaf features</div>
    </section>
    
    <!-- Leaf Features Section -->
    <section class="features-section">
        <div class="features-grid">
            <div class="feature-card">
                <h3>Clean and Lightweight</h3>
                <p class="features-text">Say goodbye to bloat and unnecessary add-ons. LeafOS is all about keeping things lean and mean, so your device runs smoother and faster than ever.</p>
            </div>
            <div class="feature-card">
                <h3>Stability Guaranteed</h3>
                <p class="features-text">We've focused on stability from the get-go. No random cherry-picks here – just a reliable ROM that keeps your device running like a dream.</p>
            </div>
            <div class="feature-card">
                <h3>All the Necessary Features</h3>
                <p class="features-text">LeafOS comes packed with all the essentials you need for a top-notch Android experience.</p>
            </div>
            <div class="feature-card">
                <h3>Incremental OTA Updates</h3>
                <p class="features-text">Get updates without the hassle. LeafOS delivers incremental OTA updates, so you save on downloading size while staying up-to-date with the latest features and improvements.</p>
            </div>
            <div class="feature-card">
                <h3>Upgraded Device Lifespan</h3>
                <p class="features-text">With Leaf OS, you're not limited to your device's OEM upgrade range. Not only can you extend its lifespan, but you can also get more performance out of your device with a clean and lightweight OS.</p>
            </div>
            <div class="feature-card">
                <h3>Open-source Always</h3>
                <p class="features-text">You are in control. Everything is open-sourced, you can check for yourself what every app is doing, anytime.</p>
            </div>
        </div>
    </section>

    <?php
    // Array of screenshot categories
    $categories = ['qs', 'others', 'styles'];

    // Number of images per category
    $qs_images = 10; // 10 images for 'qs'
    $others_images = 10; // 10 images for 'others'
    $styles_images = 5; // 5 images for 'styles'
    ?>

    <!-- Leaf Screenshots Section -->
    <section class="content-section">
        <div class="section-bar">Leaf screenshots</div>
        <div class="screenshot-gallery">
            <?php
            // Loop through each category
            foreach ($categories as $category) {
                // Set the number of images per category based on the category
                $image_count = ($category == 'qs') ? $qs_images : (($category == 'others') ? $others_images : $styles_images);
                
                // Loop through the images using a for loop
                for ($i = 1; $i <= $image_count; $i++) {
                    // Format the image filename
                    $imagePath = "./content/images/screenshots/{$category}/screenshot-{$i}.webp";
                    echo "<img src='{$imagePath}' alt='Screenshot {$i}'>";
                }
            }
            ?>
        </div>
    </section>
</main>

<?php 
include 'includes/footer.php';
?>
</body>
</html>
