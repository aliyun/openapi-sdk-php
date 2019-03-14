<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Rpc;

/**
 * Api AddLiveAppRecordConfig
 *
 * @method string getOssBucket()
 * @method string getAppName()
 * @method string getSecurityToken()
 * @method array getRecordFormat()
 * @method string getDomainName()
 * @method string getOssEndpoint()
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getOwnerId()
 * @method string getOnDemand()
 * @method string getStreamName()
 */
class AddLiveAppRecordConfig extends Rpc
{
    public $product = 'live';

    public $version = '2016-11-01';

    public $method = 'POST';

    public $serviceCode = 'live';

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
