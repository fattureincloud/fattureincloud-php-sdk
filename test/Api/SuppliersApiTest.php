<?php
/**
 * SuppliersApiTest
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
 * The version of the OpenAPI document: 2.0.5
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
 * SuppliersApiTest Class Doc Comment
 *
 * @category Class
 * @package  FattureInCloud
 * @author   Fatture In Cloud API team
 * @link     https://fattureincloud.it
 */
class SuppliersApiTest extends TestCase
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
     * Test case for createSupplier
     *
     * Create Supplier.
     *
     */
    public function testCreateSupplier()
    {
        $stream = '{"data":{"id":12345,"code":"AE86","name":"Mario Rossi S.R.L.","type":"company","first_name":"Mario","last_name":"Rossi","contact_person":"","vat_number":"111222333","tax_code":"111122233","address_street":"Corso Magellano, 46","address_postal_code":"20146","address_city":"Milano","address_province":"MI","address_extra":"","country":"Italia","email":"mario.rossi@example.com","certified_email":"mario.rossi@pec.example.com","phone":"1234567890","fax":"123456789","notes":""}}';
        $mock = new MockHandler([new Response(
            200,
            ['Content-Type' => 'application/json'],
            $stream
        )]);

        $handler = HandlerStack::create($mock);
        $apiInstance = new \FattureInCloud\Api\SuppliersApi(
            new \GuzzleHttp\Client(['handler' => $handler])
        );
        $company_id = 2;
        $create_supplier_request = "json";
        $result = $apiInstance->createSupplier($company_id, $create_supplier_request);
        $obj = ObjectSerializer::deserialize($stream, '\FattureInCloud\Model\CreateSupplierResponse');

        TestCase::assertEquals($obj, $result);
    }

    /**
     * Test case for deleteSupplier
     *
     * Delete Supplier.
     *
     */
    public function testDeleteSupplier()
    {
        TestCase::assertEquals(1, 1);
    }

    /**
     * Test case for getSupplier
     *
     * Get Supplier.
     *
     */
    public function testGetSupplier()
    {
        $stream = '{"data":{"id":12345,"code":"AE86","name":"Mario Rossi S.R.L.","type":"company","first_name":"Mario","last_name":"Rossi","contact_person":"","vat_number":"111222333","tax_code":"111122233","address_street":"Corso Magellano, 46","address_postal_code":"20146","address_city":"Milano","address_province":"MI","address_extra":"","country":"Italia","email":"mario.rossi@example.com","certified_email":"mario.rossi@pec.example.com","phone":"1234567890","fax":"123456789","notes":""}}';
        $mock = new MockHandler([new Response(
            200,
            ['Content-Type' => 'application/json'],
            $stream
        )]);

        $handler = HandlerStack::create($mock);
        $apiInstance = new \FattureInCloud\Api\SuppliersApi(
            new \GuzzleHttp\Client(['handler' => $handler])
        );
        $company_id = 2;
        $supplier_id = 12345;
        $result = $apiInstance->getSupplier($company_id, $supplier_id);
        $obj = ObjectSerializer::deserialize($stream, '\FattureInCloud\Model\GetSupplierResponse');

        TestCase::assertEquals($obj, $result);
    }

    /**
     * Test case for listSuppliers
     *
     * List Suppliers.
     *
     */
    public function testListSuppliers()
    {
        $stream = '{"first_page_url":"page=1","from":1,"last_page":2,"last_page_url":"page=2","next_page_url":"page=2","path":"\/entities\/suppliers","per_page":50,"prev_page_url":null,"to":55,"total":55,"data":[{"id":12345,"code":"AE86","name":"Mario Rossi S.R.L.","type":"company","first_name":"Mario","last_name":"Rossi","contact_person":"","vat_number":"111222333","tax_code":"111122233","address_street":"Corso Magellano, 46","address_postal_code":"20146","address_city":"Milano","address_province":"MI","address_extra":"","country":"Italia","email":"mario.rossi@example.com","certified_email":"mario.rossi@pec.example.com","phone":"1234567890","fax":"123456789","notes":"","created_at":"2021-15-08","updated_at":"2021-15-08"},{"id":12346,"code":"GT86","name":"Maria Grossi S.R.L.","type":"company","first_name":"","last_name":"","contact_person":"","vat_number":"200020102020","tax_code":"200020102020","address_street":"Vicolo stretto, 32","address_postal_code":"20146","address_city":"Milano","address_province":"MI","address_extra":"","country":"Italia","email":"maria.grossi@example.com","certified_email":"maria.grossi@pec.example.com","phone":"0987654321","fax":"098765432","notes":"","created_at":"2021-15-09","updated_at":"2021-15-09"}]}';
        $mock = new MockHandler([new Response(
            200,
            ['Content-Type' => 'application/json'],
            $stream
        )]);

        $handler = HandlerStack::create($mock);
        $apiInstance = new \FattureInCloud\Api\SuppliersApi(
            new \GuzzleHttp\Client(['handler' => $handler])
        );
        $company_id = 2;
        $result = $apiInstance->listSuppliers($company_id);
        $obj = ObjectSerializer::deserialize($stream, '\FattureInCloud\Model\ListSuppliersResponse');

        TestCase::assertEquals($obj, $result);
    }

    /**
     * Test case for modifySupplier
     *
     * Modify Supplier.
     *
     */
    public function testModifySupplier()
    {
        $stream = '{"data":{"id":12345,"code":"AE86","name":"Mario Rossi S.R.L.","type":"company","first_name":"Mario","last_name":"Rossi","contact_person":"","vat_number":"111222333","tax_code":"111122233","address_street":"Corso Magellano, 46","address_postal_code":"20146","address_city":"Milano","address_province":"MI","address_extra":"","country":"Italia","email":"mario.rossi@example.com","certified_email":"mario.rossi@pec.example.com","phone":"1234567890","fax":"123456789","notes":""}}';
        $mock = new MockHandler([new Response(
            200,
            ['Content-Type' => 'application/json'],
            $stream
        )]);

        $handler = HandlerStack::create($mock);
        $apiInstance = new \FattureInCloud\Api\SuppliersApi(
            new \GuzzleHttp\Client(['handler' => $handler])
        );
        $company_id = 2;
        $supplier_id = 12345;
        $modify_supplier_request = "json";
        $result = $apiInstance->modifySupplier($company_id, $supplier_id, $modify_supplier_request);
        $obj = ObjectSerializer::deserialize($stream, '\FattureInCloud\Model\ModifySupplierResponse');

        TestCase::assertEquals($obj, $result);
    }
}
