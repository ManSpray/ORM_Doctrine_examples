<?php

namespace Models;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="customers")
 */
class Customer
{
    /** 
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $name;

    /**
     * One Customer has One Cart.
     * @ORM\OneToOne(targetEntity="Cart", mappedBy="customer")
     */
    private $cart;

    public function getName()
    {
        return $this->name;
    }

    public function getCart()
    {
        return $this->cart;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setCart($cart)
    {
        $this->cart = $cart;
    }
}