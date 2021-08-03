# Laravel Docker

## 1. Create Dockerfile

## 2. Dockerfile Content
```
FROM php:7.2-fpm
RUN apt-get update -y && \
    apt-get install -y libmcrypt-dev openssl zip unzip git curl && \
    pecl install mcrypt-1.0.2 && \
    docker-php-ext-install pdo mbstring
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
WORKDIR /blog
COPY . /blog
RUN composer install

CMD php artisan serve --host=0.0.0.0 --port=8000
EXPOSE 8000
```

## 3. Build Image 
```
$ docker build -t my-laravel-image .
```

## 4. Run container
```
$ docker run -p 8000:8000 --name laravel-container my-laravel-image
```

## 5. Stop container
```
$ docker stop <container_name>

$ docker rm <container_name>
```
