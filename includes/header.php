<?php
// includes/header.php
$page_title = $page_title ?? 'Brian Franco Barbería | Berazategui';
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($page_title) ?></title>
    <meta name="description" content="Brian Franco Barbería en Berazategui. Cortes de pelo, barba y tintura con el mejor estilo.">
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <!-- Configuración personalizada de Tailwind -->
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        brand: {
                            black: '#0a0a0a',
                            dark: '#141414',
                            gray: '#2a2a2a',
                            light: '#f4f4f4',
                            accent: '#d97706', // Amber-600
                        }
                    },
                    fontFamily: {
                        heading: ['Oswald', 'sans-serif'],
                        body: ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #0a0a0a; color: #f4f4f4; }
        h1, h2, h3, h4, h5, h6 { font-family: 'Oswald', sans-serif; text-transform: uppercase; }
        .gradient-text {
            background: linear-gradient(to right, #d97706, #fbbf24);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
</head>
<body class="antialiased flex flex-col min-h-screen selection:bg-brand-accent selection:text-white">
    
    <!-- Navegación -->
    <nav class="bg-brand-dark/95 backdrop-blur-md fixed w-full z-50 border-b border-brand-gray transition-all duration-300" id="navbar">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center">
                <div class="flex-shrink-0 flex items-center">
                    <a href="index.php" class="text-2xl md:text-3xl font-heading font-bold tracking-wider text-white">
                        B. FRANCO <span class="text-brand-accent">BARBERÍA</span>
                    </a>
                </div>
                <!-- Menú Desktop -->
                <div class="hidden md:flex items-center space-x-6 lg:space-x-8">
                    <a href="index.php" class="font-medium transition-colors hover:text-brand-accent <?= $current_page == 'index.php' ? 'text-brand-accent' : 'text-gray-300' ?>">Inicio</a>
                    <a href="servicios.php" class="font-medium transition-colors hover:text-brand-accent <?= $current_page == 'servicios.php' ? 'text-brand-accent' : 'text-gray-300' ?>">Servicios</a>
                    <a href="productos.php" class="font-medium transition-colors hover:text-brand-accent <?= $current_page == 'productos.php' ? 'text-brand-accent' : 'text-gray-300' ?>">Ver Productos</a>
                    <a href="contacto.php" class="font-medium transition-colors hover:text-brand-accent <?= $current_page == 'contacto.php' ? 'text-brand-accent' : 'text-gray-300' ?>">Contacto</a>
                    <a href="contacto.php" class="bg-brand-accent hover:bg-yellow-600 text-white px-6 py-2 rounded-sm font-heading tracking-wide transition-transform hover:scale-105 shadow-[0_0_15px_rgba(217,119,6,0.3)]">
                        RESERVAR
                    </a>
                </div>
                <!-- Botón Menú Mobile -->
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-btn" class="text-gray-300 hover:text-white focus:outline-none p-2 transition-transform active:scale-95">
                        <i class="fa-solid fa-bars text-2xl"></i>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Menú Mobile -->
        <div id="mobile-menu" class="hidden md:hidden bg-brand-dark border-b border-brand-gray absolute w-full shadow-2xl">
            <div class="px-4 pt-2 pb-6 space-y-2 flex flex-col">
                <a href="index.php" class="block px-3 py-3 text-base font-medium hover:text-brand-accent hover:bg-brand-gray rounded-md transition-colors <?= $current_page == 'index.php' ? 'text-brand-accent bg-brand-gray/50' : 'text-gray-300' ?>">Inicio</a>
                <a href="servicios.php" class="block px-3 py-3 text-base font-medium hover:text-brand-accent hover:bg-brand-gray rounded-md transition-colors <?= $current_page == 'servicios.php' ? 'text-brand-accent bg-brand-gray/50' : 'text-gray-300' ?>">Servicios</a>
                <a href="productos.php" class="block px-3 py-3 text-base font-medium hover:text-brand-accent hover:bg-brand-gray rounded-md transition-colors <?= $current_page == 'productos.php' ? 'text-brand-accent bg-brand-gray/50' : 'text-gray-300' ?>">Ver Productos</a>
                <a href="contacto.php" class="block px-3 py-3 text-base font-medium hover:text-brand-accent hover:bg-brand-gray rounded-md transition-colors <?= $current_page == 'contacto.php' ? 'text-brand-accent bg-brand-gray/50' : 'text-gray-300' ?>">Contacto</a>
                <a href="contacto.php" class="block px-3 py-3 mt-4 text-center bg-brand-accent text-white rounded-sm font-heading tracking-wide active:bg-yellow-600">RESERVAR AHORA</a>
            </div>
        </div>
    </nav>
    <main class="flex-grow pt-20">
