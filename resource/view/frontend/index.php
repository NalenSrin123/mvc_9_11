<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechStore - Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <div class="flex items-center">
                    <a href="index.html" class="text-2xl font-bold text-blue-600">TechStore</a>
                </div>
                <div class="hidden md:flex space-x-8">
                    <a href="index.html" class="text-gray-700 hover:text-blue-600 transition">Home</a>
                    <a href="products.html" class="text-gray-700 hover:text-blue-600 transition">Products</a>
                    <a href="about.html" class="text-gray-700 hover:text-blue-600 transition">About</a>
                    <a href="contact.html" class="text-gray-700 hover:text-blue-600 transition">Contact</a>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="../Auth/login.php" class="relative text-gray-700 hover:text-blue-600 transition me-2">
                        Sign In
                    </a>
                    <a href="#" class="relative text-gray-700 hover:text-blue-600 transition">
                        <i class="fas fa-shopping-cart text-xl"></i>
                        <span id="cart-count" class="absolute -top-2 -right-2 bg-red-500 text-white rounded-full w-5 h-5 flex items-center justify-center text-xs">0</span>
                    </a>
                    <button id="mobile-menu-btn" class="md:hidden text-gray-700">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden md:hidden pb-4">
                <a href="index.html" class="block py-2 text-gray-700 hover:text-blue-600">Home</a>
                <a href="products.html" class="block py-2 text-gray-700 hover:text-blue-600">Products</a>
                <a href="about.html" class="block py-2 text-gray-700 hover:text-blue-600">About</a>
                <a href="contact.html" class="block py-2 text-gray-700 hover:text-blue-600">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-blue-600 to-purple-600 text-white py-20">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h1 class="text-5xl font-bold mb-6">Welcome to TechStore</h1>
            <p class="text-xl mb-5">Discover the latest technology products at unbeatable prices</p>
            <a href="products.html" class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition">
                Shop Now
            </a>
        </div>
    </section>

    <!-- Featured Products -->
    <section class="pt-12 py-5">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-5">Featured Products</h2>
            <div id="featured-products" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Products will be loaded here -->
            </div>
        </div>
    </section>
    <section class="py-12">
        <div class="max-w-7xl mx-auto px-4">
            <div id="products-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                <!-- card -->
                <?php
                
                     include '../../../app/Controller/Frontend/getProduct.php';
                     getAllProductForFront();
                ?>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center">
                    <i class="fas fa-shipping-fast text-4xl text-blue-600 mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">Free Shipping</h3>
                    <p class="text-gray-600">Free shipping on orders over $50</p>
                </div>
                <div class="text-center">
                    <i class="fas fa-shield-alt text-4xl text-blue-600 mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">Secure Payment</h3>
                    <p class="text-gray-600">100% secure payment processing</p>
                </div>
                <div class="text-center">
                    <i class="fas fa-headset text-4xl text-blue-600 mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">24/7 Support</h3>
                    <p class="text-gray-600">Round-the-clock customer support</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">TechStore</h3>
                    <p class="text-gray-400">Your trusted partner for all technology needs.</p>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="index.html" class="text-gray-400 hover:text-white">Home</a></li>
                        <li><a href="products.html" class="text-gray-400 hover:text-white">Products</a></li>
                        <li><a href="about.html" class="text-gray-400 hover:text-white">About</a></li>
                        <li><a href="contact.html" class="text-gray-400 hover:text-white">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Categories</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Smartphones</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Laptops</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Accessories</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Gaming</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Contact Info</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><i class="fas fa-phone mr-2"></i> +1 (555) 123-4567</li>
                        <li><i class="fas fa-envelope mr-2"></i> info@techstore.com</li>
                        <li><i class="fas fa-map-marker-alt mr-2"></i> 123 Tech Street, City</li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center">
                <p class="text-gray-400">&copy; 2024 TechStore. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="js/main.js"></script>
</body>
</html>