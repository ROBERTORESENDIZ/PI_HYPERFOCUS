# Usa una imagen base de PHP con Apache
FROM php:8.1-apache

# Instala las extensiones necesarias
RUN docker-php-ext-install pdo pdo_mysql

# Copia el contenido del proyecto al contenedor
COPY . /var/www/html

# Establece los permisos correctos
RUN chown -R www-data:www-data /var/www/html

# Habilita el módulo de reescritura de Apache
RUN a2enmod rewrite

# Exponer el puerto 80
EXPOSE 80

# Inicia Apache en primer plano
CMD ["apache2-foreground"]