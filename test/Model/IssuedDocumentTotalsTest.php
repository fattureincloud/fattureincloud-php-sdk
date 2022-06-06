<?php
/**
 * IssuedDocumentTotalsTest
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
 * IssuedDocumentTotalsTest Class Doc Comment
 *
 * @category    Class
 * @description IssuedDocumentTotals
 * @package     FattureInCloud
 * @author   Fatture In Cloud API team
 * @link     https://fattureincloud.it
 */
class IssuedDocumentTotalsTest extends TestCase
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
            "amount_net": 68.18,
            "taxable_amount": 68.18,
            "amount_vat": 6.82,
            "amount_gross": 75,
            "amount_due": 75,
            "payments_sum": 75,
            "amount_rivalsa": 10,
            "amount_net_with_rivalsa": 10,
            "amount_cassa": 10,
            "not_taxable_amount": 10,
            "taxable_amount_withholding_tax": 10,
            "amount_withholding_tax": 10,
            "taxable_amount_other_withholding_tax": 10,
            "amount_other_withholding_tax": 10,
            "stamp_duty": 10,
            "is_enasarco_maximal_exceeded": false,
            "payments_sum": 2,
            "vat_list": {
                "vat_item": {
                  "amount_net": 68.18,
                  "amount_vat": 6.82
                }
            }
        }';

        $this->array = json_decode($json, true);

        $this->object = ObjectSerializer::deserialize($json, '\FattureInCloud\Model\IssuedDocumentTotals');
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
     * Test "IssuedDocumentTotals"
     */
    public function testIssuedDocumentTotals()
    {
        foreach ($this->array as $key => $value) {
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
     * Test attribute "amount_rivalsa"
     */
    public function testPropertyAmountRivalsa()
    {
        TestCase::assertEquals($this->object['amount_rivalsa'], $this->array['amount_rivalsa']);
    }

    /**
     * Test attribute "amount_net_with_rivalsa"
     */
    public function testPropertyAmountNetWithRivalsa()
    {
        TestCase::assertEquals($this->object['amount_net_with_rivalsa'], $this->array['amount_net_with_rivalsa']);
    }

    /**
     * Test attribute "amount_cassa"
     */
    public function testPropertyAmountCassa()
    {
        TestCase::assertEquals($this->object['amount_cassa'], $this->array['amount_cassa']);
    }

    /**
     * Test attribute "taxable_amount"
     */
    public function testPropertyTaxableAmount()
    {
        TestCase::assertEquals($this->object['taxable_amount'], $this->array['taxable_amount']);
    }

    /**
     * Test attribute "not_taxable_amount"
     */
    public function testPropertyNotTaxableAmount()
    {
        TestCase::assertEquals($this->object['not_taxable_amount'], $this->array['not_taxable_amount']);
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
     * Test attribute "taxable_amount_withholding_tax"
     */
    public function testPropertyTaxableAmountWithholdingTax()
    {
        TestCase::assertEquals($this->object['taxable_amount_withholding_tax'], $this->array['taxable_amount_withholding_tax']);
    }

    /**
     * Test attribute "amount_withholding_tax"
     */
    public function testPropertyAmountWithholdingTax()
    {
        TestCase::assertEquals($this->object['amount_withholding_tax'], $this->array['amount_withholding_tax']);
    }

    /**
     * Test attribute "taxable_amount_other_withholding_tax"
     */
    public function testPropertyTaxableAmountOtherWithholdingTax()
    {
        TestCase::assertEquals($this->object['taxable_amount_other_withholding_tax'], $this->array['taxable_amount_other_withholding_tax']);
    }

    /**
     * Test attribute "amount_other_withholding_tax"
     */
    public function testPropertyAmountOtherWithholdingTax()
    {
        TestCase::assertEquals($this->object['amount_other_withholding_tax'], $this->array['amount_other_withholding_tax']);
    }

    /**
     * Test attribute "stamp_duty"
     */
    public function testPropertyStampDuty()
    {
        TestCase::assertEquals($this->object['stamp_duty'], $this->array['stamp_duty']);
    }

    /**
     * Test attribute "amount_due"
     */
    public function testPropertyAmountDue()
    {
        TestCase::assertEquals($this->object['amount_due'], $this->array['amount_due']);
    }

    /**
     * Test attribute "is_enasarco_maximal_exceeded"
     */
    public function testPropertyIsEnasarcoMaximalExceeded()
    {
        TestCase::assertEquals($this->object['is_enasarco_maximal_exceeded'], $this->array['is_enasarco_maximal_exceeded']);
    }

    /**
     * Test attribute "payments_sum"
     */
    public function testPropertyPaymentsSum()
    {
        TestCase::assertEquals($this->object['payments_sum'], $this->array['payments_sum']);
    }

    /**
     * Test attribute "vat_list"
     */
    public function testPropertyVatList()
    {
        foreach ($this->array['vat_list'] as $key => $value) {
            Testcase::assertArrayHasKey($key, $this->object['vat_list']);
        }
    }
}
