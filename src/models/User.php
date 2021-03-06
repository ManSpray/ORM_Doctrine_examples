<?php
namespace Models;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class User
{
    /** 
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Address")
     * @ORM\JoinColumn(
     * name="address_id",
     * referencedColumnName="id",
     * onDelete="CASCADE")
     */
    private $address;

    /**
     * Many Users have Many Groups.
     * @ORM\ManyToMany(targetEntity="Group")
     * @ORM\JoinTable(name="users_groups",
     *          joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")},
     *          inverseJoinColumns={@ORM\JoinColumn(name="group_id", referencedColumnName="id")}
     *      )
     */
    private $groups;

    public function __construct() {
        $this->groups = ArrayCollection();
    }

    public function getAddress() 
    {
        return $this->address;
    }
}
