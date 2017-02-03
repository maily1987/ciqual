Ciqual
===

Your project will be accessible at the URL http://localhost

## Create data fixtures

**Create data fixtures**
For test

```
 composer load-fixture
```

## Call the API

You can use [Postman](https://www.getpostman.com), [Insomnia](https://insomnia.rest) or call the API with curl
```
curl --header "Accept:application/ld-json"  http://localhost
```

## Run tests

```composer phpunit``` and ```composer behat```


## Run PHPCS-Fixer

```vendor/bin/php-cs-fixer fix --verbose```
