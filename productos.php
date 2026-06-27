<?php
$page_title = 'Brian Franco Barbería | Productos';
include 'includes/header.php';

$productos = [
    ['img' => 'https://placehold.co/500x500/121212/d97706?text=Pomada+Mate', 'nombre' => 'Pomada Texturizante Mate', 'categoria' => 'Fijación'],
    ['img' => 'https://placehold.co/500x500/121212/d97706?text=Aceite+Barba', 'nombre' => 'Óleo Crecimiento Barba', 'categoria' => 'Cuidado Facial'],
    ['img' => 'https://placehold.co/500x500/121212/d97706?text=Aftershave', 'nombre' => 'Loción Aftershave Citrus', 'categoria' => 'Post-Afeitado'],
    ['img' => 'https://placehold.co/500x500/121212/d97706?text=Cera+Brillo', 'nombre' => 'Cera Fijación Extrema', 'categoria' => 'Fijación']
];
?>

<!-- Header de Página -->
<div class="bg-brand-black pt-28 pb-16 border-b border-brand-gray relative overflow-hidden">
    <div class="absolute top-0 left-0 w-96 h-96 bg-brand-accent/10 rounded-full blur-[100px] pointer-events-none"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <h1 class="text-5xl md:text-7xl font-heading font-bold mb-6 text-white tracking-tight">
            NUESTROS <span class="gradient-text">PRODUCTOS</span>
        </h1>
        <p class="text-gray-400 max-w-2xl mx-auto text-lg md:text-xl font-light">
            Complementá tu estilo con los mejores productos de estética relacionados a la barbería.
        </p>
    </div>
</div>

<section class="py-20 bg-brand-dark min-h-[50vh] relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <?php foreach($productos as $prod): ?>
            <div class="bg-brand-black border border-brand-gray rounded-sm group hover:border-brand-accent/50 transition-all duration-300 hover:shadow-[0_10px_30px_rgba(0,0,0,0.5)] overflow-hidden flex flex-col">
                <div class="relative overflow-hidden aspect-square border-b border-brand-gray">
                    <div class="absolute inset-0 bg-brand-accent/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-10"></div>
                    <img src="<?= $prod['img'] ?>" alt="<?= htmlspecialchars($prod['nombre']) ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute top-4 left-4 bg-brand-dark border border-brand-gray px-3 py-1 text-xs font-bold uppercase tracking-wider text-brand-accent z-20">
                        <?= htmlspecialchars($prod['categoria']) ?>
                    </div>
                </div>
                <div class="p-6 text-center flex-grow flex flex-col justify-between">
                    <div>
                        <h3 class="text-lg font-heading font-bold text-white mb-4 leading-tight"><?= htmlspecialchars($prod['nombre']) ?></h3>
                    </div>
                    <a href="contacto.php" class="inline-block w-full border border-gray-600 hover:border-brand-accent hover:bg-brand-accent text-white font-heading tracking-wider py-3 transition-all uppercase text-sm">
                        Consultar Stock
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
