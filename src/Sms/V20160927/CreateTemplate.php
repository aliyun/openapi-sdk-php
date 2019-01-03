<?php

namespace AlibabaCloud\Sms\V20160927;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateTemplate
 *
 * @method string getResourceOwnerId()
 * @method string getSmsType()
 * @method string getResourceOwnerAccount()
 * @method string getTemplateType()
 * @method string getTemplateName()
 * @method string getRemark()
 * @method string getFromType()
 * @method string getOwnerId()
 * @method string getSmsContent()
 */
class CreateTemplate extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Sms';

    /**
     * @var string
     */
    public $version = '2016-09-27';

    /**
     * @var string
     */
    public $action = 'CreateTemplate';

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
     * @deprecated deprecated since version 2.0, Use withTemplateType() instead.
     *
     * @param string $templateType
     *
     * @return $this
     */
    public function setTemplateType($templateType)
    {
        return $this->withTemplateType($templateType);
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
