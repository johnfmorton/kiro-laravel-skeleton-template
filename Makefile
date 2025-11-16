.PHONY: dev

dev:
	ddev launch
	ddev php artisan migrate
	ddev exec npm run dev

.PHONY: build

build:
	ddev exec npm run build