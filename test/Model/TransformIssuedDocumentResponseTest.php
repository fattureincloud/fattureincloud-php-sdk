<?php
/**
 * TransformIssuedDocumentResponseTest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  FattureInCloud
 * @author   Fatture In Cloud API team
 * @link     https://fattureincloud.it
 */

/**
 * Fatture in Cloud API v2 - API Reference
 *
 * Connect your software with Fatture in Cloud, the invoicing platform chosen by more than 500.000 businesses in Italy.   The Fatture in Cloud API is based on REST, and makes possible to interact with the user related data prior authorization via OAuth2 protocol.
 *
 * The version of the OpenAPI document: 2.0.22
 * Contact: info@fattureincloud.it
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.1
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
 * TransformIssuedDocumentResponseTest Class Doc Comment
 *
 * @category    Class
 * @description TransformIssuedDocumentResponse
 * @package     FattureInCloud
 * @author   Fatture In Cloud API team
 * @link     https://fattureincloud.it
 */
class TransformIssuedDocumentResponseTest extends TestCase
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
            "data": {
                "id": 12345,
                "type": "receipt",
                "year": 2021,
                "numeration": "rec123",
                "subject": "",
                "visible_subject": "",
                "rc_center": "",
                "ei_cassa_type": "",
                "ei_withholding_tax_causal": "a",
                "ei_other_withholding_tax_type": "a",
                "ei_other_withholding_tax_causal": "c",
                "stamp_duty": 0,
                "use_gross_prices": false,
                "e_invoice": false,
                "delivery_note": false,
                "accompanying_invoice": false,
                "amount_net": 68.18,
                "amount_vat": 6.82,
                "amount_gross": 75,
                "amount_due_discount": 1,
                "amount_rivalsa": 0,
                "amount_cassa": 0,
                "amount_withholding_tax": 0,
                "amount_other_withholding_tax": 0,
                "h_margins": 15,
                "v_margins": 16,
                "show_payment_method": false,
                "show_payments": true,
                "show_totals": "all",
                "show_notification_button": false,
                "is_marked": false,
                "date": "2021-08-20",
                "number": 1,
                "notes": "",
                "rivalsa": 0,
                "cassa": 0,
                "withholding_tax": 0,
                "withholding_tax_taxable": 100,
                "other_withholding_tax": 0,
                "use_split_payment": false,
                "attachment_url": "kdijrnf893hnwkfk45f50f.pdf",
                "seen_date": "2020-08-23",
                "next_due_date": "2020-08-23",
                "url": "y12h45rn9yf2mse0p43t7ec90vr.pdf",
                "show_tspay_button": false,
                "dn_number" : 3,
                "dn_date" : "2020-10-21",
                "dn_ai_packages_number" : 4,
                "dn_ai_weight" : 3,
                "dn_ai_causal" : "causal",
                "dn_ai_destination" : "dest",
                "dn_ai_transporter" : "trasp",
                "dn_ai_notes" : "notes",
                "amount_rivalsa_taxable": 3,
                "amount_global_cassa_taxable": 3,
                "amount_cassa_taxable": 3,
                "amount_cassa2": 3,
                "amount_cassa2_taxable": 3,
                "amount_withholding_tax_taxable": 3,
                "amount_enasarco_taxable": 3,
                "amount_other_withholding_tax_taxable": 3,
                "ei_cassa2_type": 3,
                "attachment_token": "asdaosdjaoisndoa",
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
                "currency": {
                    "id": "EUR",
                    "exchange_rate": "1.00000",
                    "symbol": "€"
                },
                "language": {
                    "code": "it",
                    "name": "Italiano"
                },
                "payment_method": {
                    "id": 4,
                    "name": "Credit card"
                },
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
                "template": {
                    "id": 2821,
                    "name": "Light Smoke"
                },
                "extra_data": {
                    "ts_status": 1
                },
                "acc_inv_template": {
                    "id": 4
                },
                "delivery_note_template": {
                    "id": 54321
                },
                "ei_raw": {
                    "prop": true
                },
                "ei_data": {
                    "bank_name": "Sao Paulo"
                }
            },
            "options": {
                "create_from": [
                "82112399"
                ],
                "transform": true,
                "keep_copy": true
            }
        }';

        $this->array = json_decode($json, true);

        $this->object = ObjectSerializer::deserialize($json, '\FattureInCloud\Model\TransformIssuedDocumentResponse');
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
     * Test "TransformIssuedDocumentResponse"
     */
    public function testTransformIssuedDocumentResponse()
    {
        foreach ($this->array as $key => $value) {
            Testcase::assertArrayHasKey($key, $this->object);
        }
    }

    /**
     * Test attribute "data"
     */
    public function testPropertyData()
    {
        foreach ($this->array['data'] as $key => $value) {
            Testcase::assertArrayHasKey($key, $this->object['data']);
        }
    }

    /**
     * Test attribute "options"
     */
    public function testPropertyOptions()
    {
        foreach ($this->array['options'] as $key => $value) {
            Testcase::assertArrayHasKey($key, $this->object['options']);
        }
    }
}
