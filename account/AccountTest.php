<?php
require('Accounts.php');
require('Client.php');
require('Movement.php');

class AccountTest extends PHPUnit\Framework\TestCase
{
    public function testCvu()
    {


        $account = new Accounts();

        $client = new Client();
        $client->setId('33002345');
        $client->setName('luci Llorca');

        $account->setClient($client);

        $cvu = $account->getCvu();

        $this->assertEquals($account->getCvu(), '33002345-LUCI.LLORCA');
    }

    public function testBalanceArs() {
        $account = new Accounts();

        $client = new Client();
        $client->setId('33002345');
        $client->setName('luci Llorca');

        $account->setClient($client);

        $account->addMovement(new Movement('USD',100));
        $account->addMovement(new Movement('ARS',100));
        $account->addMovement(new Movement('ARS',-50));

        $this->assertEquals($account->getBalance('ARS'), 50);
    }

    public function testBalanceUsd() {
        $account = new Accounts();

        $client = new Client();
        $client->setId('49002345');
        $client->setName('Tere Llorca');

        $account->setClient($client);

        $account->addMovement(new Movement('USD',100));
        $account->addMovement(new Movement('ARS',100));
        $account->addMovement(new Movement('ARS',-50));
        $account->addMovement(new Movement('USD',100));
        $account->addMovement(new Movement('USD',-100));

        $this->assertEquals($account->getBalance('USD'), 100);
    }
    
}