<?php
/**
 * CashbookApiTest
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
 * CashbookApiTest Class Doc Comment
 *
 * @category Class
 * @package  FattureInCloud
 * @author   Fatture In Cloud API team
 * @link     https://fattureincloud.it
 */
class CashbookApiTest extends TestCase
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
     * Test case for createCashbookEntry
     *
     * Create Cashbook Entry.
     *
     */
    public function testCreateCashbookEntry()
    {
        $stream = '{"data":{"date":"2021-08-24","amount_out":122,"payment_account_out":{"id":333},"description":"Fattura n. 201\/2021","entity_name":"Rossi S.r.l.","kind":"issued_document","document":{"id":54321},"type":"out"}}';
        $mock = new MockHandler([new Response(
            200,
            ['Content-Type' => 'application/json'],
            $stream
        )]);

        $handler = HandlerStack::create($mock);
        $apiInstance = new \FattureInCloud\Api\CashbookApi(
            new \GuzzleHttp\Client(['handler' => $handler])
        );
        $company_id = 2;
        $create_cashbook_entry_request = "json";
        $result = $apiInstance->createCashbookEntry($company_id, $create_cashbook_entry_request);
        $obj = ObjectSerializer::deserialize($stream, '\FattureInCloud\Model\CreateCashbookEntryResponse');
        
        TestCase::assertEquals($obj, $result);
    }

    /**
     * Test case for deleteCashbookEntry
     *
     * Delete Cashbook Entry.
     *
     */
    public function testDeleteCashbookEntry()
    {
        TestCase::assertEquals(1,1);
    }

    /**
     * Test case for getCashbookEntry
     *
     * Get Cashbook Entry.
     *
     */
    public function testGetCashbookEntry()
    {
        $stream = '{"data":{"date":"2021-10-10”,”amount_out":122,"payment_account_out":{"id”:21},”description":"Fattura n. 201\/2021","entity_name":"Rossi S.r.l.","kind":"issued_document","document":{"id":54321},"type":"out"}}';
        $mock = new MockHandler([new Response(
            200,
            ['Content-Type' => 'application/json'],
            $stream
        )]);

        $handler = HandlerStack::create($mock);
        $apiInstance = new \FattureInCloud\Api\CashbookApi(
            new \GuzzleHttp\Client(['handler' => $handler])
        );
        $company_id = 2;
        $cashbook_id = 12345;
        $result = $apiInstance->getCashbookEntry($company_id, $cashbook_id);
        $obj = ObjectSerializer::deserialize($stream, '\FattureInCloud\Model\GetCashbookEntryResponse');
        
        TestCase::assertEquals($obj, $result);
    }

    /**
     * Test case for listCashbookEntries
     *
     * List Cashbook Entries.
     *
     */
    public function testListCashbookEntries()
    {
        $stream = '{"data":[{"date":"2021-08-24","amount_in":122,"payment_account_in":{"id":333},"description":"Fattura n. 201\/2021","entity_name":"Rossi S.r.l.","kind":"issued_document","document":{"id":54321},"type":"in"},{"date":"2021-08-29","amount_out":211,"payment_account_out":{"id":444},"description":"Fattura n. 202\/2021","entity_name":"Red S.r.l.","kind":"issued_document","document":{"id":12345},"type":"out"}]}';
        $mock = new MockHandler([new Response(
            200,
            ['Content-Type' => 'application/json'],
            $stream
        )]);

        $handler = HandlerStack::create($mock);
        $apiInstance = new \FattureInCloud\Api\CashbookApi(
            new \GuzzleHttp\Client(['handler' => $handler])
        );
        $company_id = 2;
        $date_to = "2017-10-10";
        $date_from = "2020-10-10";
        $result = $apiInstance->listCashbookEntries($company_id, $date_from, $date_to);
        $obj = ObjectSerializer::deserialize($stream, '\FattureInCloud\Model\ListCashbookEntriesResponse');
        
        TestCase::assertEquals($obj, $result);
    }

    /**
     * Test case for modifyCashbookEntry
     *
     * Modify Cashbook Entry.
     *
     */
    public function testModifyCashbookEntry()
    {
        $stream = '{"data":{"date":"2021-08-24","amount_out":122,"payment_account_out":{"id":333},"description":"Fattura n. 201\/2021","entity_name":"Rossi S.r.l.","kind":"issued_document","document":{"id":54321},"type":"out"}}';
        $mock = new MockHandler([new Response(
            200,
            ['Content-Type' => 'application/json'],
            $stream
        )]);

        $handler = HandlerStack::create($mock);
        $apiInstance = new \FattureInCloud\Api\CashbookApi(
            new \GuzzleHttp\Client(['handler' => $handler])
        );
        $company_id = 2;
        $modify_cashbook_entry_request = "json";
        $result = $apiInstance->modifyCashbookEntry($company_id, $modify_cashbook_entry_request);
        $obj = ObjectSerializer::deserialize($stream, '\FattureInCloud\Model\ModifyCashbookEntryResponse');
        
        TestCase::assertEquals($obj, $result);
    }
}
