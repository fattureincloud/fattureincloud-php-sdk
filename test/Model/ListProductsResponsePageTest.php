<?php
/**
 * ListProductsResponsePageTest
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
 * The version of the OpenAPI document: 2.0.5
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
 * ListProductsResponsePageTest Class Doc Comment
 *
 * @category    Class
 * @description ListProductsResponsePage
 * @package     FattureInCloud
 * @author   Fatture In Cloud API team
 * @link     https://fattureincloud.it
 */
class ListProductsResponsePageTest extends TestCase
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
            "data": [
                {
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
                  "default_vat": {
                    "id": 3,
                    "value": 22,
                    "description": "Non imponibile art. 123",
                    "notes": "IVA non imponibile ai sensi dell\'articolo 123, comma 2",
                    "is_disabled": false
                  }
                },
                {
                  "id": 12346,
                  "name": "Tavolo di legno",
                  "code": "TAVOLO001",
                  "net_price": 120,
                  "gross_price": 160,
                  "use_gross_price": false,
                  "net_cost": 0,
                  "measure": "",
                  "description": "Tavolo in legno pregiato",
                  "category": "arredamento",
                  "in_stock": true,
                  "default_vat": {
                    "id": 3,
                    "value": 22,
                    "description": "Non imponibile art. 123",
                    "notes": "IVA non imponibile ai sensi dell\'articolo 123, comma 2",
                    "is_disabled": false
                  }
                }
              ]
        }';

        $this->array = json_decode($json, true);

        $this->object = ObjectSerializer::deserialize($json, '\FattureInCloud\Model\ListProductsResponsePage');
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
     * Test "ListProductsResponsePage"
     */
    public function testListProductsResponsePage()
    {
        foreach ($this->array as $key => $value) 
        {
           Testcase::assertArrayHasKey($key, $this->object);
        }
    }

    /**
     * Test attribute "data"
     */
    public function testPropertyData()
    {
        foreach ($this->array['data'] as $key => $value) 
        {
           Testcase::assertArrayHasKey($key, $this->object['data']);
        }
    }
}
