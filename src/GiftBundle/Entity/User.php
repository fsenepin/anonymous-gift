<?php

namespace GiftBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="GiftBundle\Repository\UserRepository")
 */
class User
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
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=255, nullable=true)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=255, nullable=true)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
    * @ORM\OneToMany(targetEntity="Event", mappedBy="owner")
    */
    private $events;

    /**
    * @ORM\OneToMany(targetEntity="UserEvent", mappedBy="user")
    */
    private $userEvents;

    /**
    * @ORM\OneToMany(targetEntity="UserEvent", mappedBy="receivedUser")
    */
    private $ReceivedUserEvents;

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
     * Set lastname
     *
     * @param string $lastname
     *
     * @return User
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     *
     * @return User
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->events = new \Doctrine\Common\Collections\ArrayCollection();
        $this->userEvents = new \Doctrine\Common\Collections\ArrayCollection();
        $this->ReceivedUserEvents = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add event
     *
     * @param \GiftBundle\Entity\Event $event
     *
     * @return User
     */
    public function addEvent(\GiftBundle\Entity\Event $event)
    {
        $this->events[] = $event;

        return $this;
    }

    /**
     * Remove event
     *
     * @param \GiftBundle\Entity\Event $event
     */
    public function removeEvent(\GiftBundle\Entity\Event $event)
    {
        $this->events->removeElement($event);
    }

    /**
     * Get events
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * Add userEvent
     *
     * @param \GiftBundle\Entity\UserEvent $userEvent
     *
     * @return User
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

    /**
     * Add receivedUserEvent
     *
     * @param \GiftBundle\Entity\UserEvent $receivedUserEvent
     *
     * @return User
     */
    public function addReceivedUserEvent(\GiftBundle\Entity\UserEvent $receivedUserEvent)
    {
        $this->ReceivedUserEvents[] = $receivedUserEvent;

        return $this;
    }

    /**
     * Remove receivedUserEvent
     *
     * @param \GiftBundle\Entity\UserEvent $receivedUserEvent
     */
    public function removeReceivedUserEvent(\GiftBundle\Entity\UserEvent $receivedUserEvent)
    {
        $this->ReceivedUserEvents->removeElement($receivedUserEvent);
    }

    /**
     * Get receivedUserEvents
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReceivedUserEvents()
    {
        return $this->ReceivedUserEvents;
    }
}
