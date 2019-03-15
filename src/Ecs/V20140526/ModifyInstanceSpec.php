<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAllowMigrateAcrossZone()
 * @method $this withAllowMigrateAcrossZone($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getInternetMaxBandwidthOut()
 * @method $this withInternetMaxBandwidthOut($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTemporaryInternetMaxBandwidthOut()
 * @method string getSystemDiskCategory()
 * @method string getTemporaryStartTime()
 * @method string getAsync()
 * @method $this withAsync($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getTemporaryEndTime()
 * @method string getInternetMaxBandwidthIn()
 * @method $this withInternetMaxBandwidthIn($value)
 */
class ModifyInstanceSpec extends Rpc
{
    public $product = 'Ecs';

    public $version = '2014-05-26';

    public $method = 'POST';

    public $serviceCode = 'ecs';

    /**
     * @param string $temporaryInternetMaxBandwidthOut
     *
     * @return $this
     */
    public function withTemporaryInternetMaxBandwidthOut($temporaryInternetMaxBandwidthOut)
    {
        $this->data['TemporaryInternetMaxBandwidthOut'] = $temporaryInternetMaxBandwidthOut;
        $this->options['query']['Temporary.InternetMaxBandwidthOut'] = $temporaryInternetMaxBandwidthOut;

        return $this;
    }

    /**
     * @param string $systemDiskCategory
     *
     * @return $this
     */
    public function withSystemDiskCategory($systemDiskCategory)
    {
        $this->data['SystemDiskCategory'] = $systemDiskCategory;
        $this->options['query']['SystemDisk.Category'] = $systemDiskCategory;

        return $this;
    }

    /**
     * @param string $temporaryStartTime
     *
     * @return $this
     */
    public function withTemporaryStartTime($temporaryStartTime)
    {
        $this->data['TemporaryStartTime'] = $temporaryStartTime;
        $this->options['query']['Temporary.StartTime'] = $temporaryStartTime;

        return $this;
    }

    /**
     * @param string $temporaryEndTime
     *
     * @return $this
     */
    public function withTemporaryEndTime($temporaryEndTime)
    {
        $this->data['TemporaryEndTime'] = $temporaryEndTime;
        $this->options['query']['Temporary.EndTime'] = $temporaryEndTime;

        return $this;
    }
}
