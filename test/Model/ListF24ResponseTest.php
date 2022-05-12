<?php
/**
 * ListF24ResponseTest
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
 * Please update the test case below to test the model.
 */
namespace FattureInCloud\Test\Model;

use PHPUnit\Framework\TestCase;
use \FattureInCloud\ObjectSerializer;

/**
 * ListF24ResponseTest Class Doc Comment
 *
 * @category    Class
 * @description Results list.
 * @package     FattureInCloud
 * @author   Fatture In Cloud API team
 * @link     https://fattureincloud.it
 */
class ListF24ResponseTest extends TestCase
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
            "current_page": 2,
            "first_page_url": "page=1",
            "from": 1,
            "last_page": 3,
            "last_page_url": "page=3",
            "next_page_url": "page=3",
            "path": "/archive",
            "per_page": 50,
            "prev_page_url": "page=1",
            "to": 3,
            "total": 155,
            "data": [
                {
                  "id": 12345,
                  "amount": 840.36,
                  "description": "PAGAMENTO IVA 2021",
                  "due_date": "2021-12-31",
                  "status": "paid",
                  "payment_account": {
                    "id": 111,
                    "name": "Indesa - carta conto"
                  },
                  "attachment_url": "b19c01da9b1688fb73d0d9e8adae89a8.pdf"
                },
                {
                  "id": 12346,
                  "amount": 810.62,
                  "description": "PAGAMENTO IVA 2020",
                  "due_date": "2020-12-31",
                  "status": "paid",
                  "payment_account": {
                    "id": 111,
                    "name": "Indesa - carta conto"
                  },
                  "attachment_url": "bb6df8490dad4770353b378ea926d8ba.pdf"
                }
            ],
            "aggregated_data": {
                "amount": 6438.96
            }
        }';

        $this->array = json_decode($json, true);

        $this->object = ObjectSerializer::deserialize($json, '\FattureInCloud\Model\ListF24Response');
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
     * Test "ListF24Response"
     */
    public function testListF24Response()
    {
        foreach ($this->array as $key => $value) {
            Testcase::assertArrayHasKey($key, $this->object);
        }
    }

    /**
     * Test attribute "current_page"
     */
    public function testPropertyCurrentPage()
    {
        TestCase::assertEquals($this->object['current_page'], $this->array['current_page']);
    }

    /**
     * Test attribute "first_page_url"
     */
    public function testPropertyFirstPageUrl()
    {
        TestCase::assertEquals($this->object['first_page_url'], $this->array['first_page_url']);
    }

    /**
     * Test attribute "from"
     */
    public function testPropertyFrom()
    {
        TestCase::assertEquals($this->object['from'], $this->array['from']);
    }

    /**
     * Test attribute "last_page"
     */
    public function testPropertyLastPage()
    {
        TestCase::assertEquals($this->object['last_page'], $this->array['last_page']);
    }

    /**
     * Test attribute "last_page_url"
     */
    public function testPropertyLastPageUrl()
    {
        TestCase::assertEquals($this->object['last_page_url'], $this->array['last_page_url']);
    }

    /**
     * Test attribute "next_page_url"
     */
    public function testPropertyNextPageUrl()
    {
        TestCase::assertEquals($this->object['next_page_url'], $this->array['next_page_url']);
    }

    /**
     * Test attribute "path"
     */
    public function testPropertyPath()
    {
        TestCase::assertEquals($this->object['path'], $this->array['path']);
    }

    /**
     * Test attribute "per_page"
     */
    public function testPropertyPerPage()
    {
        TestCase::assertEquals($this->object['per_page'], $this->array['per_page']);
    }

    /**
     * Test attribute "prev_page_url"
     */
    public function testPropertyPrevPageUrl()
    {
        TestCase::assertEquals($this->object['prev_page_url'], $this->array['prev_page_url']);
    }

    /**
     * Test attribute "to"
     */
    public function testPropertyTo()
    {
        TestCase::assertEquals($this->object['to'], $this->array['to']);
    }

    /**
     * Test attribute "total"
     */
    public function testPropertyTotal()
    {
        TestCase::assertEquals($this->object['total'], $this->array['total']);
    }

    /**
     * Test attribute "data"
     */
    public function testPropertyData()
    {
        foreach ($this->array['data'] as $key => $value) {
            Testcase::assertArrayHasKey($key, $this->object['data']);
        }
    }

    /**
     * Test attribute "aggregated_data"
     */
    public function testPropertyAggregatedData()
    {
        foreach ($this->array['aggregated_data'] as $key => $value) {
            Testcase::assertArrayHasKey($key, $this->object['aggregated_data']);
        }
    }
}
