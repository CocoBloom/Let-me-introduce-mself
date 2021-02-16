<?php
namespace Framework\routes;

class Route
{
    private array $routeDatas = array();

    public function __construct(string $endpoint, $method, string $requestType,  bool $authIsNecessary)
    {
        $this-> routeDatas["endpoint"] = $endpoint;
        $this->routeDatas["method"] = $method;
        $this->routeDatas['authIsNecessary'] = $authIsNecessary;
        $this->routeDatas["requestType"] = $requestType;
    }

    public function getEndpoint(): string
    {
        return $this->routeDatas['endpoint'];
    }

    public function getRequestType(): string
    {
        return $this->routeDatas['requestType'];
    }

    public function execute(): void
    {
        call_user_func($this->routeDatas["method"]);
    }

}