<?php
$page_title = 'Brian Franco Barbería | Berazategui';
include 'includes/header.php';

// Servicios principales (Sin precios)
$servicios_destacados = [
    [
        'icono' => 'fa-scissors',
        'titulo' => 'Corte de Pelo',
        'descripcion' => 'Asesoramiento personalizado, cortes clásicos, modernos y degradados (fade) utilizando técnicas precisas a máquina y tijera.',
        'img' => 'corte.jpg'
    ],
    [
        'icono' => 'fa-check-double', 
        'titulo' => 'Barba',
        'descripcion' => 'Perfilado, rebaje de volumen, diseño de líneas y ritual completo para el cuidado de tu barba con productos específicos.',
        'img' => 'barba.jpg'
    ],
    [
        'icono' => 'fa-spray-can',
        'titulo' => 'Tintura',
        'descripcion' => 'Servicios de coloración, desde cobertura de canas hasta diseños de color y platinados para cambiar tu look radicalmente.',
        'img' => 'tintura.jpg'
    ]
];
?>

<!-- Barber Selection Section -->
<section id="barberos" class="w-full min-h-[100vh] lg:min-h-[calc(100vh-5rem)] grid grid-cols-1 lg:grid-cols-2 relative z-10">
    <!-- Barbero Izquierda -->
    <a href="https://wa.me/5491128347484?text=Hola,%20quiero%20sacar%20turno%20con%20Juan%20Franco" class="relative group block h-[50vh] lg:h-auto overflow-hidden border-b lg:border-b-0 lg:border-r border-brand-gray/50">
        <img src="barbero_1.jpg" alt="Juan Franco" class="absolute inset-0 w-full h-full object-cover opacity-80 group-hover:opacity-100 group-hover:scale-105 transition-all duration-700">
        <div class="absolute inset-0 bg-gradient-to-t from-brand-black/90 via-brand-black/30 to-transparent group-hover:from-brand-black/70 transition-all duration-500"></div>
        <div class="absolute inset-x-0 bottom-12 text-center z-10 px-4">
            <h2 class="text-4xl md:text-5xl font-heading font-bold text-white mb-4 tracking-wider drop-shadow-[0_5px_5px_rgba(0,0,0,0.8)]">JUAN FRANCO</h2>
            <div class="inline-flex items-center justify-center bg-brand-accent hover:bg-yellow-500 text-brand-black font-heading font-bold text-lg px-8 py-3 rounded-sm transition-all duration-300 transform group-hover:-translate-y-1 group-hover:shadow-[0_10px_30px_rgba(217,119,6,0.6)] uppercase tracking-[0.1em]">
                Sacar Turno <i class="fa-solid fa-arrow-right ml-3"></i>
            </div>
        </div>
    </a>
    
    <!-- Barbero Derecha -->
    <a href="https://wa.me/5491128347484?text=Hola,%20quiero%20sacar%20turno%20con%20Brian%20Franco" class="relative group block h-[50vh] lg:h-auto overflow-hidden">
        <img src="barbero_2.jpg" alt="Brian Franco" class="absolute inset-0 w-full h-full object-cover opacity-80 group-hover:opacity-100 group-hover:scale-105 transition-all duration-700">
        <div class="absolute inset-0 bg-gradient-to-t from-brand-black/90 via-brand-black/30 to-transparent group-hover:from-brand-black/70 transition-all duration-500"></div>
        <div class="absolute inset-x-0 bottom-12 text-center z-10 px-4">
            <h2 class="text-4xl md:text-5xl font-heading font-bold text-white mb-4 tracking-wider drop-shadow-[0_5px_5px_rgba(0,0,0,0.8)]">BRIAN FRANCO</h2>
            <div class="inline-flex items-center justify-center bg-brand-accent hover:bg-yellow-500 text-brand-black font-heading font-bold text-lg px-8 py-3 rounded-sm transition-all duration-300 transform group-hover:-translate-y-1 group-hover:shadow-[0_10px_30px_rgba(217,119,6,0.6)] uppercase tracking-[0.1em]">
                Sacar Turno <i class="fa-solid fa-arrow-right ml-3"></i>
            </div>
        </div>
    </a>
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
            <div class="bg-brand-dark p-8 md:p-10 border border-brand-gray rounded-sm group hover:border-brand-accent/50 transition-all duration-1000 hover:-translate-y-2 hover:shadow-[0_20px_40px_rgba(0,0,0,0.6)] relative overflow-hidden flex flex-col items-center text-center min-h-[350px] opacity-0 translate-y-12 reveal-element">
                
                <!-- Fondo Translúcido -->
                <div class="absolute inset-0 z-0">
                    <img src="<?= htmlspecialchars($servicio['img']) ?>" alt="<?= htmlspecialchars($servicio['titulo']) ?>" class="w-full h-full object-cover opacity-60 group-hover:opacity-80 transition-all duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-brand-dark/60 group-hover:bg-brand-dark/40 transition-colors duration-500"></div>
                </div>

                <div class="absolute inset-0 bg-gradient-to-br from-brand-accent/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 z-0"></div>
                
                <div class="w-20 h-20 bg-brand-black/80 backdrop-blur-sm border border-brand-gray rounded-full flex items-center justify-center mb-6 group-hover:border-brand-accent group-hover:scale-110 transition-all duration-500 relative z-10 shadow-inner">
                    <i class="fa-solid <?= $servicio['icono'] ?> text-3xl text-brand-accent"></i>
                </div>
                
                <h3 class="text-2xl font-heading font-bold text-white mb-4 relative z-10 drop-shadow-md"><?= htmlspecialchars($servicio['titulo']) ?></h3>
                <p class="text-gray-300 mb-6 relative z-10 font-light leading-relaxed flex-grow drop-shadow-md">
                    <?= htmlspecialchars($servicio['descripcion']) ?>
                </p>
                <div class="pt-4 relative z-10 w-full border-t border-brand-gray/50">
                    <a href="#barberos" class="text-gray-200 text-sm font-bold uppercase hover:text-brand-accent transition-colors flex items-center justify-center drop-shadow-md">Elegir Barbero <i class="fa-solid fa-arrow-up ml-2 text-xs"></i></a>
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
                <a href="#barberos" class="inline-flex items-center text-brand-black bg-white hover:bg-gray-200 px-8 py-3 font-heading font-bold uppercase tracking-wider transition-colors mt-4">
                    Sacar Turno <i class="fa-solid fa-arrow-up ml-3 text-brand-accent"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                // Pequeño delay en cascada si aparecen varios a la vez
                setTimeout(() => {
                    entry.target.classList.remove('opacity-0', 'translate-y-12');
                    entry.target.classList.add('opacity-100', 'translate-y-0');
                }, index * 150);
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.15 });

    document.querySelectorAll('.reveal-element').forEach(el => observer.observe(el));
});
</script>

<?php include 'includes/footer.php'; ?>
