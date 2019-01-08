<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateTopicRouteTable
 *
 * @method array getDstTopic()
 * @method string getSrcTopic()
 */
class CreateTopicRouteTable extends RpcRequest
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
    public $action = 'CreateTopicRouteTable';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param array $dstTopic
     *
     * @return $this
     */
    public function withDstTopic(array $dstTopic)
    {
        $this->data['DstTopic'] = $dstTopic;
        foreach ($dstTopic as $i => $iValue) {
            $this->options['query']['DstTopic.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $srcTopic
     *
     * @return $this
     */
    public function withSrcTopic($srcTopic)
    {
        $this->data['SrcTopic'] = $srcTopic;
        $this->options['query']['SrcTopic'] = $srcTopic;

        return $this;
    }
}
