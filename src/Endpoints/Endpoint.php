<?php

declare(strict_types=1);

namespace McMatters\MonobankApi\Endpoints;

use McMatters\Ticl\Client;

use const null;

/**
 * Class Endpoint
 *
 * @package McMatters\MonobankApi\Endpoints
 */
abstract class Endpoint
{
    /**
     * @var \McMatters\Ticl\Client
     */
    protected $httpClient;

    /**
     * Endpoint constructor.
     *
     * @param string|null $token
     */
    public function __construct(string $token = null)
    {
        $this->httpClient = new Client([
            'base_uri' => 'https://api.monobank.ua',
            'headers' => $token ? ['X-Token' => $token] : [],
        ]);
    }
}
