<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateChannel
 *
 * @method array getOrganization()
 * @method string getChannelName()
 * @method string getConsortiumId()
 */
class CreateChannel extends RpcRequest
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
    public $action = 'CreateChannel';

    /**
     * @var string
     */
    public $method = 'PUT';

    /**
     * @param array $organization
     *
     * @return $this
     */
    public function withOrganization(array $organization)
    {
        $this->data['Organization'] = $organization;
        foreach ($organization as $i => $iValue) {
            $this->options['query']['Organization.' . ($i + 1) . '.Id'] = $organization[$i]['Id'];
        }

        return $this;
    }

    /**
     * @param string $channelName
     *
     * @return $this
     */
    public function withChannelName($channelName)
    {
        $this->data['ChannelName'] = $channelName;
        $this->options['query']['ChannelName'] = $channelName;

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
}
