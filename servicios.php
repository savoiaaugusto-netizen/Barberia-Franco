<?php
$page_title = 'Brian Franco Barbería | Nuestros Servicios';
include 'includes/header.php';

// Servicios principales (Sin precios según lo solicitado)
$servicios = [
    [
        'titulo' => 'Corte de Pelo',
        'icono' => 'fa-scissors',
        'desc' => 'Asesoramiento personalizado, cortes clásicos, modernos y degradados (fade) utilizando técnicas precisas a máquina y tijera.',
    ],
    [
        'titulo' => 'Barba',
        'icono' => 'fa-check-double', 
        'desc' => 'Perfilado, rebaje de volumen, diseño de líneas y ritual completo para el cuidado de tu barba con productos específicos.',
    ],
    [
        'titulo' => 'Tintura',
        'icono' => 'fa-spray-can',
        'desc' => 'Servicios de coloración, desde cobertura de canas hasta diseños de color y platinados para cambiar tu look radicalmente.',
    ]
];
?>

<!-- Header de Página -->
<div class="bg-brand-black pt-28 pb-16 border-b border-brand-gray relative overflow-hidden">
    <!-- Luces abstractas -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-brand-accent/10 rounded-full blur-[100px] pointer-events-none"></div>
    <div class="absolute bottom-0 left-0 w-64 h-64 bg-brand-accent/5 rounded-full blur-[80px] pointer-events-none"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <h1 class="text-5xl md:text-7xl font-heading font-bold mb-6 text-white tracking-tight">
            NUESTROS <span class="gradient-text">SERVICIOS</span>
        </h1>
        <p class="text-gray-400 max-w-2xl mx-auto text-lg md:text-xl font-light">
            Especialistas en estética masculina en Berazategui.
        </p>
    </div>
</div>

<!-- Listado Dinámico de Servicios -->
<section class="py-20 bg-brand-black relative min-h-[50vh]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <?php foreach($servicios as $item): ?>
            <div class="bg-brand-dark p-8 border border-brand-gray hover:border-brand-accent/60 rounded-sm flex flex-col items-center text-center group transition-all duration-300 hover:shadow-xl hover:-translate-y-1 relative overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-b from-brand-accent/0 via-brand-accent/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
                
                <div class="w-16 h-16 rounded-full bg-brand-black border border-brand-gray flex items-center justify-center mb-6 group-hover:border-brand-accent transition-colors shadow-inner">
                    <i class="fa-solid <?= $item['icono'] ?> text-2xl text-brand-accent"></i>
                </div>
                
                <div class="relative z-10">
                    <h3 class="text-2xl font-heading font-bold text-gray-200 group-hover:text-brand-accent transition-colors mb-4"><?= htmlspecialchars($item['titulo']) ?></h3>
                    <p class="text-base text-gray-400 font-light leading-relaxed"><?= htmlspecialchars($item['desc']) ?></p>
                </div>
                
                <div class="mt-8 pt-6 border-t border-brand-gray/50 w-full relative z-10">
                    <a href="contacto.php" class="text-sm font-bold uppercase tracking-wider text-brand-accent hover:text-white transition-colors">Consultar turnos</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<?php include 'includes/footer.php'; ?>
