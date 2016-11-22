# Cormy\Server\RequestHandlerInterface [![Build Status](https://travis-ci.org/cormy/server-request-handler.svg?branch=master)](https://travis-ci.org/cormy/server-request-handler)

[![SensioLabsInsight](https://insight.sensiolabs.com/projects/3b3d49be-cfab-4844-967f-646a838add5c/big.png)](https://insight.sensiolabs.com/projects/3b3d49be-cfab-4844-967f-646a838add5c)

> :nut_and_bolt: Common interfaces for [PSR-7](http://www.php-fig.org/psr/psr-7) server request handlers


## Install

```
composer require cormy/server-request-handler
```


## Usage

The following snippet utilizes [zend-diactoros](https://github.com/zendframework/zend-diactoros):

```
composer require zendframework/zend-diactoros
```

```php
use Cormy\Server\RequestHandlerInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Zend\Diactoros\Response;

class RequestHandler implements RequestHandlerInterface
{
    /**
     * Process an incoming server request and return the response.
     *
     * @param ServerRequestInterface $request
     *
     * @return ResponseInterface
     */
    public function __invoke(ServerRequestInterface $request):ResponseInterface
    {
        $response = new Response();
        $response = $response->withHeader('content-type', 'application/json; charset=utf-8');
        // ...

        return $response;
    }
}
```


## License

MIT © [Michael Mayer](http://schnittstabil.de)
