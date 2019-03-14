<?php

namespace AlibabaCloud\Vod\V20170321;

use AlibabaCloud\Rpc;

/**
 * Api GetPlayInfo
 *
 * @method string getResourceOwnerId()
 * @method string getStreamType()
 * @method string getFormats()
 * @method string getResourceOwnerAccount()
 * @method string getChannel()
 * @method string getVideoId()
 * @method string getPlayerVersion()
 * @method string getOwnerId()
 * @method string getResultType()
 * @method string getRand()
 * @method string getReAuthInfo()
 * @method string getPlayConfig()
 * @method string getOutputType()
 * @method string getDefinition()
 * @method string getAuthTimeout()
 * @method string getAuthInfo()
 */
class GetPlayInfo extends Rpc
{
    public $product = 'vod';

    public $version = '2017-03-21';

    public $method = 'POST';

    public $serviceCode = 'vod';

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function withResourceOwnerId($resourceOwnerId)
    {
        $this->data['ResourceOwnerId'] = $resourceOwnerId;
        $this->options['query']['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param string $streamType
     *
     * @return $this
     */
    public function withStreamType($streamType)
    {
        $this->data['StreamType'] = $streamType;
        $this->options['query']['StreamType'] = $streamType;

        return $this;
    }

    /**
     * @param string $formats
     *
     * @return $this
     */
    public function withFormats($formats)
    {
        $this->data['Formats'] = $formats;
        $this->options['query']['Formats'] = $formats;

        return $this;
    }

    /**
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function withResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->data['ResourceOwnerAccount'] = $resourceOwnerAccount;
        $this->options['query']['ResourceOwnerAccount'] = $resourceOwnerAccount;

        return $this;
    }

    /**
     * @param string $channel
     *
     * @return $this
     */
    public function withChannel($channel)
    {
        $this->data['Channel'] = $channel;
        $this->options['query']['Channel'] = $channel;

        return $this;
    }

    /**
     * @param string $videoId
     *
     * @return $this
     */
    public function withVideoId($videoId)
    {
        $this->data['VideoId'] = $videoId;
        $this->options['query']['VideoId'] = $videoId;

        return $this;
    }

    /**
     * @param string $playerVersion
     *
     * @return $this
     */
    public function withPlayerVersion($playerVersion)
    {
        $this->data['PlayerVersion'] = $playerVersion;
        $this->options['query']['PlayerVersion'] = $playerVersion;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function withOwnerId($ownerId)
    {
        $this->data['OwnerId'] = $ownerId;
        $this->options['query']['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $resultType
     *
     * @return $this
     */
    public function withResultType($resultType)
    {
        $this->data['ResultType'] = $resultType;
        $this->options['query']['ResultType'] = $resultType;

        return $this;
    }

    /**
     * @param string $rand
     *
     * @return $this
     */
    public function withRand($rand)
    {
        $this->data['Rand'] = $rand;
        $this->options['query']['Rand'] = $rand;

        return $this;
    }

    /**
     * @param string $reAuthInfo
     *
     * @return $this
     */
    public function withReAuthInfo($reAuthInfo)
    {
        $this->data['ReAuthInfo'] = $reAuthInfo;
        $this->options['query']['ReAuthInfo'] = $reAuthInfo;

        return $this;
    }

    /**
     * @param string $playConfig
     *
     * @return $this
     */
    public function withPlayConfig($playConfig)
    {
        $this->data['PlayConfig'] = $playConfig;
        $this->options['query']['PlayConfig'] = $playConfig;

        return $this;
    }

    /**
     * @param string $outputType
     *
     * @return $this
     */
    public function withOutputType($outputType)
    {
        $this->data['OutputType'] = $outputType;
        $this->options['query']['OutputType'] = $outputType;

        return $this;
    }

    /**
     * @param string $definition
     *
     * @return $this
     */
    public function withDefinition($definition)
    {
        $this->data['Definition'] = $definition;
        $this->options['query']['Definition'] = $definition;

        return $this;
    }

    /**
     * @param string $authTimeout
     *
     * @return $this
     */
    public function withAuthTimeout($authTimeout)
    {
        $this->data['AuthTimeout'] = $authTimeout;
        $this->options['query']['AuthTimeout'] = $authTimeout;

        return $this;
    }

    /**
     * @param string $authInfo
     *
     * @return $this
     */
    public function withAuthInfo($authInfo)
    {
        $this->data['AuthInfo'] = $authInfo;
        $this->options['query']['AuthInfo'] = $authInfo;

        return $this;
    }
}
