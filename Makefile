update:
	git pull
	npm run build

install:
	composer install
	npm install
	copy .env.example .env
	php artisan key:generate
	mkdir storage\app\public\uploads
	php artisan storage:link