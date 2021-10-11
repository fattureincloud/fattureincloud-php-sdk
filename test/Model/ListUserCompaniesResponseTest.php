<?php
/**
 * ListUserCompaniesResponseTest
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
 * The version of the OpenAPI document: v2.0.0
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
 * ListUserCompaniesResponseTest Class Doc Comment
 *
 * @category    Class
 * @description The UserCompany response.
 * @package     FattureInCloud
 * @author   Fatture In Cloud API team
 * @link     https://fattureincloud.it
 */
class ListUserCompaniesResponseTest extends TestCase
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
                "companies": [
                  {
                    "id": 12345,
                    "name": "Studio Commercialista",
                    "tax_code": "ABCSFN94T17A794K",
                    "type": "accountant",
                    "access_token": "4ff5f0fe5abcd1d7157fa13ca72ab62b6183db0667a576a0e19164801c18c4f7362a848fa32dbb8c3a3f94c34f3df95",
                    "connection_id": 94566,
                    "controlled_companies": [
                      {
                        "id": 12246,
                        "name": "Studio Commercialista",
                        "tax_code": "ABCSFN94T17A794K",
                        "type": "company",
                        "access_token": "4ff5f0fe5abcdf1d7157fa13ca72ab62b6183db0667a576a0e19164801c18c4f7362a848fa32dbb8c3a3f94c34f3df95",
                        "connection_id": 94566,
                        "controlled_companies": [],
                        "fic": true,
                        "dic": true,
                        "fic_plan": "premium_plus",
                        "fic_license_expire": "2021-12-31",
                        "permissions": {
                          "fic_situation": "write",
                          "fic_clients": "write",
                          "fic_suppliers": "write",
                          "fic_products": "write",
                          "fic_issued_documents": "write",
                          "fic_received_documents": "write",
                          "fic_receipts": "write",
                          "fic_calendar": "write",
                          "fic_archive": "write",
                          "fic_taxes": "write",
                          "fic_stock": "write",
                          "fic_cashbook": "write",
                          "fic_settings": "write",
                          "fic_emails": "write",
                          "dic_employees": "write",
                          "dic_timesheet": "write",
                          "dic_settings": "write"
                        }
                      }
                    ]
                  }
                ]
              }
        }';

        $this->array = json_decode($json, true);

        $this->object = ObjectSerializer::deserialize($json, '\FattureInCloud\Model\ListUserCompaniesResponse');
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
     * Test "ListUserCompaniesResponse"
     */
    public function testListUserCompaniesResponse()
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
