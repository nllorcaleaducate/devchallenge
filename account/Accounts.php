<?php


class Accounts
{
    private Client $client;
    private string $cvu;
    private Movement $movements;

    public function getCvu(): string //28405123-JOSE.PEREZ
    {
       return $this->client->getId().'-'.strtoupper(str_replace(' ','.', $this->client->getName()));
    }

    public function getClient(): Client
    {
        return $this->client;
    }

    public function getMovements(): Movement
    {
        return $this->movements;
    }

    public function setClient(Client $client): void
    {
        $this->client = $client;
    }

    public function addMovement(Movement $movement): void
    {
        $this->movements = $movement;

    }

    public function getBalance($currency)
    {
         /** @var Movement $mov */
         $mov = $this->getMovements();

         if ($mov->currency === $currency && $mov->amount != null) {
             return $mov->amount;
         }

         return 'No tiene saldo en la cuenta consultada';
    }

}