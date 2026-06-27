<?php
// includes/footer.php
?>
    </main>
    
    <!-- Footer -->
    <footer class="bg-brand-dark border-t border-brand-gray pt-16 pb-8 mt-auto relative overflow-hidden">
        <!-- Decoración Background -->
        <div class="absolute top-0 right-0 w-64 h-64 bg-brand-accent/5 rounded-full blur-3xl -translate-y-1/2 translate-x-1/3"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-12">
                <div>
                    <a href="index.php" class="text-2xl font-heading font-bold tracking-wider text-white mb-4 block">
                        BRIAN FRANCO<span class="text-brand-accent">.</span>
                    </a>
                    <p class="text-gray-400 mt-4 leading-relaxed font-light max-w-sm">
                        Barbería de excelencia en Berazategui. Simplicidad, calidad y el mejor ambiente.
                    </p>
                    <div class="flex space-x-4 mt-6">
                        <a href="#" class="w-10 h-10 rounded-full bg-brand-black border border-brand-gray flex items-center justify-center text-gray-400 hover:bg-brand-accent hover:border-brand-accent hover:text-white transition-all hover:scale-110 shadow-lg">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-brand-black border border-brand-gray flex items-center justify-center text-gray-400 hover:bg-brand-accent hover:border-brand-accent hover:text-white transition-all hover:scale-110 shadow-lg">
                            <i class="fa-brands fa-tiktok"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-brand-black border border-brand-gray flex items-center justify-center text-gray-400 hover:bg-brand-accent hover:border-brand-accent hover:text-white transition-all hover:scale-110 shadow-lg">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                    </div>
                </div>
                
                <div>
                    <h3 class="text-xl font-heading text-white mb-6 uppercase tracking-wider">Horarios</h3>
                    <ul class="space-y-3 text-gray-400">
                        <li class="flex justify-between border-b border-brand-gray/50 pb-2">
                            <span>Lunes - Viernes</span>
                            <span class="text-white font-medium">10:00 - 20:00</span>
                        </li>
                        <li class="flex justify-between border-b border-brand-gray/50 pb-2">
                            <span>Sábados</span>
                            <span class="text-white font-medium">10:00 - 18:00</span>
                        </li>
                        <li class="flex justify-between text-brand-accent font-medium pt-1">
                            <span>Domingos</span>
                            <span>Cerrado</span>
                        </li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-xl font-heading text-white mb-6 uppercase tracking-wider">Contacto</h3>
                    <ul class="space-y-4 text-gray-400">
                        <li class="flex items-start group">
                            <i class="fa-solid fa-location-dot mt-1 mr-4 text-brand-accent group-hover:scale-110 transition-transform"></i>
                            <span class="leading-tight">C.164 1328 E 13 y 14<br>Berazategui, Buenos Aires</span>
                        </li>
                        <li class="flex items-center group">
                            <i class="fa-brands fa-whatsapp mr-4 text-brand-accent group-hover:scale-110 transition-transform text-lg"></i>
                            <span>+54 9 11 1234-5678</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-brand-gray pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-500 text-sm">
                    &copy; <?= date('Y') ?> Brian Franco Barbería. Todos los derechos reservados.
                </p>
                <p class="text-gray-500 text-sm mt-3 md:mt-0 flex items-center">
                    Diseñado con <i class="fa-solid fa-fire text-brand-accent mx-2 animate-pulse"></i> por Devs
                </p>
            </div>
        </div>
    </footer>

    <!-- Lógica de Interfaz en Vanilla JS -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const menuBtn = document.getElementById('mobile-menu-btn');
            const menu = document.getElementById('mobile-menu');
            const icon = menuBtn.querySelector('i');
            
            // Toggle Menú Hamburguesa
            menuBtn.addEventListener('click', () => {
                menu.classList.toggle('hidden');
                if(menu.classList.contains('hidden')) {
                    icon.classList.remove('fa-xmark');
                    icon.classList.add('fa-bars');
                } else {
                    icon.classList.remove('fa-bars');
                    icon.classList.add('fa-xmark');
                }
            });
            
            // Efecto Glassmorphism del Navbar al Scrollear
            window.addEventListener('scroll', () => {
                const navbar = document.getElementById('navbar');
                if (window.scrollY > 20) {
                    navbar.classList.add('shadow-xl', 'bg-brand-dark');
                    navbar.classList.remove('bg-brand-dark/95');
                } else {
                    navbar.classList.remove('shadow-xl', 'bg-brand-dark');
                    navbar.classList.add('bg-brand-dark/95');
                }
            });
        });
    </script>
</body>
</html>
