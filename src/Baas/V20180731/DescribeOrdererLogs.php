<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Rpc;

/**
 * Api DescribeOrdererLogs
 *
 * @method string getLines()
 * @method string getConsortiumId()
 * @method string getOrdererName()
 */
class DescribeOrdererLogs extends Rpc
{
    public $product = 'Baas';

    public $version = '2018-07-31';

    public $method = 'PUT';

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
