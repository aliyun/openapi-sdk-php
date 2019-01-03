<?php

namespace AlibabaCloud\Sms\V20160927;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QuerySmsCurrentStatistics
 *
 * @method string getResourceOwnerId()
 * @method string getTagCode()
 * @method string getResourceOwnerAccount()
 * @method string getPageNo()
 * @method string getEndDateStr()
 * @method string getTemplateType()
 * @method string getPageSize()
 * @method string getStartDateStr()
 * @method string getOwnerId()
 * @method string getTemplateCode()
 */
class QuerySmsCurrentStatistics extends RpcRequest
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
    public $action = 'QuerySmsCurrentStatistics';

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
     * @deprecated deprecated since version 2.0, Use withTagCode() instead.
     *
     * @param string $tagCode
     *
     * @return $this
     */
    public function setTagCode($tagCode)
    {
        return $this->withTagCode($tagCode);
    }

    /**
     * @param string $tagCode
     *
     * @return $this
     */
    public function withTagCode($tagCode)
    {
        $this->data['TagCode'] = $tagCode;
        $this->options['query']['TagCode'] = $tagCode;

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
     * @deprecated deprecated since version 2.0, Use withPageNo() instead.
     *
     * @param string $pageNo
     *
     * @return $this
     */
    public function setPageNo($pageNo)
    {
        return $this->withPageNo($pageNo);
    }

    /**
     * @param string $pageNo
     *
     * @return $this
     */
    public function withPageNo($pageNo)
    {
        $this->data['PageNo'] = $pageNo;
        $this->options['query']['PageNo'] = $pageNo;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withEndDateStr() instead.
     *
     * @param string $endDateStr
     *
     * @return $this
     */
    public function setEndDateStr($endDateStr)
    {
        return $this->withEndDateStr($endDateStr);
    }

    /**
     * @param string $endDateStr
     *
     * @return $this
     */
    public function withEndDateStr($endDateStr)
    {
        $this->data['EndDateStr'] = $endDateStr;
        $this->options['query']['EndDateStr'] = $endDateStr;

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
     * @deprecated deprecated since version 2.0, Use withPageSize() instead.
     *
     * @param string $pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        return $this->withPageSize($pageSize);
    }

    /**
     * @param string $pageSize
     *
     * @return $this
     */
    public function withPageSize($pageSize)
    {
        $this->data['PageSize'] = $pageSize;
        $this->options['query']['PageSize'] = $pageSize;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withStartDateStr() instead.
     *
     * @param string $startDateStr
     *
     * @return $this
     */
    public function setStartDateStr($startDateStr)
    {
        return $this->withStartDateStr($startDateStr);
    }

    /**
     * @param string $startDateStr
     *
     * @return $this
     */
    public function withStartDateStr($startDateStr)
    {
        $this->data['StartDateStr'] = $startDateStr;
        $this->options['query']['StartDateStr'] = $startDateStr;

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
     * @deprecated deprecated since version 2.0, Use withTemplateCode() instead.
     *
     * @param string $templateCode
     *
     * @return $this
     */
    public function setTemplateCode($templateCode)
    {
        return $this->withTemplateCode($templateCode);
    }

    /**
     * @param string $templateCode
     *
     * @return $this
     */
    public function withTemplateCode($templateCode)
    {
        $this->data['TemplateCode'] = $templateCode;
        $this->options['query']['TemplateCode'] = $templateCode;

        return $this;
    }
}
