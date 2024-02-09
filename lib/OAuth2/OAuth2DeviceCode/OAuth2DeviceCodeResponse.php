<?php

namespace FattureInCloud\OAuth2\OAuth2DeviceCode;

use FattureInCloud\OAuth2\OAuth2TokenResponse;

/**
 *  The Device Code Response of the OAuth2 Device Code flow.
 */
class OAuth2DeviceCodeResponse
{
    /**
     * @var string
     */
    private $deviceCode;
    /**
     * @var string
     */
    private $userCode;
    /**
     * @var array
     */
    private $scope;
    /**
     * @var string
     */
    private $verificationUri;
    /**
    * @var int
    */
    private $interval;
    /**
     * @var int
     */
    private $expiresIn;

    /**
     * @param string $deviceCode
     * @param string $userCode
     * @param array $scope
     * @param string $verificationUri
     * @param int $interval
     * @param int $expiresIn
     */
    public function __construct(string $deviceCode, string $userCode, array $scope, string $verificationUri, int $interval, int $expiresIn)
    {
        $this->deviceCode = $deviceCode;
        $this->userCode = $userCode;
        $this->scope = $scope;
        $this->verificationUri = $verificationUri;
        $this->interval = $interval;
        $this->expiresIn = $expiresIn;
    }

    /**
     * @return string
     */
    public function getDeviceCode(): string
    {
        return $this->deviceCode;
    }

    /**
     * @param string $deviceCode
     */
    public function setDeviceCode(string $deviceCode): void
    {
        $this->deviceCode = $deviceCode;
    }

    /**
     * @return string
     */
    public function getUserCode(): string
    {
        return $this->userCode;
    }

    /**
     * @param string $userCode
     */
    public function setUserCode(string $userCode): void
    {
        $this->userCode = $userCode;
    }

    /**
     * @return array
     */
    public function getScope(): array
    {
        return $this->scope;
    }

    /**
     * @param array $scope
     */
    public function setScope(array $scope): void
    {
        $this->scope = $scope;
    }

    /**
     * @return string
     */
    public function getVerificationUri(): string
    {
        return $this->verificationUri;
    }

    /**
     * @param string $verificationUri
     */
    public function setVerificationUri(string $verificationUri): void
    {
        $this->verificationUri = $verificationUri;
    }

    /**
     * @return int
     */
    public function getInterval(): int
    {
        return $this->interval;
    }

    /**
     * @param int $interval
     */
    public function setInterval(int $interval): void
    {
        $this->interval = $interval;
    }

    /**
     * @return int
     */
    public function getExpiresIn(): int
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
            'device_code' => $this->deviceCode,
            'user_code' => $this->userCode,
            'scope' => $this->scope,
            'verification_uri' => $this->verificationUri,
            'interval' => $this->interval,
            'expires_in' => $this->expiresIn,
        ];

        return json_encode($arr);
    }

    /**
     * @param string $json
     * @return OAuth2DeviceCodeResponse
     */
    public static function fromJson(string $json): OAuth2DeviceCodeResponse
    {
        $arr = json_decode($json, true);

        $deviceCode = $arr['device_code'];
        $userCode = $arr['user_code'];
        $scope = $arr['scope'];
        $verificationUri = $arr['verification_uri'];
        $interval = $arr['interval'];
        $expiresIn = $arr['expires_in'];

        return new OAuth2DeviceCodeResponse($deviceCode, $userCode, $scope, $verificationUri, $interval, $expiresIn);
    }
}
