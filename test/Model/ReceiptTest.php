<?php
/**
 * ReceiptTest
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
 * ReceiptTest Class Doc Comment
 *
 * @category    Class
 * @description Receipt
 * @package     FattureInCloud
 * @author   Fatture In Cloud API team
 * @link     https://fattureincloud.it
 */
class ReceiptTest extends TestCase
{
    public $array = [];
    public $object;

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
            "date": "2021-08-20",
            "number": 5,
            "numeration": "REC005",
            "amount_net": 16.39,
            "amount_vat": 3.61,
            "amount_gross": 20,
            "use_gross_prices": true,
            "type": "sales_receipt",
            "description": "cassa 1",
            "rc_center": "",
            "created_at": "2021-08-20 13:56:56",
            "updated_at": "2021-08-20 13:56:56",
            "payment_account": {
                "id": 222,
                "name": "carta di credito"
              },
            "items_list": [
                {
                  "id": 666,
                  "amount_net": 10,
                  "amount_vat": 2.2,
                  "amount_gross": 12.2,
                  "category": "altro",
                  "vat": {
                    "id": 0,
                    "value": 22,
                    "description": "iva"
                  }
                }
            ]
        }';

        $this->array = json_decode($json, true);

        $this->object = ObjectSerializer::deserialize($json, '\FattureInCloud\Model\Receipt');
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
     * Test "Receipt"
     */
    public function testReceipt()
    {
        foreach ($this->array as $key => $value) {
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
     * Test attribute "number"
     */
    public function testPropertyNumber()
    {
        TestCase::assertEquals($this->object['number'], $this->array['number']);
    }

    /**
     * Test attribute "numeration"
     */
    public function testPropertyNumeration()
    {
        TestCase::assertEquals($this->object['numeration'], $this->array['numeration']);
    }

    /**
     * Test attribute "amount_net"
     */
    public function testPropertyAmountNet()
    {
        TestCase::assertEquals($this->object['amount_net'], $this->array['amount_net']);
    }

    /**
     * Test attribute "amount_vat"
     */
    public function testPropertyAmountVat()
    {
        TestCase::assertEquals($this->object['amount_vat'], $this->array['amount_vat']);
    }

    /**
     * Test attribute "amount_gross"
     */
    public function testPropertyAmountGross()
    {
        TestCase::assertEquals($this->object['amount_gross'], $this->array['amount_gross']);
    }

    /**
     * Test attribute "use_gross_prices"
     */
    public function testPropertyUseGrossPrices()
    {
        TestCase::assertEquals($this->object['use_gross_prices'], $this->array['use_gross_prices']);
    }

    /**
     * Test attribute "type"
     */
    public function testPropertyType()
    {
        TestCase::assertEquals($this->object['type'], $this->array['type']);
    }

    /**
     * Test attribute "description"
     */
    public function testPropertyDescription()
    {
        TestCase::assertEquals($this->object['description'], $this->array['description']);
    }

    /**
     * Test attribute "rc_center"
     */
    public function testPropertyRcCenter()
    {
        TestCase::assertEquals($this->object['rc_center'], $this->array['rc_center']);
    }

    /**
     * Test attribute "created_at"
     */
    public function testPropertyCreatedAt()
    {
        TestCase::assertEquals($this->object['created_at'], $this->array['created_at']);
    }

    /**
     * Test attribute "updated_at"
     */
    public function testPropertyUpdatedAt()
    {
        TestCase::assertEquals($this->object['updated_at'], $this->array['updated_at']);
    }

    /**
     * Test attribute "payment_account"
     */
    public function testPropertyPaymentAccount()
    {
        foreach ($this->array['payment_account'] as $key => $value) {
            Testcase::assertArrayHasKey($key, $this->object['payment_account']);
        }
    }

    /**
     * Test attribute "items_list"
     */
    public function testPropertyItemsList()
    {
        foreach ($this->array['items_list'] as $key => $value) {
            Testcase::assertArrayHasKey($key, $this->object['items_list']);
        }
    }
}
