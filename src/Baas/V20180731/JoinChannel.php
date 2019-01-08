<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of JoinChannel
 *
 * @method string getLocation()
 * @method string getDo()
 * @method string getChannelId()
 */
class JoinChannel extends RpcRequest
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
    public $action = 'JoinChannel';

    /**
     * @var string
     */
    public $method = 'PUT';

    /**
     * @param string $location
     *
     * @return $this
     */
    public function withLocation($location)
    {
        $this->data['Location'] = $location;
        $this->options['query']['Location'] = $location;

        return $this;
    }

    /**
     * @param string $do
     *
     * @return $this
     */
    public function withDo($do)
    {
        $this->data['Do'] = $do;
        $this->options['query']['Do'] = $do;

        return $this;
    }

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
