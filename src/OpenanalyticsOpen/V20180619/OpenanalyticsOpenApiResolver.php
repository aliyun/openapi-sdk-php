<?php

namespace AlibabaCloud\OpenanalyticsOpen\V20180619;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddAccount addAccount(array $options = [])
 * @method AddEndPoint addEndPoint(array $options = [])
 * @method CancelQueryByExecuteId cancelQueryByExecuteId(array $options = [])
 * @method CancelQueryById cancelQueryById(array $options = [])
 * @method CreateInstance createInstance(array $options = [])
 * @method DeleteAccount deleteAccount(array $options = [])
 * @method DescribeTags describeTags(array $options = [])
 * @method GetAllowIP getAllowIP(array $options = [])
 * @method GetEndPoint getEndPoint(array $options = [])
 * @method GetEndPointByDomain getEndPointByDomain(array $options = [])
 * @method GetJobDetail getJobDetail(array $options = [])
 * @method GetJobLog getJobLog(array $options = [])
 * @method GetJobStatus getJobStatus(array $options = [])
 * @method KillSparkJob killSparkJob(array $options = [])
 * @method ListSparkJob listSparkJob(array $options = [])
 * @method ListTagResources listTagResources(array $options = [])
 * @method QueryAccountList queryAccountList(array $options = [])
 * @method QueryEndPointList queryEndPointList(array $options = [])
 * @method ReleaseInstance releaseInstance(array $options = [])
 * @method RemoveEndPoint removeEndPoint(array $options = [])
 * @method ResetMainPassword resetMainPassword(array $options = [])
 * @method SetAllowIP setAllowIP(array $options = [])
 * @method SubmitSparkJob submitSparkJob(array $options = [])
 * @method TagResources tagResources(array $options = [])
 * @method UnSubscribeRegion unSubscribeRegion(array $options = [])
 * @method UntagResources untagResources(array $options = [])
 * @method UpdateAccountPassword updateAccountPassword(array $options = [])
 * @method UpgradeInstance upgradeInstance(array $options = [])
 * @method ValidateVirtualClusterName validateVirtualClusterName(array $options = [])
 */
class OpenanalyticsOpenApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'openanalytics-open';

    /** @var string */
    public $version = '2018-06-19';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'openanalytics';
}

/**
 * @method string getRamUid()
 * @method string getIsShort()
 * @method string getRemark()
 * @method string getPassword()
 * @method string getAccountName()
 * @method string getEnableKMS()
 * @method string getUseRandomPassword()
 */
class AddAccount extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRamUid($value)
    {
        $this->data['RamUid'] = $value;
        $this->options['form_params']['RamUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsShort($value)
    {
        $this->data['IsShort'] = $value;
        $this->options['form_params']['IsShort'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRemark($value)
    {
        $this->data['Remark'] = $value;
        $this->options['form_params']['Remark'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPassword($value)
    {
        $this->data['Password'] = $value;
        $this->options['form_params']['Password'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccountName($value)
    {
        $this->data['AccountName'] = $value;
        $this->options['form_params']['AccountName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnableKMS($value)
    {
        $this->data['EnableKMS'] = $value;
        $this->options['form_params']['EnableKMS'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUseRandomPassword($value)
    {
        $this->data['UseRandomPassword'] = $value;
        $this->options['form_params']['UseRandomPassword'] = $value;

        return $this;
    }
}

/**
 * @method string getProduct()
 * @method string getNetworkType()
 * @method string getVswitch()
 * @method string getZone()
 * @method string getVpcID()
 */
class AddEndPoint extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProduct($value)
    {
        $this->data['Product'] = $value;
        $this->options['form_params']['Product'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNetworkType($value)
    {
        $this->data['NetworkType'] = $value;
        $this->options['form_params']['NetworkType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVswitch($value)
    {
        $this->data['Vswitch'] = $value;
        $this->options['form_params']['Vswitch'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withZone($value)
    {
        $this->data['Zone'] = $value;
        $this->options['form_params']['Zone'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVpcID($value)
    {
        $this->data['VpcID'] = $value;
        $this->options['form_params']['VpcID'] = $value;

        return $this;
    }
}

/**
 * @method string getExecuteId()
 */
class CancelQueryByExecuteId extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExecuteId($value)
    {
        $this->data['ExecuteId'] = $value;
        $this->options['form_params']['ExecuteId'] = $value;

        return $this;
    }
}

/**
 * @method string getQueryId()
 */
class CancelQueryById extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withQueryId($value)
    {
        $this->data['QueryId'] = $value;
        $this->options['form_params']['QueryId'] = $value;

        return $this;
    }
}

/**
 * @method string getChargeType()
 * @method string getInstanceType()
 * @method string getComponent()
 */
class CreateInstance extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChargeType($value)
    {
        $this->data['ChargeType'] = $value;
        $this->options['form_params']['ChargeType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceType($value)
    {
        $this->data['InstanceType'] = $value;
        $this->options['form_params']['InstanceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withComponent($value)
    {
        $this->data['Component'] = $value;
        $this->options['form_params']['Component'] = $value;

        return $this;
    }
}

/**
 * @method string getAccountName()
 * @method string getIsShort()
 * @method string getIsServiceUser()
 */
class DeleteAccount extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccountName($value)
    {
        $this->data['AccountName'] = $value;
        $this->options['form_params']['AccountName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsShort($value)
    {
        $this->data['IsShort'] = $value;
        $this->options['form_params']['IsShort'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsServiceUser($value)
    {
        $this->data['IsServiceUser'] = $value;
        $this->options['form_params']['IsServiceUser'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class DescribeTags extends Rpc
{
}

/**
 * @method string getNetworkType()
 * @method string getProduct()
 */
class GetAllowIP extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNetworkType($value)
    {
        $this->data['NetworkType'] = $value;
        $this->options['form_params']['NetworkType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProduct($value)
    {
        $this->data['Product'] = $value;
        $this->options['form_params']['Product'] = $value;

        return $this;
    }
}

/**
 * @method string getEndPointID()
 */
class GetEndPoint extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndPointID($value)
    {
        $this->data['EndPointID'] = $value;
        $this->options['form_params']['EndPointID'] = $value;

        return $this;
    }
}

/**
 * @method string getDomainURL()
 */
class GetEndPointByDomain extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDomainURL($value)
    {
        $this->data['DomainURL'] = $value;
        $this->options['form_params']['DomainURL'] = $value;

        return $this;
    }
}

/**
 * @method string getJobId()
 * @method string getVcName()
 */
class GetJobDetail extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobId($value)
    {
        $this->data['JobId'] = $value;
        $this->options['form_params']['JobId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVcName($value)
    {
        $this->data['VcName'] = $value;
        $this->options['form_params']['VcName'] = $value;

        return $this;
    }
}

/**
 * @method string getJobId()
 * @method string getVcName()
 */
class GetJobLog extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobId($value)
    {
        $this->data['JobId'] = $value;
        $this->options['form_params']['JobId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVcName($value)
    {
        $this->data['VcName'] = $value;
        $this->options['form_params']['VcName'] = $value;

        return $this;
    }
}

/**
 * @method string getJobId()
 * @method string getVcName()
 */
class GetJobStatus extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobId($value)
    {
        $this->data['JobId'] = $value;
        $this->options['form_params']['JobId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVcName($value)
    {
        $this->data['VcName'] = $value;
        $this->options['form_params']['VcName'] = $value;

        return $this;
    }
}

/**
 * @method string getJobId()
 * @method string getVcName()
 */
class KillSparkJob extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobId($value)
    {
        $this->data['JobId'] = $value;
        $this->options['form_params']['JobId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVcName($value)
    {
        $this->data['VcName'] = $value;
        $this->options['form_params']['VcName'] = $value;

        return $this;
    }
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getCondition()
 * @method $this withCondition($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getVcName()
 * @method $this withVcName($value)
 */
class ListSparkJob extends Rpc
{
}

/**
 * @method array getResourceId()
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method array getTag()
 * @method string getCategory()
 * @method $this withCategory($value)
 */
class ListTagResources extends Rpc
{

    /**
     * @param array $resourceId
     *
     * @return $this
     */
	public function withResourceId(array $resourceId)
	{
	    $this->data['ResourceId'] = $resourceId;
		foreach ($resourceId as $i => $iValue) {
			$this->options['query']['ResourceId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function withTag(array $tag)
	{
	    $this->data['Tag'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
		}

		return $this;
    }
}

/**
 * @method string getPageSize()
 * @method string getPageNumber()
 */
class QueryAccountList extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }
}

class QueryEndPointList extends Rpc
{
}

/**
 * @method string getInstanceId()
 */
class ReleaseInstance extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }
}

/**
 * @method string getEndPointID()
 */
class RemoveEndPoint extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndPointID($value)
    {
        $this->data['EndPointID'] = $value;
        $this->options['form_params']['EndPointID'] = $value;

        return $this;
    }
}

/**
 * @method string getExternalUid()
 * @method string getInitPassword()
 * @method string getExternalAliyunUid()
 * @method string getUseRandomPassword()
 * @method string getEnableKMS()
 * @method string getExternalBizAliyunUid()
 */
class ResetMainPassword extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExternalUid($value)
    {
        $this->data['ExternalUid'] = $value;
        $this->options['form_params']['ExternalUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInitPassword($value)
    {
        $this->data['InitPassword'] = $value;
        $this->options['form_params']['InitPassword'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExternalAliyunUid($value)
    {
        $this->data['ExternalAliyunUid'] = $value;
        $this->options['form_params']['ExternalAliyunUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUseRandomPassword($value)
    {
        $this->data['UseRandomPassword'] = $value;
        $this->options['form_params']['UseRandomPassword'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnableKMS($value)
    {
        $this->data['EnableKMS'] = $value;
        $this->options['form_params']['EnableKMS'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExternalBizAliyunUid($value)
    {
        $this->data['ExternalBizAliyunUid'] = $value;
        $this->options['form_params']['ExternalBizAliyunUid'] = $value;

        return $this;
    }
}

/**
 * @method string getNetworkType()
 * @method string getProduct()
 * @method string getAllowIP()
 * @method string getAppend()
 */
class SetAllowIP extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNetworkType($value)
    {
        $this->data['NetworkType'] = $value;
        $this->options['form_params']['NetworkType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProduct($value)
    {
        $this->data['Product'] = $value;
        $this->options['form_params']['Product'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAllowIP($value)
    {
        $this->data['AllowIP'] = $value;
        $this->options['form_params']['AllowIP'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppend($value)
    {
        $this->data['Append'] = $value;
        $this->options['form_params']['Append'] = $value;

        return $this;
    }
}

/**
 * @method string getConfigJson()
 * @method string getVcName()
 */
class SubmitSparkJob extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConfigJson($value)
    {
        $this->data['ConfigJson'] = $value;
        $this->options['form_params']['ConfigJson'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVcName($value)
    {
        $this->data['VcName'] = $value;
        $this->options['form_params']['VcName'] = $value;

        return $this;
    }
}

/**
 * @method array getResourceId()
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method array getTag()
 */
class TagResources extends Rpc
{

    /**
     * @param array $resourceId
     *
     * @return $this
     */
	public function withResourceId(array $resourceId)
	{
	    $this->data['ResourceId'] = $resourceId;
		foreach ($resourceId as $i => $iValue) {
			$this->options['query']['ResourceId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function withTag(array $tag)
	{
	    $this->data['Tag'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
		}

		return $this;
    }
}

class UnSubscribeRegion extends Rpc
{
}

/**
 * @method string getAll()
 * @method $this withAll($value)
 * @method array getResourceId()
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method array getTagKey()
 */
class UntagResources extends Rpc
{

    /**
     * @param array $resourceId
     *
     * @return $this
     */
	public function withResourceId(array $resourceId)
	{
	    $this->data['ResourceId'] = $resourceId;
		foreach ($resourceId as $i => $iValue) {
			$this->options['query']['ResourceId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $tagKey
     *
     * @return $this
     */
	public function withTagKey(array $tagKey)
	{
	    $this->data['TagKey'] = $tagKey;
		foreach ($tagKey as $i => $iValue) {
			$this->options['query']['TagKey.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getIsShort()
 * @method string getPassword()
 * @method string getAccountName()
 * @method string getEnableKMS()
 * @method string getUseRandomPassword()
 */
class UpdateAccountPassword extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsShort($value)
    {
        $this->data['IsShort'] = $value;
        $this->options['form_params']['IsShort'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPassword($value)
    {
        $this->data['Password'] = $value;
        $this->options['form_params']['Password'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccountName($value)
    {
        $this->data['AccountName'] = $value;
        $this->options['form_params']['AccountName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnableKMS($value)
    {
        $this->data['EnableKMS'] = $value;
        $this->options['form_params']['EnableKMS'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUseRandomPassword($value)
    {
        $this->data['UseRandomPassword'] = $value;
        $this->options['form_params']['UseRandomPassword'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method string getChargeType()
 * @method string getInstanceType()
 * @method string getComponent()
 */
class UpgradeInstance extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChargeType($value)
    {
        $this->data['ChargeType'] = $value;
        $this->options['form_params']['ChargeType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceType($value)
    {
        $this->data['InstanceType'] = $value;
        $this->options['form_params']['InstanceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withComponent($value)
    {
        $this->data['Component'] = $value;
        $this->options['form_params']['Component'] = $value;

        return $this;
    }
}

/**
 * @method string getVcName()
 */
class ValidateVirtualClusterName extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVcName($value)
    {
        $this->data['VcName'] = $value;
        $this->options['form_params']['VcName'] = $value;

        return $this;
    }
}
