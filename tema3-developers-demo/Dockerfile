# Start from the official PHP image (Apache for web app)
FROM php:8.3.2-apache

# Install git and unzip
RUN apt-get update && apt-get install -y git unzip

# Copy Composer from official Composer image (latest version)
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set the working directory in the container to /app
WORKDIR /app

# Copy the current directory contents into the container at /app
ADD . /app

# Configure Apache to run your PHP file
RUN echo '<Directory "/app">\n\
    Options Indexes FollowSymLinks\n\
    AllowOverride All\n\
    Require all granted\n\
</Directory>\n\
\n\
<VirtualHost *:80>\n\
    DocumentRoot /app\n\
</VirtualHost>' > /etc/apache2/sites-available/000-default.conf

# Enable Apache mod_rewrite
RUN a2enmod rewrite