<?php
/**
 * EmailDataTest
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
 * EmailDataTest Class Doc Comment
 *
 * @category    Class
 * @description Email
 * @package     FattureInCloud
 * @author   Fatture In Cloud API team
 * @link     https://fattureincloud.it
 */
class EmailDataTest extends TestCase
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
            "recipient_email": "mary.red@example.com",
            "cc_email": "m.rossi@exxample.com",
            "subject": "Nostra pro forma nr. 1",
            "body": "Gentile Mario Rossi,<br>per vedere la nostra pro forma di  o per scaricarne una copia in versione PDF prema sul bottone sottoastante.<br><br>{{allegati}}<br><br>Cordiali saluti,<br><b>Mario Rossi</b>",
            "document_exists": true,
            "delivery_note_exists": false,
            "attachment_exists": false,
            "accompanying_invoice_exists": false,
            "default_attach_pdf": false,
            "default_sender_email": {
                "id": 0,
                "email": "no-reply@fattureincloud.it"
              },
              "sender_emails_list": [
                {
                  "id": 0,
                  "email": "no-reply@fattureincloud.it"
                },
                {
                  "id": 888,
                  "email": "mariorossi@fattureincloud.it"
                }
            ]
        }';

        $this->array = json_decode($json, true);

        $this->object = ObjectSerializer::deserialize($json, '\FattureInCloud\Model\EmailData');
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
     * Test "EmailData"
     */
    public function testEmailData()
    {
        foreach ($this->array as $key => $value) {
            Testcase::assertArrayHasKey($key, $this->object);
        }
    }

    /**
     * Test attribute "recipient_email"
     */
    public function testPropertyRecipientEmail()
    {
        TestCase::assertEquals($this->object['recipient_email'], $this->array['recipient_email']);
    }

    /**
     * Test attribute "default_sender_email"
     */
    public function testPropertyDefaultSenderEmail()
    {
        foreach ($this->array['default_sender_email'] as $key => $value) {
            Testcase::assertArrayHasKey($key, $this->object['default_sender_email']);
        }
    }

    /**
     * Test attribute "sender_emails_list"
     */
    public function testPropertySenderEmailsList()
    {
        foreach ($this->array['sender_emails_list'] as $key => $value) {
            Testcase::assertArrayHasKey($key, $this->object['sender_emails_list']);
        }
    }

    /**
     * Test attribute "cc_email"
     */
    public function testPropertyCcEmail()
    {
        TestCase::assertEquals($this->object['cc_email'], $this->array['cc_email']);
    }

    /**
     * Test attribute "subject"
     */
    public function testPropertySubject()
    {
        TestCase::assertEquals($this->object['subject'], $this->array['subject']);
    }

    /**
     * Test attribute "body"
     */
    public function testPropertyBody()
    {
        TestCase::assertEquals($this->object['body'], $this->array['body']);
    }

    /**
     * Test attribute "document_exists"
     */
    public function testPropertyDocumentExists()
    {
        TestCase::assertEquals($this->object['document_exists'], $this->array['document_exists']);
    }

    /**
     * Test attribute "delivery_note_exists"
     */
    public function testPropertyDeliveryNoteExists()
    {
        TestCase::assertEquals($this->object['delivery_note_exists'], $this->array['delivery_note_exists']);
    }

    /**
     * Test attribute "attachment_exists"
     */
    public function testPropertyAttachmentExists()
    {
        TestCase::assertEquals($this->object['attachment_exists'], $this->array['attachment_exists']);
    }

    /**
     * Test attribute "accompanying_invoice_exists"
     */
    public function testPropertyAccompanyingInvoiceExists()
    {
        TestCase::assertEquals($this->object['accompanying_invoice_exists'], $this->array['accompanying_invoice_exists']);
    }

    /**
     * Test attribute "default_attach_pdf"
     */
    public function testPropertyDefaultAttachPdf()
    {
        TestCase::assertEquals($this->object['default_attach_pdf'], $this->array['default_attach_pdf']);
    }
}
