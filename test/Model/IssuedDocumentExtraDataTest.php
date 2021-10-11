<?php
/**
 * IssuedDocumentExtraDataTest
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
 * IssuedDocumentExtraDataTest Class Doc Comment
 *
 * @category    Class
 * @description Extra data. TS fields follow the technical specifications provided by \&quot;Sistema Tessera Sanitaria\&quot;.
 * @package     FattureInCloud
 * @author   Fatture In Cloud API team
 * @link     https://fattureincloud.it
 */
class IssuedDocumentExtraDataTest extends TestCase
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
            "show_sofort_button": true,
            "multifatture_sent": 3,
            "ts_communication": true,
            "ts_flag_tipo_spesa": 1,
            "ts_pagamento_tracciato": true,
            "ts_tipo_spesa": "TK",
            "ts_opposizione": true,
            "ts_status": 1,
            "ts_file_id": "file.png",
            "ts_sent_date": "2020-10-10",
            "ts_full_amount": true,
            "imported_by": "jss",
            "ts_single_sending": false
        }';
        
        $this->array = json_decode($json, true);

        $this->object = ObjectSerializer::deserialize($json, '\FattureInCloud\Model\IssuedDocumentExtraData');
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
     * Test "IssuedDocumentExtraData"
     */
    public function testIssuedDocumentExtraData()
    {
        foreach ($this->array as $key => $value) 
        {
           Testcase::assertArrayHasKey($key, $this->object);
        }
    }

    /**
     * Test attribute "show_sofort_button"
     */
    public function testPropertyShowSofortButton()
    {
        TestCase::assertEquals($this->object['show_sofort_button'], $this->array['show_sofort_button']);
    }

    /**
     * Test attribute "multifatture_sent"
     */
    public function testPropertyMultifattureSent()
    {
        TestCase::assertEquals($this->object['multifatture_sent'], $this->array['multifatture_sent']);
    }

    /**
     * Test attribute "ts_communication"
     */
    public function testPropertyTsCommunication()
    {
        TestCase::assertEquals($this->object['ts_communication'], $this->array['ts_communication']);
    }

    /**
     * Test attribute "ts_flag_tipo_spesa"
     */
    public function testPropertyTsFlagTipoSpesa()
    {
        TestCase::assertEquals($this->object['ts_flag_tipo_spesa'], $this->array['ts_flag_tipo_spesa']);
    }

    /**
     * Test attribute "ts_pagamento_tracciato"
     */
    public function testPropertyTsPagamentoTracciato()
    {
        TestCase::assertEquals($this->object['ts_pagamento_tracciato'], $this->array['ts_pagamento_tracciato']);
    }

    /**
     * Test attribute "ts_tipo_spesa"
     */
    public function testPropertyTsTipoSpesa()
    {
        TestCase::assertEquals($this->object['ts_tipo_spesa'], $this->array['ts_tipo_spesa']);
    }

    /**
     * Test attribute "ts_opposizione"
     */
    public function testPropertyTsOpposizione()
    {
        TestCase::assertEquals($this->object['ts_opposizione'], $this->array['ts_opposizione']);
    }

    /**
     * Test attribute "ts_status"
     */
    public function testPropertyTsStatus()
    {
        TestCase::assertEquals($this->object['ts_status'], $this->array['ts_status']);
    }

    /**
     * Test attribute "ts_file_id"
     */
    public function testPropertyTsFileId()
    {
        TestCase::assertEquals($this->object['ts_file_id'], $this->array['ts_file_id']);
    }

    /**
     * Test attribute "ts_sent_date"
     */
    public function testPropertyTsSentDate()
    {
        TestCase::assertEquals($this->object['ts_sent_date'], $this->array['ts_sent_date']);
    }

    /**
     * Test attribute "ts_full_amount"
     */
    public function testPropertyTsFullAmount()
    {
        TestCase::assertEquals($this->object['ts_full_amount'], $this->array['ts_full_amount']);
    }

    /**
     * Test attribute "imported_by"
     */
    public function testPropertyImportedBy()
    {
        TestCase::assertEquals($this->object['imported_by'], $this->array['imported_by']);
    }

    /**
     * Test attribute "ts_single_sending"
     */
    public function testPropertyTsSingleSending()
    {
        TestCase::assertEquals($this->object['ts_single_sending'], $this->array['ts_single_sending']);
    }
}
