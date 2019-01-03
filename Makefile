help:
	@echo "Please use \`make <target>' where <target> is one of"
	@echo "  install            to install composer."
	@echo "  test               to perform all tests."
	@echo "  test-unit          to perform unit tests."
	@echo "  test-feature       to perform feature tests."
	@echo "  coverage-show      to show the code coverage report."
	@echo "  cs                 to make code keep style."
	@echo "  dump               dump services Resolver."

install:
	composer install --dev

test:
	php -d memory_limit=-1 vendor/bin/phpunit

test-unit:
	php -d memory_limit=-1 vendor/bin/phpunit --testsuite=Unit

test-feature:
	php -d memory_limit=-1 vendor/bin/phpunit --testsuite=Feature

coverage-show:
	open coverage/coverage/index.html

cs:
	php -d memory_limit=-1 vendor/bin/php-cs-fixer fix ./

dump:
	php build/serviceResolverDump.php
	make cs