<?php 

class BankTransfer implements PaymentsInterface
{
    public function sendPayment(float $amount): string
    {
        return "{$amount} bank transfer done";
    }
}