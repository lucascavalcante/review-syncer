<?php

namespace Bold\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Review
 * @package Bold\Entity
 * @ORM\Entity()
 * @ORM\Table(name="shopify_app_reviews")
 */
class Review {

    /**
     * @var int @ORM\Id()
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string @ORM\Column(name="shopify_domain", type="string", length=255, nullable=false)
     */
    private $shopifyDomain;

    /**
     * @var string @ORM\Column(name="app_slug", type="text", length=255, nullable=false)
     */
    private $appSlug;

    /**
     * @var string @ORM\Column(name="star_rating", type="integer", nullable=true)
     */
    private $starRating;

    /**
     * @var string @ORM\Column(name="previous_star_rating", type="integer", nullable=true)
     */
    private $previousStarRating;

    /**
     * @var string @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @var string @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Review
     */
    public function setId(int $id): Review
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getShopifyDomain(): string
    {
        return $this->shopifyDomain;
    }

    /**
     * @param string $shopifyDomain
     * @return Review
     */
    public function setShopifyDomain(string $shopifyDomain): Review
    {
        $this->shopifyDomain = $shopifyDomain;
        return $this;
    }

    /**
     * @return string
     */
    public function getAppSlug(): string
    {
        return $this->appSlug;
    }

    /**
     * @param string $appSlug
     * @return Review
     */
    public function setAppSlug(string $appSlug): Review
    {
        $this->appSlug = $appSlug;
        return $this;
    }

    /**
     * @return string
     */
    public function getStarRating(): string
    {
        return $this->starRating;
    }

    /**
     * @param string $starRating
     * @return Review
     */
    public function setStarRating(string $starRating): Review
    {
        $this->starRating = $starRating;
        return $this;
    }

    /**
     * @return string
     */
    public function getPreviousStarRating(): string
    {
        return $this->previousStarRating;
    }

    /**
     * @param string $previousStarRating
     * @return Review
     */
    public function setPreviousStarRating(string $previousStarRating): Review
    {
        $this->previousStarRating = $previousStarRating;
        return $this;
    }

    /**
     * @return string
     */
    public function getUpdatedAt(): string
    {
        return $this->updatedAt;
    }

    /**
     * @param string $updatedAt
     * @return Review
     */
    public function setUpdatedAt(string $updatedAt): Review
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }

    /**
     * @param string $createdAt
     * @return Review
     */
    public function setCreatedAt(string $createdAt): Review
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function __toString(){

        return $this->shopifyDomain;
    }

}