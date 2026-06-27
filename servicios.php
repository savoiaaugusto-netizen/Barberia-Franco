<?php
$page_title = 'Barbería Franco | Nuestros Servicios';
include 'includes/header.php';

// Data Arrays for dynamic rendering
$categorias = [
    'cortes' => [
        'titulo' => 'Cortes de Cabello',
        'icono' => 'fa-scissors',
        'items' => [
            ['nombre' => 'Corte Clásico', 'precio' => '$12.00', 'desc' => 'Corte tradicional a tijera o máquina con acabados precisos.'],
            ['nombre' => 'Fade / Degradado', 'precio' => '$15.00', 'desc' => 'Degradado perfecto (Skin, Low, Mid, High fade) a navaja.'],
            ['nombre' => 'Corte + Diseño', 'precio' => '$18.00', 'desc' => 'Corte a elección más freestyle o líneas de diseño.'],
            ['nombre' => 'Corte Kids', 'precio' => '$10.00', 'desc' => 'Estilo urbano para los más chicos (menores de 12).'],
        ]
    ],
    'barbas' => [
        'titulo' => 'Cuidado de Barba',
        'icono' => 'fa-check-double', 
        'items' => [
            ['nombre' => 'Perfilado Simple', 'precio' => '$7.00', 'desc' => 'Marcado de líneas a máquina y rebaje de volumen.'],
            ['nombre' => 'Barba Ritual Clásico', 'precio' => '$12.00', 'desc' => 'Toalla caliente, vapor ozono, navaja y aceites esenciales.'],
            ['nombre' => 'Tinte y Camuflaje', 'precio' => '$15.00', 'desc' => 'Cobertura de canas o realce de color temporal.'],
        ]
    ],
    'combos' => [
        'titulo' => 'Combos Exclusivos',
        'icono' => 'fa-star',
        'items' => [
            ['nombre' => 'Combo Franco (Corte + Barba)', 'precio' => '$22.00', 'desc' => 'La experiencia completa para renovar tu look al 100%.'],
            ['nombre' => 'Full Premium', 'precio' => '$28.00', 'desc' => 'Corte + Barba + Mascarilla Black Peel Off facial.'],
        ]
    ]
];

$productos = [
    ['img' => 'https://placehold.co/500x500/1e1e1e/d97706?text=Pomada+Mate', 'nombre' => 'Pomada Texturizante Mate', 'precio' => '$18.00'],
    ['img' => 'https://placehold.co/500x500/1e1e1e/d97706?text=Aceite+Barba', 'nombre' => 'Óleo Crecimiento Barba', 'precio' => '$15.00'],
    ['img' => 'https://placehold.co/500x500/1e1e1e/d97706?text=Aftershave', 'nombre' => 'Loción Aftershave Citrus', 'precio' => '$20.00'],
    ['img' => 'https://placehold.co/500x500/1e1e1e/d97706?text=Cera+Brillo', 'nombre' => 'Cera Fijación Extrema', 'precio' => '$16.00']
];
?>

<!-- Page Header -->
<div class="bg-brand-black pt-28 pb-16 border-b border-brand-gray relative overflow-hidden">
    <div class="absolute top-0 right-0 w-96 h-96 bg-brand-accent/10 rounded-full blur-[100px] pointer-events-none"></div>
    <div class="absolute bottom-0 left-0 w-64 h-64 bg-brand-accent/5 rounded-full blur-[80px] pointer-events-none"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <h1 class="text-5xl md:text-7xl font-heading font-bold mb-6 text-white tracking-tight">
            NUESTROS <span class="gradient-text">SERVICIOS</span>
        </h1>
        <p class="text-gray-400 max-w-2xl mx-auto text-lg md:text-xl font-light">
            Conoce nuestro menú diseñado para mantenerte fresco. Técnicas de vanguardia y atención al detalle.
        </p>
    </div>
</div>

<!-- Services List -->
<section class="py-20 bg-brand-black relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <?php foreach($categorias as $key => $categoria): ?>
        <div class="mb-20 last:mb-0">
            <div class="flex items-center mb-10">
                <div class="w-12 h-12 rounded-full bg-brand-dark border border-brand-gray flex items-center justify-center mr-5 shadow-[0_0_15px_rgba(217,119,6,0.15)]">
                    <i class="fa-solid <?= $categoria['icono'] ?> text-2xl text-brand-accent"></i>
                </div>
                <h2 class="text-3xl md:text-4xl font-heading font-bold text-white tracking-wide"><?= $categoria['titulo'] ?></h2>
                <div class="flex-grow h-px bg-gradient-to-r from-brand-gray to-transparent ml-8"></div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                <?php foreach($categoria['items'] as $item): ?>
                <div class="bg-brand-dark p-6 md:p-8 border border-brand-gray hover:border-brand-accent/60 rounded-sm flex justify-between items-center group transition-all duration-300 hover:shadow-xl hover:-translate-y-1 relative overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-r from-brand-accent/0 via-brand-accent/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
                    
                    <div class="relative z-10 pr-4">
                        <h3 class="text-xl md:text-2xl font-heading font-bold text-gray-200 group-hover:text-brand-accent transition-colors"><?= htmlspecialchars($item['nombre']) ?></h3>
                        <p class="text-sm md:text-base text-gray-400 mt-2 font-light leading-relaxed"><?= htmlspecialchars($item['desc']) ?></p>
                    </div>
                    <div class="relative z-10 text-2xl md:text-3xl font-heading font-bold text-white pl-4 border-l border-brand-gray group-hover:border-brand-accent/30 transition-colors flex-shrink-0">
                        <?= htmlspecialchars($item['precio']) ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endforeach; ?>

    </div>
</section>

<!-- Shop Section -->
<section class="py-24 bg-brand-dark border-t border-brand-gray relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16">
            <span class="text-brand-accent font-bold tracking-[0.2em] uppercase text-sm mb-3 block">Mantenimiento</span>
            <h2 class="text-4xl md:text-5xl font-heading font-bold mb-4 text-white">PRODUCTOS <span class="gradient-text">PREMIUM</span></h2>
            <div class="w-16 h-1 bg-brand-accent mx-auto mt-6 mb-6"></div>
            <p class="text-gray-400 text-lg">Lleva el cuidado profesional de la barbería a tu casa.</p>
        </div>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <?php foreach($productos as $prod): ?>
            <div class="bg-brand-black border border-brand-gray rounded-sm group hover:border-brand-accent/50 transition-all duration-300 hover:shadow-[0_10px_30px_rgba(0,0,0,0.5)] overflow-hidden flex flex-col">
                <div class="relative overflow-hidden aspect-square border-b border-brand-gray">
                    <div class="absolute inset-0 bg-brand-accent/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-10"></div>
                    <img src="<?= $prod['img'] ?>" alt="<?= htmlspecialchars($prod['nombre']) ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                </div>
                <div class="p-6 text-center flex-grow flex flex-col justify-between">
                    <div>
                        <h3 class="text-lg font-heading font-bold text-white mb-2 leading-tight"><?= htmlspecialchars($prod['nombre']) ?></h3>
                        <p class="text-brand-accent font-bold text-2xl my-4"><?= htmlspecialchars($prod['precio']) ?></p>
                    </div>
                    <a href="contacto.php" class="inline-block w-full border border-gray-600 hover:border-brand-accent hover:bg-brand-accent text-white font-heading tracking-wider py-3 transition-all uppercase text-sm">
                        Consultar
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
