<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DeleteTopicRouteTable
 *
 * @method array getDstTopic()
 * @method string getSrcTopic()
 */
class DeleteTopicRouteTable extends RpcRequest
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
    public $action = 'DeleteTopicRouteTable';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use getDstTopic() instead.
     *
     * @return array
     */
    public function getDstTopics()
    {
        return $this->getDstTopic();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDstTopic() instead.
     *
     * @param array $dstTopics
     *
     * @return $this
     */
    public function setDstTopics(array $dstTopics)
    {
        return $this->withDstTopic($dstTopics);
    }

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
     * @deprecated deprecated since version 2.0, Use withSrcTopic() instead.
     *
     * @param string $srcTopic
     *
     * @return $this
     */
    public function setSrcTopic($srcTopic)
    {
        return $this->withSrcTopic($srcTopic);
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
