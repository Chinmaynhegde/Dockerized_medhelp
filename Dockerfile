# Use an official PHP runtime as a parent image
FROM php:7.4-apache

# Set the working directory to /var/www/html
WORKDIR /var/www/html

# Copy your application files into the container
COPY . /var/www/html

# Install any PHP extensions or libraries your app may need
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Expose the port the web server will run on
EXPOSE 80

# Start Apache in the foreground
CMD ["apache2-foreground"]
