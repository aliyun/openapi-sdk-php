<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateChannelMember
 *
 * @method array getOrganization()
 * @method string getChannelId()
 */
class CreateChannelMember extends RpcRequest
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
    public $action = 'CreateChannelMember';

    /**
     * @var string
     */
    public $method = 'PUT';

    /**
     * @deprecated deprecated since version 2.0, Use getOrganization() instead.
     *
     * @return array
     */
    public function getOrganizations()
    {
        return $this->getOrganization();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOrganization() instead.
     *
     * @param array $organizations
     *
     * @return $this
     */
    public function setOrganizations(array $organizations)
    {
        return $this->withOrganization($organizations);
    }

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
     * @deprecated deprecated since version 2.0, Use withChannelId() instead.
     *
     * @param string $channelId
     *
     * @return $this
     */
    public function setChannelId($channelId)
    {
        return $this->withChannelId($channelId);
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
