<?php

class Request
{
    public string $uri;

    public string $method;

    public function __construct()
    {
        $this->uri = $_SERVER['REQUEST_URI'];
        $this->method = $_SERVER['REQUEST_METHOD'];
    }
}

#[Attribute]
class Http
{
    public function __construct(    
        public string $uri,
        public string $method
    ){}
}

class MyController
{
    #[Http(uri: '/myself', method: 'GET')]
    public function me()
    {
        return 'welcome web app';
    }
}

class Router
{
    public function handle(Request $request)
    {
        $controller = new ReflectionClass(MyController::class);
        $methods = $controller->getMethods();
        foreach($methods as $method) {
            $attributes = $method->getAttributes();
            foreach($attributes as $attribute) {
                $uri = explode('/', $attribute->getArguments()['uri']);
                $requestUri = explode('/', $request->uri);

                $http = $attribute->getArguments()['method'];
                $requestHttp = $request->method;

                if(
                    $uri !== $requestUri ||
                    $http !== $requestHttp
                ){
                    continue;
                }

                return $method->invoke(
                    $method->getDeclaringClass()->newInstance()
                );
            }            
        }
        return 'route not found';
    }
}

$request = new Request();

$router = new Router();

echo $router->handle($request);
