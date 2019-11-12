<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Currency
{
    
    private $tcmb = "http://www.tcmb.gov.tr/kurlar/today.xml";
    private $conn;
    
    public $usd_buy;
    public $usd_sell;
    
    public $eur_buy;
    public $eur_sell;
    
    
    public function __construct()
    {
        $this->conn = simplexml_load_file($this->tcmb);
        $this->Usd_Buy();
        $this->Usd_Sell();
        $this->Eur_Buy();
        $this->Eur_Sell();
    }
    
    
    public function Usd_Buy()
    {
        return $this->usd_buy = $this->conn->Currency[0]->BanknoteBuying[0];
    }
    public function Usd_Sell()
    {
        return $this->usd_sell = $this->conn->Currency[0]->BanknoteSelling[0];
    }
    public function Eur_Buy()
    {
        return $this->eur_buy = $this->conn->Currency[3]->BanknoteBuying[0];
    }
    public function Eur_Sell()
    {
        return $this->eur_sell = $this->conn->Currency[3]->BanknoteSelling[0];
    }
    
}

?>