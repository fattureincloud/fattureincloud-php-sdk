<?php
/**
 * TaxesApiTest
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
 * TaxesApiTest Class Doc Comment
 *
 * @category Class
 * @package  FattureInCloud
 * @author   Fatture In Cloud API team
 * @link     https://fattureincloud.it
 */
class TaxesApiTest extends TestCase
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
     * Test case for createF24
     *
     * Create F24.
     *
     */
    public function testCreateF24()
    {
        $stream = '{"data":{"amount":840.36,"description":"PAGAMENTO IVA 2021","due_date":"2021-12-31","status":"paid","payment_account":{"id":111},"attachment_token":"b19c01da9b1688fb73d0d9e8ad"}}';
        $mock = new MockHandler([new Response(
            200,
            ['Content-Type' => 'application/json'],
            $stream
        )]);

        $handler = HandlerStack::create($mock);
        $apiInstance = new \FattureInCloud\Api\TaxesApi(
            new \GuzzleHttp\Client(['handler' => $handler])
        );
        $company_id = 2;
        $create_f24_request = "json";
        $result = $apiInstance->createF24($company_id, $create_f24_request);
        $obj = ObjectSerializer::deserialize($stream, '\FattureInCloud\Model\CreateF24Response');

        TestCase::assertEquals($obj, $result);
    }

    /**
     * Test case for deleteF24
     *
     * Delete F24.
     *
     */
    public function testDeleteF24()
    {
        TestCase::assertEquals(1, 1);
    }

    /**
     * Test case for deleteF24Attachment
     *
     * Delete F24 Attachment.
     *
     */
    public function testDeleteF24Attachment()
    {
        TestCase::assertEquals(1, 1);
    }

    /**
     * Test case for getF24
     *
     * Get F24.
     *
     */
    public function testGetF24()
    {
        $stream = '{"data":{"id":12345,"amount":840.36,"description":"PAGAMENTO IVA 2021","due_date":"2021-12-31","status":"paid","payment_account":{"id":111,"name":"Indesa - carta conto"},"attachment_url":"b19c01da9b1688fb73d0d9e8adae89a8.pdf"}}';
        $mock = new MockHandler([new Response(
            200,
            ['Content-Type' => 'application/json'],
            $stream
        )]);

        $handler = HandlerStack::create($mock);
        $apiInstance = new \FattureInCloud\Api\TaxesApi(
            new \GuzzleHttp\Client(['handler' => $handler])
        );
        $company_id = 2;
        $f24_id = 12345;
        $result = $apiInstance->getF24($company_id, $f24_id);
        $obj = ObjectSerializer::deserialize($stream, '\FattureInCloud\Model\GetF24Response');

        TestCase::assertEquals($obj, $result);
    }

    /**
     * Test case for listF24
     *
     * List F24.
     *
     */
    public function testListF24()
    {
        $stream = '{"current_page":1,"data":[{"id":12345,"amount":840.36,"description":"PAGAMENTO IVA 2021","due_date":"2021-12-31","status":"paid","payment_account":{"id":111,"name":"Indesa - carta conto"},"attachment_url":"b19c01da9b1688fb73d0d9e8adae89a8.pdf"},{"id":12346,"amount":810.62,"description":"PAGAMENTO IVA 2020","due_date":"2020-12-31","status":"paid","payment_account":{"id":111,"name":"Indesa - carta conto"},"attachment_url":"bb6df8490dad4770353b378ea926d8ba.pdf"}],"first_page_url":"page=1","from":1,"last_page":1,"last_page_url":"page=1","next_page_url":null,"path":"taxes","per_page":50,"prev_page_url":null,"to":2,"total":2,"aggregated_data":{"amount":"6438.96"}}';
        $mock = new MockHandler([new Response(
            200,
            ['Content-Type' => 'application/json'],
            $stream
        )]);

        $handler = HandlerStack::create($mock);
        $apiInstance = new \FattureInCloud\Api\TaxesApi(
            new \GuzzleHttp\Client(['handler' => $handler])
        );
        $company_id = 2;
        $result = $apiInstance->listF24($company_id);
        $obj = ObjectSerializer::deserialize($stream, '\FattureInCloud\Model\ListF24Response');

        TestCase::assertEquals($obj, $result);
    }

    /**
     * Test case for modifyF24
     *
     * Modify F24.
     *
     */
    public function testModifyF24()
    {
        $stream = '{"data":{"id":12345,"amount":840.36,"description":"PAGAMENTO IVA 2021","due_date":"2021-12-31","status":"paid","payment_account":{"id":111,"name":"Indesa - carta conto"},"attachment_url":"b19c01da9b1688fb73d0d9e8adae89a8.pdf"}}';
        $mock = new MockHandler([new Response(
            200,
            ['Content-Type' => 'application/json'],
            $stream
        )]);

        $handler = HandlerStack::create($mock);
        $apiInstance = new \FattureInCloud\Api\TaxesApi(
            new \GuzzleHttp\Client(['handler' => $handler])
        );
        $company_id = 2;
        $f24_id = 12345;
        $modify_f24_request = "json";
        $result = $apiInstance->modifyF24($company_id, $f24_id, $modify_f24_request);
        $obj = ObjectSerializer::deserialize($stream, '\FattureInCloud\Model\ModifyF24Response');

        TestCase::assertEquals($obj, $result);
    }

    /**
     * Test case for uploadF24Attachment
     *
     * Upload F24 Attachment.
     *
     */
    public function testUploadF24Attachment()
    {
        $stream = '{"data":{"attachment_token":"YmMyNWYxYzIwMTU3N2Y4ZGE3ZjZiMzg5OWY0ODNkZDQveXl5LmRvYw"}}';
        $mock = new MockHandler([new Response(
            200,
            ['Content-Type' => 'application/json'],
            $stream
        )]);

        $handler = HandlerStack::create($mock);
        $apiInstance = new \FattureInCloud\Api\TaxesApi(
            new \GuzzleHttp\Client(['handler' => $handler])
        );
        $company_id = 2;
        $upload_f24_attachment = "json";
        $result = $apiInstance->uploadF24Attachment($company_id, $upload_f24_attachment);
        $obj = ObjectSerializer::deserialize($stream, '\FattureInCloud\Model\UploadF24AttachmentResponse');

        TestCase::assertEquals($obj, $result);
    }
}
