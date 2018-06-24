<?php

namespace Bold\Service;

use Bold\Config\ShopifyApp;
use Bold\Entity\Review;
use Bold\Repository\ReviewRepository;

class ReviewService
{
    private $apps = [];
    private $repository;

    public function __construct()
    {
        $this->apps = new ShopifyApp();
        $this->repository = (new ReviewRepository());
    }

    public function fetchData(array $params)
    {
        if($this->apps->getApp($params) !== null) {
            $dataFetched = $this->jsonDecode($this->apps->getApp($params));
            for ($x = 0; $x < count($dataFetched); $x++) {
                $this->save($dataFetched[$x]['reviews']);
            }
            return ['code' => 200, 'message' => 'Data saved'];
        } else {
            return ['code' => 404, 'message' => 'App not found'];
        }
    }

    public function jsonDecode($data)
    {
        $apps = [];
        if(is_array($data)) {
            foreach ($data as $d) {
                array_push($apps, $this->getEndpoint($d));
            }
        } else {
            array_push($apps, $this->getEndpoint($data));
        }
        return $apps;
    }

    public function getEndpoint($app)
    {
        return (array) json_decode(file_get_contents('https://apps.shopify.com/'.$app.'/reviews.json'));
    }

    public function save(array $reviews)
    {
        for($x = 0; $x < count($reviews); $x++) {
            $arrReviews = (array) $reviews[$x];
            $review = new Review();
            $review->setShopifyDomain($arrReviews['shop_domain']);
            $review->setAppSlug($arrReviews['shop_name']);
            $review->setStarRating($arrReviews['star_rating']);
            $this->repository->insert($review);
            unset($review);
        }
    }
}