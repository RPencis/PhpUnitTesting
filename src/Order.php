<?php

class Order
{
    /**
     * Summary of amount
     * @var int
     */
    public $amount = 0;
    /**
     * Payment gateway dependecy
     * @var PaymentGateway
     */
    protected $gateway;

    /**
     * Summary of __construct
     * @param PaymentGateway $gateway
     *
     * @return void
     */
    public function __construct(PaymentGateway $gateway)
    {
        $this->gateway = $gateway;
    }
    
    /**
     * Process the order
     * @return boolean
     */
    public function process()
    {
        return $this->gateway->charge($this->amount);
    }

}
