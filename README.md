# Barbería Franco - Proyecto Web

Este es un proyecto de sitio web completo y modular construido con PHP nativo y Tailwind CSS para "Barbería Franco", un negocio de estilo urbano.

## Requisitos Previos
- Un entorno de servidor local (XAMPP, MAMP, WAMP, Laragon, etc.) que soporte PHP 8.0+.
- Apache con módulo `mod_rewrite` habilitado (para que funcione el `.htaccess`).

## Instrucciones de Instalación
1. Copia toda la carpeta del proyecto (`barberia-franco`) dentro del directorio público de tu servidor web (ej. `htdocs` en XAMPP o `www` en WAMP).
2. Abre el panel de control de tu servidor e inicia el servicio **Apache**.
3. Abre tu navegador web y navega a `http://localhost/barberia-franco`.
4. ¡El sitio web ya es funcional!

## Características Técnicas Implementadas
- **Arquitectura Modular PHP:** Sistema de plantillas con `includes/header.php` y `includes/footer.php` para evitar redundancia de código.
- **Renderizado Dinámico:** Uso intensivo de Arrays Asociativos y bucles `foreach` en PHP para poblar las listas de servicios, productos y elementos de UI, siguiendo estándares de código limpio (separación de datos y vista).
- **Lógica de Formulario Backend:** El archivo `contacto.php` implementa validación de seguridad por método `POST`, filtrado de inputs, sanitización de strings/emails y renderizado condicional de alertas de éxito o error en la interfaz.
- **SEO & URLs Limpias:** Integración de `.htaccess` para eliminar las extensiones `.php` de las rutas, mejorando la estética de la URL y el SEO.
- **Diseño UI/UX (Tailwind CSS):** 
  - Estética moderna con colores `brand-dark`, `brand-black` y acentos ambar/dorados.
  - Tipografías grandes e impactantes (Oswald y Inter vía Google Fonts).
  - Micro-interacciones completas (`hover:scale`, transiciones de colores, shadows dinámicos).
  - Componente de navegación responsive con menú hamburguesa (Vanilla JS).
  - Totalmente Mobile-First.

## Estructura del Proyecto
```
barberia-franco/
├── includes/
│   ├── header.php
│   └── footer.php
├── index.php        (Página principal / Hero / Destacados)
├── servicios.php    (Menú completo iterado en PHP)
├── contacto.php     (Lógica de reservas POST)
├── .htaccess        (Reglas de reescritura)
└── README.md
```
