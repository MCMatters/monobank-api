<?php

declare(strict_types=1);

namespace McMatters\MonobankApi\Endpoints;

/**
 * Class Currency
 *
 * @package McMatters\MonobankApi\Endpoints
 */
class Currency extends Endpoint
{
    /**
     * @return array
     */
    public function list(): array
    {
        return $this->httpClient->get('bank/currency')->json();
    }
}
