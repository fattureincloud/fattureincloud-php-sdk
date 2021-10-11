<?php
/**
 * CashbookEntryTest
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
 * The version of the OpenAPI document: 2.0.0
 * Contact: info@fattureincloud.it
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1
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
 * CashbookEntryTest Class Doc Comment
 *
 * @category    Class
 * @description CashbookEntry
 * @package     FattureInCloud
 * @author   Fatture In Cloud API team
 * @link     https://fattureincloud.it
 */
class CashbookEntryTest extends TestCase
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
            "id": 12345,
            "date": "2021-08-24",
            "description": "Fattura n. 201/2021",
            "entity_name": "Rossi S.r.l.",
            "kind": "issued_document",
            "type": "in",
            "amount_in": 100,
            "amount_out": 0,
            "document": {
                "id": 12345,
                "type": "issued_document",
                "path": "/doc1.pdf"
            },
            "payment_account_in": {
                "id": 333
            },
            "payment_account_out": {
                "id": 333
            }
        }';

        $this->array = json_decode($json, true);

        $this->object = ObjectSerializer::deserialize($json, '\FattureInCloud\Model\CashbookEntry');
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
     * Test "CashbookEntry"
     */
    public function testCashbookEntry()
    {
        foreach ($this->array as $key => $value) 
        {
           Testcase::assertArrayHasKey($key, $this->object);
        }
    }

    /**
     * Test attribute "id"
     */
    public function testPropertyId()
    {
        TestCase::assertEquals($this->object['id'], $this->array['id']);
    }

    /**
     * Test attribute "date"
     */
    public function testPropertyDate()
    {
        $date = new \DateTime($this->array['date']);
        TestCase::assertEquals($this->object['date'], $date);
    }

    /**
     * Test attribute "description"
     */
    public function testPropertyDescription()
    {
        TestCase::assertEquals($this->object['description'], $this->array['description']);
    }

    /**
     * Test attribute "kind"
     */
    public function testPropertyKind()
    {
        TestCase::assertEquals($this->object['kind'], $this->array['kind']);
    }

    /**
     * Test attribute "type"
     */
    public function testPropertyType()
    {
        TestCase::assertEquals($this->object['type'], $this->array['type']);
    }

    /**
     * Test attribute "entity_name"
     */
    public function testPropertyEntityName()
    {
        TestCase::assertEquals($this->object['entity_name'], $this->array['entity_name']);
    }

    /**
     * Test attribute "document"
     */
    public function testPropertyDocument()
    {
        foreach ($this->array['document'] as $key => $value) 
        {
           Testcase::assertArrayHasKey($key, $this->object['document']);
        }
    }

    /**
     * Test attribute "amount_in"
     */
    public function testPropertyAmountIn()
    {
        TestCase::assertEquals($this->object['amount_in'], $this->array['amount_in']);
    }

    /**
     * Test attribute "payment_account_in"
     */
    public function testPropertyPaymentAccountIn()
    {
        foreach ($this->array['payment_account_in'] as $key => $value) 
        {
           Testcase::assertArrayHasKey($key, $this->object['payment_account_in']);
        }
    }

    /**
     * Test attribute "amount_out"
     */
    public function testPropertyAmountOut()
    {
        TestCase::assertEquals($this->object['amount_out'], $this->array['amount_out']);
    }

    /**
     * Test attribute "payment_account_out"
     */
    public function testPropertyPaymentAccountOut()
    {
        foreach ($this->array['payment_account_out'] as $key => $value) 
        {
           Testcase::assertArrayHasKey($key, $this->object['payment_account_out']);
        }
    }
}
