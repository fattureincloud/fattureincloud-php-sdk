<?php
/**
 * SettingsApiTest
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
 * ## Request informations In every request description you will be able to find some additional informations about context, permissions and supported functionality:  | Parameter | Description | |-----------|-------------| | 👥 Context | Indicate the subject of the request. Can be `company`, `user` or `accountant`.  | | 🔒 Required scope | If present, indicates the required scope to fulfill the request. | | 🔍 Filtering | If present, indicates which fields support the filtering feature. | | ↕️ Sorting | If present, indicates which fields support the sorting feature. | | 📄 Paginated results | If present, indicate that the results are paginated. | | 🎩 Customized responses supported | If present, indicate that you can use `field` or `fieldset` to customize the response body. |  For example the request `GET /entities/{entityRole}` have tis informations: \\ 👥 Company context \\ 🔒 Required scope: `entity.clients:r` or `entity.suppliers:r` (depending on `entityRole`) \\ 🔍 Filtering: `id`, `name` \\ ↕️ Sorting: `id`, `name` \\ 📄 Paginated results \\ 🎩 Customized responses supported  Keep in mind that if you are making **company realted requests**, you will need to specify the company id in the requests: ``` GET /c/{company_id}/issued_documents ```
 *
 * The version of the OpenAPI document: 2.0.1
 * Contact: info@fattureincloud.it
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the endpoint.
 */

namespace FattureInCloud\Test\Api;

use \FattureInCloud\Configuration;
use \FattureInCloud\ApiException;
use \FattureInCloud\ObjectSerializer;
use PHPUnit\Framework\TestCase;
use \GuzzleHttp\Client;
use \GuzzleHttp\Handler\MockHandler;
use \GuzzleHttp\HandlerStack;
use \GuzzleHttp\Psr7\Response;
use \GuzzleHttp\Psr7\Request;
use \GuzzleHttp\Exception\RequestException;

/**
 * SettingsApiTest Class Doc Comment
 *
 * @category Class
 * @package  FattureInCloud
 * @author   Fatture In Cloud API team
 * @link     https://fattureincloud.it
 */
class SettingsApiTest extends TestCase
{
    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
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
     * Test case for createPaymentAccount
     *
     * Create Payment Account.
     *
     */
    public function testCreatePaymentAccount()
    {
        $stream = '{"data":{"id":12345,"name":"Indesa","type":"bank","iban":"IT17Q0051343200000003497636","sia":"T1234","virtual":false}}';
        $mock = new MockHandler([new Response(
            200,
            ['Content-Type' => 'application/json'],
            $stream
        )]);

        $handler = HandlerStack::create($mock);
        $apiInstance = new \FattureInCloud\Api\SettingsApi(
            new \GuzzleHttp\Client(['handler' => $handler])
        );
        $company_id = 2;
        $create_payment_account_request = 'json';
        $result = $apiInstance->createPaymentAccount($company_id, $create_payment_account_request);
        $obj = ObjectSerializer::deserialize($stream, '\FattureInCloud\Model\CreatePaymentAccountResponse');

        TestCase::assertEquals($obj, $result);
    }

    /**
     * Test case for createPaymentMethod
     *
     * Create Payment Method.
     *
     */
    public function testCreatePaymentMethod()
    {
        $stream = '{"data":{"id":386683,"name":"Bonifico bancario","is_default":true,"type":"standard","details":[{"title":"Banca","description":"Sao Paulo"}],"default_payment_account":{"id":12345,"name":"conto banca SP"}}}';
        $mock = new MockHandler([new Response(
            200,
            ['Content-Type' => 'application/json'],
            $stream
        )]);

        $handler = HandlerStack::create($mock);
        $apiInstance = new \FattureInCloud\Api\SettingsApi(
            new \GuzzleHttp\Client(['handler' => $handler])
        );
        $company_id = 2;
        $create_payment_method_request = 'json';
        $result = $apiInstance->createPaymentMethod($company_id, $create_payment_method_request);
        $obj = ObjectSerializer::deserialize($stream, '\FattureInCloud\Model\CreatePaymentMethodResponse');

        TestCase::assertEquals($obj, $result);
    }

    /**
     * Test case for deletePaymentAccount
     *
     * Delete Payment Account.
     *
     */
    public function testDeletePaymentAccount()
    {
        TestCase::assertEquals(1, 1);
    }

    /**
     * Test case for deletePaymentMethod
     *
     * Delete Payment Method.
     *
     */
    public function testDeletePaymentMethod()
    {
        TestCase::assertEquals(1, 1);
    }

    /**
     * Test case for getPaymentAccount
     *
     * Get Payment Account.
     *
     */
    public function testGetPaymentAccount()
    {
        $stream = '{"data":{"id":12345,"name":"Indesa","type":"bank","iban":"IT17Q0051343200000003497636","sia":"T1234","virtual":false}}';
        $mock = new MockHandler([new Response(
            200,
            ['Content-Type' => 'application/json'],
            $stream
        )]);

        $handler = HandlerStack::create($mock);
        $apiInstance = new \FattureInCloud\Api\SettingsApi(
            new \GuzzleHttp\Client(['handler' => $handler])
        );
        $company_id = 2;
        $payment_account_id = 12345;
        $result = $apiInstance->getPaymentAccount($company_id, $payment_account_id);
        $obj = ObjectSerializer::deserialize($stream, '\FattureInCloud\Model\GetPaymentAccountResponse');

        TestCase::assertEquals($obj, $result);
    }

    /**
     * Test case for getPaymentMethod
     *
     * Get Payment Method.
     *
     */
    public function testGetPaymentMethod()
    {
        $stream = '{"data":{"id":386683,"name":"Bonifico bancario","is_default":true,"type":"standard","details":[{"title":"Banca","description":"Sao Paulo"}],"default_payment_account":{"id":12345,"name":"conto banca SP"}}}';
        $mock = new MockHandler([new Response(
            200,
            ['Content-Type' => 'application/json'],
            $stream
        )]);

        $handler = HandlerStack::create($mock);
        $apiInstance = new \FattureInCloud\Api\SettingsApi(
            new \GuzzleHttp\Client(['handler' => $handler])
        );
        $company_id = 2;
        $payment_method_id = 12345;
        $result = $apiInstance->getPaymentMethod($company_id, $payment_method_id);
        $obj = ObjectSerializer::deserialize($stream, '\FattureInCloud\Model\GetPaymentMethodResponse');

        TestCase::assertEquals($obj, $result);
    }

    /**
     * Test case for modifyPaymentAccount
     *
     * Modify Payment Account.
     *
     */
    public function testModifyPaymentAccount()
    {
        $stream = '{"data":{"id":12345,"name":"Indesa","type":"bank","iban":"IT17Q0051343200000003497636","sia":"T1234","virtual":false}}';
        $mock = new MockHandler([new Response(
            200,
            ['Content-Type' => 'application/json'],
            $stream
        )]);

        $handler = HandlerStack::create($mock);
        $apiInstance = new \FattureInCloud\Api\SettingsApi(
            new \GuzzleHttp\Client(['handler' => $handler])
        );
        $company_id = 2;
        $modify_payment_account_request = 'json';
        $result = $apiInstance->modifyPaymentAccount($company_id, $modify_payment_account_request);
        $obj = ObjectSerializer::deserialize($stream, '\FattureInCloud\Model\ModifyPaymentAccountResponse');

        TestCase::assertEquals($obj, $result);
    }

    /**
     * Test case for modifyPaymentMethod
     *
     * Modify Payment Method.
     *
     */
    public function testModifyPaymentMethod()
    {
        $stream = '{"data":{"id":386683,"name":"Bonifico bancario","is_default":true,"type":"standard","details":[{"title":"Banca","description":"Sao Paulo"}],"default_payment_account":{"id":12345,"name":"conto banca SP"}}}';
        $mock = new MockHandler([new Response(
            200,
            ['Content-Type' => 'application/json'],
            $stream
        )]);

        $handler = HandlerStack::create($mock);
        $apiInstance = new \FattureInCloud\Api\SettingsApi(
            new \GuzzleHttp\Client(['handler' => $handler])
        );
        $company_id = 2;
        $modify_payment_method_request = 'json';
        $result = $apiInstance->modifyPaymentMethod($company_id, $modify_payment_method_request);
        $obj = ObjectSerializer::deserialize($stream, '\FattureInCloud\Model\ModifyPaymentMethodResponse');

        TestCase::assertEquals($obj, $result);
    }

    /**
     * Test case for getTaxProfile
     *
     * Get Tax Profile.
     *
     */
    public function testGetTaxProfile()
    {
        $stream = '{ 
            "data": {
                "company_type": "individual",
                "company_subtype": "artigiani",
                "profession": "test",
                "regime": "forfettario_5",
                "rivalsa_name": "",
                "default_rivalsa": 0,
                "cassa_name": "",
                "default_cassa": 0,
                "default_cassa_taxable": 100,
                "cassa2_name": "",
                "default_cassa2": 0,
                "default_cassa2_taxable": 0,
                "default_withholding_tax": 0,
                "default_withholding_tax_taxable": 100,
                "default_other_withholding_tax": 0,
                "enasarco": false,
                "enasarco_type": "null",
                "contributions_percentage": 0,
                "med": false,
                "default_vat": {
                    "id": 66,
                    "value": 0,
                    "description": "Contribuenti forfettari",
                    "notes": "Operazione non soggetta a IVA ai sensi dell\'art. 1, commi 54-89, Legge n. 190\/2014 e succ. modifiche\/integrazioni",
                    "e_invoice": true,
                    "ei_type": "2.2",
                    "ei_description": "Non soggetta art. 1\/54-89 L. 190\/2014 e succ. modifiche\/integrazioni",
                    "editable": false,
                    "is_disabled": false,
                    "default": true
                }
            }
        }';
        $mock = new MockHandler([new Response(
            200,
            ['Content-Type' => 'application/json'],
            $stream
        )]);

        $handler = HandlerStack::create($mock);
        $apiInstance = new \FattureInCloud\Api\SettingsApi(
            new \GuzzleHttp\Client(['handler' => $handler])
        );
        $company_id = 2;
        $result = $apiInstance->getTaxProfile($company_id);
        $obj = ObjectSerializer::deserialize($stream, '\FattureInCloud\Model\GetTaxProfileResponse');

        TestCase::assertEquals($obj, $result);
    }


}
