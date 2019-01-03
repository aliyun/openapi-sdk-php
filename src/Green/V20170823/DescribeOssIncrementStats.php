<?php

namespace AlibabaCloud\Green\V20170823;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeOssIncrementStats
 *
 * @method string getEndDate()
 * @method string getSourceIp()
 * @method string getLang()
 * @method string getStartDate()
 * @method string getResourceType()
 * @method string getScene()
 */
class DescribeOssIncrementStats extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Green';

    /**
     * @var string
     */
    public $version = '2017-08-23';

    /**
     * @var string
     */
    public $action = 'DescribeOssIncrementStats';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'green';

    /**
     * @deprecated deprecated since version 2.0, Use withEndDate() instead.
     *
     * @param string $endDate
     *
     * @return $this
     */
    public function setEndDate($endDate)
    {
        return $this->withEndDate($endDate);
    }

    /**
     * @param string $endDate
     *
     * @return $this
     */
    public function withEndDate($endDate)
    {
        $this->data['EndDate'] = $endDate;
        $this->options['query']['EndDate'] = $endDate;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSourceIp() instead.
     *
     * @param string $sourceIp
     *
     * @return $this
     */
    public function setSourceIp($sourceIp)
    {
        return $this->withSourceIp($sourceIp);
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
     * @deprecated deprecated since version 2.0, Use withLang() instead.
     *
     * @param string $lang
     *
     * @return $this
     */
    public function setLang($lang)
    {
        return $this->withLang($lang);
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
     * @deprecated deprecated since version 2.0, Use withStartDate() instead.
     *
     * @param string $startDate
     *
     * @return $this
     */
    public function setStartDate($startDate)
    {
        return $this->withStartDate($startDate);
    }

    /**
     * @param string $startDate
     *
     * @return $this
     */
    public function withStartDate($startDate)
    {
        $this->data['StartDate'] = $startDate;
        $this->options['query']['StartDate'] = $startDate;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceType() instead.
     *
     * @param string $resourceType
     *
     * @return $this
     */
    public function setResourceType($resourceType)
    {
        return $this->withResourceType($resourceType);
    }

    /**
     * @param string $resourceType
     *
     * @return $this
     */
    public function withResourceType($resourceType)
    {
        $this->data['ResourceType'] = $resourceType;
        $this->options['query']['ResourceType'] = $resourceType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScene() instead.
     *
     * @param string $scene
     *
     * @return $this
     */
    public function setScene($scene)
    {
        return $this->withScene($scene);
    }

    /**
     * @param string $scene
     *
     * @return $this
     */
    public function withScene($scene)
    {
        $this->data['Scene'] = $scene;
        $this->options['query']['Scene'] = $scene;

        return $this;
    }
}
