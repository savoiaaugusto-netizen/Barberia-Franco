<?php
// includes/footer.php
?>
    </main>
    
    <!-- Footer -->
    <footer class="bg-brand-dark border-t border-brand-gray pt-16 pb-8 mt-auto relative overflow-hidden">
        <div class="absolute top-0 right-0 w-64 h-64 bg-brand-accent/5 rounded-full blur-3xl -translate-y-1/2 translate-x-1/3"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-12">
                <div>
                    <a href="index.php" class="text-3xl font-heading font-bold tracking-wider text-white mb-4 block">
                        FRANCO<span class="text-brand-accent">.</span>
                    </a>
                    <p class="text-gray-400 mt-4 leading-relaxed max-w-sm">
                        Tu barbería de barrio con estilo urbano. Cortes modernos, fade perfecto y atención premium en un ambiente relajado.
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
                            <span class="leading-tight">Av. Siempre Viva 742<br>Barrio Urbano, Ciudad</span>
                        </li>
                        <li class="flex items-center group">
                            <i class="fa-solid fa-phone mr-4 text-brand-accent group-hover:scale-110 transition-transform"></i>
                            <span>+54 11 1234-5678</span>
                        </li>
                        <li class="flex items-center group">
                            <i class="fa-solid fa-envelope mr-4 text-brand-accent group-hover:scale-110 transition-transform"></i>
                            <a href="mailto:hola@barberiafranco.com" class="hover:text-white transition-colors">hola@barberiafranco.com</a>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-brand-gray pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-500 text-sm">
                    &copy; <?= date('Y') ?> Barbería Franco. Todos los derechos reservados.
                </p>
                <p class="text-gray-500 text-sm mt-3 md:mt-0 flex items-center">
                    Diseñado con <i class="fa-solid fa-heart text-red-500 mx-1 animate-pulse"></i> por <span class="text-gray-300 ml-1 font-medium">Antigravity</span>
                </p>
            </div>
        </div>
    </footer>

    <!-- Alpine.js Alternative (Vanilla JS for mobile menu & scroll) -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const menuBtn = document.getElementById('mobile-menu-btn');
            const menu = document.getElementById('mobile-menu');
            const icon = menuBtn.querySelector('i');
            
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
            
            // Dynamic Navbar blur and shadow on scroll
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
