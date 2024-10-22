<?php

namespace FattureInCloud\OAuth2\OAuth2DeviceCode;

use FattureInCloud\OAuth2\OAuth2AuthorizationCode\OAuth2AuthorizationCodeParams;
use FattureInCloud\OAuth2\OAuth2Error;
use FattureInCloud\OAuth2\OAuth2Manager;
use FattureInCloud\OAuth2\OAuth2TokenResponse;
use GuzzleHttp\Client;

/**
 *  The Manager for OAuth2 Device Code flow.
 */
class OAuth2DeviceCodeManager extends OAuth2Manager
{
    private const DEFAULT_BASE_URI = 'https://api-v2.fattureincloud.it';

    /**
     * @param string $clientId
     * @param string|null $baseUri
     * @param Client|null $client
     */
    public function __construct(string $clientId, string $baseUri = self::DEFAULT_BASE_URI, Client $client = null)
    {
        parent::__construct($clientId, $baseUri, $client);
    }

    /**
     * @param array $scopes
     * @return OAuth2DeviceCodeResponse|OAuth2Error
     */
    public function getDeviceCode(array $scopes)
    {
        $scopeStr = implode(' ', $scopes);
        $tokenUri = $this->getBaseUri() . '/oauth/device';
        $body = [
            'client_id' => $this->clientId,
            'scope' => $scopeStr,
        ];
        $res = $this->executePost($tokenUri, $body)['data'];
        if (!$res instanceof OAuth2Error) {
            return new OAuth2DeviceCodeResponse($res['device_code'], $res['user_code'], $res['scope'], $res['verification_uri'], $res['interval'], $res['expires_in']);
        } else {
            return $res;
        }
    }

    /**
     * @param string $code
     * @return OAuth2Error|OAuth2TokenResponse
     */
    public function fetchToken(string $code)
    {
        $tokenUri = $this->getBaseUri() . '/oauth/token';
        $body = [
            'grant_type' => 'urn:ietf:params:oauth:grant-type:device_code',
            'client_id' => $this->clientId,
            'device_code' => $code
        ];
        return $this->executeTokenPost($tokenUri, $body);
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
            'refresh_token' => $refreshToken,
        ];
        return $this->executeTokenPost($tokenUri, $body);
    }
}
