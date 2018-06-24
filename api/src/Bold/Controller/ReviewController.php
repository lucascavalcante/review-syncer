<?php

namespace Bold\Controller;

use Bold\Service\ReviewService;
use Symfony\Component\HttpFoundation\Request;

class ReviewController implements InterfaceController
{
    public static function manageRouting(Request $request, array $params = null) : array
    {
        $review = new ReviewService();
        return $review->fetchData($params);
    }

}