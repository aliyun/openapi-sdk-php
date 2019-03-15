<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Rpc;

/**
 * @method string getOssBucket()
 * @method $this withOssBucket($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method array getRecordFormat()
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOssEndpoint()
 * @method $this withOssEndpoint($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOnDemand()
 * @method $this withOnDemand($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 */
class AddLiveAppRecordConfig extends Rpc
{
    public $product = 'live';

    public $version = '2016-11-01';

    public $method = 'POST';

    public $serviceCode = 'live';

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
}
