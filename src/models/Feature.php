<?php

namespace Models;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @ORM\Entity
 * @ORM\Table(name="features")
 */
class Feature
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
     * Many features have one product. This is the owning side.
     * @ORM\ManyToOne(targetEntity="Product", inversedBy="features")
     * @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     */
    private $product;

    public function getName()
    {
        return $this->name;
    }
}
