<?php

namespace GiftBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Event
 *
 * @ORM\Table(name="event")
 * @ORM\Entity(repositoryClass="GiftBundle\Repository\EventRepository")
 */
class Event
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="startdate", type="datetime")
     */
    private $startdate;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var \stdClass
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="owner_id", referencedColumnName="id")
     */
    private $owner;

    /**
     * @var string
     *
     * @ORM\Column(name="token", type="string", length=255, nullable=true)
     */
    private $token;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_distributed", type="boolean")
     */
    private $isDistributed;

    /**
     * @var string
     *
     * @ORM\Column(name="shared_token", type="string", length=255, nullable=true)
     */
    private $sharedToken;

    /**
    * @ORM\OneToMany(targetEntity="UserEvent", mappedBy="event")
    */
    private $userEvents;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set startdate
     *
     * @param \DateTime $startdate
     *
     * @return Event
     */
    public function setStartdate($startdate)
    {
        $this->startdate = $startdate;

        return $this;
    }

    /**
     * Get startdate
     *
     * @return \DateTime
     */
    public function getStartdate()
    {
        return $this->startdate;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Event
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set owner
     *
     * @param \stdClass $owner
     *
     * @return Event
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * Get owner
     *
     * @return \stdClass
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Set token
     *
     * @param string $token
     *
     * @return Event
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Get token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set isDistributed
     *
     * @param boolean $isDistributed
     *
     * @return Event
     */
    public function setIsDistributed($isDistributed)
    {
        $this->isDistributed = $isDistributed;

        return $this;
    }

    /**
     * Get isDistributed
     *
     * @return bool
     */
    public function getIsDistributed()
    {
        return $this->isDistributed;
    }

    /**
     * Set sharedToken
     *
     * @param string $sharedToken
     *
     * @return Event
     */
    public function setSharedToken($sharedToken)
    {
        $this->sharedToken = $sharedToken;

        return $this;
    }

    /**
     * Get sharedToken
     *
     * @return string
     */
    public function getSharedToken()
    {
        return $this->sharedToken;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->userEvents = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add userEvent
     *
     * @param \GiftBundle\Entity\UserEvent $userEvent
     *
     * @return Event
     */
    public function addUserEvent(\GiftBundle\Entity\UserEvent $userEvent)
    {
        $this->userEvents[] = $userEvent;

        return $this;
    }

    /**
     * Remove userEvent
     *
     * @param \GiftBundle\Entity\UserEvent $userEvent
     */
    public function removeUserEvent(\GiftBundle\Entity\UserEvent $userEvent)
    {
        $this->userEvents->removeElement($userEvent);
    }

    /**
     * Get userEvents
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUserEvents()
    {
        return $this->userEvents;
    }
}
