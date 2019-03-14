<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Rpc;

/**
 * Api CreateChaincode
 *
 * @method string getOrganizationId()
 * @method string getOssBucket()
 * @method string getOssUrl()
 * @method string getEndorsePolicy()
 * @method string getLocation()
 * @method string getChannelId()
 * @method string getConsortiumId()
 */
class CreateChaincode extends Rpc
{
    public $product = 'Baas';

    public $version = '2018-07-31';

    public $method = 'POST';

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
