<?php
$page_title = 'Brian Franco Barbería | Contacto y Reservas';
include 'includes/header.php';
?>

<section class="pt-32 pb-20 bg-brand-black min-h-[90vh] relative overflow-hidden flex items-center justify-center">
    <div class="absolute -left-[20%] top-20 w-[40%] h-[40%] bg-brand-accent/5 rounded-full blur-[120px] pointer-events-none"></div>
    <div class="absolute -right-[20%] bottom-20 w-[40%] h-[40%] bg-brand-accent/5 rounded-full blur-[120px] pointer-events-none"></div>

    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
        
        <div class="bg-brand-dark p-10 md:p-14 border border-brand-gray rounded-sm shadow-2xl text-center">
            
            <div class="w-24 h-24 bg-brand-black rounded-full flex items-center justify-center mx-auto mb-8 border border-brand-gray text-brand-accent shadow-inner">
                <i class="fa-brands fa-whatsapp text-5xl"></i>
            </div>
            
            <h2 class="text-3xl font-heading font-bold uppercase mb-4 text-white">Contacto Rápido</h2>
            <p class="text-gray-400 text-lg mb-8 max-w-lg mx-auto leading-relaxed">
                Gestionamos nuestros turnos por WhatsApp.
            </p>
            
            <div>
                <a href="https://wa.me/5491128347484?text=Hola,%20quiero%20sacar%20un%20turno" target="_blank" class="w-full sm:w-auto inline-flex items-center justify-center bg-brand-accent hover:bg-yellow-500 text-brand-black font-heading font-bold text-xl px-12 py-5 rounded-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_10px_30px_rgba(217,119,6,0.4)] uppercase tracking-[0.1em]">
                    <i class="fa-brands fa-whatsapp mr-3 text-2xl"></i> Hablar por WhatsApp
                </a>
            </div>
            
            <div class="mt-12 pt-8 border-t border-brand-gray/50 flex flex-col md:flex-row items-center justify-center text-gray-400 gap-4 text-center md:text-left">
                <i class="fa-solid fa-location-dot text-brand-accent text-xl"></i>
                <span>C.164 1328 E 13 y 14 <br>(Berazategui, Buenos Aires)</span>
            </div>
        </div>

    </div>
</section>

<?php include 'includes/footer.php'; ?>
