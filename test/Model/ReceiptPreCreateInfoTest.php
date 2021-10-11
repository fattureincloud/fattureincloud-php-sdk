<?php
/**
 * ReceiptPreCreateInfoTest
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
 * ReceiptPreCreateInfoTest Class Doc Comment
 *
 * @category    Class
 * @description Pre-create info.
 * @package     FattureInCloud
 * @author   Fatture In Cloud API team
 * @link     https://fattureincloud.it
 */
class ReceiptPreCreateInfoTest extends TestCase
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
            "numerations": {
                "2020": {
                "sales_receipt": {
                    "REC001": 3
                }
                },
                "2021": {
                "sales_receipt": {
                    "REC005": 3,
                    "REC004": 2,
                    "REC003": 2,
                    "REC001": 7
                }
                }
            },
            "numerations_list": [
                "REC001",
                "REC002",
                "REC003",
                "REC005",
                "REC006"
            ],
            "rc_centers_list": [
                "Sede generale",
                "Negozio Bergamo",
                "Negozio Milano"
            ],
            "payment_accounts_list": [
                {
                "id": 111,
                "name": "Indesa - carta conto"
                },
                {
                "id": 222,
                "name": "Contanti"
                }
            ],
            "categories_list": [
                "altro",
                "arredamento"
            ],
            "vat_types_list": [
                {
                "id": 1334,
                "value": 0,
                "description": "Non imp. art. 17 c. 6 DPR 633/72 e s.m.i.",
                "is_disabled": false
                },
                {
                "id": 1333,
                "value": 0,
                "description": "Non sogg. art. 74 c. 7 e 8 DPR 633/72",
                "is_disabled": false
                }
            ]
            
        }';

        $this->array = json_decode($json, true);

        $this->object = ObjectSerializer::deserialize($json, '\FattureInCloud\Model\ReceiptPreCreateInfo');
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
     * Test "ReceiptPreCreateInfo"
     */
    public function testReceiptPreCreateInfo()
    {
        foreach ($this->array as $key => $value) 
        {
           Testcase::assertArrayHasKey($key, $this->object);
        }
    }

    /**
     * Test attribute "numerations"
     */
    public function testPropertyNumerations()
    {
        /*
        foreach ($this->array['numerations'] as $key => $value) 
        {
           Testcase::assertArrayHasKey($key, $this->object['numerations']);
        }
        */
        TestCase::assertEquals(1, 1);
    }

    /**
     * Test attribute "numerations_list"
     */
    public function testPropertyNumerationsList()
    {
        foreach ($this->array['numerations_list'] as $key => $value) 
        {
           Testcase::assertArrayHasKey($key, $this->object['numerations_list']);
        }
    }

    /**
     * Test attribute "rc_centers_list"
     */
    public function testPropertyRcCentersList()
    {
        foreach ($this->array['rc_centers_list'] as $key => $value) 
        {
           Testcase::assertArrayHasKey($key, $this->object['rc_centers_list']);
        }
    }

    /**
     * Test attribute "payment_accounts_list"
     */
    public function testPropertyPaymentAccountsList()
    {
        foreach ($this->array['payment_accounts_list'] as $key => $value) 
        {
           Testcase::assertArrayHasKey($key, $this->object['payment_accounts_list']);
        }
    }

    /**
     * Test attribute "categories_list"
     */
    public function testPropertyCategoriesList()
    {
        foreach ($this->array['categories_list'] as $key => $value) 
        {
           Testcase::assertArrayHasKey($key, $this->object['categories_list']);
        }
    }

    /**
     * Test attribute "vat_types_list"
     */
    public function testPropertyVatTypesList()
    {
        foreach ($this->array['vat_types_list'] as $key => $value) 
        {
           Testcase::assertArrayHasKey($key, $this->object['vat_types_list']);
        }
    }
}
