<?php
$page_title = 'Barbería Franco | Contacto y Reservas';

// Backend Logic for form submission simulation
$mensaje_estado = '';
$tipo_alerta = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize data
    $nombre = htmlspecialchars(trim($_POST['nombre'] ?? ''));
    $email = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
    $servicio = htmlspecialchars(trim($_POST['servicio'] ?? ''));
    $fecha = htmlspecialchars(trim($_POST['fecha'] ?? ''));
    $comentarios = htmlspecialchars(trim($_POST['comentarios'] ?? ''));
    
    // Basic Validation
    if (empty($nombre) || empty($email) || empty($servicio) || empty($fecha)) {
        $mensaje_estado = "Por favor, completa todos los campos requeridos marcados con *.";
        $tipo_alerta = "error";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $mensaje_estado = "El correo electrónico ingresado no es válido.";
        $tipo_alerta = "error";
    } else {
        // Success simulation
        $mensaje_estado = "¡Reserva solicitada con éxito, $nombre! Te enviaremos la confirmación a $email pronto.";
        $tipo_alerta = "exito";
        // Clear post data after success
        $_POST = array(); 
    }
}

include 'includes/header.php';
?>

<!-- Page Header -->
<div class="bg-brand-black pt-28 pb-12 border-b border-brand-gray relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <h1 class="text-4xl md:text-6xl font-heading font-bold mb-4 text-white uppercase tracking-tight">AGENDA TU <span class="gradient-text">TURNO</span></h1>
        <p class="text-gray-400 text-lg">Asegura tu lugar en la silla. No te quedes sin tu estilo.</p>
    </div>
</div>

<section class="py-20 bg-brand-black min-h-[60vh] relative overflow-hidden">
    <!-- Decorative background -->
    <div class="absolute -left-[20%] top-20 w-[40%] h-[40%] bg-brand-accent/5 rounded-full blur-[120px] pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <!-- PHP Notifications -->
        <?php if(!empty($mensaje_estado)): ?>
            <div class="mb-10 p-5 border-l-4 <?= $tipo_alerta === 'exito' ? 'bg-green-900/20 border-green-500 text-green-300' : 'bg-red-900/20 border-red-500 text-red-300' ?> rounded-r-sm shadow-lg transform transition-all duration-500 flex items-center">
                <i class="fa-solid <?= $tipo_alerta === 'exito' ? 'fa-circle-check text-green-500' : 'fa-circle-exclamation text-red-500' ?> mr-4 text-2xl"></i>
                <p class="font-medium text-lg"><?= $mensaje_estado ?></p>
            </div>
        <?php endif; ?>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16">
            
            <!-- Contact Info Sidebar -->
            <div class="lg:col-span-5 bg-brand-dark p-8 md:p-10 border border-brand-gray rounded-sm shadow-xl">
                <h2 class="text-2xl font-heading font-bold uppercase mb-8 border-b border-brand-gray/50 pb-4 text-white">Información Útil</h2>
                
                <div class="space-y-8">
                    <div class="flex items-start group">
                        <div class="w-14 h-14 bg-brand-black rounded-full flex items-center justify-center border border-brand-gray text-brand-accent flex-shrink-0 group-hover:border-brand-accent transition-colors shadow-inner">
                            <i class="fa-solid fa-location-dot text-xl"></i>
                        </div>
                        <div class="ml-5">
                            <h3 class="font-heading tracking-wide font-bold text-white text-lg">Ubicación</h3>
                            <p class="text-gray-400 mt-2 leading-relaxed">Av. Siempre Viva 742<br>Barrio Urbano, Distrito Central</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start group">
                        <div class="w-14 h-14 bg-brand-black rounded-full flex items-center justify-center border border-brand-gray text-brand-accent flex-shrink-0 group-hover:border-brand-accent transition-colors shadow-inner">
                            <i class="fa-brands fa-whatsapp text-2xl"></i>
                        </div>
                        <div class="ml-5">
                            <h3 class="font-heading tracking-wide font-bold text-white text-lg">Línea Directa</h3>
                            <p class="text-gray-400 mt-2">+54 11 1234-5678</p>
                            <a href="#" class="text-brand-accent text-sm font-medium hover:text-white transition-colors mt-2 inline-flex items-center">
                                Enviar mensaje <i class="fa-solid fa-arrow-right ml-2 text-xs"></i>
                            </a>
                        </div>
                    </div>

                    <div class="flex items-start group">
                        <div class="w-14 h-14 bg-brand-black rounded-full flex items-center justify-center border border-brand-gray text-brand-accent flex-shrink-0 group-hover:border-brand-accent transition-colors shadow-inner">
                            <i class="fa-regular fa-clock text-xl"></i>
                        </div>
                        <div class="ml-5">
                            <h3 class="font-heading tracking-wide font-bold text-white text-lg">Horarios de Atención</h3>
                            <ul class="text-gray-400 mt-2 space-y-1">
                                <li><span class="text-gray-300">Lun a Vie:</span> 10:00 - 20:00</li>
                                <li><span class="text-gray-300">Sábados:</span> 10:00 - 18:00</li>
                                <li><span class="text-brand-accent">Domingos Cerrado</span></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="mt-10 pt-8 border-t border-brand-gray/50">
                    <h3 class="font-heading font-bold text-white mb-2">¿Dudas sobre estilos?</h3>
                    <p class="text-sm text-gray-500 leading-relaxed">Visítanos directamente. Nuestros barberos te asesorarán sobre el corte que mejor va con tu tipo de rostro y cabello, sin compromiso.</p>
                </div>
            </div>

            <!-- Booking Form -->
            <div class="lg:col-span-7 bg-brand-dark p-8 md:p-12 border border-brand-gray border-t-4 border-t-brand-accent rounded-sm shadow-[0_20px_50px_rgba(0,0,0,0.5)]">
                <div class="mb-8">
                    <h2 class="text-3xl font-heading font-bold uppercase text-white mb-2">Reserva tu Silla</h2>
                    <p class="text-gray-400">Completa tus datos y seleccioná el servicio. Es rápido y fácil.</p>
                </div>
                
                <form action="contacto.php" method="POST" class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="nombre" class="block text-sm font-medium text-gray-300 mb-2">Nombre Completo <span class="text-brand-accent">*</span></label>
                            <input type="text" id="nombre" name="nombre" required 
                                class="w-full bg-brand-black border border-brand-gray/80 rounded-sm px-4 py-3.5 text-white focus:outline-none focus:border-brand-accent focus:ring-1 focus:ring-brand-accent transition-all shadow-inner placeholder-gray-600"
                                placeholder="Ej. Juan Pérez" value="<?= isset($_POST['nombre']) ? htmlspecialchars($_POST['nombre']) : '' ?>">
                        </div>
                        
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-300 mb-2">Correo Electrónico <span class="text-brand-accent">*</span></label>
                            <input type="email" id="email" name="email" required 
                                class="w-full bg-brand-black border border-brand-gray/80 rounded-sm px-4 py-3.5 text-white focus:outline-none focus:border-brand-accent focus:ring-1 focus:ring-brand-accent transition-all shadow-inner placeholder-gray-600"
                                placeholder="correo@ejemplo.com" value="<?= isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '' ?>">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="servicio" class="block text-sm font-medium text-gray-300 mb-2">Servicio Requerido <span class="text-brand-accent">*</span></label>
                            <div class="relative">
                                <select id="servicio" name="servicio" required 
                                    class="w-full bg-brand-black border border-brand-gray/80 rounded-sm px-4 py-3.5 text-white focus:outline-none focus:border-brand-accent focus:ring-1 focus:ring-brand-accent appearance-none shadow-inner cursor-pointer">
                                    <option value="" disabled <?= empty($_POST['servicio']) ? 'selected' : '' ?>>Seleccionar servicio...</option>
                                    <option value="corte" <?= (isset($_POST['servicio']) && $_POST['servicio'] == 'corte') ? 'selected' : '' ?>>Solo Corte Clásico/Fade</option>
                                    <option value="barba" <?= (isset($_POST['servicio']) && $_POST['servicio'] == 'barba') ? 'selected' : '' ?>>Ritual de Barba</option>
                                    <option value="combo" <?= (isset($_POST['servicio']) && $_POST['servicio'] == 'combo') ? 'selected' : '' ?>>Combo Franco (Corte + Barba)</option>
                                    <option value="kids" <?= (isset($_POST['servicio']) && $_POST['servicio'] == 'kids') ? 'selected' : '' ?>>Corte Kids</option>
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-gray-400">
                                    <i class="fa-solid fa-chevron-down text-sm"></i>
                                </div>
                            </div>
                        </div>
                        
                        <div>
                            <label for="fecha" class="block text-sm font-medium text-gray-300 mb-2">Fecha Preferida <span class="text-brand-accent">*</span></label>
                            <input type="date" id="fecha" name="fecha" required 
                                class="w-full bg-brand-black border border-brand-gray/80 rounded-sm px-4 py-3.5 text-white focus:outline-none focus:border-brand-accent focus:ring-1 focus:ring-brand-accent shadow-inner [color-scheme:dark] cursor-pointer"
                                value="<?= isset($_POST['fecha']) ? htmlspecialchars($_POST['fecha']) : '' ?>">
                        </div>
                    </div>
                    
                    <div>
                        <label for="comentarios" class="block text-sm font-medium text-gray-300 mb-2">Mensaje Adicional</label>
                        <textarea id="comentarios" name="comentarios" rows="4" 
                            class="w-full bg-brand-black border border-brand-gray/80 rounded-sm px-4 py-3.5 text-white focus:outline-none focus:border-brand-accent focus:ring-1 focus:ring-brand-accent resize-none shadow-inner placeholder-gray-600"
                            placeholder="¿Algún barbero de preferencia o estilo específico en mente? Cuéntanos..."><?= isset($_POST['comentarios']) ? htmlspecialchars($_POST['comentarios']) : '' ?></textarea>
                    </div>

                    <div class="pt-4">
                        <button type="submit" class="w-full bg-brand-accent hover:bg-yellow-500 text-brand-black font-heading font-bold text-xl py-5 rounded-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_10px_30px_rgba(217,119,6,0.4)] uppercase tracking-[0.1em] flex justify-center items-center group">
                            Confirmar Reserva
                            <i class="fa-solid fa-check ml-3 opacity-70 group-hover:opacity-100 group-hover:scale-110 transition-all"></i>
                        </button>
                        <p class="text-center text-gray-500 text-xs mt-4">
                            Al confirmar, aceptas que nos pongamos en contacto para reconfirmar el horario exacto.
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
