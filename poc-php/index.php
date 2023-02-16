<?php

class FisrtService
{
    public function execute()
    {
        return 'first service running';
    }
}

class SecondService
{
    public function __construct(
        private FisrtService $service
    ){}

    public function hundle()
    {
        return $this->service->execute();
    }
}

$secondService = new SecondService( new FisrtService());
echo $secondService->hundle();