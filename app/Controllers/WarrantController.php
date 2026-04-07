<?php

namespace App\Controllers;

use App\Repositories\BrokerRepositoryInterface;
use Framework\Response;
use Framework\ResponseFactory;
use Framework\Request;

class WarrantController
{
    private ResponseFactory $responseFactory;

    public function __construct(
        ResponseFactory $responseFactory
    ) {
        $this->responseFactory = $responseFactory;
    }

    public function create(): Response
    {
        return $this->responseFactory->view('warrants/create.html.twig');
    }
}
