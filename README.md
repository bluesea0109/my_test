# my_test

-migrating
	php bin/console doctrine:migrations:migrate

-seeding
	php bin/console doctrine:fixtures:load

-initial admin user
	email: test@example.com
	password: 123456

-run
	php -S 127.0.0.1:8000 -t public