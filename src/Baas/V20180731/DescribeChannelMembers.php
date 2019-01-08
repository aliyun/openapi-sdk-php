<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeChannelMembers
 *
 * @method string getChannelId()
 */
class DescribeChannelMembers extends RpcRequest
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
    public $action = 'DescribeChannelMembers';

    /**
     * @var string
     */
    public $method = 'PUT';

    /**
     * @param string $channelId
     *
     * @return $this
     */
    public function withChannelId($channelId)
    {
        $this->data['ChannelId'] = $channelId;
        $this->options['query']['ChannelId'] = $channelId;

        return $this;
    }
}
