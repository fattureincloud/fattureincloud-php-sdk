<?php
/**
 * ProductTest
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
 * ProductTest Class Doc Comment
 *
 * @category    Class
 * @description Product
 * @package     FattureInCloud
 * @author   Fatture In Cloud API team
 * @link     https://fattureincloud.it
 */
class ProductTest extends TestCase
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
            "name": "Tavolo di marmo",
            "code": "TAVOLO003",
            "net_price": 240,
            "gross_price": 280,
            "use_gross_price": false,
            "net_cost": 0,
            "measure": "",
            "description": "Tavolo in marmo pregiato",
            "category": "arredamento",
            "in_stock": true,
            "notes": "",
            "stock_initial": 99,
            "stock_current": 98,
            "average_cost": 200,
            "average_price": 300,
            "created_at": "2021-10-10",
            "updated_at": "",
            "default_vat": {
                "id": 3,
                "value": 22,
                "description": "Non imponibile art. 123",
                "notes": "IVA non imponibile ai sensi dell\'articolo 123, comma 2",
                "is_disabled": false
            }
        }';

        $this->array = json_decode($json, true);

        $this->object = ObjectSerializer::deserialize($json, '\FattureInCloud\Model\Product');
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
     * Test "Product"
     */
    public function testProduct()
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
     * Test attribute "name"
     */
    public function testPropertyName()
    {
        TestCase::assertEquals($this->object['name'], $this->array['name']);
    }

    /**
     * Test attribute "code"
     */
    public function testPropertyCode()
    {
        TestCase::assertEquals($this->object['code'], $this->array['code']);
    }

    /**
     * Test attribute "net_price"
     */
    public function testPropertyNetPrice()
    {
        TestCase::assertEquals($this->object['net_price'], $this->array['net_price']);
    }

    /**
     * Test attribute "gross_price"
     */
    public function testPropertyGrossPrice()
    {
        TestCase::assertEquals($this->object['gross_price'], $this->array['gross_price']);
    }

    /**
     * Test attribute "use_gross_price"
     */
    public function testPropertyUseGrossPrice()
    {
        TestCase::assertEquals($this->object['use_gross_price'], $this->array['use_gross_price']);
    }

    /**
     * Test attribute "default_vat"
     */
    public function testPropertyDefaultVat()
    {
        foreach ($this->array['default_vat'] as $key => $value) 
        {
           Testcase::assertArrayHasKey($key, $this->object['default_vat']);
        }
    }

    /**
     * Test attribute "net_cost"
     */
    public function testPropertyNetCost()
    {
        TestCase::assertEquals($this->object['net_cost'], $this->array['net_cost']);
    }

    /**
     * Test attribute "measure"
     */
    public function testPropertyMeasure()
    {
        TestCase::assertEquals($this->object['measure'], $this->array['measure']);
    }

    /**
     * Test attribute "description"
     */
    public function testPropertyDescription()
    {
        TestCase::assertEquals($this->object['description'], $this->array['description']);
    }

    /**
     * Test attribute "category"
     */
    public function testPropertyCategory()
    {
        TestCase::assertEquals($this->object['category'], $this->array['category']);
    }

    /**
     * Test attribute "notes"
     */
    public function testPropertyNotes()
    {
        TestCase::assertEquals($this->object['notes'], $this->array['notes']);
    }

    /**
     * Test attribute "in_stock"
     */
    public function testPropertyInStock()
    {
        TestCase::assertEquals($this->object['in_stock'], $this->array['in_stock']);
    }

    /**
     * Test attribute "stock_initial"
     */
    public function testPropertyStockInitial()
    {
        TestCase::assertEquals($this->object['stock_initial'], $this->array['stock_initial']);
    }

    /**
     * Test attribute "stock_current"
     */
    public function testPropertyStockCurrent()
    {
        TestCase::assertEquals($this->object['stock_current'], $this->array['stock_current']);
    }

    /**
     * Test attribute "average_cost"
     */
    public function testPropertyAverageCost()
    {
        TestCase::assertEquals($this->object['average_cost'], $this->array['average_cost']);
    }

    /**
     * Test attribute "average_price"
     */
    public function testPropertyAveragePrice()
    {
        TestCase::assertEquals($this->object['average_price'], $this->array['average_price']);
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
}
