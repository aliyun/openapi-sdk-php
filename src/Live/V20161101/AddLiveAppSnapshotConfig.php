<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of AddLiveAppSnapshotConfig
 *
 * @method string getTimeInterval()
 * @method string getOssBucket()
 * @method string getAppName()
 * @method string getSecurityToken()
 * @method string getDomainName()
 * @method string getOssEndpoint()
 * @method string getSequenceOssObject()
 * @method string getOverwriteOssObject()
 * @method string getOwnerId()
 */
class AddLiveAppSnapshotConfig extends RpcRequest
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
    public $action = 'AddLiveAppSnapshotConfig';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'live';

    /**
     * @deprecated deprecated since version 2.0, Use withTimeInterval() instead.
     *
     * @param string $timeInterval
     *
     * @return $this
     */
    public function setTimeInterval($timeInterval)
    {
        return $this->withTimeInterval($timeInterval);
    }

    /**
     * @param string $timeInterval
     *
     * @return $this
     */
    public function withTimeInterval($timeInterval)
    {
        $this->data['TimeInterval'] = $timeInterval;
        $this->options['query']['TimeInterval'] = $timeInterval;

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
     * @deprecated deprecated since version 2.0, Use withSecurityToken() instead.
     *
     * @param string $securityToken
     *
     * @return $this
     */
    public function setSecurityToken($securityToken)
    {
        return $this->withSecurityToken($securityToken);
    }

    /**
     * @param string $securityToken
     *
     * @return $this
     */
    public function withSecurityToken($securityToken)
    {
        $this->data['SecurityToken'] = $securityToken;
        $this->options['query']['SecurityToken'] = $securityToken;

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
     * @deprecated deprecated since version 2.0, Use withSequenceOssObject() instead.
     *
     * @param string $sequenceOssObject
     *
     * @return $this
     */
    public function setSequenceOssObject($sequenceOssObject)
    {
        return $this->withSequenceOssObject($sequenceOssObject);
    }

    /**
     * @param string $sequenceOssObject
     *
     * @return $this
     */
    public function withSequenceOssObject($sequenceOssObject)
    {
        $this->data['SequenceOssObject'] = $sequenceOssObject;
        $this->options['query']['SequenceOssObject'] = $sequenceOssObject;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOverwriteOssObject() instead.
     *
     * @param string $overwriteOssObject
     *
     * @return $this
     */
    public function setOverwriteOssObject($overwriteOssObject)
    {
        return $this->withOverwriteOssObject($overwriteOssObject);
    }

    /**
     * @param string $overwriteOssObject
     *
     * @return $this
     */
    public function withOverwriteOssObject($overwriteOssObject)
    {
        $this->data['OverwriteOssObject'] = $overwriteOssObject;
        $this->options['query']['OverwriteOssObject'] = $overwriteOssObject;

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
}
