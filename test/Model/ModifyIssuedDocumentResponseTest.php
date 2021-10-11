<?php
/**
 * ModifyIssuedDocumentResponseTest
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
 * ModifyIssuedDocumentResponseTest Class Doc Comment
 *
 * @category    Class
 * @description ModifyIssuedDocumentResponse
 * @package     FattureInCloud
 * @author   Fatture In Cloud API team
 * @link     https://fattureincloud.it
 */
class ModifyIssuedDocumentResponseTest extends TestCase
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
                "id": 12345,
                "type": "receipt",
                "year": 2021,
                "numeration": "rec123",
                "subject": "",
                "visible_subject": "",
                "rc_center": "",
                "stamp_duty": 0,
                "use_gross_prices": false,
                "e_invoice": false,
                "delivery_note": false,
                "accompanying_invoice": false,
                "amount_net": 68.18,
                "amount_vat": 6.82,
                "amount_gross": 75,
                "amount_due_discount": 0,
                "amount_rivalsa": 0,
                "amount_cassa": 0,
                "amount_withholding_tax": 0,
                "amount_other_withholding_tax": 0,
                "h_margins": 15,
                "v_margins": 16,
                "show_payment_method": false,
                "show_payments": true,
                "show_totals": "all",
                "show_paypal_button": true,
                "show_notification_button": false,
                "is_marked": false,
                "entity": {
                  "id": 54321,
                  "name": "Mary Red S.r.L.",
                  "vat_number": "IT05432181211",
                  "tax_code": "IT05432181211",
                  "address_street": "Corso impero, 66",
                  "address_postal_code": "20900",
                  "address_city": "Milano",
                  "address_province": "MI",
                  "address_extra": "",
                  "country": "Italia",
                  "certified_email": "mary@pec.red.com",
                  "ei_code": "ABCXCR1"
                },
                "date": "2021-08-20",
                "number": 1,
                "currency": {
                  "id": "EUR",
                  "exchange_rate": "1.00000",
                  "symbol": "€"
                },
                "language": {
                  "code": "it",
                  "name": "Italiano"
                },
                "notes": "",
                "rivalsa": 0,
                "cassa": 0,
                "withholding_tax": 0,
                "withholding_tax_taxable": 100,
                "other_withholding_tax": 0,
                "payment_method": {
                  "id": 4,
                  "name": "Credit card"
                },
                "use_split_payment": false,
                "items_list": [
                  {
                    "product_id": 5432,
                    "code": "SG3",
                    "name": "Soggiorno",
                    "measure": "",
                    "net_price": 68.18182,
                    "category": "",
                    "id": 277876033,
                    "gross_price": 75,
                    "apply_withholding_taxes": true,
                    "discount": 0,
                    "discount_highlight": false,
                    "in_dn": false,
                    "qty": 1,
                    "vat": {
                      "id": 3,
                      "value": 10,
                      "description": ""
                    },
                    "stock": false,
                    "description": "",
                    "not_taxable": false
                  }
                ],
                "payments_list": [
                  {
                    "amount": 75,
                    "due_date": "2020-08-23",
                    "paid_date": null,
                    "id": 69078013,
                    "payment_terms": {
                      "days": 0,
                      "type": "standard"
                    },
                    "status": "not_paid",
                    "payment_account": null
                  }
                ],
                "attachment_url": "kdijrnf893hnwkfk45f50f.pdf",
                "next_due_date": "2020-08-23",
                "template": {
                  "id": 2821,
                  "name": "Light Smoke"
                },
                "url": "y12h45rn9yf2mse0p43t7ec90vr.pdf"
            }
        }';

        $this->array = json_decode($json, true);

        $this->object = ObjectSerializer::deserialize($json, '\FattureInCloud\Model\ModifyIssuedDocumentResponse');
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
     * Test "ModifyIssuedDocumentResponse"
     */
    public function testModifyIssuedDocumentResponse()
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
