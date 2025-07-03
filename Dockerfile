# Use official PHP with Apache
FROM php:8.2-apache

# Copy all project files to container
COPY . /var/www/html/

# Give permission (optional but good)
RUN chown -R www-data:www-data /var/www/html

# Enable mod_rewrite if needed
RUN a2enmod rewrite
