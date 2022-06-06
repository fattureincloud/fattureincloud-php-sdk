<?php

namespace FattureInCloud\OAuth2;

/**
 *  The Success Response of the OAuth2 Authorization Code flow.
 */
class OAuth2AuthorizationCodeTokenResponse
{
    /**
     * @var string
     */
    private $tokenType;
    /**
     * @var string
     */
    private $accessToken;
    /**
     * @var string
     */
    private $refreshToken;
    /**
     * @var int
     */
    private $expiresIn;

    /**
     * @param string $tokenType
     * @param string $accessToken
     * @param string $refreshToken
     * @param int $expiresIn
     */
    public function __construct(string $tokenType, string $accessToken, string $refreshToken, int $expiresIn)
    {
        $this->tokenType = $tokenType;
        $this->accessToken = $accessToken;
        $this->refreshToken = $refreshToken;
        $this->expiresIn = $expiresIn;
    }

    /**
     * @return string
     */
    public function getTokenType()
    {
        return $this->tokenType;
    }

    /**
     * @param string $tokenType
     */
    public function setTokenType(string $tokenType): void
    {
        $this->tokenType = $tokenType;
    }

    /**
     * @return string
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * @param string $accessToken
     */
    public function setAccessToken(string $accessToken): void
    {
        $this->accessToken = $accessToken;
    }

    /**
     * @return string
     */
    public function getRefreshToken()
    {
        return $this->refreshToken;
    }

    /**
     * @param string $refreshToken
     */
    public function setRefreshToken(string $refreshToken): void
    {
        $this->refreshToken = $refreshToken;
    }

    /**
     * @return int
     */
    public function getExpiresIn()
    {
        return $this->expiresIn;
    }

    /**
     * @param int $expiresIn
     */
    public function setExpiresIn(int $expiresIn): void
    {
        $this->expiresIn = $expiresIn;
    }

    /**
     * @return string
     */
    public function toJson(): string
    {
        $arr = [
            'token_type' => $this->tokenType,
            'access_token' => $this->accessToken,
            'refresh_token' => $this->refreshToken,
            'expires_in' => $this->expiresIn,
        ];

        return json_encode($arr);
    }

    /**
     * @param string $json
     * @return OAuth2AuthorizationCodeTokenResponse
     */
    public static function fromJson(string $json): OAuth2AuthorizationCodeTokenResponse
    {
        $arr = json_decode($json, true);

        $tokenType = $arr['token_type'];
        $accessToken = $arr['access_token'];
        $refreshToken = $arr['refresh_token'];
        $expiresIn = $arr['expires_in'];

        return new OAuth2AuthorizationCodeTokenResponse($tokenType, $accessToken, $refreshToken, $expiresIn);
    }
}
