<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryPictureFiles
 *
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
     * @deprecated deprecated since version 2.0, Use withIotId() instead.
     *
     * @param string $iotId
     *
     * @return $this
     */
    public function setIotId($iotId)
    {
        return $this->withIotId($iotId);
    }

    /**
     * @param string $iotId
     *
     * @return $this
     */
    public function withIotId($iotId)
    {
        $this->data['IotId'] = $iotId;
        $this->options['query']['IotId'] = $iotId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withBeginTime() instead.
     *
     * @param string $beginTime
     *
     * @return $this
     */
    public function setBeginTime($beginTime)
    {
        return $this->withBeginTime($beginTime);
    }

    /**
     * @param string $beginTime
     *
     * @return $this
     */
    public function withBeginTime($beginTime)
    {
        $this->data['BeginTime'] = $beginTime;
        $this->options['query']['BeginTime'] = $beginTime;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withEndTime() instead.
     *
     * @param string $endTime
     *
     * @return $this
     */
    public function setEndTime($endTime)
    {
        return $this->withEndTime($endTime);
    }

    /**
     * @param string $endTime
     *
     * @return $this
     */
    public function withEndTime($endTime)
    {
        $this->data['EndTime'] = $endTime;
        $this->options['query']['EndTime'] = $endTime;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withCurrentPage() instead.
     *
     * @param string $currentPage
     *
     * @return $this
     */
    public function setCurrentPage($currentPage)
    {
        return $this->withCurrentPage($currentPage);
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
     * @deprecated deprecated since version 2.0, Use withPictureType() instead.
     *
     * @param string $pictureType
     *
     * @return $this
     */
    public function setPictureType($pictureType)
    {
        return $this->withPictureType($pictureType);
    }

    /**
     * @param string $pictureType
     *
     * @return $this
     */
    public function withPictureType($pictureType)
    {
        $this->data['PictureType'] = $pictureType;
        $this->options['query']['PictureType'] = $pictureType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPictureSource() instead.
     *
     * @param string $pictureSource
     *
     * @return $this
     */
    public function setPictureSource($pictureSource)
    {
        return $this->withPictureSource($pictureSource);
    }

    /**
     * @param string $pictureSource
     *
     * @return $this
     */
    public function withPictureSource($pictureSource)
    {
        $this->data['PictureSource'] = $pictureSource;
        $this->options['query']['PictureSource'] = $pictureSource;

        return $this;
    }
}
