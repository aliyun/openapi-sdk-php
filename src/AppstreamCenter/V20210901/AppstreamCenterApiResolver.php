<?php

namespace AlibabaCloud\AppstreamCenter\V20210901;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method ApproveOtaTask approveOtaTask(array $options = [])
 * @method AuthorizeInstanceGroup authorizeInstanceGroup(array $options = [])
 * @method CancelOtaTask cancelOtaTask(array $options = [])
 * @method CreateAppInstanceGroup createAppInstanceGroup(array $options = [])
 * @method DeleteAppInstanceGroup deleteAppInstanceGroup(array $options = [])
 * @method DeleteAppInstances deleteAppInstances(array $options = [])
 * @method GetAppInstanceGroup getAppInstanceGroup(array $options = [])
 * @method GetConnectionTicket getConnectionTicket(array $options = [])
 * @method GetOtaTaskByTaskId getOtaTaskByTaskId(array $options = [])
 * @method GetResourcePrice getResourcePrice(array $options = [])
 * @method GetResourceRenewPrice getResourceRenewPrice(array $options = [])
 * @method ListAppInstanceGroup listAppInstanceGroup(array $options = [])
 * @method ListAppInstances listAppInstances(array $options = [])
 * @method ListNodeInstanceType listNodeInstanceType(array $options = [])
 * @method ListOtaTask listOtaTask(array $options = [])
 * @method ListRegions listRegions(array $options = [])
 * @method ListTenantConfig listTenantConfig(array $options = [])
 * @method LogOffAllSessionsInAppInstanceGroup logOffAllSessionsInAppInstanceGroup(array $options = [])
 * @method ModifyAppInstanceGroupAttribute modifyAppInstanceGroupAttribute(array $options = [])
 * @method ModifyNodePoolAttribute modifyNodePoolAttribute(array $options = [])
 * @method ModifyTenantConfig modifyTenantConfig(array $options = [])
 * @method PageListAppInstanceGroupUser pageListAppInstanceGroupUser(array $options = [])
 * @method RenewAppInstanceGroup renewAppInstanceGroup(array $options = [])
 * @method Unbind unbind(array $options = [])
 * @method UpdateAppInstanceGroupImage updateAppInstanceGroupImage(array $options = [])
 */
class AppstreamCenterApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'appstream-center';

    /** @var string */
    public $version = '2021-09-01';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getBizRegionId()
 * @method string getOtaType()
 * @method string getStartTime()
 * @method string getStopTime()
 * @method string getAppInstanceGroupId()
 * @method string getTaskId()
 */
class ApproveOtaTask extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizRegionId($value)
    {
        $this->data['BizRegionId'] = $value;
        $this->options['form_params']['BizRegionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOtaType($value)
    {
        $this->data['OtaType'] = $value;
        $this->options['form_params']['OtaType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartTime($value)
    {
        $this->data['StartTime'] = $value;
        $this->options['form_params']['StartTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStopTime($value)
    {
        $this->data['StopTime'] = $value;
        $this->options['form_params']['StopTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppInstanceGroupId($value)
    {
        $this->data['AppInstanceGroupId'] = $value;
        $this->options['form_params']['AppInstanceGroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTaskId($value)
    {
        $this->data['TaskId'] = $value;
        $this->options['form_params']['TaskId'] = $value;

        return $this;
    }
}

/**
 * @method string getSpecId()
 * @method array getUnAuthorizeUserIds()
 * @method string getProductType()
 * @method string getAppInstanceGroupId()
 * @method array getAuthorizeUserIds()
 */
class AuthorizeInstanceGroup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSpecId($value)
    {
        $this->data['SpecId'] = $value;
        $this->options['form_params']['SpecId'] = $value;

        return $this;
    }

    /**
     * @param array $unAuthorizeUserIds
     *
     * @return $this
     */
	public function withUnAuthorizeUserIds(array $unAuthorizeUserIds)
	{
	    $this->data['UnAuthorizeUserIds'] = $unAuthorizeUserIds;
		foreach ($unAuthorizeUserIds as $i => $iValue) {
			$this->options['form_params']['UnAuthorizeUserIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProductType($value)
    {
        $this->data['ProductType'] = $value;
        $this->options['form_params']['ProductType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppInstanceGroupId($value)
    {
        $this->data['AppInstanceGroupId'] = $value;
        $this->options['form_params']['AppInstanceGroupId'] = $value;

        return $this;
    }

    /**
     * @param array $authorizeUserIds
     *
     * @return $this
     */
	public function withAuthorizeUserIds(array $authorizeUserIds)
	{
	    $this->data['AuthorizeUserIds'] = $authorizeUserIds;
		foreach ($authorizeUserIds as $i => $iValue) {
			$this->options['form_params']['AuthorizeUserIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getAppInstanceGroupId()
 * @method string getTaskId()
 */
class CancelOtaTask extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppInstanceGroupId($value)
    {
        $this->data['AppInstanceGroupId'] = $value;
        $this->options['form_params']['AppInstanceGroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTaskId($value)
    {
        $this->data['TaskId'] = $value;
        $this->options['form_params']['TaskId'] = $value;

        return $this;
    }
}

/**
 * @method string getRuntimePolicy()
 * @method string getBizRegionId()
 * @method string getScalingStep()
 * @method string getScalingDownAfterIdleMinutes()
 * @method string getMinAmount()
 * @method string getProductType()
 * @method string getNetwork()
 * @method string getReserveMinAmount()
 * @method string getSessionTimeout()
 * @method string getChargeResourceMode()
 * @method string getAppCenterImageId()
 * @method string getScalingUsageThreshold()
 * @method string getUserInfo()
 * @method string getReserveAmountRatio()
 * @method string getPreOpenAppId()
 * @method string getAmount()
 * @method string getPeriod()
 * @method string getAutoPay()
 * @method string getNodePool()
 * @method string getAppInstanceType()
 * @method string getMaxAmount()
 * @method string getSecurityPolicy()
 * @method string getPromotionId()
 * @method array getUsers()
 * @method string getVideoPolicy()
 * @method string getAppInstanceGroupName()
 * @method string getPeriodUnit()
 * @method string getReserveMaxAmount()
 * @method string getAutoRenew()
 * @method string getChargeType()
 * @method string getStrategyType()
 */
class CreateAppInstanceGroup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRuntimePolicy($value)
    {
        $this->data['RuntimePolicy'] = $value;
        $this->options['form_params']['RuntimePolicy'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizRegionId($value)
    {
        $this->data['BizRegionId'] = $value;
        $this->options['form_params']['BizRegionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingStep($value)
    {
        $this->data['ScalingStep'] = $value;
        $this->options['form_params']['ScalingStep'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingDownAfterIdleMinutes($value)
    {
        $this->data['ScalingDownAfterIdleMinutes'] = $value;
        $this->options['form_params']['ScalingDownAfterIdleMinutes'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMinAmount($value)
    {
        $this->data['MinAmount'] = $value;
        $this->options['form_params']['MinAmount'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProductType($value)
    {
        $this->data['ProductType'] = $value;
        $this->options['form_params']['ProductType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNetwork($value)
    {
        $this->data['Network'] = $value;
        $this->options['form_params']['Network'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReserveMinAmount($value)
    {
        $this->data['ReserveMinAmount'] = $value;
        $this->options['form_params']['ReserveMinAmount'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSessionTimeout($value)
    {
        $this->data['SessionTimeout'] = $value;
        $this->options['form_params']['SessionTimeout'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChargeResourceMode($value)
    {
        $this->data['ChargeResourceMode'] = $value;
        $this->options['form_params']['ChargeResourceMode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppCenterImageId($value)
    {
        $this->data['AppCenterImageId'] = $value;
        $this->options['form_params']['AppCenterImageId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingUsageThreshold($value)
    {
        $this->data['ScalingUsageThreshold'] = $value;
        $this->options['form_params']['ScalingUsageThreshold'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserInfo($value)
    {
        $this->data['UserInfo'] = $value;
        $this->options['form_params']['UserInfo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReserveAmountRatio($value)
    {
        $this->data['ReserveAmountRatio'] = $value;
        $this->options['form_params']['ReserveAmountRatio'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPreOpenAppId($value)
    {
        $this->data['PreOpenAppId'] = $value;
        $this->options['form_params']['PreOpenAppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAmount($value)
    {
        $this->data['Amount'] = $value;
        $this->options['form_params']['Amount'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPeriod($value)
    {
        $this->data['Period'] = $value;
        $this->options['form_params']['Period'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAutoPay($value)
    {
        $this->data['AutoPay'] = $value;
        $this->options['form_params']['AutoPay'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNodePool($value)
    {
        $this->data['NodePool'] = $value;
        $this->options['form_params']['NodePool'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppInstanceType($value)
    {
        $this->data['AppInstanceType'] = $value;
        $this->options['form_params']['AppInstanceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxAmount($value)
    {
        $this->data['MaxAmount'] = $value;
        $this->options['form_params']['MaxAmount'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSecurityPolicy($value)
    {
        $this->data['SecurityPolicy'] = $value;
        $this->options['form_params']['SecurityPolicy'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPromotionId($value)
    {
        $this->data['PromotionId'] = $value;
        $this->options['form_params']['PromotionId'] = $value;

        return $this;
    }

    /**
     * @param array $users
     *
     * @return $this
     */
	public function withUsers(array $users)
	{
	    $this->data['Users'] = $users;
		foreach ($users as $i => $iValue) {
			$this->options['form_params']['Users.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVideoPolicy($value)
    {
        $this->data['VideoPolicy'] = $value;
        $this->options['form_params']['VideoPolicy'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppInstanceGroupName($value)
    {
        $this->data['AppInstanceGroupName'] = $value;
        $this->options['form_params']['AppInstanceGroupName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPeriodUnit($value)
    {
        $this->data['PeriodUnit'] = $value;
        $this->options['form_params']['PeriodUnit'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReserveMaxAmount($value)
    {
        $this->data['ReserveMaxAmount'] = $value;
        $this->options['form_params']['ReserveMaxAmount'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAutoRenew($value)
    {
        $this->data['AutoRenew'] = $value;
        $this->options['form_params']['AutoRenew'] = $value;

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
    public function withStrategyType($value)
    {
        $this->data['StrategyType'] = $value;
        $this->options['form_params']['StrategyType'] = $value;

        return $this;
    }
}

/**
 * @method string getProductType()
 * @method string getAppInstanceGroupId()
 */
class DeleteAppInstanceGroup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProductType($value)
    {
        $this->data['ProductType'] = $value;
        $this->options['form_params']['ProductType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppInstanceGroupId($value)
    {
        $this->data['AppInstanceGroupId'] = $value;
        $this->options['form_params']['AppInstanceGroupId'] = $value;

        return $this;
    }
}

/**
 * @method array getAppInstanceIds()
 * @method string getProductType()
 * @method string getAppInstanceGroupId()
 */
class DeleteAppInstances extends Rpc
{

    /**
     * @param array $appInstanceIds
     *
     * @return $this
     */
	public function withAppInstanceIds(array $appInstanceIds)
	{
	    $this->data['AppInstanceIds'] = $appInstanceIds;
		foreach ($appInstanceIds as $i => $iValue) {
			$this->options['form_params']['AppInstanceIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProductType($value)
    {
        $this->data['ProductType'] = $value;
        $this->options['form_params']['ProductType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppInstanceGroupId($value)
    {
        $this->data['AppInstanceGroupId'] = $value;
        $this->options['form_params']['AppInstanceGroupId'] = $value;

        return $this;
    }
}

/**
 * @method string getProductType()
 * @method $this withProductType($value)
 * @method string getAppInstanceGroupId()
 * @method $this withAppInstanceGroupId($value)
 */
class GetAppInstanceGroup extends Rpc
{
}

/**
 * @method string getBizRegionId()
 * @method string getAppStartParam()
 * @method string getProductType()
 * @method string getEndUserId()
 * @method array getFileInfos()
 * @method string getTaskId()
 * @method string getAppVersion()
 * @method array getAppInstanceGroupIdList()
 * @method string getAppId()
 * @method string getAppInstanceId()
 */
class GetConnectionTicket extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizRegionId($value)
    {
        $this->data['BizRegionId'] = $value;
        $this->options['form_params']['BizRegionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppStartParam($value)
    {
        $this->data['AppStartParam'] = $value;
        $this->options['form_params']['AppStartParam'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProductType($value)
    {
        $this->data['ProductType'] = $value;
        $this->options['form_params']['ProductType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndUserId($value)
    {
        $this->data['EndUserId'] = $value;
        $this->options['form_params']['EndUserId'] = $value;

        return $this;
    }

    /**
     * @param array $fileInfos
     *
     * @return $this
     */
	public function withFileInfos(array $fileInfos)
	{
	    $this->data['FileInfos'] = $fileInfos;
		foreach ($fileInfos as $depth1 => $depth1Value) {
			if(isset($depth1Value['FileRegion'])){
				$this->options['form_params']['FileInfos.' . ($depth1 + 1) . '.FileRegion'] = $depth1Value['FileRegion'];
			}
			if(isset($depth1Value['DriveId'])){
				$this->options['form_params']['FileInfos.' . ($depth1 + 1) . '.DriveId'] = $depth1Value['DriveId'];
			}
			if(isset($depth1Value['FileName'])){
				$this->options['form_params']['FileInfos.' . ($depth1 + 1) . '.FileName'] = $depth1Value['FileName'];
			}
			if(isset($depth1Value['FilePath'])){
				$this->options['form_params']['FileInfos.' . ($depth1 + 1) . '.FilePath'] = $depth1Value['FilePath'];
			}
			if(isset($depth1Value['DriveType'])){
				$this->options['form_params']['FileInfos.' . ($depth1 + 1) . '.DriveType'] = $depth1Value['DriveType'];
			}
			if(isset($depth1Value['FileId'])){
				$this->options['form_params']['FileInfos.' . ($depth1 + 1) . '.FileId'] = $depth1Value['FileId'];
			}
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTaskId($value)
    {
        $this->data['TaskId'] = $value;
        $this->options['form_params']['TaskId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppVersion($value)
    {
        $this->data['AppVersion'] = $value;
        $this->options['form_params']['AppVersion'] = $value;

        return $this;
    }

    /**
     * @param array $appInstanceGroupIdList
     *
     * @return $this
     */
	public function withAppInstanceGroupIdList(array $appInstanceGroupIdList)
	{
	    $this->data['AppInstanceGroupIdList'] = $appInstanceGroupIdList;
		foreach ($appInstanceGroupIdList as $i => $iValue) {
			$this->options['form_params']['AppInstanceGroupIdList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['form_params']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppInstanceId($value)
    {
        $this->data['AppInstanceId'] = $value;
        $this->options['form_params']['AppInstanceId'] = $value;

        return $this;
    }
}

/**
 * @method string getTaskId()
 */
class GetOtaTaskByTaskId extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTaskId($value)
    {
        $this->data['TaskId'] = $value;
        $this->options['form_params']['TaskId'] = $value;

        return $this;
    }
}

/**
 * @method string getBizRegionId()
 * @method $this withBizRegionId($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getAmount()
 * @method $this withAmount($value)
 * @method string getNodeInstanceType()
 * @method $this withNodeInstanceType($value)
 * @method string getProductType()
 * @method $this withProductType($value)
 * @method string getPeriodUnit()
 * @method $this withPeriodUnit($value)
 * @method string getChargeType()
 * @method $this withChargeType($value)
 */
class GetResourcePrice extends Rpc
{
}

/**
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getProductType()
 * @method $this withProductType($value)
 * @method string getPeriodUnit()
 * @method $this withPeriodUnit($value)
 * @method string getAppInstanceGroupId()
 * @method $this withAppInstanceGroupId($value)
 */
class GetResourceRenewPrice extends Rpc
{
}

/**
 * @method string getBizRegionId()
 * @method $this withBizRegionId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getProductType()
 * @method $this withProductType($value)
 * @method string getAppCenterImageId()
 * @method $this withAppCenterImageId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getNodeInstanceType()
 * @method $this withNodeInstanceType($value)
 * @method string getAppInstanceGroupName()
 * @method $this withAppInstanceGroupName($value)
 * @method string getAppInstanceGroupId()
 * @method $this withAppInstanceGroupId($value)
 * @method array getStatus()
 */
class ListAppInstanceGroup extends Rpc
{

    /**
     * @param array $status
     *
     * @return $this
     */
	public function withStatus(array $status)
	{
	    $this->data['Status'] = $status;
		foreach ($status as $i => $iValue) {
			$this->options['form_params']['Status.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getAppInstanceGroupId()
 * @method $this withAppInstanceGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAppInstanceId()
 * @method $this withAppInstanceId($value)
 * @method array getStatus()
 */
class ListAppInstances extends Rpc
{

    /**
     * @param array $status
     *
     * @return $this
     */
	public function withStatus(array $status)
	{
	    $this->data['Status'] = $status;
		foreach ($status as $i => $iValue) {
			$this->options['form_params']['Status.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getBizRegionId()
 * @method $this withBizRegionId($value)
 * @method string getLanguage()
 * @method $this withLanguage($value)
 * @method string getOsType()
 * @method $this withOsType($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getProductType()
 * @method $this withProductType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListNodeInstanceType extends Rpc
{
}

/**
 * @method string getOtaType()
 * @method string getPageNumber()
 * @method string getAppInstanceGroupId()
 * @method string getPageSize()
 */
class ListOtaTask extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOtaType($value)
    {
        $this->data['OtaType'] = $value;
        $this->options['form_params']['OtaType'] = $value;

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppInstanceGroupId($value)
    {
        $this->data['AppInstanceGroupId'] = $value;
        $this->options['form_params']['AppInstanceGroupId'] = $value;

        return $this;
    }

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
}

class ListRegions extends Rpc
{
}

class ListTenantConfig extends Rpc
{
}

/**
 * @method string getProductType()
 * @method string getAppInstanceGroupId()
 */
class LogOffAllSessionsInAppInstanceGroup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProductType($value)
    {
        $this->data['ProductType'] = $value;
        $this->options['form_params']['ProductType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppInstanceGroupId($value)
    {
        $this->data['AppInstanceGroupId'] = $value;
        $this->options['form_params']['AppInstanceGroupId'] = $value;

        return $this;
    }
}

/**
 * @method string getNodePool()
 * @method $this withNodePool($value)
 * @method string getProductType()
 * @method $this withProductType($value)
 * @method string getAppInstanceGroupName()
 * @method $this withAppInstanceGroupName($value)
 * @method string getSessionTimeout()
 * @method $this withSessionTimeout($value)
 * @method string getAppInstanceGroupId()
 * @method $this withAppInstanceGroupId($value)
 */
class ModifyAppInstanceGroupAttribute extends Rpc
{
}

/**
 * @method string getBizRegionId()
 * @method string getProductType()
 * @method string getPoolId()
 * @method string getNodePoolStrategy()
 * @method string getNodeCapacity()
 */
class ModifyNodePoolAttribute extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizRegionId($value)
    {
        $this->data['BizRegionId'] = $value;
        $this->options['form_params']['BizRegionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProductType($value)
    {
        $this->data['ProductType'] = $value;
        $this->options['form_params']['ProductType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPoolId($value)
    {
        $this->data['PoolId'] = $value;
        $this->options['form_params']['PoolId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNodePoolStrategy($value)
    {
        $this->data['NodePoolStrategy'] = $value;
        $this->options['form_params']['NodePoolStrategy'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNodeCapacity($value)
    {
        $this->data['NodeCapacity'] = $value;
        $this->options['form_params']['NodeCapacity'] = $value;

        return $this;
    }
}

/**
 * @method string getAppInstanceGroupExpireRemind()
 */
class ModifyTenantConfig extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppInstanceGroupExpireRemind($value)
    {
        $this->data['AppInstanceGroupExpireRemind'] = $value;
        $this->options['form_params']['AppInstanceGroupExpireRemind'] = $value;

        return $this;
    }
}

/**
 * @method string getPageNumber()
 * @method string getProductType()
 * @method string getAppInstanceGroupId()
 * @method string getPageSize()
 */
class PageListAppInstanceGroupUser extends Rpc
{

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProductType($value)
    {
        $this->data['ProductType'] = $value;
        $this->options['form_params']['ProductType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppInstanceGroupId($value)
    {
        $this->data['AppInstanceGroupId'] = $value;
        $this->options['form_params']['AppInstanceGroupId'] = $value;

        return $this;
    }

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
}

/**
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getPromotionId()
 * @method $this withPromotionId($value)
 * @method string getProductType()
 * @method $this withProductType($value)
 * @method string getPeriodUnit()
 * @method $this withPeriodUnit($value)
 * @method string getAppInstanceGroupId()
 * @method $this withAppInstanceGroupId($value)
 */
class RenewAppInstanceGroup extends Rpc
{
}

/**
 * @method string getProductType()
 * @method string getAppInstanceGroupId()
 * @method string getEndUserId()
 * @method string getAppInstanceId()
 */
class Unbind extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProductType($value)
    {
        $this->data['ProductType'] = $value;
        $this->options['form_params']['ProductType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppInstanceGroupId($value)
    {
        $this->data['AppInstanceGroupId'] = $value;
        $this->options['form_params']['AppInstanceGroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndUserId($value)
    {
        $this->data['EndUserId'] = $value;
        $this->options['form_params']['EndUserId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppInstanceId($value)
    {
        $this->data['AppInstanceId'] = $value;
        $this->options['form_params']['AppInstanceId'] = $value;

        return $this;
    }
}

/**
 * @method string getBizRegionId()
 * @method $this withBizRegionId($value)
 * @method string getUpdateMode()
 * @method $this withUpdateMode($value)
 * @method string getProductType()
 * @method $this withProductType($value)
 * @method string getAppInstanceGroupId()
 * @method $this withAppInstanceGroupId($value)
 * @method string getAppCenterImageId()
 * @method $this withAppCenterImageId($value)
 */
class UpdateAppInstanceGroupImage extends Rpc
{
}
