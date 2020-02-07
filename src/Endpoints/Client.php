<?php

declare(strict_types=1);

namespace McMatters\MonobankApi\Endpoints;

use const null;

/**
 * Class Client
 *
 * @package McMatters\MonobankApi\Endpoints
 */
class Client extends Endpoint
{
    /**
     * @param string|null $token
     *
     * @return array
     */
    public function getInfo(string $token = null): array
    {
        return $this->httpClient
            ->get('personal/client-info', $this->getOptions())
            ->json();
    }

    /**
     * @param string $url
     * @param string|null $token
     *
     * @return array
     */
    public function setWebhook(string $url, string $token = null): array
    {
        $options = $this->getOptions($token);
        $options['json'] = ['webHookUrl' => $url];

        return $this->httpClient->post('personal/webhook', $options)->json();
    }

    /**
     * @param string $account
     * @param int $from
     * @param string|null $to
     * @param string|null $token
     *
     * @return mixed
     */
    public function getStatement(
        string $account = '0',
        int $from,
        string $to = null,
        string $token = null
    ): array {
        $url = "personal/statement/{$account}/{$from}";

        if (null !== $to) {
            $url .= "/{$to}";
        }

        return $this->httpClient->get($url, $this->getOptions($token))->json();
    }

    /**
     * @param string|null $token
     *
     * @return array
     */
    protected function getOptions(string $token = null): array
    {
        return $token ? ['headers' => ['X-Token' => $token]] : [];
    }
}
