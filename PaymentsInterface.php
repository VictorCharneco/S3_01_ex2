<?php

interface PaymentsInterface{

    public function sendPayment(float $amount):string;

}

?>