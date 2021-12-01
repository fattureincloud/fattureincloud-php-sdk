<?php
/**
 * VerifyEInvoiceXmlSuccessResponseTest
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  FattureInCloud
 * @author   Fatture In Cloud API team
 * @link     https://fattureincloud.it
 */

/**
 * Fatture in Cloud API v2 - API Reference
 *
 * Connect your software with Fatture in Cloud, the invoicing platform chosen by more than 400.000 businesses in Italy.   The Fatture in Cloud API is based on REST, and makes possible to interact with the user related data prior authorization via OAuth2 protocol.  For more information, please visit https://www.fattureincloud.it.
 *
 * The version of the OpenAPI document: 2.0.1
 * Contact: info@fattureincloud.it
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the model.
 */

namespace FattureInCloud\Test\Model;

use PHPUnit\Framework\TestCase;
use \FattureInCloud\ObjectSerializer;

/**
 * VerifyEInvoiceXmlSuccessResponseTest Class Doc Comment
 *
 * @category    Class
 * @description VerifyEInvoiceXmlSuccessResponse
 * @package     FattureInCloud
 * @author   Fatture In Cloud API team
 * @link     https://fattureincloud.it
 */
class VerifyEInvoiceXmlSuccessResponseTest extends TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
        $json = '{
            "data": {
                "success": true
            }
        }';

        $this->array = json_decode($json, true);

        $this->object = ObjectSerializer::deserialize($json, '\FattureInCloud\Model\VerifyEInvoiceXmlSuccessResponse');
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test "VerifyEInvoiceXmlSuccessResponse"
     */
    public function testVerifyEInvoiceXmlSuccessResponse()
    {
        foreach ($this->array as $key => $value) 
        {
           Testcase::assertArrayHasKey($key, $this->object);
        }
    }

    /**
     * Test attribute "data"
     */
    public function testPropertyData()
    {
        foreach ($this->array['data'] as $key => $value) 
        {
           Testcase::assertArrayHasKey($key, $this->object['data']);
        }
    }
}
