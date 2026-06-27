<?php
$page_title = 'Brian Franco Barbería | Contacto y Reservas';

// Lógica de Validación Formulario (PHP POST)
$mensaje_estado = '';
$tipo_alerta = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars(trim($_POST['nombre'] ?? ''));
    $email = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
    $servicio = htmlspecialchars(trim($_POST['servicio'] ?? ''));
    
    if (empty($nombre) || empty($servicio)) {
        $mensaje_estado = "Por favor, completa los campos requeridos.";
        $tipo_alerta = "error";
    } else {
        $mensaje_estado = "¡Reserva solicitada con éxito, $nombre! Nos pondremos en contacto pronto.";
        $tipo_alerta = "exito";
        $_POST = array(); 
    }
}

include 'includes/header.php';
?>

<!-- Header de Página -->
<div class="bg-brand-black pt-28 pb-12 border-b border-brand-gray relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <h1 class="text-4xl md:text-6xl font-heading font-bold mb-4 text-white uppercase tracking-tight">AGENDA TU <span class="gradient-text">TURNO</span></h1>
        <p class="text-gray-400 text-lg">Te esperamos en Berazategui. Escríbenos para agilizar tu reserva.</p>
    </div>
</div>

<section class="py-20 bg-brand-black min-h-[60vh] relative overflow-hidden">
    <div class="absolute -left-[20%] top-20 w-[40%] h-[40%] bg-brand-accent/5 rounded-full blur-[120px] pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <?php if(!empty($mensaje_estado)): ?>
            <div class="mb-10 p-5 border-l-4 <?= $tipo_alerta === 'exito' ? 'bg-green-900/20 border-green-500 text-green-300' : 'bg-red-900/20 border-red-500 text-red-300' ?> rounded-r-sm shadow-lg transform transition-all duration-500 flex items-center animate-fade-in">
                <i class="fa-solid <?= $tipo_alerta === 'exito' ? 'fa-circle-check text-green-500' : 'fa-circle-exclamation text-red-500' ?> mr-4 text-2xl"></i>
                <p class="font-medium text-lg"><?= $mensaje_estado ?></p>
            </div>
        <?php endif; ?>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16">
            
            <!-- Barra Lateral: Info -->
            <div class="lg:col-span-5 bg-brand-dark p-8 md:p-10 border border-brand-gray rounded-sm shadow-xl h-fit">
                <h2 class="text-2xl font-heading font-bold uppercase mb-8 border-b border-brand-gray/50 pb-4 text-white">Contacto Rápido</h2>
                
                <div class="space-y-8">
                    <!-- Modificación solicitada: Énfasis en el teléfono predeterminado de Bs As -->
                    <div class="flex items-start group">
                        <div class="w-14 h-14 bg-brand-black rounded-full flex items-center justify-center border border-brand-gray text-brand-accent flex-shrink-0 group-hover:border-brand-accent transition-colors shadow-inner">
                            <i class="fa-brands fa-whatsapp text-2xl"></i>
                        </div>
                        <div class="ml-5">
                            <h3 class="font-heading tracking-wide font-bold text-white text-lg">WhatsApp (Buenos Aires)</h3>
                            <p class="text-brand-accent font-bold text-xl mt-1">+54 9 11 1234-5678</p>
                            <p class="text-gray-400 text-sm mt-2">Envíanos un mensaje para confirmar disponibilidad al instante.</p>
                            <a href="https://wa.me/5491112345678" target="_blank" class="text-white bg-green-600 hover:bg-green-500 px-4 py-2 rounded-sm text-sm font-medium transition-colors mt-3 inline-flex items-center">
                                Chatear ahora <i class="fa-solid fa-arrow-right ml-2 text-xs"></i>
                            </a>
                        </div>
                    </div>

                    <div class="flex items-start group">
                        <div class="w-14 h-14 bg-brand-black rounded-full flex items-center justify-center border border-brand-gray text-brand-accent flex-shrink-0 group-hover:border-brand-accent transition-colors shadow-inner">
                            <i class="fa-solid fa-location-dot text-xl"></i>
                        </div>
                        <div class="ml-5">
                            <h3 class="font-heading tracking-wide font-bold text-white text-lg">Ubicación</h3>
                            <p class="text-gray-400 mt-2 leading-relaxed">C.164 1328 E 13 y 14<br>Berazategui, Buenos Aires</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Formulario UI -->
            <div class="lg:col-span-7 bg-brand-dark p-8 md:p-12 border border-brand-gray border-t-4 border-t-brand-accent rounded-sm shadow-[0_20px_50px_rgba(0,0,0,0.5)]">
                <div class="mb-8">
                    <h2 class="text-3xl font-heading font-bold uppercase text-white mb-2">Consulta tu Turno</h2>
                    <p class="text-gray-400">Déjanos tus datos y qué servicio buscas.</p>
                </div>
                
                <form action="contacto.php" method="POST" class="space-y-6">
                    <div>
                        <label for="nombre" class="block text-sm font-medium text-gray-300 mb-2">Nombre Completo <span class="text-brand-accent">*</span></label>
                        <input type="text" id="nombre" name="nombre" required 
                            class="w-full bg-brand-black border border-brand-gray/80 rounded-sm px-4 py-3.5 text-white focus:outline-none focus:border-brand-accent focus:ring-1 focus:ring-brand-accent transition-all shadow-inner placeholder-gray-600"
                            placeholder="Ej. Juan Pérez">
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="telefono" class="block text-sm font-medium text-gray-300 mb-2">Tu Teléfono (Opcional)</label>
                            <input type="tel" id="telefono" name="telefono"
                                class="w-full bg-brand-black border border-brand-gray/80 rounded-sm px-4 py-3.5 text-white focus:outline-none focus:border-brand-accent focus:ring-1 focus:ring-brand-accent transition-all shadow-inner placeholder-gray-600"
                                placeholder="+54 9 11...">
                        </div>
                        
                        <div>
                            <label for="servicio" class="block text-sm font-medium text-gray-300 mb-2">Servicio <span class="text-brand-accent">*</span></label>
                            <div class="relative">
                                <select id="servicio" name="servicio" required 
                                    class="w-full bg-brand-black border border-brand-gray/80 rounded-sm px-4 py-3.5 text-white focus:outline-none focus:border-brand-accent focus:ring-1 focus:ring-brand-accent appearance-none shadow-inner cursor-pointer">
                                    <option value="" disabled selected>Seleccionar servicio...</option>
                                    <option value="corte">Corte de Pelo</option>
                                    <option value="barba">Barba</option>
                                    <option value="tintura">Tintura</option>
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-gray-400">
                                    <i class="fa-solid fa-chevron-down text-sm"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="pt-4">
                        <button type="submit" class="w-full bg-brand-accent hover:bg-yellow-500 text-brand-black font-heading font-bold text-xl py-5 rounded-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_10px_30px_rgba(217,119,6,0.4)] uppercase tracking-[0.1em] flex justify-center items-center group">
                            Enviar Consulta
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
