<?php
/**
 * IssuedDocumentPreCreateInfoDefaultValuesTest
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
 * IssuedDocumentPreCreateInfoDefaultValuesTest Class Doc Comment
 *
 * @category    Class
 * @description Default values for the document.
 * @package     FattureInCloud
 * @author   Fatture In Cloud API team
 * @link     https://fattureincloud.it
 */
class IssuedDocumentPreCreateInfoDefaultValuesTest extends TestCase
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
            "default_template": {
                "id": 111,
                "type": "standard",
                "name": "Light Smoke"
            },
            "dn_template": {
                "id": 222,
                "type": "delivery_note",
                "name": "DDT 1"
            },
            "ai_template": {
                "id": 333,
                "type": "accompanying_invoice",
                "name": "FT Accompagnatoria 1"
            },
            "notes": "",
            "rivalsa": 0,
            "cassa": 0,
            "withholding_tax": 0,
            "withholding_tax_taxable": 100,
            "other_withholding_tax": 0,
            "use_gross_prices": false,
            "payment_method": {
                "id": 123321,
                "name": "Bonifico bancario",
                "is_default": true,
                "details": [
                    {
                    "title": "Banca",
                    "description": "Indesa"
                    },
                    {
                    "title": "IBAN",
                    "description": "IT17QA12345600000003498936"
                    },
                    {
                    "title": "Intestatario",
                    "description": "Mario Rossi"
                    }
                ]
            }
        }';

        $this->array = json_decode($json, true);

        $this->object = ObjectSerializer::deserialize($json, '\FattureInCloud\Model\IssuedDocumentPreCreateInfoDefaultValues');
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
     * Test "IssuedDocumentPreCreateInfoDefaultValues"
     */
    public function testIssuedDocumentPreCreateInfoDefaultValues()
    {
        foreach ($this->array as $key => $value) {
            Testcase::assertArrayHasKey($key, $this->object);
        }
    }

    /**
     * Test attribute "default_template"
     */
    public function testPropertyDefaultTemplate()
    {
        foreach ($this->array['default_template'] as $key => $value) {
            Testcase::assertArrayHasKey($key, $this->object['default_template']);
        }
    }

    /**
     * Test attribute "dn_template"
     */
    public function testPropertyDnTemplate()
    {
        foreach ($this->array['dn_template'] as $key => $value) {
            Testcase::assertArrayHasKey($key, $this->object['dn_template']);
        }
    }

    /**
     * Test attribute "ai_template"
     */
    public function testPropertyAiTemplate()
    {
        foreach ($this->array['ai_template'] as $key => $value) {
            Testcase::assertArrayHasKey($key, $this->object['ai_template']);
        }
    }

    /**
     * Test attribute "notes"
     */
    public function testPropertyNotes()
    {
        Testcase::assertEquals($this->array['notes'], $this->object['notes']);
    }

    /**
     * Test attribute "rivalsa"
     */
    public function testPropertyRivalsa()
    {
        Testcase::assertEquals($this->array['rivalsa'], $this->object['rivalsa']);
    }

    /**
     * Test attribute "cassa"
     */
    public function testPropertyCassa()
    {
        Testcase::assertEquals($this->array['cassa'], $this->object['cassa']);
    }

    /**
     * Test attribute "withholding_tax"
     */
    public function testPropertyWithholdingTax()
    {
        Testcase::assertEquals($this->array['withholding_tax'], $this->object['withholding_tax']);
    }

    /**
     * Test attribute "withholding_tax_taxable"
     */
    public function testPropertyWithholdingTaxTaxable()
    {
        Testcase::assertEquals($this->array['withholding_tax_taxable'], $this->object['withholding_tax_taxable']);
    }

    /**
     * Test attribute "other_withholding_tax"
     */
    public function testPropertyOtherWithholdingTax()
    {
        Testcase::assertEquals($this->array['other_withholding_tax'], $this->object['other_withholding_tax']);
    }

    /**
     * Test attribute "use_gross_prices"
     */
    public function testPropertyUseGrossPrices()
    {
        Testcase::assertEquals($this->array['use_gross_prices'], $this->object['use_gross_prices']);
    }

    /**
     * Test attribute "payment_method"
     */
    public function testPropertyPaymentMethod()
    {
        foreach ($this->array['payment_method'] as $key => $value) {
            Testcase::assertArrayHasKey($key, $this->object['payment_method']);
        }
    }
}
