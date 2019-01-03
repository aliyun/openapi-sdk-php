<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of StartLiveIndex
 *
 * @method string getOssBucket()
 * @method string getTokenId()
 * @method string getDomainName()
 * @method string getOssEndpoint()
 * @method string getInputUrl()
 * @method string getOwnerId()
 * @method string getAppName()
 * @method string getInterval()
 * @method string getOssRamRole()
 * @method string getStreamName()
 * @method string getOssUserId()
 */
class StartLiveIndex extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'live';

    /**
     * @var string
     */
    public $version = '2016-11-01';

    /**
     * @var string
     */
    public $action = 'StartLiveIndex';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'live';

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
     * @deprecated deprecated since version 2.0, Use withTokenId() instead.
     *
     * @param string $tokenId
     *
     * @return $this
     */
    public function setTokenId($tokenId)
    {
        return $this->withTokenId($tokenId);
    }

    /**
     * @param string $tokenId
     *
     * @return $this
     */
    public function withTokenId($tokenId)
    {
        $this->data['TokenId'] = $tokenId;
        $this->options['query']['TokenId'] = $tokenId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDomainName() instead.
     *
     * @param string $domainName
     *
     * @return $this
     */
    public function setDomainName($domainName)
    {
        return $this->withDomainName($domainName);
    }

    /**
     * @param string $domainName
     *
     * @return $this
     */
    public function withDomainName($domainName)
    {
        $this->data['DomainName'] = $domainName;
        $this->options['query']['DomainName'] = $domainName;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOssEndpoint() instead.
     *
     * @param string $ossEndpoint
     *
     * @return $this
     */
    public function setOssEndpoint($ossEndpoint)
    {
        return $this->withOssEndpoint($ossEndpoint);
    }

    /**
     * @param string $ossEndpoint
     *
     * @return $this
     */
    public function withOssEndpoint($ossEndpoint)
    {
        $this->data['OssEndpoint'] = $ossEndpoint;
        $this->options['query']['OssEndpoint'] = $ossEndpoint;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withInputUrl() instead.
     *
     * @param string $inputUrl
     *
     * @return $this
     */
    public function setInputUrl($inputUrl)
    {
        return $this->withInputUrl($inputUrl);
    }

    /**
     * @param string $inputUrl
     *
     * @return $this
     */
    public function withInputUrl($inputUrl)
    {
        $this->data['InputUrl'] = $inputUrl;
        $this->options['query']['InputUrl'] = $inputUrl;

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
     * @deprecated deprecated since version 2.0, Use withAppName() instead.
     *
     * @param string $appName
     *
     * @return $this
     */
    public function setAppName($appName)
    {
        return $this->withAppName($appName);
    }

    /**
     * @param string $appName
     *
     * @return $this
     */
    public function withAppName($appName)
    {
        $this->data['AppName'] = $appName;
        $this->options['query']['AppName'] = $appName;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withInterval() instead.
     *
     * @param string $interval
     *
     * @return $this
     */
    public function setInterval($interval)
    {
        return $this->withInterval($interval);
    }

    /**
     * @param string $interval
     *
     * @return $this
     */
    public function withInterval($interval)
    {
        $this->data['Interval'] = $interval;
        $this->options['query']['Interval'] = $interval;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOssRamRole() instead.
     *
     * @param string $ossRamRole
     *
     * @return $this
     */
    public function setOssRamRole($ossRamRole)
    {
        return $this->withOssRamRole($ossRamRole);
    }

    /**
     * @param string $ossRamRole
     *
     * @return $this
     */
    public function withOssRamRole($ossRamRole)
    {
        $this->data['OssRamRole'] = $ossRamRole;
        $this->options['query']['OssRamRole'] = $ossRamRole;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withStreamName() instead.
     *
     * @param string $streamName
     *
     * @return $this
     */
    public function setStreamName($streamName)
    {
        return $this->withStreamName($streamName);
    }

    /**
     * @param string $streamName
     *
     * @return $this
     */
    public function withStreamName($streamName)
    {
        $this->data['StreamName'] = $streamName;
        $this->options['query']['StreamName'] = $streamName;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOssUserId() instead.
     *
     * @param string $ossUserId
     *
     * @return $this
     */
    public function setOssUserId($ossUserId)
    {
        return $this->withOssUserId($ossUserId);
    }

    /**
     * @param string $ossUserId
     *
     * @return $this
     */
    public function withOssUserId($ossUserId)
    {
        $this->data['OssUserId'] = $ossUserId;
        $this->options['query']['OssUserId'] = $ossUserId;

        return $this;
    }
}
