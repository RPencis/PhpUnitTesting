<?php

class OrderSpie
{
    /**
     * Summary of quantity
     * @var int
     */
    public $quantity;
    /**
     * Summary of unitPrice
     * @var float
     */
    public $unitPrice;
    /**
     * Summary of amount
     * @var float
     */
    public $amount;

    /**
     * Summary of __construct
     * @param PaymentGateway $gateway
     *
     * @return void
     */
    public function __construct(int $quantity, float $unitPrice)
    {
        $this->quantity = $quantity;
        $this->unitPrice = $unitPrice;

        $this->amount = $quantity * $unitPrice;
    }

    /**
     * Summary of process
     * @param PaymentGateway $gateway
     * @return void
     */
    public function process(PaymentGateway $gateway)
    {
        $gateway->charge($this->amount);
    }
}
