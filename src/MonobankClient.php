<?php

declare(strict_types=1);

namespace McMatters\MonobankApi;

use McMatters\MonobankApi\Endpoints\Client;
use McMatters\MonobankApi\Endpoints\Currency;

/**
 * Class MonobankClient
 *
 * @package McMatters\MonobankApi
 */
class MonobankClient
{
    /**
     * @var array
     */
    protected $endpoints = [];

    /**
     * @var string|null
     */
    protected $token;

    /**
     * MonobankClient constructor.
     *
     * @param string|null $token
     */
    public function __construct(string $token = null)
    {
        $this->token = $token;
    }

    /**
     * @return \McMatters\MonobankApi\Endpoints\Client
     */
    public function client(): Client
    {
        return $this->endpoint(Client::class);
    }

    /**
     * @return \McMatters\MonobankApi\Endpoints\Currency
     */
    public function currency(): Currency
    {
        return $this->endpoint(Currency::class);
    }

    /**
     * @param string $class
     *
     * @return mixed
     */
    protected function endpoint(string $class)
    {
        if (!isset($this->endpoints[$class])) {
            $this->endpoints[$class] = new $class($this->token);
        }

        return $this->endpoints[$class];
    }
}
