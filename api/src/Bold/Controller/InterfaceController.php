<?php

namespace Bold\Controller;

use Symfony\Component\HttpFoundation\Request;

interface InterfaceController
{
    public static function manageRouting(Request $request, array $params = null);
}