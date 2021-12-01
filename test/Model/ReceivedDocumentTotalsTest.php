<?php
/**
 * ReceivedDocumentTotalsTest
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
 * ReceivedDocumentTotalsTest Class Doc Comment
 *
 * @category    Class
 * @description Document Totals.
 * @package     FattureInCloud
 * @author   Fatture In Cloud API team
 * @link     https://fattureincloud.it
 */
class ReceivedDocumentTotalsTest extends TestCase
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
            "amount_net": 592,
            "amount_vat": 20,
            "amount_gross": 612,
            "amount_withholding_tax": 0,
            "amount_other_withholding_tax": 0,
            "amount_due": 612,
            "payments_sum": 592
        }';

        $this->array = json_decode($json, true);

        $this->object = ObjectSerializer::deserialize($json, '\FattureInCloud\Model\ReceivedDocumentTotals');
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
     * Test "ReceivedDocumentTotals"
     */
    public function testReceivedDocumentTotals()
    {
        foreach ($this->array as $key => $value) 
        {
           Testcase::assertArrayHasKey($key, $this->object);
        }
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
     * Test attribute "amount_withholding_tax"
     */
    public function testPropertyAmountWithholdingTax()
    {
        TestCase::assertEquals($this->object['amount_withholding_tax'], $this->array['amount_withholding_tax']);
    }

    /**
     * Test attribute "amount_other_withholding_tax"
     */
    public function testPropertyAmountOtherWithholdingTax()
    {
        TestCase::assertEquals($this->object['amount_other_withholding_tax'], $this->array['amount_other_withholding_tax']);
    }

    /**
     * Test attribute "amount_due"
     */
    public function testPropertyAmountDue()
    {
        TestCase::assertEquals($this->object['amount_due'], $this->array['amount_due']);
    }

    /**
     * Test attribute "payments_sum"
     */
    public function testPropertyPaymentsSum()
    {
        TestCase::assertEquals($this->object['payments_sum'], $this->array['payments_sum']);
    }
}
