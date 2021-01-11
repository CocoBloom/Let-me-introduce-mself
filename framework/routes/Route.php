<?php


class Route
{
    private array $routeDatas = array();

    public function __construct(string $endpoint, $method, string $requestType)
    {
        $this-> routeDatas["endpoint"] = $endpoint;
        $this->routeDatas["method"] = $method;
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