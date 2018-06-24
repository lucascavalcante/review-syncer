<?php

namespace Bold\Controller;

use Symfony\Component\HttpFoundation\Request;

class DefaultController implements InterfaceController
{
    public static function  manageRouting(Request $request, array $params = null)
    {
        return [
            'App' => 'Bold Commerce API',
            'Version' => '0.0.1'
        ];
    }
}