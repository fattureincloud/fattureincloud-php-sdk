<?php
/**
 * IssuedDocumentTest
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
 * IssuedDocumentTest Class Doc Comment
 *
 * @category    Class
 * @description IssuedDocument
 * @package     FattureInCloud
 * @author   Fatture In Cloud API team
 * @link     https://fattureincloud.it
 */
class IssuedDocumentTest extends TestCase
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
        }';

        $this->array = json_decode($json, true);

        $this->object = ObjectSerializer::deserialize($json, '\FattureInCloud\Model\IssuedDocument');
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
     * Test "IssuedDocument"
     */
    public function testIssuedDocument()
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
     * Test attribute "entity"
     */
    public function testPropertyEntity()
    {
        foreach ($this->array['entity'] as $key => $value) {
            Testcase::assertArrayHasKey($key, $this->object['entity']);
        }
    }

    /**
     * Test attribute "type"
     */
    public function testPropertyType()
    {
        TestCase::assertEquals($this->object['type'], $this->array['type']);
    }

    /**
     * Test attribute "number"
     */
    public function testPropertyNumber()
    {
        TestCase::assertEquals($this->object['number'], $this->array['number']);
    }

    /**
     * Test attribute "numeration"
     */
    public function testPropertyNumeration()
    {
        TestCase::assertEquals($this->object['numeration'], $this->array['numeration']);
    }

    /**
     * Test attribute "date"
     */
    public function testPropertyDate()
    {
        $date = new \DateTime($this->array['date']);
        TestCase::assertEquals($this->object['date'], $date);
    }

    /**
     * Test attribute "currency"
     */
    public function testPropertyCurrency()
    {
        foreach ($this->array['currency'] as $key => $value) {
            Testcase::assertArrayHasKey($key, $this->object['currency']);
        }
    }

    /**
     * Test attribute "language"
     */
    public function testPropertyLanguage()
    {
        foreach ($this->array['language'] as $key => $value) {
            Testcase::assertArrayHasKey($key, $this->object['language']);
        }
    }

    /**
     * Test attribute "subject"
     */
    public function testPropertySubject()
    {
        TestCase::assertEquals($this->object['subject'], $this->array['subject']);
    }

    /**
     * Test attribute "visible_subject"
     */
    public function testPropertyVisibleSubject()
    {
        TestCase::assertEquals($this->object['visible_subject'], $this->array['visible_subject']);
    }

    /**
     * Test attribute "rc_center"
     */
    public function testPropertyRcCenter()
    {
        TestCase::assertEquals($this->object['rc_center'], $this->array['rc_center']);
    }

    /**
     * Test attribute "notes"
     */
    public function testPropertyNotes()
    {
        TestCase::assertEquals($this->object['notes'], $this->array['notes']);
    }

    /**
     * Test attribute "rivalsa"
     */
    public function testPropertyRivalsa()
    {
        TestCase::assertEquals($this->object['rivalsa'], $this->array['rivalsa']);
    }

    /**
     * Test attribute "cassa"
     */
    public function testPropertyCassa()
    {
        TestCase::assertEquals($this->object['cassa'], $this->array['cassa']);
    }

    /**
     * Test attribute "withholding_tax"
     */
    public function testPropertyWithholdingTax()
    {
        TestCase::assertEquals($this->object['withholding_tax'], $this->array['withholding_tax']);
    }

    /**
     * Test attribute "withholding_tax_taxable"
     */
    public function testPropertyWithholdingTaxTaxable()
    {
        TestCase::assertEquals($this->object['withholding_tax_taxable'], $this->array['withholding_tax_taxable']);
    }

    /**
     * Test attribute "other_withholding_tax"
     */
    public function testPropertyOtherWithholdingTax()
    {
        TestCase::assertEquals($this->object['other_withholding_tax'], $this->array['other_withholding_tax']);
    }

    /**
     * Test attribute "stamp_duty"
     */
    public function testPropertyStampDuty()
    {
        TestCase::assertEquals($this->object['stamp_duty'], $this->array['stamp_duty']);
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

    /**
     * Test attribute "use_split_payment"
     */
    public function testPropertyUseSplitPayment()
    {
        TestCase::assertEquals($this->object['use_split_payment'], $this->array['use_split_payment']);
    }

    /**
     * Test attribute "use_gross_prices"
     */
    public function testPropertyUseGrossPrices()
    {
        TestCase::assertEquals($this->object['use_gross_prices'], $this->array['use_gross_prices']);
    }

    /**
     * Test attribute "e_invoice"
     */
    public function testPropertyEInvoice()
    {
        TestCase::assertEquals($this->object['e_invoice'], $this->array['e_invoice']);
    }

    /**
     * Test attribute "ei_data"
     */
    public function testPropertyEiData()
    {
        foreach ($this->array['ei_data'] as $key => $value) {
            Testcase::assertArrayHasKey($key, $this->object['ei_data']);
        }
    }

    /**
     * Test attribute "items_list"
     */
    public function testPropertyItemsList()
    {
        foreach ($this->array['items_list'] as $key => $value) {
            Testcase::assertArrayHasKey($key, $this->object['items_list']);
        }
    }

    /**
     * Test attribute "payments_list"
     */
    public function testPropertyPaymentsList()
    {
        foreach ($this->array['payments_list'] as $key => $value) {
            Testcase::assertArrayHasKey($key, $this->object['payments_list']);
        }
    }

    /**
     * Test attribute "template"
     */
    public function testPropertyTemplate()
    {
        foreach ($this->array['template'] as $key => $value) {
            Testcase::assertArrayHasKey($key, $this->object['template']);
        }
    }

    /**
     * Test attribute "delivery_note_template"
     */
    public function testPropertyDeliveryNoteTemplate()
    {
        foreach ($this->array['delivery_note_template'] as $key => $value) {
            Testcase::assertArrayHasKey($key, $this->object['delivery_note_template']);
        }
    }

    /**
     * Test attribute "acc_inv_template"
     */
    public function testPropertyAccInvTemplate()
    {
        foreach ($this->array['acc_inv_template'] as $key => $value) {
            Testcase::assertArrayHasKey($key, $this->object['acc_inv_template']);
        }
    }

    /**
     * Test attribute "h_margins"
     */
    public function testPropertyHMargins()
    {
        TestCase::assertEquals($this->object['h_margins'], $this->array['h_margins']);
    }

    /**
     * Test attribute "show_payments"
     */
    public function testPropertyShowPayments()
    {
        TestCase::assertEquals($this->object['show_payments'], $this->array['show_payments']);
    }

    /**
     * Test attribute "show_payment_method"
     */
    public function testPropertyShowPaymentMethod()
    {
        TestCase::assertEquals($this->object['show_payment_method'], $this->array['show_payment_method']);
    }

    /**
     * Test attribute "show_totals"
     */
    public function testPropertyShowTotals()
    {
        TestCase::assertEquals($this->object['show_totals'], $this->array['show_totals']);
    }

    /**
     * Test attribute "v_margins"
     */
    public function testPropertyVMargins()
    {
        TestCase::assertEquals($this->object['v_margins'], $this->array['v_margins']);
    }

    /**
     * Test attribute "show_notification_button"
     */
    public function testPropertyShowNotificationButton()
    {
        TestCase::assertEquals($this->object['show_notification_button'], $this->array['show_notification_button']);
    }

    /**
     * Test attribute "delivery_note"
     */
    public function testPropertyDeliveryNote()
    {
        TestCase::assertEquals($this->object['delivery_note'], $this->array['delivery_note']);
    }

    /**
     * Test attribute "accompanying_invoice"
     */
    public function testPropertyAccompanyingInvoice()
    {
        TestCase::assertEquals($this->object['accompanying_invoice'], $this->array['accompanying_invoice']);
    }

    /**
     * Test attribute "dn_number"
     */
    public function testPropertyDnNumber()
    {
        TestCase::assertEquals($this->object['dn_number'], $this->array['dn_number']);
    }

    /**
     * Test attribute "dn_date"
     */
    public function testPropertyDnDate()
    {
        $date = new \DateTime($this->array['dn_date']);
        TestCase::assertEquals($this->object['dn_date'], $date);
    }

    /**
     * Test attribute "dn_ai_packages_number"
     */
    public function testPropertyDnAiPackagesNumber()
    {
        TestCase::assertEquals($this->object['dn_ai_packages_number'], $this->array['dn_ai_packages_number']);
    }

    /**
     * Test attribute "dn_ai_weight"
     */
    public function testPropertyDnAiWeight()
    {
        TestCase::assertEquals($this->object['dn_ai_weight'], $this->array['dn_ai_weight']);
    }

    /**
     * Test attribute "dn_ai_causal"
     */
    public function testPropertyDnAiCausal()
    {
        TestCase::assertEquals($this->object['dn_ai_causal'], $this->array['dn_ai_causal']);
    }

    /**
     * Test attribute "dn_ai_destination"
     */
    public function testPropertyDnAiDestination()
    {
        TestCase::assertEquals($this->object['dn_ai_destination'], $this->array['dn_ai_destination']);
    }

    /**
     * Test attribute "dn_ai_transporter"
     */
    public function testPropertyDnAiTransporter()
    {
        TestCase::assertEquals($this->object['dn_ai_transporter'], $this->array['dn_ai_transporter']);
    }

    /**
     * Test attribute "dn_ai_notes"
     */
    public function testPropertyDnAiNotes()
    {
        TestCase::assertEquals($this->object['dn_ai_notes'], $this->array['dn_ai_notes']);
    }

    /**
     * Test attribute "is_marked"
     */
    public function testPropertyIsMarked()
    {
        TestCase::assertEquals($this->object['is_marked'], $this->array['is_marked']);
    }

    /**
     * Test attribute "amount_net"
     */
    public function testPropertyAmountNet()
    {
        TestCase::assertEquals($this->object['amount_net'], $this->array['amount_net']);
    }

    /**
     * Test attribute "amount_vat"
     */
    public function testPropertyAmountVat()
    {
        TestCase::assertEquals($this->object['amount_vat'], $this->array['amount_vat']);
    }

    /**
     * Test attribute "amount_gross"
     */
    public function testPropertyAmountGross()
    {
        TestCase::assertEquals($this->object['amount_gross'], $this->array['amount_gross']);
    }

    /**
     * Test attribute "amount_rivalsa"
     */
    public function testPropertyAmountRivalsa()
    {
        TestCase::assertEquals($this->object['amount_rivalsa'], $this->array['amount_rivalsa']);
    }

    /**
     * Test attribute "amount_cassa"
     */
    public function testPropertyAmountCassa()
    {
        TestCase::assertEquals($this->object['amount_cassa'], $this->array['amount_cassa']);
    }

    /**
     * Test attribute "amount_withholding_tax"
     */
    public function testPropertyAmountWithholdingTax()
    {
        TestCase::assertEquals($this->object['amount_withholding_tax'], $this->array['amount_withholding_tax']);
    }

    /**
     * Test attribute "amount_other_withholding_tax"
     */
    public function testPropertyAmountOtherWithholdingTax()
    {
        TestCase::assertEquals($this->object['amount_other_withholding_tax'], $this->array['amount_other_withholding_tax']);
    }

    /**
     * Test attribute "extra_data"
     */
    public function testPropertyExtraData()
    {
        foreach ($this->array['extra_data'] as $key => $value) {
            Testcase::assertArrayHasKey($key, $this->object['extra_data']);
        }
    }

    /**
     * Test attribute "seen_date"
     */
    public function testPropertySeenDate()
    {
        $date = new \DateTime($this->array['seen_date']);
        TestCase::assertEquals($this->object['seen_date'], $date);
    }

    /**
     * Test attribute "next_due_date"
     */
    public function testPropertyNextDueDate()
    {
        $date = new \DateTime($this->array['next_due_date']);
        TestCase::assertEquals($this->object['next_due_date'], $date);
    }

    /**
     * Test attribute "url"
     */
    public function testPropertyUrl()
    {
        TestCase::assertEquals($this->object['url'], $this->array['url']);
    }

    /**
     * Test attribute "attachment_url"
     */
    public function testPropertyAttachmentUrl()
    {
        TestCase::assertEquals($this->object['attachment_url'], $this->array['attachment_url']);
    }

    /**
     * Test attribute "attachment_token"
     */
    public function testPropertyAttachmentToken()
    {
        Testcase::assertEquals($this->array['attachment_token'], $this->object['attachment_token']);
    }

    /**
     * Test attribute "ei_raw"
     */
    public function testPropertyEiRaw()
    {
        foreach ($this->array['ei_raw'] as $key => $value) {
            Testcase::assertArrayHasKey($key, $this->object['ei_raw']);
        }
    }

    /**
     * Test attribute "show_tspay_button"
     */
    public function testPropertyShowTspayButton()
    {
        TestCase::assertEquals($this->object['show_tspay_button'], $this->array['show_tspay_button']);
    }

    /**
     * Test attribute "year"
     */
    public function testPropertyYear()
    {
        TestCase::assertEquals($this->object['year'], $this->array['year']);
    }

    /**
     * Test attribute "amount_rivalsa_taxable"
     */
    public function testPropertyAmountRivalsaTaxable()
    {
        TestCase::assertEquals($this->object['amount_rivalsa_taxable'], $this->array['amount_rivalsa_taxable']);
    }

    /**
     * Test attribute "amount_global_cassa_taxable"
     */
    public function testPropertyAmountGlobalCassaTaxable()
    {
        TestCase::assertEquals($this->object['amount_global_cassa_taxable'], $this->array['amount_global_cassa_taxable']);
    }

    /**
     * Test attribute "amount_cassa_taxable"
     */
    public function testPropertyAmountCassaTaxable()
    {
        TestCase::assertEquals($this->object['amount_cassa_taxable'], $this->array['amount_cassa_taxable']);
    }

    /**
     * Test attribute "amount_cassa2"
     */
    public function testPropertyAmountCassa2()
    {
        TestCase::assertEquals($this->object['amount_cassa2'], $this->array['amount_cassa2']);
    }

    /**
     * Test attribute "amount_cassa2_taxable"
     */
    public function testPropertyAmountCassa2Taxable()
    {
        TestCase::assertEquals($this->object['amount_cassa2_taxable'], $this->array['amount_cassa2_taxable']);
    }

    /**
     * Test attribute "amount_withholding_tax_taxable"
     */
    public function testPropertyAmountWithholdingTaxTaxable()
    {
        TestCase::assertEquals($this->object['amount_withholding_tax_taxable'], $this->array['amount_withholding_tax_taxable']);
    }

    /**
     * Test attribute "amount_enasarco_taxable"
     */
    public function testPropertyAmountEnasarcoTaxable()
    {
        TestCase::assertEquals($this->object['amount_enasarco_taxable'], $this->array['amount_enasarco_taxable']);
    }

    /**
     * Test attribute "amount_other_withholding_tax_taxable"
     */
    public function testPropertyAmountOtherWithholdingTaxTaxable()
    {
        TestCase::assertEquals($this->object['amount_other_withholding_tax_taxable'], $this->array['amount_other_withholding_tax_taxable']);
    }

    /**
     * Test attribute "ei_cassa_type"
     */
    public function testPropertyEiCassaType()
    {
        TestCase::assertEquals($this->object['ei_cassa_type'], $this->array['ei_cassa_type']);
    }

    /**
     * Test attribute "ei_cassa2_type"
     */
    public function testPropertyEiCassa2Type()
    {
        TestCase::assertEquals($this->object['ei_cassa2_type'], $this->array['ei_cassa2_type']);
    }

    /**
     * Test attribute "ei_withholding_tax_causal"
     */
    public function testPropertyEiWithholdingTaxCausal()
    {
        TestCase::assertEquals($this->object['ei_withholding_tax_causal'], $this->array['ei_withholding_tax_causal']);
    }

    /**
     * Test attribute "ei_other_withholding_tax_type"
     */
    public function testPropertyEiOtherWithholdingTaxType()
    {
        TestCase::assertEquals($this->object['ei_other_withholding_tax_type'], $this->array['ei_other_withholding_tax_type']);
    }

    /**
     * Test attribute "ei_other_withholding_tax_causal"
     */
    public function testPropertyEiOtherWithholdingTaxCausal()
    {
        TestCase::assertEquals($this->object['ei_other_withholding_tax_causal'], $this->array['ei_other_withholding_tax_causal']);
    }

    /**
     * Test attribute "amount_due_discount"
     */
    public function testPropertyAmountDueDiscount()
    {
        TestCase::assertEquals($this->object['amount_due_discount'], $this->array['amount_due_discount']);
    }
}
