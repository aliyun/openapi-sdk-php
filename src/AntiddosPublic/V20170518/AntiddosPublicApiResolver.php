<?php

namespace AlibabaCloud\AntiddosPublic\V20170518;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method DescribeBgpPackByIp describeBgpPackByIp(array $options = [])
 * @method DescribeCap describeCap(array $options = [])
 * @method DescribeDdosCount describeDdosCount(array $options = [])
 * @method DescribeDdosCredit describeDdosCredit(array $options = [])
 * @method DescribeDdosEventList describeDdosEventList(array $options = [])
 * @method DescribeDdosThreshold describeDdosThreshold(array $options = [])
 * @method DescribeInstance describeInstance(array $options = [])
 * @method DescribeInstanceIpAddress describeInstanceIpAddress(array $options = [])
 * @method DescribeIpDdosThreshold describeIpDdosThreshold(array $options = [])
 * @method DescribeIpLocationService describeIpLocationService(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method ModifyDdosStatus modifyDdosStatus(array $options = [])
 * @method ModifyDefenseThreshold modifyDefenseThreshold(array $options = [])
 * @method ModifyIpDefenseThreshold modifyIpDefenseThreshold(array $options = [])
 */
class AntiddosPublicApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'antiddos-public';

    /** @var string */
    public $version = '2017-05-18';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'ddosbasic';
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDdosRegionId()
 * @method $this withDdosRegionId($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getIp()
 * @method $this withIp($value)
 */
class DescribeBgpPackByIp extends Rpc
{
}

/**
 * @method string getInternetIp()
 * @method $this withInternetIp($value)
 * @method string getBegTime()
 * @method $this withBegTime($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDdosRegionId()
 * @method $this withDdosRegionId($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeCap extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDdosRegionId()
 * @method $this withDdosRegionId($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeDdosCount extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDdosRegionId()
 * @method $this withDdosRegionId($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeDdosCredit extends Rpc
{
}

/**
 * @method string getInternetIp()
 * @method $this withInternetIp($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDdosRegionId()
 * @method $this withDdosRegionId($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeDdosEventList extends Rpc
{
}

/**
 * @method string getDdosType()
 * @method $this withDdosType($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDdosRegionId()
 * @method $this withDdosRegionId($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method array getInstanceIds()
 */
class DescribeDdosThreshold extends Rpc
{

    /**
     * @param array $instanceIds
     *
     * @return $this
     */
	public function withInstanceIds(array $instanceIds)
	{
	    $this->data['InstanceIds'] = $instanceIds;
		foreach ($instanceIds as $i => $iValue) {
			$this->options['query']['InstanceIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getEagleEyeRpcId()
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getEagleEyeTraceId()
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDdosRegionId()
 * @method $this withDdosRegionId($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getDdosStatus()
 * @method $this withDdosStatus($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getEagleEyeUserData()
 * @method string getInstanceIp()
 * @method $this withInstanceIp($value)
 */
class DescribeInstance extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEagleEyeRpcId($value)
    {
        $this->data['EagleEyeRpcId'] = $value;
        $this->options['form_params']['eagleEyeRpcId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEagleEyeTraceId($value)
    {
        $this->data['EagleEyeTraceId'] = $value;
        $this->options['form_params']['eagleEyeTraceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEagleEyeUserData($value)
    {
        $this->data['EagleEyeUserData'] = $value;
        $this->options['form_params']['eagleEyeUserData'] = $value;

        return $this;
    }
}

/**
 * @method string getEagleEyeRpcId()
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getEagleEyeTraceId()
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDdosRegionId()
 * @method $this withDdosRegionId($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getDdosStatus()
 * @method $this withDdosStatus($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getEagleEyeUserData()
 * @method string getInstanceIp()
 * @method $this withInstanceIp($value)
 */
class DescribeInstanceIpAddress extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEagleEyeRpcId($value)
    {
        $this->data['EagleEyeRpcId'] = $value;
        $this->options['form_params']['EagleEyeRpcId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEagleEyeTraceId($value)
    {
        $this->data['EagleEyeTraceId'] = $value;
        $this->options['form_params']['EagleEyeTraceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEagleEyeUserData($value)
    {
        $this->data['EagleEyeUserData'] = $value;
        $this->options['form_params']['EagleEyeUserData'] = $value;

        return $this;
    }
}

/**
 * @method string getInternetIp()
 * @method $this withInternetIp($value)
 * @method string getDdosType()
 * @method $this withDdosType($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDdosRegionId()
 * @method $this withDdosRegionId($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeIpDdosThreshold extends Rpc
{
}

/**
 * @method string getInternetIp()
 * @method $this withInternetIp($value)
 * @method string getEagleEyeRpcId()
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getEagleEyeTraceId()
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getEagleEyeUserData()
 */
class DescribeIpLocationService extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEagleEyeRpcId($value)
    {
        $this->data['EagleEyeRpcId'] = $value;
        $this->options['form_params']['EagleEyeRpcId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEagleEyeTraceId($value)
    {
        $this->data['EagleEyeTraceId'] = $value;
        $this->options['form_params']['EagleEyeTraceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEagleEyeUserData($value)
    {
        $this->data['EagleEyeUserData'] = $value;
        $this->options['form_params']['EagleEyeUserData'] = $value;

        return $this;
    }
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeRegions extends Rpc
{
}

/**
 * @method string getInternetIp()
 * @method $this withInternetIp($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDdosRegionId()
 * @method $this withDdosRegionId($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ModifyDdosStatus extends Rpc
{
}

/**
 * @method string getInternetIp()
 * @method $this withInternetIp($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDdosRegionId()
 * @method $this withDdosRegionId($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getBps()
 * @method $this withBps($value)
 * @method string getPps()
 * @method $this withPps($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getIsAuto()
 * @method $this withIsAuto($value)
 */
class ModifyDefenseThreshold extends Rpc
{
}

/**
 * @method string getInternetIp()
 * @method $this withInternetIp($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDdosRegionId()
 * @method $this withDdosRegionId($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getBps()
 * @method $this withBps($value)
 * @method string getPps()
 * @method $this withPps($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getIsAuto()
 * @method $this withIsAuto($value)
 */
class ModifyIpDefenseThreshold extends Rpc
{
}
