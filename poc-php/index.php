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
    public function hundle(FisrtService $service)
    {
        return $service->execute();
    }
}

$secondService = new SecondService();
echo $secondService->hundle(new FisrtService);
