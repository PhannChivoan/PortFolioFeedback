FROM php:8.2-apache

# Install PHP extensions your app needs (adjust as needed)
RUN apt-get update && apt-get install -y \
    libzip-dev zip unzip && \
    docker-php-ext-install pdo pdo_mysql zip

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Copy your Laravel app code to /var/www/html
COPY . /var/www/html/

# Change working directory
WORKDIR /var/www/html

# Set Apache to serve from public folder
RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/public|' /etc/apache2/sites-available/000-default.conf

# Set permissions so Laravel can write cache and logs
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
RUN chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Expose port 80
EXPOSE 80

# Start Apache in the foreground
CMD ["apache2-foreground"]
