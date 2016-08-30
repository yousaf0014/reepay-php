<?php
/**
 * MailTemplate
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2015 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
/**
 * MailTemplate Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class MailTemplate implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'disabled' => 'bool',
        'subject' => 'string',
        'cc' => 'string[]',
        'updated' => '\DateTime',
        'mail_from' => 'string',
        'text_body' => 'string',
        'html_body' => 'string',
        'mail_type' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'disabled' => 'disabled',
        'subject' => 'subject',
        'cc' => 'cc',
        'updated' => 'updated',
        'mail_from' => 'mail_from',
        'text_body' => 'text_body',
        'html_body' => 'html_body',
        'mail_type' => 'mail_type'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'disabled' => 'setDisabled',
        'subject' => 'setSubject',
        'cc' => 'setCc',
        'updated' => 'setUpdated',
        'mail_from' => 'setMailFrom',
        'text_body' => 'setTextBody',
        'html_body' => 'setHtmlBody',
        'mail_type' => 'setMailType'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'disabled' => 'getDisabled',
        'subject' => 'getSubject',
        'cc' => 'getCc',
        'updated' => 'getUpdated',
        'mail_from' => 'getMailFrom',
        'text_body' => 'getTextBody',
        'html_body' => 'getHtmlBody',
        'mail_type' => 'getMailType'
    );
  
    
    /**
      * $disabled Should this email be sent by Reepay
      * @var bool
      */
    protected $disabled = false;
    
    /**
      * $subject Mail subject
      * @var string
      */
    protected $subject;
    
    /**
      * $cc Optional cc addresses in RFC-822 format
      * @var string[]
      */
    protected $cc;
    
    /**
      * $updated Date and time for last template update
      * @var \DateTime
      */
    protected $updated;
    
    /**
      * $mail_from Sender address to use in RFC-822 format. If not set the default account mail settings sender address will be used.
      * @var string
      */
    protected $mail_from;
    
    /**
      * $text_body Text body template content
      * @var string
      */
    protected $text_body;
    
    /**
      * $html_body HTML body template content
      * @var string
      */
    protected $html_body;
    
    /**
      * $mail_type Mail type, one of the following: `invoice_card_receipt`, `invoice_manual_receipt`, `invoice_zero_amount_receipt`, `invoice_dunning_notification`, `invoice_dunning_notification_no_payment_method`, `signup_receipt`, 'signup_receipt_request_payment_method',`subscription_cancelled`, `subscription_uncancelled`, `subscription_expired`, `subscription_expired_dunning`, `subscription_change`, `subscription_renewal_reminder`, `subscription_trial_end_reminder`, `user_account_invite`, `user_account_notification`, `user_reset_password`
      * @var string
      */
    protected $mail_type;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->disabled = $data["disabled"];
            $this->subject = $data["subject"];
            $this->cc = $data["cc"];
            $this->updated = $data["updated"];
            $this->mail_from = $data["mail_from"];
            $this->text_body = $data["text_body"];
            $this->html_body = $data["html_body"];
            $this->mail_type = $data["mail_type"];
        }
    }
    
    /**
     * Gets disabled
     * @return bool
     */
    public function getDisabled()
    {
        return $this->disabled;
    }
  
    /**
     * Sets disabled
     * @param bool $disabled Should this email be sent by Reepay
     * @return $this
     */
    public function setDisabled($disabled)
    {
        
        $this->disabled = $disabled;
        return $this;
    }
    
    /**
     * Gets subject
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }
  
    /**
     * Sets subject
     * @param string $subject Mail subject
     * @return $this
     */
    public function setSubject($subject)
    {
        
        $this->subject = $subject;
        return $this;
    }
    
    /**
     * Gets cc
     * @return string[]
     */
    public function getCc()
    {
        return $this->cc;
    }
  
    /**
     * Sets cc
     * @param string[] $cc Optional cc addresses in RFC-822 format
     * @return $this
     */
    public function setCc($cc)
    {
        
        $this->cc = $cc;
        return $this;
    }
    
    /**
     * Gets updated
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }
  
    /**
     * Sets updated
     * @param \DateTime $updated Date and time for last template update
     * @return $this
     */
    public function setUpdated($updated)
    {
        
        $this->updated = $updated;
        return $this;
    }
    
    /**
     * Gets mail_from
     * @return string
     */
    public function getMailFrom()
    {
        return $this->mail_from;
    }
  
    /**
     * Sets mail_from
     * @param string $mail_from Sender address to use in RFC-822 format. If not set the default account mail settings sender address will be used.
     * @return $this
     */
    public function setMailFrom($mail_from)
    {
        
        $this->mail_from = $mail_from;
        return $this;
    }
    
    /**
     * Gets text_body
     * @return string
     */
    public function getTextBody()
    {
        return $this->text_body;
    }
  
    /**
     * Sets text_body
     * @param string $text_body Text body template content
     * @return $this
     */
    public function setTextBody($text_body)
    {
        
        $this->text_body = $text_body;
        return $this;
    }
    
    /**
     * Gets html_body
     * @return string
     */
    public function getHtmlBody()
    {
        return $this->html_body;
    }
  
    /**
     * Sets html_body
     * @param string $html_body HTML body template content
     * @return $this
     */
    public function setHtmlBody($html_body)
    {
        
        $this->html_body = $html_body;
        return $this;
    }
    
    /**
     * Gets mail_type
     * @return string
     */
    public function getMailType()
    {
        return $this->mail_type;
    }
  
    /**
     * Sets mail_type
     * @param string $mail_type Mail type, one of the following: `invoice_card_receipt`, `invoice_manual_receipt`, `invoice_zero_amount_receipt`, `invoice_dunning_notification`, `invoice_dunning_notification_no_payment_method`, `signup_receipt`, 'signup_receipt_request_payment_method',`subscription_cancelled`, `subscription_uncancelled`, `subscription_expired`, `subscription_expired_dunning`, `subscription_change`, `subscription_renewal_reminder`, `subscription_trial_end_reminder`, `user_account_invite`, `user_account_notification`, `user_reset_password`
     * @return $this
     */
    public function setMailType($mail_type)
    {
        $allowed_values = array("invoice_card_receipt", "invoice_manual_receipt", "invoice_zero_amount_receipt", "invoice_dunning_notification", "invoice_dunning_notification_no_payment_method", "signup_receipt", "signup_receipt_request_payment_method", "subscription_cancelled", "subscription_uncancelled", "subscription_expired", "subscription_expired_dunning", "subscription_change", "subscription_renewal_reminder", "subscription_trial_end_reminder", "user_account_invite", "user_account_notification", "user_reset_password");
        if (!in_array($mail_type, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'mail_type', must be one of 'invoice_card_receipt', 'invoice_manual_receipt', 'invoice_zero_amount_receipt', 'invoice_dunning_notification', 'invoice_dunning_notification_no_payment_method', 'signup_receipt', 'signup_receipt_request_payment_method', 'subscription_cancelled', 'subscription_uncancelled', 'subscription_expired', 'subscription_expired_dunning', 'subscription_change', 'subscription_renewal_reminder', 'subscription_trial_end_reminder', 'user_account_invite', 'user_account_notification', 'user_reset_password'");
        }
        $this->mail_type = $mail_type;
        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(get_object_vars($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(get_object_vars($this));
        }
    }
}