<?php
$page_title = 'Brian Franco Barbería | Berazategui';
include 'includes/header.php';

?>

<!-- Hero Section -->
<section class="relative h-[85vh] flex items-center justify-center overflow-hidden">
    <!-- IMAGEN HERO -->
    <div class="absolute inset-0 z-0">
        <img src="C:/Users/Augusto Savoia/.gemini/antigravity/brain/31972bfe-e521-4fb8-960b-e0efa8191f87/barberia_hero_1782567682618.png" alt="Brian Franco Barbería Interior" class="w-full h-full object-cover object-center opacity-30">
        <div class="absolute inset-0 bg-gradient-to-b from-brand-black/80 via-brand-black/50 to-brand-black"></div>
    </div>
    
    <div class="relative z-10 text-center px-4 max-w-5xl mx-auto mt-10">
        <span class="text-brand-accent font-bold tracking-[0.2em] uppercase text-sm md:text-base mb-4 flex flex-col md:flex-row items-center justify-center animate-fade-in">
            <span class="flex items-center"><i class="fa-solid fa-location-dot mr-2"></i> C.164 1328 E 13 y 14</span>
            <span class="md:ml-2">(Berazategui)</span>
        </span>
        <h1 class="text-6xl md:text-8xl lg:text-[8rem] font-heading font-bold text-white mb-6 drop-shadow-2xl leading-none">
            CORTE <br><span class="gradient-text">Y ESTILO</span>
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

<!-- About / Vibe Section -->
<section class="py-24 bg-brand-dark relative overflow-hidden border-t border-brand-gray">
    <!-- Luces difusas de fondo -->
    <div class="absolute top-1/2 left-0 w-96 h-96 bg-brand-accent/5 rounded-full blur-[100px] -translate-y-1/2 -translate-x-1/2 pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="order-2 lg:order-1 relative group">
                <div class="absolute -inset-4 bg-brand-accent/20 blur-2xl rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-700 pointer-events-none"></div>
                <!-- Placeholder Semántico UI -->
                <img src="https://placehold.co/600x800/121212/d97706?text=Barber+Vibe" alt="Ambiente de Barbería" class="w-full h-[600px] object-cover rounded-sm border border-brand-gray shadow-2xl relative z-10 grayscale hover:grayscale-0 transition-all duration-700">
                <div class="absolute -bottom-8 -right-8 bg-brand-black border-l-4 border-brand-accent p-8 shadow-2xl z-20 hidden md:block group-hover:scale-105 transition-transform duration-500">
                    <p class="text-2xl font-heading font-bold text-white mb-1">Berazategui</p>
                    <p class="text-gray-400 font-medium tracking-wider uppercase text-sm">Tu barbería local</p>
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
