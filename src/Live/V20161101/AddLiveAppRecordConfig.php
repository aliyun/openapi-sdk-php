<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of AddLiveAppRecordConfig
 *
 * @method string getOssBucket()
 * @method string getDomainName()
 * @method string getOssEndpoint()
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getOwnerId()
 * @method string getAppName()
 * @method string getSecurityToken()
 * @method array getRecordFormat()
 * @method string getOnDemand()
 * @method string getStreamName()
 */
class AddLiveAppRecordConfig extends RpcRequest
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
    public $action = 'AddLiveAppRecordConfig';

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
     * @deprecated deprecated since version 2.0, Use withEndTime() instead.
     *
     * @param string $endTime
     *
     * @return $this
     */
    public function setEndTime($endTime)
    {
        return $this->withEndTime($endTime);
    }

    /**
     * @param string $endTime
     *
     * @return $this
     */
    public function withEndTime($endTime)
    {
        $this->data['EndTime'] = $endTime;
        $this->options['query']['EndTime'] = $endTime;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withStartTime() instead.
     *
     * @param string $startTime
     *
     * @return $this
     */
    public function setStartTime($startTime)
    {
        return $this->withStartTime($startTime);
    }

    /**
     * @param string $startTime
     *
     * @return $this
     */
    public function withStartTime($startTime)
    {
        $this->data['StartTime'] = $startTime;
        $this->options['query']['StartTime'] = $startTime;

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
     * @deprecated deprecated since version 2.0, Use getRecordFormat() instead.
     *
     * @return array
     */
    public function getRecordFormats()
    {
        return $this->getRecordFormat();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withRecordFormat() instead.
     *
     * @param array $recordFormats
     *
     * @return $this
     */
    public function setRecordFormats(array $recordFormats)
    {
        return $this->withRecordFormat($recordFormats);
    }

    /**
     * @param array $recordFormat
     *
     * @return $this
     */
    public function withRecordFormat(array $recordFormat)
    {
        $this->data['RecordFormat'] = $recordFormat;
        foreach ($recordFormat as $i => $iValue) {
            $this->options['query']['RecordFormat.' . ($i + 1) . '.SliceOssObjectPrefix'] = $recordFormat[$i]['SliceOssObjectPrefix'];
            $this->options['query']['RecordFormat.' . ($i + 1) . '.Format'] = $recordFormat[$i]['Format'];
            $this->options['query']['RecordFormat.' . ($i + 1) . '.OssObjectPrefix'] = $recordFormat[$i]['OssObjectPrefix'];
            $this->options['query']['RecordFormat.' . ($i + 1) . '.CycleDuration'] = $recordFormat[$i]['CycleDuration'];
        }

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOnDemand() instead.
     *
     * @param string $onDemand
     *
     * @return $this
     */
    public function setOnDemand($onDemand)
    {
        return $this->withOnDemand($onDemand);
    }

    /**
     * @param string $onDemand
     *
     * @return $this
     */
    public function withOnDemand($onDemand)
    {
        $this->data['OnDemand'] = $onDemand;
        $this->options['query']['OnDemand'] = $onDemand;

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
}
