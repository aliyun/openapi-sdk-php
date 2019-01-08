<?php

namespace AlibabaCloud\Cloudauth\V20180916;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeDeviceInfo
 *
 * @method string getBizType()
 * @method string getUserDeviceId()
 * @method string getTotalCount()
 * @method string getSourceIp()
 * @method string getPageSize()
 * @method string getCurrentPage()
 * @method string getLang()
 * @method string getExpiredEndDay()
 * @method string getDeviceId()
 * @method string getExpiredStartDay()
 */
class DescribeDeviceInfo extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Cloudauth';

    /**
     * @var string
     */
    public $version = '2018-09-16';

    /**
     * @var string
     */
    public $action = 'DescribeDeviceInfo';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'cloudauth';

    /**
     * @param string $bizType
     *
     * @return $this
     */
    public function withBizType($bizType)
    {
        $this->data['BizType'] = $bizType;
        $this->options['query']['BizType'] = $bizType;

        return $this;
    }

    /**
     * @param string $userDeviceId
     *
     * @return $this
     */
    public function withUserDeviceId($userDeviceId)
    {
        $this->data['UserDeviceId'] = $userDeviceId;
        $this->options['query']['UserDeviceId'] = $userDeviceId;

        return $this;
    }

    /**
     * @param string $totalCount
     *
     * @return $this
     */
    public function withTotalCount($totalCount)
    {
        $this->data['TotalCount'] = $totalCount;
        $this->options['query']['TotalCount'] = $totalCount;

        return $this;
    }

    /**
     * @param string $sourceIp
     *
     * @return $this
     */
    public function withSourceIp($sourceIp)
    {
        $this->data['SourceIp'] = $sourceIp;
        $this->options['query']['SourceIp'] = $sourceIp;

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
     * @param string $currentPage
     *
     * @return $this
     */
    public function withCurrentPage($currentPage)
    {
        $this->data['CurrentPage'] = $currentPage;
        $this->options['query']['CurrentPage'] = $currentPage;

        return $this;
    }

    /**
     * @param string $lang
     *
     * @return $this
     */
    public function withLang($lang)
    {
        $this->data['Lang'] = $lang;
        $this->options['query']['Lang'] = $lang;

        return $this;
    }

    /**
     * @param string $expiredEndDay
     *
     * @return $this
     */
    public function withExpiredEndDay($expiredEndDay)
    {
        $this->data['ExpiredEndDay'] = $expiredEndDay;
        $this->options['query']['ExpiredEndDay'] = $expiredEndDay;

        return $this;
    }

    /**
     * @param string $deviceId
     *
     * @return $this
     */
    public function withDeviceId($deviceId)
    {
        $this->data['DeviceId'] = $deviceId;
        $this->options['query']['DeviceId'] = $deviceId;

        return $this;
    }

    /**
     * @param string $expiredStartDay
     *
     * @return $this
     */
    public function withExpiredStartDay($expiredStartDay)
    {
        $this->data['ExpiredStartDay'] = $expiredStartDay;
        $this->options['query']['ExpiredStartDay'] = $expiredStartDay;

        return $this;
    }
}
