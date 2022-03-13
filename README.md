## Stappenplan lokaal installeren
- `docker run --rm -v $(pwd):/opt -w /opt laravelsail/php81-composer:latest composer install` (81 voor php 8.1)
- Kopier `.env.example` naar `.env`
- `./vendor/bin/sail up -d` (duurt ~3 min)
- `./vendor/bin/sail php artisan key:generate`
- `./vendor/bin/sail php artisan migrate`
- `./vendor/bin/sail php artisan db:seed`
- `./vendor/bin/sail up -d`
