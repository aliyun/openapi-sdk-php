<?php

namespace AlibabaCloud\Dm\V20151123;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifyTemplate
 *
 * @method string getResourceOwnerId()
 * @method string getSmsType()
 * @method string getResourceOwnerAccount()
 * @method string getTemplateText()
 * @method string getTemplateNickName()
 * @method string getRemark()
 * @method string getOwnerId()
 * @method string getTemplateId()
 * @method string getTemplateSubject()
 * @method string getTemplateName()
 * @method string getFromType()
 * @method string getSmsContent()
 */
class ModifyTemplate extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Dm';

    /**
     * @var string
     */
    public $version = '2015-11-23';

    /**
     * @var string
     */
    public $action = 'ModifyTemplate';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withResourceOwnerId() instead.
     *
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        return $this->withResourceOwnerId($resourceOwnerId);
    }

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
     * @deprecated deprecated since version 2.0, Use withSmsType() instead.
     *
     * @param string $smsType
     *
     * @return $this
     */
    public function setSmsType($smsType)
    {
        return $this->withSmsType($smsType);
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
     * @deprecated deprecated since version 2.0, Use withResourceOwnerAccount() instead.
     *
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        return $this->withResourceOwnerAccount($resourceOwnerAccount);
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
     * @deprecated deprecated since version 2.0, Use withTemplateText() instead.
     *
     * @param string $templateText
     *
     * @return $this
     */
    public function setTemplateText($templateText)
    {
        return $this->withTemplateText($templateText);
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
     * @deprecated deprecated since version 2.0, Use withTemplateNickName() instead.
     *
     * @param string $templateNickName
     *
     * @return $this
     */
    public function setTemplateNickName($templateNickName)
    {
        return $this->withTemplateNickName($templateNickName);
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
     * @deprecated deprecated since version 2.0, Use withRemark() instead.
     *
     * @param string $remark
     *
     * @return $this
     */
    public function setRemark($remark)
    {
        return $this->withRemark($remark);
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
     * @deprecated deprecated since version 2.0, Use withOwnerId() instead.
     *
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        return $this->withOwnerId($ownerId);
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
     * @deprecated deprecated since version 2.0, Use withTemplateId() instead.
     *
     * @param string $templateId
     *
     * @return $this
     */
    public function setTemplateId($templateId)
    {
        return $this->withTemplateId($templateId);
    }

    /**
     * @param string $templateId
     *
     * @return $this
     */
    public function withTemplateId($templateId)
    {
        $this->data['TemplateId'] = $templateId;
        $this->options['query']['TemplateId'] = $templateId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTemplateSubject() instead.
     *
     * @param string $templateSubject
     *
     * @return $this
     */
    public function setTemplateSubject($templateSubject)
    {
        return $this->withTemplateSubject($templateSubject);
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
     * @deprecated deprecated since version 2.0, Use withTemplateName() instead.
     *
     * @param string $templateName
     *
     * @return $this
     */
    public function setTemplateName($templateName)
    {
        return $this->withTemplateName($templateName);
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
     * @deprecated deprecated since version 2.0, Use withFromType() instead.
     *
     * @param string $fromType
     *
     * @return $this
     */
    public function setFromType($fromType)
    {
        return $this->withFromType($fromType);
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
     * @deprecated deprecated since version 2.0, Use withSmsContent() instead.
     *
     * @param string $smsContent
     *
     * @return $this
     */
    public function setSmsContent($smsContent)
    {
        return $this->withSmsContent($smsContent);
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
