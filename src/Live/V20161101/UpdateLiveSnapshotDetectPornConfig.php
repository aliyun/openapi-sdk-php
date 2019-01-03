<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of UpdateLiveSnapshotDetectPornConfig
 *
 * @method string getOssBucket()
 * @method string getAppName()
 * @method string getSecurityToken()
 * @method string getDomainName()
 * @method string getOssEndpoint()
 * @method string getInterval()
 * @method string getOwnerId()
 * @method string getOssObject()
 * @method array getScene()
 */
class UpdateLiveSnapshotDetectPornConfig extends RpcRequest
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
    public $action = 'UpdateLiveSnapshotDetectPornConfig';

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
     * @deprecated deprecated since version 2.0, Use withOssObject() instead.
     *
     * @param string $ossObject
     *
     * @return $this
     */
    public function setOssObject($ossObject)
    {
        return $this->withOssObject($ossObject);
    }

    /**
     * @param string $ossObject
     *
     * @return $this
     */
    public function withOssObject($ossObject)
    {
        $this->data['OssObject'] = $ossObject;
        $this->options['query']['OssObject'] = $ossObject;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use getScene() instead.
     *
     * @return array
     */
    public function getScenes()
    {
        return $this->getScene();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScene() instead.
     *
     * @param array $scenes
     *
     * @return $this
     */
    public function setScenes(array $scenes)
    {
        return $this->withScene($scenes);
    }

    /**
     * @param array $scene
     *
     * @return $this
     */
    public function withScene(array $scene)
    {
        $this->data['Scene'] = $scene;
        foreach ($scene as $i => $iValue) {
            $this->options['query']['Scene.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}
