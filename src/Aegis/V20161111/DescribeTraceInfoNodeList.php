<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeTraceInfoNodeList
 *
 * @method string getSourceIp()
 * @method string getVertexId()
 * @method string getStartType()
 * @method string getPageSize()
 * @method string getFrom()
 * @method string getPage()
 * @method string getLang()
 * @method string getType()
 */
class DescribeTraceInfoNodeList extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'aegis';

    /**
     * @var string
     */
    public $version = '2016-11-11';

    /**
     * @var string
     */
    public $action = 'DescribeTraceInfoNodeList';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'vipaegis';

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
     * @param string $vertexId
     *
     * @return $this
     */
    public function withVertexId($vertexId)
    {
        $this->data['VertexId'] = $vertexId;
        $this->options['query']['VertexId'] = $vertexId;

        return $this;
    }

    /**
     * @param string $startType
     *
     * @return $this
     */
    public function withStartType($startType)
    {
        $this->data['StartType'] = $startType;
        $this->options['query']['StartType'] = $startType;

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
     * @param string $from
     *
     * @return $this
     */
    public function withFrom($from)
    {
        $this->data['From'] = $from;
        $this->options['query']['From'] = $from;

        return $this;
    }

    /**
     * @param string $page
     *
     * @return $this
     */
    public function withPage($page)
    {
        $this->data['Page'] = $page;
        $this->options['query']['Page'] = $page;

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
     * @param string $type
     *
     * @return $this
     */
    public function withType($type)
    {
        $this->data['Type'] = $type;
        $this->options['query']['Type'] = $type;

        return $this;
    }
}
