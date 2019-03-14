<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Rpc;

/**
 * Api UpdateLiveAppSnapshotConfig
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
class UpdateLiveAppSnapshotConfig extends Rpc
{
    public $product = 'live';

    public $version = '2016-11-01';

    public $method = 'POST';

    public $serviceCode = 'live';

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
