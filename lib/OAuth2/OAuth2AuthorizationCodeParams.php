<?php

namespace FattureInCloud\OAuth2;

/**
 *  The Redirect Params of the OAuth2 Authorization Code flow.
 */
class OAuth2AuthorizationCodeParams
{
    /**
     * @var string
     */
    private $authorizationCode;
    /**
     * @var string
     */
    private $state;

    /**
     * @param string $authorizationCode
     * @param string $state
     */
    public function __construct(string $authorizationCode, string $state)
    {
        $this->authorizationCode = $authorizationCode;
        $this->state = $state;
    }

    /**
     * @return string
     */
    public function getAuthorizationCode(): string
    {
        return $this->authorizationCode;
    }

    /**
     * @param string $authorizationCode
     */
    public function setAuthorizationCode(string $authorizationCode): void
    {
        $this->authorizationCode = $authorizationCode;
    }

    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * @param string $state
     */
    public function setState(string $state): void
    {
        $this->state = $state;
    }

    /**
     * @return string
     */
    public function toJson(): string
    {
        $arr = [
            'code' => $this->authorizationCode,
            'state' => $this->state,
        ];

        return json_encode($arr);
    }

    /**
     * @param string $json
     * @return OAuth2AuthorizationCodeParams
     */
    public static function fromJson(string $json): OAuth2AuthorizationCodeParams
    {
        $arr = json_decode($json, true);

        $authorizarionCode = $arr['code'];
        $state = $arr['state'];

        return new OAuth2AuthorizationCodeParams($authorizarionCode, $state);
    }
}
