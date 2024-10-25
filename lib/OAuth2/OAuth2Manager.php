<?php

namespace FattureInCloud\OAuth2;

use GuzzleHttp\Client;

/**
 *  The Manager for OAuth2 flow.
 */
abstract class OAuth2Manager
{
    private const DEFAULT_BASE_URI = 'https://api-v2.fattureincloud.it';

    /**
     * @var Client
     */
    private $client;
    /**
     * @var string
     */
    protected $clientId;
    /**
     * @var string|null
     */
    private $baseUri;

    /**
     * @param string $clientId
     * @param string|null $baseUri
     * @param Client|null $client
     */
    public function __construct(string $clientId, string $baseUri = self::DEFAULT_BASE_URI, Client $client = null)
    {
        if ($client === null) {
            $this->client = new Client();
        } else {
            $this->client = $client;
        }
        $this->clientId = $clientId;
        $this->baseUri = $baseUri;
    }

    /**
     * @return Client
     */
    public function getClient(): Client
    {
        return $this->client;
    }

    /**
     * @param Client|null $client
     */
    public function setClient(Client $client = null): void
    {
        if ($client === null) {
            $this->client = new Client();
        } else {
            $this->client = $client;
        }
    }

    /**
     * @return string
     */
    public function getClientId(): string
    {
        return $this->clientId;
    }

    /**
     * @param string $clientId
     */
    public function setClientId(string $clientId): void
    {
        $this->clientId = $clientId;
    }

    /**
     * @return string
     */
    public function getBaseUri(): ?string
    {
        if ($this->baseUri === null) {
            return self::DEFAULT_BASE_URI;
        } else {
            return $this->baseUri;
        }
    }

    /**
     * @param string|null $baseUri
     */
    public function setBaseUri(?string $baseUri): void
    {
        $this->baseUri = $baseUri;
    }

    /**
     * @param string $code
     */
    abstract public function fetchToken(string $code);

    /**
     * @param string $refreshToken
     */
    abstract public function refreshToken(string $refreshToken);

    protected function executeTokenPost(string $uri, array $body)
    {
        $res = $this->executePost($uri, $body);
        if (!$res instanceof OAuth2Error) {
            return new OAuth2TokenResponse($res['token_type'], $res['access_token'], $res['refresh_token'], $res['expires_in']);
        } else {
            return $res;
        }
    }

    protected function executePost(string $uri, array $body)
    {
        $r = $this->client->post($uri, ['json' => $body]);
        $statusCode = $r->getStatusCode();
        $resBodyJson = $r->getBody()->getContents();
        $resBody = json_decode($resBodyJson, true);
        if ($statusCode === 200) {
            return $resBody;
        } else {
            return new OAuth2Error($statusCode, $resBody['error'], $resBody['error_description']);
        }
    }
}
