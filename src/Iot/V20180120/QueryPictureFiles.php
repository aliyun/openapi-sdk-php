<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method string getIotId()
 * @method string getBeginTime()
 * @method string getEndTime()
 * @method string getCurrentPage()
 * @method string getPageSize()
 * @method string getPictureType()
 * @method string getPictureSource()
 */
class QueryPictureFiles extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Iot';

    /**
     * @var string
     */
    public $version = '2018-01-20';

    /**
     * @var string
     */
    public $action = 'QueryPictureFiles';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $iotId
     *
     * @return $this
     */
    public function withIotId($iotId)
    {
        $this->data['IotId']             = $iotId;
        $this->options['query']['IotId'] = $iotId;

        return $this;
    }

    /**
     * @param string $beginTime
     *
     * @return $this
     */
    public function withBeginTime($beginTime)
    {
        $this->data['BeginTime']             = $beginTime;
        $this->options['query']['BeginTime'] = $beginTime;

        return $this;
    }

    /**
     * @param string $endTime
     *
     * @return $this
     */
    public function withEndTime($endTime)
    {
        $this->data['EndTime']             = $endTime;
        $this->options['query']['EndTime'] = $endTime;

        return $this;
    }

    /**
     * @param string $currentPage
     *
     * @return $this
     */
    public function withCurrentPage($currentPage)
    {
        $this->data['CurrentPage']             = $currentPage;
        $this->options['query']['CurrentPage'] = $currentPage;

        return $this;
    }

    /**
     * @param string $pageSize
     *
     * @return $this
     */
    public function withPageSize($pageSize)
    {
        $this->data['PageSize']             = $pageSize;
        $this->options['query']['PageSize'] = $pageSize;

        return $this;
    }

    /**
     * @param string $pictureType
     *
     * @return $this
     */
    public function withPictureType($pictureType)
    {
        $this->data['PictureType']             = $pictureType;
        $this->options['query']['PictureType'] = $pictureType;

        return $this;
    }

    /**
     * @param string $pictureSource
     *
     * @return $this
     */
    public function withPictureSource($pictureSource)
    {
        $this->data['PictureSource']             = $pictureSource;
        $this->options['query']['PictureSource'] = $pictureSource;

        return $this;
    }
}
