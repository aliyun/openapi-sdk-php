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
