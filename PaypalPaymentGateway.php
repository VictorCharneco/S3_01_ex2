<?php

class PayPalPaymentGateway implements PaymentsInterface
{
    public function sendPayment(float $amount): string
    {
        return "{$amount} payment processed by Paypal";
    }
}