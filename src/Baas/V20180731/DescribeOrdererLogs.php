<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeOrdererLogs
 *
 * @method string getLines()
 * @method string getConsortiumId()
 * @method string getOrdererName()
 */
class DescribeOrdererLogs extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Baas';

    /**
     * @var string
     */
    public $version = '2018-07-31';

    /**
     * @var string
     */
    public $action = 'DescribeOrdererLogs';

    /**
     * @var string
     */
    public $method = 'PUT';

    /**
     * @deprecated deprecated since version 2.0, Use withLines() instead.
     *
     * @param string $lines
     *
     * @return $this
     */
    public function setLines($lines)
    {
        return $this->withLines($lines);
    }

    /**
     * @param string $lines
     *
     * @return $this
     */
    public function withLines($lines)
    {
        $this->data['Lines'] = $lines;
        $this->options['query']['Lines'] = $lines;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withConsortiumId() instead.
     *
     * @param string $consortiumId
     *
     * @return $this
     */
    public function setConsortiumId($consortiumId)
    {
        return $this->withConsortiumId($consortiumId);
    }

    /**
     * @param string $consortiumId
     *
     * @return $this
     */
    public function withConsortiumId($consortiumId)
    {
        $this->data['ConsortiumId'] = $consortiumId;
        $this->options['query']['ConsortiumId'] = $consortiumId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOrdererName() instead.
     *
     * @param string $ordererName
     *
     * @return $this
     */
    public function setOrdererName($ordererName)
    {
        return $this->withOrdererName($ordererName);
    }

    /**
     * @param string $ordererName
     *
     * @return $this
     */
    public function withOrdererName($ordererName)
    {
        $this->data['OrdererName'] = $ordererName;
        $this->options['query']['OrdererName'] = $ordererName;

        return $this;
    }
}
