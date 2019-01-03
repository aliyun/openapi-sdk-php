<?php

namespace AlibabaCloud\Vod\V20170321;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of GetPlayInfo
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
class GetPlayInfo extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'vod';

    /**
     * @var string
     */
    public $version = '2017-03-21';

    /**
     * @var string
     */
    public $action = 'GetPlayInfo';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'vod';

    /**
     * @deprecated deprecated since version 2.0, Use withResourceOwnerId() instead.
     *
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        return $this->withResourceOwnerId($resourceOwnerId);
    }

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
     * @deprecated deprecated since version 2.0, Use withStreamType() instead.
     *
     * @param string $streamType
     *
     * @return $this
     */
    public function setStreamType($streamType)
    {
        return $this->withStreamType($streamType);
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
     * @deprecated deprecated since version 2.0, Use withFormats() instead.
     *
     * @param string $formats
     *
     * @return $this
     */
    public function setFormats($formats)
    {
        return $this->withFormats($formats);
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
     * @deprecated deprecated since version 2.0, Use withResourceOwnerAccount() instead.
     *
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        return $this->withResourceOwnerAccount($resourceOwnerAccount);
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
     * @deprecated deprecated since version 2.0, Use withChannel() instead.
     *
     * @param string $channel
     *
     * @return $this
     */
    public function setChannel($channel)
    {
        return $this->withChannel($channel);
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
     * @deprecated deprecated since version 2.0, Use withVideoId() instead.
     *
     * @param string $videoId
     *
     * @return $this
     */
    public function setVideoId($videoId)
    {
        return $this->withVideoId($videoId);
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
     * @deprecated deprecated since version 2.0, Use withPlayerVersion() instead.
     *
     * @param string $playerVersion
     *
     * @return $this
     */
    public function setPlayerVersion($playerVersion)
    {
        return $this->withPlayerVersion($playerVersion);
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
     * @deprecated deprecated since version 2.0, Use withOwnerId() instead.
     *
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        return $this->withOwnerId($ownerId);
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
     * @deprecated deprecated since version 2.0, Use withResultType() instead.
     *
     * @param string $resultType
     *
     * @return $this
     */
    public function setResultType($resultType)
    {
        return $this->withResultType($resultType);
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
     * @deprecated deprecated since version 2.0, Use withRand() instead.
     *
     * @param string $rand
     *
     * @return $this
     */
    public function setRand($rand)
    {
        return $this->withRand($rand);
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
     * @deprecated deprecated since version 2.0, Use withReAuthInfo() instead.
     *
     * @param string $reAuthInfo
     *
     * @return $this
     */
    public function setReAuthInfo($reAuthInfo)
    {
        return $this->withReAuthInfo($reAuthInfo);
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
     * @deprecated deprecated since version 2.0, Use withPlayConfig() instead.
     *
     * @param string $playConfig
     *
     * @return $this
     */
    public function setPlayConfig($playConfig)
    {
        return $this->withPlayConfig($playConfig);
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
     * @deprecated deprecated since version 2.0, Use withOutputType() instead.
     *
     * @param string $outputType
     *
     * @return $this
     */
    public function setOutputType($outputType)
    {
        return $this->withOutputType($outputType);
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
     * @deprecated deprecated since version 2.0, Use withDefinition() instead.
     *
     * @param string $definition
     *
     * @return $this
     */
    public function setDefinition($definition)
    {
        return $this->withDefinition($definition);
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
     * @deprecated deprecated since version 2.0, Use withAuthTimeout() instead.
     *
     * @param string $authTimeout
     *
     * @return $this
     */
    public function setAuthTimeout($authTimeout)
    {
        return $this->withAuthTimeout($authTimeout);
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
     * @deprecated deprecated since version 2.0, Use withAuthInfo() instead.
     *
     * @param string $authInfo
     *
     * @return $this
     */
    public function setAuthInfo($authInfo)
    {
        return $this->withAuthInfo($authInfo);
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
