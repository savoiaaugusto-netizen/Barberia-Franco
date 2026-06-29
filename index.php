<?php
$page_title = 'Brian Franco Barbería | Berazategui';
include 'includes/header.php';

// Servicios principales (Sin precios)
$servicios_destacados = [
    [
        'icono' => 'fa-scissors',
        'titulo' => 'Corte de Pelo',
        'descripcion' => 'Asesoramiento personalizado, cortes clásicos, modernos y degradados (fade) utilizando técnicas precisas a máquina y tijera.'
    ],
    [
        'icono' => 'fa-check-double', 
        'titulo' => 'Barba',
        'descripcion' => 'Perfilado, rebaje de volumen, diseño de líneas y ritual completo para el cuidado de tu barba con productos específicos.'
    ],
    [
        'icono' => 'fa-spray-can',
        'titulo' => 'Tintura',
        'descripcion' => 'Servicios de coloración, desde cobertura de canas hasta diseños de color y platinados para cambiar tu look radicalmente.'
    ]
];
?>

<!-- Hero Section -->
<section class="relative min-h-[85vh] flex items-center justify-center overflow-hidden py-16">
    <!-- IMAGEN HERO -->
    <div class="absolute inset-0 z-0">
        <img src="hero.jpg" alt="Brian Franco y su equipo" class="w-full h-full object-cover object-top opacity-30">
        <div class="absolute inset-0 bg-gradient-to-b from-brand-black/80 via-brand-black/50 to-brand-black"></div>
    </div>
    
    <div class="relative z-10 text-center px-4 max-w-5xl mx-auto mt-12">
        <span class="text-brand-accent font-bold tracking-[0.2em] uppercase text-sm md:text-base mb-4 flex flex-col md:flex-row items-center justify-center animate-fade-in">
            <span class="flex items-center"><i class="fa-solid fa-location-dot mr-2"></i> C.164 1328 E 13 y 14</span>
            <span class="md:ml-2">(Berazategui)</span>
        </span>
        <h1 class="text-5xl md:text-6xl lg:text-[5.5rem] font-heading font-bold text-white mb-6 drop-shadow-2xl leading-none tracking-tight">
            BRIAN FRANCO <br><span class="gradient-text">BARBERÍA</span>
        </h1>
        <p class="text-lg md:text-xl text-gray-300 mb-10 max-w-2xl mx-auto font-light leading-relaxed">
            Los mejores especialistas en estética masculina de Berazategui.
        </p>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 flex-wrap">
            <a href="contacto.php" class="w-full sm:w-auto bg-brand-accent hover:bg-yellow-500 text-brand-black px-8 py-4 rounded-sm font-heading font-bold text-lg tracking-wider transition-all hover:scale-105 shadow-[0_0_30px_rgba(217,119,6,0.4)] uppercase">
                Agendar Turno
            </a>
            <a href="productos.php" class="w-full sm:w-auto bg-transparent border border-white hover:border-brand-accent hover:text-brand-accent text-white px-8 py-4 rounded-sm font-heading font-bold text-lg tracking-wider transition-all uppercase">
                Ver Productos
            </a>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-24 bg-brand-black relative" id="servicios">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-20">
            <h2 class="text-4xl md:text-5xl font-heading font-bold mb-4 text-white">NUESTROS <span class="gradient-text">SERVICIOS</span></h2>
            <div class="w-24 h-1 bg-brand-accent mx-auto"></div>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 lg:gap-12">
            <?php foreach ($servicios_destacados as $servicio): ?>
            <div class="bg-brand-dark p-8 md:p-10 border border-brand-gray rounded-sm group hover:border-brand-accent/50 transition-all duration-500 hover:-translate-y-2 hover:shadow-[0_20px_40px_rgba(0,0,0,0.6)] relative overflow-hidden flex flex-col items-center text-center">
                <div class="absolute inset-0 bg-gradient-to-br from-brand-accent/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                
                <div class="w-20 h-20 bg-brand-black border border-brand-gray rounded-full flex items-center justify-center mb-6 group-hover:border-brand-accent group-hover:scale-110 transition-all duration-500 relative z-10 shadow-inner">
                    <i class="fa-solid <?= $servicio['icono'] ?> text-3xl text-brand-accent"></i>
                </div>
                
                <h3 class="text-2xl font-heading font-bold text-white mb-4 relative z-10"><?= htmlspecialchars($servicio['titulo']) ?></h3>
                <p class="text-gray-400 mb-6 relative z-10 font-light leading-relaxed flex-grow">
                    <?= htmlspecialchars($servicio['descripcion']) ?>
                </p>
                <div class="pt-4 relative z-10 w-full border-t border-brand-gray/50">
                    <a href="contacto.php" class="text-gray-300 text-sm font-bold uppercase hover:text-brand-accent transition-colors flex items-center justify-center">Consultar turnos <i class="fa-solid fa-arrow-right ml-2 text-xs"></i></a>
                </div>
            </div>
            <?php endforeach; ?>
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
                <!-- Foto del Local -->
                <img src="local.jpg" alt="Interior de la Barbería" class="w-full h-[600px] object-cover rounded-sm border border-brand-gray shadow-2xl relative z-10 transition-all duration-700 hover:scale-[1.02]">
                <div class="absolute -bottom-8 -right-8 bg-brand-black border-l-4 border-brand-accent p-8 shadow-2xl z-20 hidden md:block group-hover:scale-105 transition-transform duration-500">
                    <p class="text-gray-400 font-medium tracking-wider uppercase text-sm mb-1">Local de</p>
                    <p class="text-2xl font-heading font-bold text-white">Berazategui</p>
                </div>
            </div>
            <div class="order-1 lg:order-2">
                <span class="text-brand-accent font-bold tracking-[0.2em] uppercase text-sm mb-4 block">Nuestra Esencia</span>
                <h2 class="text-4xl md:text-6xl font-heading font-bold mb-8 text-white leading-tight">SIMPLICIDAD Y <br><span class="gradient-text">CALIDAD</span></h2>
                <p class="text-gray-300 text-lg mb-6 leading-relaxed font-light">
                    Ubicados en <strong class="text-white font-medium">Berazategui</strong>, en Brian Franco Barbería buscamos brindarte un servicio directo y de primera calidad.
                </p>
                <p class="text-gray-400 mb-10 leading-relaxed font-light">
                    Nuestra filosofía es simple: buenos cortes, excelente atención y buena música. Venís, te sentás y salís con tu mejor versión.
                </p>
                
                <a href="contacto.php" class="inline-flex items-center text-brand-black bg-white hover:bg-gray-200 px-8 py-3 font-heading font-bold uppercase tracking-wider transition-colors">
                    Visítanos Hoy <i class="fa-solid fa-location-arrow ml-3"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
