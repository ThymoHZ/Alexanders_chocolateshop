<?php

namespace App\Controllers;

use App\Repositories\BrokerRepositoryInterface;
use Framework\Response;
use Framework\ResponseFactory;
use Framework\Request;

class BrokerController
{
    private ResponseFactory $responseFactory;

    public function __construct(
        ResponseFactory $responseFactory,
    ) {
        $this->responseFactory = $responseFactory;
    }

    public function index(): Response
    {
        return $this->responseFactory->view('brokers/index.html.twig', [
            'brokers' => []
        ]);
    }

    public function show(Request $request): Response
    {
        return $this->responseFactory->view('brokers/show.html.twig', [
            'broker' => null
        ]);
    }


    public function create(): Response
    {
        return $this->responseFactory->view('brokers/create.html.twig');
    }
}
