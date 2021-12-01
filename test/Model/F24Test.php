<?php
/**
 * F24Test
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
 * F24Test Class Doc Comment
 *
 * @category    Class
 * @description F24
 * @package     FattureInCloud
 * @author   Fatture In Cloud API team
 * @link     https://fattureincloud.it
 */
class F24Test extends TestCase
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
            "amount": 840.36,
            "description": "PAGAMENTO IVA 2021",
            "due_date": "2021-12-31",
            "status": "paid",
            "attachment_url": "b19c01da9b1688fb73d0d9e8adae89a8.pdf",
            "payment_account": {
                "id": 111,
                "name": "Indesa - carta conto"
            },
            "attachment_token": "Adfqregwthwrt6whrtghsrgbsdthyeruerur6u6676e5879"
          }';

          $this->array = json_decode($json, true);

          $this->object = ObjectSerializer::deserialize($json, '\FattureInCloud\Model\F24');
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
     * Test "F24"
     */
    public function testF24()
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
     * Test attribute "due_date"
     */
    public function testPropertyDueDate()
    {
        $date = new \DateTime($this->array['due_date']);
        TestCase::assertEquals($this->object['due_date'], $date);
    }

    /**
     * Test attribute "status"
     */
    public function testPropertyStatus()
    {
        TestCase::assertEquals($this->object['status'], $this->array['status']);
    }

    /**
     * Test attribute "payment_account"
     */
    public function testPropertyPaymentAccount()
    {
        foreach ($this->array['payment_account'] as $key => $value) 
        {
           Testcase::assertArrayHasKey($key, $this->object['payment_account']);
        }
    }

    /**
     * Test attribute "amount"
     */
    public function testPropertyAmount()
    {
        TestCase::assertEquals($this->object['amount'], $this->array['amount']);
    }

    /**
     * Test attribute "attachment_url"
     */
    public function testPropertyAttachmentUrl()
    {
        TestCase::assertEquals($this->object['attachment_url'], $this->array['attachment_url']);
    }

    /**
     * Test attribute "attachment_token"
     */
    public function testPropertyAttachmentToken()
    {
        TestCase::assertEquals($this->object['attachment_token'], $this->array['attachment_token']);
    }

    /**
     * Test attribute "description"
     */
    public function testPropertyDescription()
    {
        TestCase::assertEquals($this->object['description'], $this->array['description']);
    }
}
