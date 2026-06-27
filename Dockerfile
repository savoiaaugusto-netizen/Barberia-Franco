FROM php:8.2-apache

# Habilitar el módulo rewrite de Apache para que funcione nuestro .htaccess
RUN a2enmod rewrite

# Copiar todo el código de nuestra aplicación al directorio público de Apache
COPY . /var/www/html/

# Exponer el puerto 80 (Render detectará automáticamente este puerto)
EXPOSE 80
