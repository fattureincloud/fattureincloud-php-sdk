<?php
/**
 * VatTypeTest
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
 * VatTypeTest Class Doc Comment
 *
 * @category    Class
 * @description VatType
 * @package     FattureInCloud
 * @author   Fatture In Cloud API team
 * @link     https://fattureincloud.it
 */
class VatTypeTest extends TestCase
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
            "id": 0,
            "value": 22,
            "description": "Non imponibile art. 123",
            "notes": "IVA non imponibile ai sensi dell\'articolo 123, comma 2",
            "e_invoice": true,
            "ei_type": 2,
            "ei_description": "string",
            "editable": true,
            "is_disabled": false
        }';

        $this->array = json_decode($json, true);

        $this->object = ObjectSerializer::deserialize($json, '\FattureInCloud\Model\VatType');
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
     * Test "VatType"
     */
    public function testVatType()
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
     * Test attribute "value"
     */
    public function testPropertyValue()
    {
        TestCase::assertEquals($this->object['value'], $this->array['value']);
    }

    /**
     * Test attribute "description"
     */
    public function testPropertyDescription()
    {
        TestCase::assertEquals($this->object['description'], $this->array['description']);
    }

    /**
     * Test attribute "notes"
     */
    public function testPropertyNotes()
    {
        TestCase::assertEquals($this->object['notes'], $this->array['notes']);
    }

    /**
     * Test attribute "e_invoice"
     */
    public function testPropertyEInvoice()
    {
        TestCase::assertEquals($this->object['e_invoice'], $this->array['e_invoice']);
    }

    /**
     * Test attribute "ei_type"
     */
    public function testPropertyEiType()
    {
        TestCase::assertEquals($this->object['ei_type'], $this->array['ei_type']);
    }

    /**
     * Test attribute "ei_description"
     */
    public function testPropertyEiDescription()
    {
        TestCase::assertEquals($this->object['ei_description'], $this->array['ei_description']);
    }

    /**
     * Test attribute "editable"
     */
    public function testPropertyEditable()
    {
        TestCase::assertEquals($this->object['editable'], $this->array['editable']);
    }

    /**
     * Test attribute "is_disabled"
     */
    public function testPropertyIsDisabled()
    {
        TestCase::assertEquals($this->object['is_disabled'], $this->array['is_disabled']);
    }
}
