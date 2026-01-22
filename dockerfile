FROM php:5.6-apache

# Install extensions required by old apps
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Enable Apache mod_rewrite (many old PHP apps need this)
RUN a2enmod rewrite

# Copy app files
COPY ./src /var/www/html/

# Set permissions
RUN chown -R www-data:www-data /var/www/html
