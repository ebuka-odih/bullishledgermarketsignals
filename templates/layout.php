<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle : 'Bullish Ledger Market Signals'; ?></title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary-green': '#28a745',
                        'secondary-green': '#20c997',
                        'primary-blue': '#007bff',
                    }
                }
            }
        }
    </script>
    
    <?php if (isset($additionalHead)) echo $additionalHead; ?>
</head>
<body>
    <!-- Navigation -->
    <nav class="fixed top-0 left-0 right-0 z-50 bg-gray-900 shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center">
                    <a href="index.php" class="flex items-center text-white font-bold text-xl">
                        <i class="fas fa-chart-line mr-2"></i>
                        Bullish Ledger
                    </a>
                </div>
                
                <!-- Desktop Navigation -->
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <a href="#trading-course" class="text-gray-300 hover:text-primary-green px-3 py-2 text-sm font-medium transition-colors">TRADING COURSE</a>
                        <a href="#trading-journal" class="text-gray-300 hover:text-primary-green px-3 py-2 text-sm font-medium transition-colors">TRADING JOURNAL</a>
                        <a href="#newsletter" class="text-gray-300 hover:text-primary-green px-3 py-2 text-sm font-medium transition-colors">NEWSLETTER</a>
                        <a href="#podcast" class="text-gray-300 hover:text-primary-green px-3 py-2 text-sm font-medium transition-colors">PODCAST</a>
                        <a href="#indicator" class="text-gray-300 hover:text-primary-green px-3 py-2 text-sm font-medium transition-colors">INDICATOR</a>
                        <a href="#blog" class="text-gray-300 hover:text-primary-green px-3 py-2 text-sm font-medium transition-colors">BLOG</a>
                    </div>
                </div>
                
                <div class="hidden md:block">
                    <a href="#telegram" class="bg-primary-blue hover:bg-blue-700 text-white px-4 py-2 rounded-full text-sm font-medium transition-colors">
                        <i class="fab fa-telegram mr-2"></i>
                        JOIN TELEGRAM
                    </a>
                </div>
                
                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button type="button" class="mobile-menu-button text-gray-300 hover:text-white focus:outline-none focus:text-white">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Mobile Navigation -->
        <div class="mobile-menu hidden md:hidden">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-gray-800">
                <a href="#trading-course" class="text-gray-300 hover:text-primary-green block px-3 py-2 text-sm font-medium">TRADING COURSE</a>
                <a href="#trading-journal" class="text-gray-300 hover:text-primary-green block px-3 py-2 text-sm font-medium">TRADING JOURNAL</a>
                <a href="#newsletter" class="text-gray-300 hover:text-primary-green block px-3 py-2 text-sm font-medium">NEWSLETTER</a>
                <a href="#podcast" class="text-gray-300 hover:text-primary-green block px-3 py-2 text-sm font-medium">PODCAST</a>
                <a href="#indicator" class="text-gray-300 hover:text-primary-green block px-3 py-2 text-sm font-medium">INDICATOR</a>
                <a href="#blog" class="text-gray-300 hover:text-primary-green block px-3 py-2 text-sm font-medium">BLOG</a>
                <a href="https://t.me/edwardkaylian" class="bg-primary-blue hover:bg-blue-700 text-white block px-3 py-2 rounded text-sm font-medium mt-2">
                    <i class="fab fa-telegram mr-2"></i>
                    JOIN TELEGRAM
                </a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="main-content m-0 p-0">
        <?php echo $content; ?>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-8 mt-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <h5 class="text-xl font-bold mb-2">Bullish Ledger Market Signals</h5>
                    <p class="text-gray-300">Unlock Your Trading Potential with Personalized Coaching</p>
                </div>
                <div class="text-left md:text-right">
                    <div class="flex space-x-4 justify-start md:justify-end">
                        <a href="#" class="text-gray-300 hover:text-primary-green transition-colors text-xl">
                            <i class="fab fa-telegram"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-primary-green transition-colors text-xl">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-primary-green transition-colors text-xl">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-primary-green transition-colors text-xl">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
            <hr class="border-gray-700 my-6">
            <div class="text-center">
                <p class="text-gray-400">&copy; 2025 Bullish Ledger Market Signals. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Custom JavaScript -->
    <script>
        // Mobile menu toggle
        document.querySelector('.mobile-menu-button').addEventListener('click', function() {
            document.querySelector('.mobile-menu').classList.toggle('hidden');
        });
        
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
    
    <?php if (isset($additionalScripts)) echo $additionalScripts; ?>
</body>
</html> 