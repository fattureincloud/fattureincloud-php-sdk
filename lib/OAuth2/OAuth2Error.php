<?php

namespace FattureInCloud\OAuth2;

/**
 *  The Error Response of the OAuth2 flow.
 */
class OAuth2Error
{
    /**
     * @var int
     */
    private $code;
    /**
     * @var string
     */
    private $error;
    /**
     * @var string
     */
    private $errorDescription;

    /**
     * @param int $code
     * @param string $error
     * @param string $errorDescription
     */
    public function __construct(int $code, string $error, string $errorDescription)
    {
        $this->code = $code;
        $this->error = $error;
        $this->errorDescription = $errorDescription;
    }

    /**
     * @return int
     */
    public function getCode(): int
    {
        return $this->code;
    }

    /**
     * @param int $code
     */
    public function setCode(int $code): void
    {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getError(): string
    {
        return $this->error;
    }

    /**
     * @param string $error
     */
    public function setError(string $error): void
    {
        $this->error = $error;
    }

    /**
     * @return string
     */
    public function getErrorDescription(): string
    {
        return $this->errorDescription;
    }

    /**
     * @param string $errorDescription
     */
    public function setErrorDescription(string $errorDescription): void
    {
        $this->errorDescription = $errorDescription;
    }

    /**
     * @return string
     */
    public function toJson(): string
    {
        $arr = [
            'code' => $this->code,
            'error' => $this->error,
            'error_description' => $this->errorDescription,
        ];

        return json_encode($arr);
    }

    /**
     * @param string $json
     * @return OAuth2Error
     */
    public static function fromJson(string $json): OAuth2Error
    {
        $arr = json_decode($json, true);

        $code = $arr['code'];
        $error = $arr['error'];
        $errorDescription = $arr['error_description'];

        return new OAuth2Error($code, $error, $errorDescription);
    }
}
