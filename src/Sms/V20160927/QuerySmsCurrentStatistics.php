<?php

namespace AlibabaCloud\Sms\V20160927;

use AlibabaCloud\Rpc;

/**
 * Api QuerySmsCurrentStatistics
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
class QuerySmsCurrentStatistics extends Rpc
{
    public $product = 'Sms';

    public $version = '2016-09-27';

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
