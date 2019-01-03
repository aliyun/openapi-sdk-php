<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateChaincode
 *
 * @method string getOrganizationId()
 * @method string getOssBucket()
 * @method string getOssUrl()
 * @method string getEndorsePolicy()
 * @method string getLocation()
 * @method string getChannelId()
 * @method string getConsortiumId()
 */
class CreateChaincode extends RpcRequest
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
    public $action = 'CreateChaincode';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withOrganizationId() instead.
     *
     * @param string $organizationId
     *
     * @return $this
     */
    public function setOrganizationId($organizationId)
    {
        return $this->withOrganizationId($organizationId);
    }

    /**
     * @param string $organizationId
     *
     * @return $this
     */
    public function withOrganizationId($organizationId)
    {
        $this->data['OrganizationId'] = $organizationId;
        $this->options['query']['OrganizationId'] = $organizationId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOssBucket() instead.
     *
     * @param string $ossBucket
     *
     * @return $this
     */
    public function setOssBucket($ossBucket)
    {
        return $this->withOssBucket($ossBucket);
    }

    /**
     * @param string $ossBucket
     *
     * @return $this
     */
    public function withOssBucket($ossBucket)
    {
        $this->data['OssBucket'] = $ossBucket;
        $this->options['query']['OssBucket'] = $ossBucket;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOssUrl() instead.
     *
     * @param string $ossUrl
     *
     * @return $this
     */
    public function setOssUrl($ossUrl)
    {
        return $this->withOssUrl($ossUrl);
    }

    /**
     * @param string $ossUrl
     *
     * @return $this
     */
    public function withOssUrl($ossUrl)
    {
        $this->data['OssUrl'] = $ossUrl;
        $this->options['query']['OssUrl'] = $ossUrl;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withEndorsePolicy() instead.
     *
     * @param string $endorsePolicy
     *
     * @return $this
     */
    public function setEndorsePolicy($endorsePolicy)
    {
        return $this->withEndorsePolicy($endorsePolicy);
    }

    /**
     * @param string $endorsePolicy
     *
     * @return $this
     */
    public function withEndorsePolicy($endorsePolicy)
    {
        $this->data['EndorsePolicy'] = $endorsePolicy;
        $this->options['query']['EndorsePolicy'] = $endorsePolicy;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withLocation() instead.
     *
     * @param string $location
     *
     * @return $this
     */
    public function setLocation($location)
    {
        return $this->withLocation($location);
    }

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
}
