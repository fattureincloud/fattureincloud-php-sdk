<?php

namespace FattureInCloud\OAuth2;

use GuzzleHttp\Client;

/**
 *  The Manager for OAuth2 Authorization Code flow.
 */
class OAuth2AuthorizationCodeManager
{
    private const DEFAULT_BASE_URI = 'https://api-v2.fattureincloud.it';

    /**
     * @var Client
     */
    private $client;
    /**
     * @var string
     */
    private $clientId;
    /**
     * @var string
     */
    private $clientSecret;
    /**
     * @var string
     */
    private $redirectUri;
    /**
     * @var string|null
     */
    private $baseUri;

    /**
     * @param string $clientId
     * @param string $clientSecret
     * @param string $redirectUri
     * @param string|null $baseUri
     * @param Client|null $client
     */
    public function __construct(string $clientId, string $clientSecret, string $redirectUri, string $baseUri = self::DEFAULT_BASE_URI, Client $client = null)
    {
        if ($client === null) {
            $this->client = new Client();
        } else {
            $this->client = $client;
        }
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
        $this->redirectUri = $redirectUri;
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
    public function getClientSecret(): string
    {
        return $this->clientSecret;
    }

    /**
     * @param string $clientSecret
     */
    public function setClientSecret(string $clientSecret): void
    {
        $this->clientSecret = $clientSecret;
    }

    /**
     * @return string
     */
    public function getRedirectUri(): string
    {
        return $this->redirectUri;
    }

    /**
     * @param string $redirectUri
     */
    public function setRedirectUri(string $redirectUri): void
    {
        $this->redirectUri = $redirectUri;
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
     * @param array $scopes
     * @param string $state
     * @return string
     */
    public function getAuthorizationUrl(array $scopes, string $state): string
    {
        $scopeStr = implode(' ', $scopes);
        $params = [
            'response_type' => 'code',
            'client_id' => $this->clientId,
            'redirect_uri' => $this->redirectUri,
            'scope' => $scopeStr,
            'state' => $state,
        ];

        $qs = http_build_query($params);
        return $this->getBaseUri() . '/oauth/authorize?' . $qs;
    }

    /**
     * @param string $url
     * @return OAuth2AuthorizationCodeParams
     */
    public function getParamsFromUrl(string $url): OAuth2AuthorizationCodeParams
    {
        $components = parse_url($url);
        parse_str($components['query'], $qs);
        return new OAuth2AuthorizationCodeParams($qs['code'], $qs['state']);
    }

    /**
     * @param string $url
     */
    public function fetchToken(string $code)
    {
        $tokenUri = $this->getBaseUri() . '/oauth/token';
        $body = [
            'grant_type' => 'authorization_code',
            'client_id' => $this->clientId,
            'client_secret' => $this->clientSecret,
            'redirect_uri' => $this->redirectUri,
            'code' => $code
        ];
        return $this->executePost($tokenUri, $body);
    }

    /**
     * @param string $refreshToken
     */
    public function refreshToken(string $refreshToken)
    {
        $tokenUri = $this->getBaseUri() . '/oauth/token';
        $body = [
            'grant_type' => 'refresh_token',
            'client_id' => $this->clientId,
            'client_secret' => $this->clientSecret,
            'refresh_token' => $refreshToken,
        ];
        return $this->executePost($tokenUri, $body);
    }

    private function executePost(string $uri, array $body)
    {
        $r = $this->client->post($uri, ['json' => $body]);
        $statusCode = $r->getStatusCode();
        $resBodyJson = $r->getBody()->getContents();
        $resBody = json_decode($resBodyJson, true);
        if ($statusCode === 200) {
            return new OAuth2AuthorizationCodeTokenResponse($resBody['token_type'], $resBody['access_token'], $resBody['refresh_token'], $resBody['expires_in']);
        } else {
            return new OAuth2AuthorizationCodeError($statusCode, $resBody['error'], $resBody['error_description']);
        }
    }
}
