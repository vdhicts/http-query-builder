# http-query-builder

Replacement of `http_build_query` to allow the same parameter multiple times.

## Requirements

This package requires PHP 8.3 or higher.

## Installation

You can install the package via composer:

`composer require vdhicts/http-query-builder`

## Usage

The problem with the build-in `http_build_query` method is that it doesn't accept the same parameter multiple times as 
it overwrites the key in the array. When you need to consume an API that uses those parameters (for example [FastAPI](https://fastapi.tiangolo.com/) 
supports it), this package comes in handy.

### Getting started

```php
use Vdhicts\HttpQueryBuilder\Builder;

$builder = Builder::make()
    ->add('filter', 'a:1')
    ->add('filter', 'b:2');
echo $builder; // filter=a%3A1&filter=b%3A2
```

## Contributing

Found a bug or want to add a new feature? Great! There are also many other ways to make meaningful contributions such
as reviewing outstanding pull requests and writing documentation. Even opening an issue for a bug you found is
appreciated.

When you create a pull request, make sure it is tested, following the code standard (run `composer code-style:fix` to
take care of that for you) and please create one pull request per feature. In exchange, you will be credited as
contributor.

### Testing

To run the tests, you can use the following command:

```bash
composer test
```

### Security

If you discover any security related issues in this or other packages of Vdhicts!, please email security@vdhicts.nl
instead of using the issue tracker.
