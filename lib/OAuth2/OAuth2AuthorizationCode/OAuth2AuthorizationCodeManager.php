<?php

namespace FattureInCloud\OAuth2\OAuth2AuthorizationCode;

use FattureInCloud\OAuth2\OAuth2Error;
use FattureInCloud\OAuth2\OAuth2Manager;
use FattureInCloud\OAuth2\OAuth2TokenResponse;
use GuzzleHttp\Client;

/**
 *  The Manager for OAuth2 Authorization Code flow.
 */
class OAuth2AuthorizationCodeManager extends OAuth2Manager
{
    private const DEFAULT_BASE_URI = 'https://api-v2.fattureincloud.it';

    /**
     * @var string
     */
    private $clientSecret;
    /**
     * @var string
     */
    private $redirectUri;

    /**
     * @param string $clientId
     * @param string $clientSecret
     * @param string $redirectUri
     * @param string|null $baseUri
     * @param Client|null $client
     */
    public function __construct(string $clientId, string $clientSecret, string $redirectUri, string $baseUri = self::DEFAULT_BASE_URI, Client $client = null)
    {
        parent::__construct($clientId, $baseUri, $client);
        $this->clientSecret = $clientSecret;
        $this->redirectUri = $redirectUri;
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
     * @param string $code
     * @return OAuth2Error|OAuth2TokenResponse
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
        return $this->executeTokenPost($tokenUri, $body);
    }

    /**
     * @param string $refreshToken
     * @return OAuth2Error|OAuth2TokenResponse
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
        return $this->executeTokenPost($tokenUri, $body);
    }
}
