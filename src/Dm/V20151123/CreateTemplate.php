<?php

namespace AlibabaCloud\Dm\V20151123;

use AlibabaCloud\Rpc;

/**
 * Api CreateTemplate
 *
 * @method string getResourceOwnerId()
 * @method string getSmsType()
 * @method string getResourceOwnerAccount()
 * @method string getTemplateText()
 * @method string getTemplateNickName()
 * @method string getRemark()
 * @method string getOwnerId()
 * @method string getTemplateSubject()
 * @method string getTemplateType()
 * @method string getTemplateName()
 * @method string getFromType()
 * @method string getSmsContent()
 */
class CreateTemplate extends Rpc
{
    public $product = 'Dm';

    public $version = '2015-11-23';

    public $method = 'POST';

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function withResourceOwnerId($resourceOwnerId)
    {
        $this->data['ResourceOwnerId'] = $resourceOwnerId;
        $this->options['query']['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param string $smsType
     *
     * @return $this
     */
    public function withSmsType($smsType)
    {
        $this->data['SmsType'] = $smsType;
        $this->options['query']['SmsType'] = $smsType;

        return $this;
    }

    /**
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function withResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->data['ResourceOwnerAccount'] = $resourceOwnerAccount;
        $this->options['query']['ResourceOwnerAccount'] = $resourceOwnerAccount;

        return $this;
    }

    /**
     * @param string $templateText
     *
     * @return $this
     */
    public function withTemplateText($templateText)
    {
        $this->data['TemplateText'] = $templateText;
        $this->options['query']['TemplateText'] = $templateText;

        return $this;
    }

    /**
     * @param string $templateNickName
     *
     * @return $this
     */
    public function withTemplateNickName($templateNickName)
    {
        $this->data['TemplateNickName'] = $templateNickName;
        $this->options['query']['TemplateNickName'] = $templateNickName;

        return $this;
    }

    /**
     * @param string $remark
     *
     * @return $this
     */
    public function withRemark($remark)
    {
        $this->data['Remark'] = $remark;
        $this->options['query']['Remark'] = $remark;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function withOwnerId($ownerId)
    {
        $this->data['OwnerId'] = $ownerId;
        $this->options['query']['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $templateSubject
     *
     * @return $this
     */
    public function withTemplateSubject($templateSubject)
    {
        $this->data['TemplateSubject'] = $templateSubject;
        $this->options['query']['TemplateSubject'] = $templateSubject;

        return $this;
    }

    /**
     * @param string $templateType
     *
     * @return $this
     */
    public function withTemplateType($templateType)
    {
        $this->data['TemplateType'] = $templateType;
        $this->options['query']['TemplateType'] = $templateType;

        return $this;
    }

    /**
     * @param string $templateName
     *
     * @return $this
     */
    public function withTemplateName($templateName)
    {
        $this->data['TemplateName'] = $templateName;
        $this->options['query']['TemplateName'] = $templateName;

        return $this;
    }

    /**
     * @param string $fromType
     *
     * @return $this
     */
    public function withFromType($fromType)
    {
        $this->data['FromType'] = $fromType;
        $this->options['query']['FromType'] = $fromType;

        return $this;
    }

    /**
     * @param string $smsContent
     *
     * @return $this
     */
    public function withSmsContent($smsContent)
    {
        $this->data['SmsContent'] = $smsContent;
        $this->options['query']['SmsContent'] = $smsContent;

        return $this;
    }
}
