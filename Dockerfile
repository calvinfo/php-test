FROM richarvey/nginx-php-fpm:latest
COPY src/ /usr/share/nginx/html
EXPOSE 80