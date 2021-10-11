<?php
/**
 * GetIssuedDocumentPreCreateInfoResponseTest
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
 * GetIssuedDocumentPreCreateInfoResponseTest Class Doc Comment
 *
 * @category    Class
 * @description GetIssuedDocumentPreCreateInfoResponse
 * @package     FattureInCloud
 * @author   Fatture In Cloud API team
 * @link     https://fattureincloud.it
 */
class GetIssuedDocumentPreCreateInfoResponseTest extends TestCase
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
            "data": {
                "numerations": {
                    "2018": {
                      "AB123": 2
                    },
                    "2019": {
                      "123": null
                    },
                    "2020": {
                      "ABC": 2
                    },
                    "2021": {
                      "rec123": 2
                    }
                  },
                  "dn_numerations": {
                    "2017": {
                      "": 1000
                    },
                    "2018": {
                      "": 112
                    },
                    "2019": {
                      "": 526
                    },
                    "2020": {
                      "": 11
                    },
                    "2021": {
                      "": 110
                    }
                  },
                  "default_values": {
                    "template": {
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
                    "use_gross_prices": false
                }
            }
        }';

        $this->array = json_decode($json, true);

        $this->object = ObjectSerializer::deserialize($json, '\FattureInCloud\Model\GetIssuedDocumentPreCreateInfoResponse');
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
     * Test "GetIssuedDocumentPreCreateInfoResponse"
     */
    public function testGetIssuedDocumentPreCreateInfoResponse()
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
