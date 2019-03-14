<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Rpc;

/**
 * Api CreateTopicRouteTable
 *
 * @method array getDstTopic()
 * @method string getIotInstanceId()
 * @method string getSrcTopic()
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

    /**
     * @param string $iotInstanceId
     *
     * @return $this
     */
    public function withIotInstanceId($iotInstanceId)
    {
        $this->data['IotInstanceId'] = $iotInstanceId;
        $this->options['query']['IotInstanceId'] = $iotInstanceId;

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
