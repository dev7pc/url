SHELL = /bin/bash
COMPOSER_VERSION = 1.2.1
PHPUNIT_VERSION = 5.5.6
TEST_DIR = _tests/

include _config/maker/project-types/php-composer-library.mk

.DEFAULT_GOAL = test

clean-pre:: ;
clean-post:: ;

composer-install-pre:: ;
composer-install-post:: ;

composer-validate-pre:: ;
composer-validate-post:: ;

dependencies-pre:: ;
dependencies-post:: ;

distclean-pre:: ;
distclean-post:: ;

phpunit-test-pre:: ;
phpunit-test-post:: ;

test-pre:: ;
test-post:: ;
