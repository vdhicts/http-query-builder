# http-query-builder

Replacement of http_build_query to allow the same parameter multiple times.

## Requirements

This package requires PHP 7.4 or higher.

## Installation

This package can be used in any PHP project or with any framework.

You can install the package via composer:

`composer require vdhicts/http-query-builder`

## Usage

The problem with the build-in `http_build_query` method is that it doesn't accept the same parameter multiple times. 
When you need to consume an API that uses those parameters (for example [FastAPI](https://fastapi.tiangolo.com/) 
supports it), this package comes in handy.

### Getting started

```php
use Vdhicts\HttpQueryBuilder\Builder;

$builder = (new Builder())
    ->add('filter', 'a:1')
    ->add('filter', 'b:2');
echo $builder; // filter=a%3A1&filter=b%3A2
```

## Tests

Unit tests are available in the `tests` folder. Run with:

`composer test`

When you want a code coverage report which will be generated in the `build/report` folder. Run with:

`composer test-coverage`

## Contribution

Any contribution is welcome, but it should meet the PSR-2 standard and please create one pull request per feature/bug.
In exchange, you will be credited as contributor on this page.

## Security

If you discover any security related issues in this or other packages of Vdhicts, please email info@vdhicts.nl instead
of using the issue tracker.

## License

This package is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).

## About Vdhicts

[Vdhicts](https://www.vdhicts.nl) is the name of my personal company for which I work as freelancer. Vdhicts develops
and implements IT solutions for businesses and educational institutions.
