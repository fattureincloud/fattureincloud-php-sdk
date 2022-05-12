<?php
/**
 * ProductsApiTest
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
 * The version of the OpenAPI document: 2.0.6
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
 * ProductsApiTest Class Doc Comment
 *
 * @category Class
 * @package  FattureInCloud
 * @author   Fatture In Cloud API team
 * @link     https://fattureincloud.it
 */
class ProductsApiTest extends TestCase
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
     * Test case for createProduct
     *
     * Create Product.
     *
     */
    public function testCreateProduct()
    {
        $stream = '{"data":{"id":12345,"name":"Tavolo di marmo","code":"TAVOLO003","net_price":240,"gross_price":280,"use_gross_price":false,"net_cost":0,"measure":"","description":"Tavolo in marmo pregiato","category":"arredamento","in_stock":true,"default_vat":{"id":3,"value":22,"description":"Non imponibile art. 123","notes":"IVA non imponibile ai sensi dell\'articolo 123, comma 2","is_disabled":false}}}';
        $mock = new MockHandler([new Response(
            200,
            ['Content-Type' => 'application/json'],
            $stream
        )]);

        $handler = HandlerStack::create($mock);
        $apiInstance = new \FattureInCloud\Api\ProductsApi(
            new \GuzzleHttp\Client(['handler' => $handler])
        );
        $company_id = 2;
        $create_product_request = 'json';
        $result = $apiInstance->createProduct($company_id, $create_product_request);
        $obj = ObjectSerializer::deserialize($stream, '\FattureInCloud\Model\CreateProductResponse');

        TestCase::assertEquals($obj, $result);
    }

    /**
     * Test case for deleteProduct
     *
     * Delete Product.
     *
     */
    public function testDeleteProduct()
    {
        TestCase::assertEquals(1, 1);
    }

    /**
     * Test case for getProduct
     *
     * Get Product.
     *
     */
    public function testGetProduct()
    {
        $stream = '{"data":{"id":12345,"name":"Tavolo di marmo","code":"TAVOLO003","net_price":240,"gross_price":280,"use_gross_price":false,"net_cost":0,"measure":"","description":"Tavolo in marmo pregiato","category":"arredamento","in_stock":true,"default_vat":{"id":3,"value":22,"description":"Non imponibile art. 123","notes":"IVA non imponibile ai sensi dell\'articolo 123, comma 2","is_disabled":false}}}';
        $mock = new MockHandler([new Response(
            200,
            ['Content-Type' => 'application/json'],
            $stream
        )]);

        $handler = HandlerStack::create($mock);
        $apiInstance = new \FattureInCloud\Api\ProductsApi(
            new \GuzzleHttp\Client(['handler' => $handler])
        );
        $company_id = 2;
        $product_id = 123345;
        $result = $apiInstance->getProduct($company_id, $product_id);
        $obj = ObjectSerializer::deserialize($stream, '\FattureInCloud\Model\GetProductResponse');

        TestCase::assertEquals($obj, $result);
    }

    /**
     * Test case for listProducts
     *
     * List Products.
     *
     */
    public function testListProducts()
    {
        $stream = '{"current_page":1,"data":[{"id":12345,"name":"Tavolo di marmo","code":"TAVOLO003","net_price":240,"gross_price":280,"use_gross_price":false,"net_cost":0,"measure":"","description":"Tavolo in marmo pregiato","category":"arredamento","in_stock":true,"default_vat":{"id":3,"value":22,"description":"Non imponibile art. 123","notes":"IVA non imponibile ai sensi dell\'articolo 123, comma 2","is_disabled":false}},{"id":12346,"name":"Tavolo di legno","code":"TAVOLO001","net_price":120,"gross_price":160,"use_gross_price":false,"net_cost":0,"measure":"","description":"Tavolo in legno pregiato","category":"arredamento","in_stock":true,"default_vat":{"id":3,"value":22,"description":"Non imponibile art. 123","notes":"IVA non imponibile ai sensi dell\'articolo 123, comma 2","is_disabled":false}}],"first_page_url":"page=1","from":1,"last_page":1,"last_page_url":"page=1","next_page_url":"page=2","path":"products","per_page":50,"prev_page_url":null,"to":55,"total":55}';
        $mock = new MockHandler([new Response(
            200,
            ['Content-Type' => 'application/json'],
            $stream
        )]);

        $handler = HandlerStack::create($mock);
        $apiInstance = new \FattureInCloud\Api\ProductsApi(
            new \GuzzleHttp\Client(['handler' => $handler])
        );
        $company_id = 2;
        $result = $apiInstance->listProducts($company_id);
        $obj = ObjectSerializer::deserialize($stream, '\FattureInCloud\Model\ListProductsResponse');

        TestCase::assertEquals($obj, $result);
    }

    /**
     * Test case for modifyProduct
     *
     * Modify Product.
     *
     */
    public function testModifyProduct()
    {
        $stream = '{"data":{"id":12345,"name":"Tavolo di marmo","code":"TAVOLO003","net_price":240,"gross_price":280,"use_gross_price":false,"net_cost":0,"measure":"","description":"Tavolo in marmo pregiato","category":"arredamento","in_stock":true,"default_vat":{"id":3,"value":22,"description":"Non imponibile art. 123","notes":"IVA non imponibile ai sensi dell\'articolo 123, comma 2","is_disabled":false}}}';
        $mock = new MockHandler([new Response(
            200,
            ['Content-Type' => 'application/json'],
            $stream
        )]);

        $handler = HandlerStack::create($mock);
        $apiInstance = new \FattureInCloud\Api\ProductsApi(
            new \GuzzleHttp\Client(['handler' => $handler])
        );
        $company_id = 2;
        $product_id = 123345;
        $modify_product_response = 'json';
        $result = $apiInstance->modifyProduct($company_id, $product_id, $modify_product_response);
        $obj = ObjectSerializer::deserialize($stream, '\FattureInCloud\Model\ModifyProductResponse');

        TestCase::assertEquals($obj, $result);
    }
}
