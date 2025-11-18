<?php 

class StripePaymentGateway implements PaymentsInterface
{
    public function sendPayment(float $amount): string
    {
        return "{$amount} payment processed with Stripe";
    }
}