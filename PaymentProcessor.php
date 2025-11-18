<?php

class PaymentProcessor
{
    protected PaymentsInterface $gateway;

    public function __construct(PaymentsInterface $gateway)
    {
        $this->gateway = $gateway;
    }

    public function procesarPago(float $cantidad): string
    {
        return $this->gateway->sendPayment($cantidad);
    }
}