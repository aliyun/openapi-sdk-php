<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Rpc;

/**
 * @method array getDstTopic()
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getSrcTopic()
 * @method $this withSrcTopic($value)
 */
class CreateTopicRouteTable extends Rpc
{
    public $product = 'Iot';

    public $version = '2018-01-20';

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
}
