<?php

namespace PagarMe\Endpoints;

use PagarMe\Client;
use PagarMe\Routes;
use PagarMe\Endpoints\Endpoint;

class BulkAnticipations extends Endpoint
{
    /**
     * @param array $payload
     *
     * @return \ArrayObject
     */
    public function create(array $payload)
    {
        return $this->client->request(
            self::POST,
            Routes::bulkAnticipations()->base($payload['recipient_id']),
            ['json' => $payload]
        );
    }

    /**
     * @param array $payload
     *
     * @return \ArrayObject
     */
    public function getLimits(array $payload)
    {
        return $this->client->request(
            self::GET,
            Routes::bulkAnticipations()->limits($payload['recipient_id']),
            ['query' => $payload]
        );
    }

    /**
     * @param array $payload
     *
     * @return \ArrayObject
     */
    public function confirm(array $payload)
    {
        return $this->client->request(
            self::POST,
            Routes::bulkAnticipations()->confirm(
                $payload['recipient_id'],
                $payload['bulk_anticipation_id']
            ),
            ['json' => $payload]
        );
    }

    /**
     * @param array $payload
     *
     * @return \ArrayObject
     */
    public function cancel(array $payload)
    {
        return $this->client->request(
            self::POST,
            Routes::bulkAnticipations()->cancel(
                $payload['recipient_id'],
                $payload['bulk_anticipation_id']
            ),
            ['json' => $payload]
        );
    }

    /**
     * @param array $payload
     *
     * @return \ArrayObject
     */
    public function delete(array $payload)
    {
        return $this->client->request(
            self::DELETE,
            Routes::bulkAnticipations()->delete(
                $payload['recipient_id'],
                $payload['bulk_anticipation_id']
            ),
            ['json' => $payload]
        );
    }

    /**
     * @param array $payload
     *
     * @return \ArrayObject
     */
    public function getList(array $payload)
    {
        return $this->client->request(
            self::GET,
            Routes::bulkAnticipations()->base($payload['recipient_id']),
            ['query' => $payload]
        );
    }

    /**
     * @param array $payload
     * @return \ArrayObject
     */
    public function simulate(array $payload)
    {
        return $this->client->request(
            self::GET,
            Routes::bulkAnticipations()->simulate($payload['recipient_id']),
            ['json' => $payload]
        );
    }
}
