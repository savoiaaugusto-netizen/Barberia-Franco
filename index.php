<?php
$page_title = 'Barbería Franco | Inicio';
include 'includes/header.php';

// Datos para la sección de destacados (Uso avanzado de PHP)
$servicios_destacados = [
    [
        'icono' => 'fa-scissors',
        'titulo' => 'Corte Premium',
        'descripcion' => 'Corte a máquina y tijera con asesoramiento de imagen personalizado.',
        'precio' => '$15.00'
    ],
    [
        'icono' => 'fa-check-double', 
        'titulo' => 'Barba Ritual',
        'descripcion' => 'Perfilado de barba con toalla caliente, vapor ozono y productos premium.',
        'precio' => '$10.00'
    ],
    [
        'icono' => 'fa-spray-can',
        'titulo' => 'Full Urbano',
        'descripcion' => 'El combo perfecto: Corte + Barba Ritual + Limpieza facial exprés.',
        'precio' => '$22.00'
    ]
];
?>

<!-- Hero Section -->
<section class="relative h-[85vh] flex items-center justify-center overflow-hidden">
    <!-- Imagen de fondo generada -->
    <div class="absolute inset-0 z-0">
        <img src="C:/Users/Augusto Savoia/.gemini/antigravity/brain/31972bfe-e521-4fb8-960b-e0efa8191f87/barberia_hero_1782567682618.png" alt="Barbería Franco Interior" class="w-full h-full object-cover object-center opacity-30">
        <div class="absolute inset-0 bg-gradient-to-b from-brand-black/80 via-brand-black/50 to-brand-black"></div>
    </div>
    
    <div class="relative z-10 text-center px-4 max-w-5xl mx-auto mt-10">
        <span class="text-brand-accent font-bold tracking-[0.2em] uppercase text-sm md:text-base mb-4 block animate-fade-in">Más que un corte, una experiencia</span>
        <h1 class="text-6xl md:text-8xl lg:text-[8rem] font-heading font-bold text-white mb-6 drop-shadow-2xl leading-none">
            TU ESTILO <br><span class="gradient-text">NUESTRA REGLA</span>
        </h1>
        <p class="text-lg md:text-xl text-gray-300 mb-10 max-w-2xl mx-auto font-light leading-relaxed">
            La auténtica barbería de barrio donde la tradición se encuentra con las últimas tendencias urbanas.
        </p>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="contacto.php" class="w-full sm:w-auto bg-brand-accent hover:bg-yellow-500 text-brand-black px-10 py-4 rounded-sm font-heading font-bold text-lg tracking-wider transition-all hover:scale-105 shadow-[0_0_30px_rgba(217,119,6,0.4)] uppercase">
                Agendar Turno
            </a>
            <a href="servicios.php" class="w-full sm:w-auto bg-transparent border border-white hover:border-brand-accent hover:text-brand-accent text-white px-10 py-4 rounded-sm font-heading font-bold text-lg tracking-wider transition-all uppercase">
                Ver Servicios
            </a>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-24 bg-brand-black relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-20">
            <h2 class="text-4xl md:text-5xl font-heading font-bold mb-4 text-white">NUESTROS <span class="gradient-text">DESTACADOS</span></h2>
            <div class="w-24 h-1 bg-brand-accent mx-auto"></div>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 lg:gap-12">
            <?php foreach ($servicios_destacados as $servicio): ?>
            <div class="bg-brand-dark p-8 md:p-10 border border-brand-gray rounded-sm group hover:border-brand-accent/50 transition-all duration-500 hover:-translate-y-2 hover:shadow-[0_20px_40px_rgba(0,0,0,0.6)] relative overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-br from-brand-accent/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                
                <div class="w-20 h-20 bg-brand-black border border-brand-gray rounded-full flex items-center justify-center mb-8 group-hover:border-brand-accent group-hover:scale-110 transition-all duration-500 relative z-10 shadow-inner">
                    <i class="fa-solid <?= $servicio['icono'] ?> text-3xl text-brand-accent"></i>
                </div>
                
                <h3 class="text-2xl font-heading font-bold text-white mb-4 relative z-10"><?= htmlspecialchars($servicio['titulo']) ?></h3>
                <p class="text-gray-400 mb-8 min-h-[4rem] relative z-10 font-light leading-relaxed">
                    <?= htmlspecialchars($servicio['descripcion']) ?>
                </p>
                <div class="flex justify-between items-center border-t border-brand-gray/50 pt-6 relative z-10">
                    <span class="text-2xl font-heading font-bold text-brand-accent"><?= htmlspecialchars($servicio['precio']) ?></span>
                    <a href="contacto.php" class="text-gray-300 text-sm font-bold uppercase hover:text-brand-accent transition-colors flex items-center">Reservar <i class="fa-solid fa-arrow-right ml-2 text-xs"></i></a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        
        <div class="text-center mt-16">
            <a href="servicios.php" class="inline-flex items-center text-brand-accent hover:text-white transition-colors group font-medium uppercase tracking-widest text-sm">
                Ver lista completa 
                <i class="fa-solid fa-arrow-right ml-2 transform group-hover:translate-x-2 transition-transform"></i>
            </a>
        </div>
    </div>
</section>

<!-- About / Vibe Section -->
<section class="py-24 bg-brand-dark relative overflow-hidden border-t border-brand-gray">
    <!-- Luces difusas de fondo -->
    <div class="absolute top-1/2 left-0 w-96 h-96 bg-brand-accent/5 rounded-full blur-[100px] -translate-y-1/2 -translate-x-1/2 pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="order-2 lg:order-1 relative group">
                <div class="absolute -inset-4 bg-brand-accent/20 blur-2xl rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-700 pointer-events-none"></div>
                <!-- Placeholder de imagen -->
                <img src="https://placehold.co/600x800/121212/d97706?text=Barber+Vibe" alt="Ambiente de Barbería" class="w-full h-[600px] object-cover rounded-sm border border-brand-gray shadow-2xl relative z-10 grayscale hover:grayscale-0 transition-all duration-700">
                <div class="absolute -bottom-8 -right-8 bg-brand-black border-l-4 border-brand-accent p-8 shadow-2xl z-20 hidden md:block group-hover:scale-105 transition-transform duration-500">
                    <p class="text-4xl font-heading font-bold text-white mb-1">+5 Años</p>
                    <p class="text-gray-400 font-medium tracking-wider uppercase text-sm">Marcando Estilo</p>
                </div>
            </div>
            <div class="order-1 lg:order-2">
                <span class="text-brand-accent font-bold tracking-[0.2em] uppercase text-sm mb-4 block">Nuestra Esencia</span>
                <h2 class="text-4xl md:text-6xl font-heading font-bold mb-8 text-white leading-tight">LA CULTURA <br><span class="gradient-text">DEL BARRIO</span></h2>
                <p class="text-gray-300 text-lg mb-6 leading-relaxed font-light">
                    En <strong class="text-white font-medium">Barbería Franco</strong> no solo cortamos cabello, creamos identidad. Nacimos en el corazón del barrio con la misión de elevar el estándar del cuidado masculino urbano.
                </p>
                <p class="text-gray-400 mb-10 leading-relaxed font-light">
                    Nuestros barberos son artistas apasionados por los detalles. Ya sea que busques un fade milimétrico, un diseño freestyle o un ritual de barba tradicional, aquí encontrarás tu lugar. Buena música, bebida fría y el mejor ambiente asegurado.
                </p>
                
                <ul class="space-y-5 mb-10">
                    <li class="flex items-center text-gray-300 group">
                        <div class="w-8 h-8 rounded-full bg-brand-black border border-brand-gray flex items-center justify-center mr-4 group-hover:border-brand-accent transition-colors">
                            <i class="fa-solid fa-check text-brand-accent text-sm"></i>
                        </div>
                        <span class="font-medium group-hover:text-white transition-colors">Barberos certificados internacionalmente</span>
                    </li>
                    <li class="flex items-center text-gray-300 group">
                        <div class="w-8 h-8 rounded-full bg-brand-black border border-brand-gray flex items-center justify-center mr-4 group-hover:border-brand-accent transition-colors">
                            <i class="fa-solid fa-check text-brand-accent text-sm"></i>
                        </div>
                        <span class="font-medium group-hover:text-white transition-colors">Productos de primeras marcas (Suavecito, Reuzel)</span>
                    </li>
                    <li class="flex items-center text-gray-300 group">
                        <div class="w-8 h-8 rounded-full bg-brand-black border border-brand-gray flex items-center justify-center mr-4 group-hover:border-brand-accent transition-colors">
                            <i class="fa-solid fa-check text-brand-accent text-sm"></i>
                        </div>
                        <span class="font-medium group-hover:text-white transition-colors">Zona de relax con PS5 y bebidas frías</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
