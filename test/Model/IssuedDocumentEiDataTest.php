<?php
/**
 * IssuedDocumentEiDataTest
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
 * IssuedDocumentEiDataTest Class Doc Comment
 *
 * @category    Class
 * @description E-invoice data. [Only if e_invoice&#x3D;true]
 * @package     FattureInCloud
 * @author   Fatture In Cloud API team
 * @link     https://fattureincloud.it
 */
class IssuedDocumentEiDataTest extends TestCase
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
            "vat_kind": "I",
            "od_number": 2,
            "od_date": "2020-10-10",
            "original_document_type": "ordine", 
            "cig": " ",
            "cup": " ",
            "payment_method": " ",
            "bank_name": " ",
            "bank_iban": " ",
            "bank_beneficiary": " ",
            "invoice_number": " ",
            "invoice_date": "2020-12-12" 
        }';

        $this->array = json_decode($json, true);

        $this->object = ObjectSerializer::deserialize($json, '\FattureInCloud\Model\IssuedDocumentEiData');
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
     * Test "IssuedDocumentEiData"
     */
    public function testIssuedDocumentEiData()
    {
        foreach ($this->array as $key => $value) {
            Testcase::assertArrayHasKey($key, $this->object);
        }
    }

    /**
     * Test attribute "vat_kind"
     */
    public function testPropertyVatKind()
    {
        TestCase::assertEquals($this->object['vat_kind'], $this->array['vat_kind']);
    }

    /**
     * Test attribute "original_document_type"
     */
    public function testPropertyOriginalDocumentType()
    {
        TestCase::assertEquals($this->object['original_document_type'], $this->array['original_document_type']);
    }

    /**
     * Test attribute "od_number"
     */
    public function testPropertyOdNumber()
    {
        TestCase::assertEquals($this->object['od_number'], $this->array['od_number']);
    }

    /**
     * Test attribute "od_date"
     */
    public function testPropertyOdDate()
    {
        $date = new \DateTime($this->array['od_date']);
        TestCase::assertEquals($this->object['od_date'], $date);
    }

    /**
     * Test attribute "cig"
     */
    public function testPropertyCig()
    {
        TestCase::assertEquals($this->object['cig'], $this->array['cig']);
    }

    /**
     * Test attribute "cup"
     */
    public function testPropertyCup()
    {
        TestCase::assertEquals($this->object['cup'], $this->array['cup']);
    }

    /**
     * Test attribute "payment_method"
     */
    public function testPropertyPaymentMethod()
    {
        TestCase::assertEquals($this->object['payment_method'], $this->array['payment_method']);
    }

    /**
     * Test attribute "bank_name"
     */
    public function testPropertyBankName()
    {
        TestCase::assertEquals($this->object['bank_name'], $this->array['bank_name']);
    }

    /**
     * Test attribute "bank_iban"
     */
    public function testPropertyBankIban()
    {
        TestCase::assertEquals($this->object['bank_iban'], $this->array['bank_iban']);
    }

    /**
     * Test attribute "bank_beneficiary"
     */
    public function testPropertyBankBeneficiary()
    {
        TestCase::assertEquals($this->object['bank_beneficiary'], $this->array['bank_beneficiary']);
    }

    /**
     * Test attribute "invoice_number"
     */
    public function testPropertyInvoiceNumber()
    {
        TestCase::assertEquals($this->object['invoice_number'], $this->array['invoice_number']);
    }

    /**
     * Test attribute "invoice_date"
     */
    public function testPropertyInvoiceDate()
    {
        $date = new \DateTime($this->array['invoice_date']);
        TestCase::assertEquals($this->object['invoice_date'], $date);
    }
}
