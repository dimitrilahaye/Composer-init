# Sample Composer project

## Install composer
[See you here](https://getcomposer.org/doc/00-intro.md#using-the-installer)

## Open your terminal, go into the sample-composer directory and :
```
composer install
```

## Check the unit test
```
vendor/bin/phpunit tests/MyClassTest
```

## Generate nice markdown php-doc
```
vendor/bin/phpdoc
```
The markdown file will be there ```./docs/README.md```
Options of ```phpdoc``` command are setted into ```./phpdoc.xml``` file.

## Go coding!