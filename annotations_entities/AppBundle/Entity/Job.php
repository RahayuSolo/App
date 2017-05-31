<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Job
 *
 * @ORM\Table(name="job")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class Job
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255, precision=0, scale=0, nullable=true, unique=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="company", type="string", length=255, precision=0, scale=0, nullable=false, unique=false)
     */
    private $company;

    /**
     * @var string
     *
     * @ORM\Column(name="logo", type="string", length=255, precision=0, scale=0, nullable=true, unique=false)
     */
    private $logo;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, precision=0, scale=0, nullable=true, unique=false)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="position", type="string", length=255, precision=0, scale=0, nullable=false, unique=false)
     */
    private $position;

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=255, precision=0, scale=0, nullable=false, unique=false)
     */
    private $location;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", precision=0, scale=0, nullable=false, unique=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="how_to_apply", type="text", precision=0, scale=0, nullable=false, unique=false)
     */
    private $how_to_apply;

    /**
     * @var string
     *
     * @ORM\Column(name="token", type="string", length=255, precision=0, scale=0, nullable=false, unique=true)
     */
    private $token;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_public", type="boolean", precision=0, scale=0, nullable=true, unique=false)
     */
    private $is_public;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_activated", type="boolean", precision=0, scale=0, nullable=true, unique=false)
     */
    private $is_activated;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, precision=0, scale=0, nullable=false, unique=false)
     */
    private $email;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="expires_at", type="datetime", precision=0, scale=0, nullable=false, unique=false)
     */
    private $expires_at;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", precision=0, scale=0, nullable=false, unique=false)
     */
    private $created_at;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", precision=0, scale=0, nullable=true, unique=false)
     */
    private $updated_at;

    /**
     * @var \AppBundle\Entity\Category
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Category", inversedBy="jobs")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_id", referencedColumnName="id", nullable=true)
     * })
     */
    private $category;


    /**
     * @ORM\PrePersist
     */
    public function setCreatedAtValue()
    {
        // Add your code here
    }

    /**
     * @ORM\PreUpdate
     */
    public function setUpdatedAtValue()
    {
        // Add your code here
    }
}

