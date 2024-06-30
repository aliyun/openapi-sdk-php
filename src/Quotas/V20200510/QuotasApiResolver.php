<?php

namespace AlibabaCloud\Quotas\V20200510;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CreateQuotaAlarm createQuotaAlarm(array $options = [])
 * @method CreateQuotaApplication createQuotaApplication(array $options = [])
 * @method CreateQuotaApplicationsForTemplate createQuotaApplicationsForTemplate(array $options = [])
 * @method CreateTemplateQuotaItem createTemplateQuotaItem(array $options = [])
 * @method DeleteQuotaAlarm deleteQuotaAlarm(array $options = [])
 * @method DeleteTemplateQuotaItem deleteTemplateQuotaItem(array $options = [])
 * @method GetProductQuota getProductQuota(array $options = [])
 * @method GetProductQuotaDimension getProductQuotaDimension(array $options = [])
 * @method GetQuotaAlarm getQuotaAlarm(array $options = [])
 * @method GetQuotaApplication getQuotaApplication(array $options = [])
 * @method GetQuotaApplicationApproval getQuotaApplicationApproval(array $options = [])
 * @method GetQuotaTemplateServiceStatus getQuotaTemplateServiceStatus(array $options = [])
 * @method ListAlarmHistories listAlarmHistories(array $options = [])
 * @method ListDependentQuotas listDependentQuotas(array $options = [])
 * @method ListProductDimensionGroups listProductDimensionGroups(array $options = [])
 * @method ListProductQuotaDimensions listProductQuotaDimensions(array $options = [])
 * @method ListProductQuotas listProductQuotas(array $options = [])
 * @method ListProducts listProducts(array $options = [])
 * @method ListQuotaAlarms listQuotaAlarms(array $options = [])
 * @method ListQuotaApplications listQuotaApplications(array $options = [])
 * @method ListQuotaApplicationsDetailForTemplate listQuotaApplicationsDetailForTemplate(array $options = [])
 * @method ListQuotaApplicationsForTemplate listQuotaApplicationsForTemplate(array $options = [])
 * @method ListQuotaApplicationTemplates listQuotaApplicationTemplates(array $options = [])
 * @method ModifyQuotaTemplateServiceStatus modifyQuotaTemplateServiceStatus(array $options = [])
 * @method ModifyTemplateQuotaItem modifyTemplateQuotaItem(array $options = [])
 * @method RemindQuotaApplicationApproval remindQuotaApplicationApproval(array $options = [])
 * @method UpdateQuotaAlarm updateQuotaAlarm(array $options = [])
 */
class QuotasApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'quotas';

    /** @var string */
    public $version = '2020-05-10';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'quotas';
}

/**
 * @method string getProductCode()
 * @method string getWebHook()
 * @method string getThreshold()
 * @method string getQuotaActionCode()
 * @method string getThresholdType()
 * @method array getQuotaDimensions()
 * @method string getOriginalContext()
 * @method string getThresholdPercent()
 * @method string getAlarmName()
 */
class CreateQuotaAlarm extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProductCode($value)
    {
        $this->data['ProductCode'] = $value;
        $this->options['form_params']['ProductCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWebHook($value)
    {
        $this->data['WebHook'] = $value;
        $this->options['form_params']['WebHook'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withThreshold($value)
    {
        $this->data['Threshold'] = $value;
        $this->options['form_params']['Threshold'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withQuotaActionCode($value)
    {
        $this->data['QuotaActionCode'] = $value;
        $this->options['form_params']['QuotaActionCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withThresholdType($value)
    {
        $this->data['ThresholdType'] = $value;
        $this->options['form_params']['ThresholdType'] = $value;

        return $this;
    }

    /**
     * @param array $quotaDimensions
     *
     * @return $this
     */
	public function withQuotaDimensions(array $quotaDimensions)
	{
	    $this->data['QuotaDimensions'] = $quotaDimensions;
		foreach ($quotaDimensions as $depth1 => $depth1Value) {
			if(isset($depth1Value['Key'])){
				$this->options['form_params']['QuotaDimensions.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['form_params']['QuotaDimensions.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOriginalContext($value)
    {
        $this->data['OriginalContext'] = $value;
        $this->options['form_params']['OriginalContext'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withThresholdPercent($value)
    {
        $this->data['ThresholdPercent'] = $value;
        $this->options['form_params']['ThresholdPercent'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlarmName($value)
    {
        $this->data['AlarmName'] = $value;
        $this->options['form_params']['AlarmName'] = $value;

        return $this;
    }
}

/**
 * @method string getReason()
 * @method string getProductCode()
 * @method string getQuotaActionCode()
 * @method string getDesireValue()
 * @method string getEffectiveTime()
 * @method string getQuotaCategory()
 * @method string getOriginalContext()
 * @method string getExpireTime()
 * @method string getEnvLanguage()
 * @method string getNoticeType()
 * @method string getAuditMode()
 * @method array getDimensions()
 */
class CreateQuotaApplication extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReason($value)
    {
        $this->data['Reason'] = $value;
        $this->options['form_params']['Reason'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProductCode($value)
    {
        $this->data['ProductCode'] = $value;
        $this->options['form_params']['ProductCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withQuotaActionCode($value)
    {
        $this->data['QuotaActionCode'] = $value;
        $this->options['form_params']['QuotaActionCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDesireValue($value)
    {
        $this->data['DesireValue'] = $value;
        $this->options['form_params']['DesireValue'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEffectiveTime($value)
    {
        $this->data['EffectiveTime'] = $value;
        $this->options['form_params']['EffectiveTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withQuotaCategory($value)
    {
        $this->data['QuotaCategory'] = $value;
        $this->options['form_params']['QuotaCategory'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOriginalContext($value)
    {
        $this->data['OriginalContext'] = $value;
        $this->options['form_params']['OriginalContext'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExpireTime($value)
    {
        $this->data['ExpireTime'] = $value;
        $this->options['form_params']['ExpireTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnvLanguage($value)
    {
        $this->data['EnvLanguage'] = $value;
        $this->options['form_params']['EnvLanguage'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNoticeType($value)
    {
        $this->data['NoticeType'] = $value;
        $this->options['form_params']['NoticeType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAuditMode($value)
    {
        $this->data['AuditMode'] = $value;
        $this->options['form_params']['AuditMode'] = $value;

        return $this;
    }

    /**
     * @param array $dimensions
     *
     * @return $this
     */
	public function withDimensions(array $dimensions)
	{
	    $this->data['Dimensions'] = $dimensions;
		foreach ($dimensions as $depth1 => $depth1Value) {
			if(isset($depth1Value['Key'])){
				$this->options['form_params']['Dimensions.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['form_params']['Dimensions.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
		}

		return $this;
    }
}

/**
 * @method string getReason()
 * @method string getProductCode()
 * @method string getQuotaActionCode()
 * @method string getDesireValue()
 * @method string getEffectiveTime()
 * @method array getAliyunUids()
 * @method string getQuotaCategory()
 * @method string getOriginalContext()
 * @method string getExpireTime()
 * @method string getEnvLanguage()
 * @method string getNoticeType()
 * @method array getDimensions()
 */
class CreateQuotaApplicationsForTemplate extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReason($value)
    {
        $this->data['Reason'] = $value;
        $this->options['form_params']['Reason'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProductCode($value)
    {
        $this->data['ProductCode'] = $value;
        $this->options['form_params']['ProductCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withQuotaActionCode($value)
    {
        $this->data['QuotaActionCode'] = $value;
        $this->options['form_params']['QuotaActionCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDesireValue($value)
    {
        $this->data['DesireValue'] = $value;
        $this->options['form_params']['DesireValue'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEffectiveTime($value)
    {
        $this->data['EffectiveTime'] = $value;
        $this->options['form_params']['EffectiveTime'] = $value;

        return $this;
    }

    /**
     * @param array $aliyunUids
     *
     * @return $this
     */
	public function withAliyunUids(array $aliyunUids)
	{
	    $this->data['AliyunUids'] = $aliyunUids;
		foreach ($aliyunUids as $i => $iValue) {
			$this->options['form_params']['AliyunUids.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withQuotaCategory($value)
    {
        $this->data['QuotaCategory'] = $value;
        $this->options['form_params']['QuotaCategory'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOriginalContext($value)
    {
        $this->data['OriginalContext'] = $value;
        $this->options['form_params']['OriginalContext'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExpireTime($value)
    {
        $this->data['ExpireTime'] = $value;
        $this->options['form_params']['ExpireTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnvLanguage($value)
    {
        $this->data['EnvLanguage'] = $value;
        $this->options['form_params']['EnvLanguage'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNoticeType($value)
    {
        $this->data['NoticeType'] = $value;
        $this->options['form_params']['NoticeType'] = $value;

        return $this;
    }

    /**
     * @param array $dimensions
     *
     * @return $this
     */
	public function withDimensions(array $dimensions)
	{
	    $this->data['Dimensions'] = $dimensions;
		foreach ($dimensions as $depth1 => $depth1Value) {
			if(isset($depth1Value['Key'])){
				$this->options['form_params']['Dimensions.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['form_params']['Dimensions.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
		}

		return $this;
    }
}

/**
 * @method string getProductCode()
 * @method string getQuotaActionCode()
 * @method string getDesireValue()
 * @method string getEffectiveTime()
 * @method string getQuotaCategory()
 * @method string getOriginalContext()
 * @method string getExpireTime()
 * @method string getEnvLanguage()
 * @method string getNoticeType()
 * @method array getDimensions()
 */
class CreateTemplateQuotaItem extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProductCode($value)
    {
        $this->data['ProductCode'] = $value;
        $this->options['form_params']['ProductCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withQuotaActionCode($value)
    {
        $this->data['QuotaActionCode'] = $value;
        $this->options['form_params']['QuotaActionCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDesireValue($value)
    {
        $this->data['DesireValue'] = $value;
        $this->options['form_params']['DesireValue'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEffectiveTime($value)
    {
        $this->data['EffectiveTime'] = $value;
        $this->options['form_params']['EffectiveTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withQuotaCategory($value)
    {
        $this->data['QuotaCategory'] = $value;
        $this->options['form_params']['QuotaCategory'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOriginalContext($value)
    {
        $this->data['OriginalContext'] = $value;
        $this->options['form_params']['OriginalContext'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExpireTime($value)
    {
        $this->data['ExpireTime'] = $value;
        $this->options['form_params']['ExpireTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnvLanguage($value)
    {
        $this->data['EnvLanguage'] = $value;
        $this->options['form_params']['EnvLanguage'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNoticeType($value)
    {
        $this->data['NoticeType'] = $value;
        $this->options['form_params']['NoticeType'] = $value;

        return $this;
    }

    /**
     * @param array $dimensions
     *
     * @return $this
     */
	public function withDimensions(array $dimensions)
	{
	    $this->data['Dimensions'] = $dimensions;
		foreach ($dimensions as $depth1 => $depth1Value) {
			if(isset($depth1Value['Key'])){
				$this->options['form_params']['Dimensions.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['form_params']['Dimensions.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
		}

		return $this;
    }
}

/**
 * @method string getOriginalContext()
 * @method string getAlarmId()
 */
class DeleteQuotaAlarm extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOriginalContext($value)
    {
        $this->data['OriginalContext'] = $value;
        $this->options['form_params']['OriginalContext'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlarmId($value)
    {
        $this->data['AlarmId'] = $value;
        $this->options['form_params']['AlarmId'] = $value;

        return $this;
    }
}

/**
 * @method string getOriginalContext()
 * @method string getId()
 */
class DeleteTemplateQuotaItem extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOriginalContext($value)
    {
        $this->data['OriginalContext'] = $value;
        $this->options['form_params']['OriginalContext'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }
}

/**
 * @method string getProductCode()
 * @method string getQuotaActionCode()
 * @method string getOriginalContext()
 * @method array getDimensions()
 */
class GetProductQuota extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProductCode($value)
    {
        $this->data['ProductCode'] = $value;
        $this->options['form_params']['ProductCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withQuotaActionCode($value)
    {
        $this->data['QuotaActionCode'] = $value;
        $this->options['form_params']['QuotaActionCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOriginalContext($value)
    {
        $this->data['OriginalContext'] = $value;
        $this->options['form_params']['OriginalContext'] = $value;

        return $this;
    }

    /**
     * @param array $dimensions
     *
     * @return $this
     */
	public function withDimensions(array $dimensions)
	{
	    $this->data['Dimensions'] = $dimensions;
		foreach ($dimensions as $depth1 => $depth1Value) {
			if(isset($depth1Value['Key'])){
				$this->options['form_params']['Dimensions.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['form_params']['Dimensions.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
		}

		return $this;
    }
}

/**
 * @method string getOriginalContext()
 * @method string getProductCode()
 * @method array getDependentDimensions()
 * @method string getDimensionKey()
 */
class GetProductQuotaDimension extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOriginalContext($value)
    {
        $this->data['OriginalContext'] = $value;
        $this->options['form_params']['OriginalContext'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProductCode($value)
    {
        $this->data['ProductCode'] = $value;
        $this->options['form_params']['ProductCode'] = $value;

        return $this;
    }

    /**
     * @param array $dependentDimensions
     *
     * @return $this
     */
	public function withDependentDimensions(array $dependentDimensions)
	{
	    $this->data['DependentDimensions'] = $dependentDimensions;
		foreach ($dependentDimensions as $depth1 => $depth1Value) {
			if(isset($depth1Value['Key'])){
				$this->options['form_params']['DependentDimensions.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['form_params']['DependentDimensions.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDimensionKey($value)
    {
        $this->data['DimensionKey'] = $value;
        $this->options['form_params']['DimensionKey'] = $value;

        return $this;
    }
}

/**
 * @method string getOriginalContext()
 * @method string getAlarmId()
 */
class GetQuotaAlarm extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOriginalContext($value)
    {
        $this->data['OriginalContext'] = $value;
        $this->options['form_params']['OriginalContext'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlarmId($value)
    {
        $this->data['AlarmId'] = $value;
        $this->options['form_params']['AlarmId'] = $value;

        return $this;
    }
}

/**
 * @method string getOriginalContext()
 * @method string getApplicationId()
 */
class GetQuotaApplication extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOriginalContext($value)
    {
        $this->data['OriginalContext'] = $value;
        $this->options['form_params']['OriginalContext'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApplicationId($value)
    {
        $this->data['ApplicationId'] = $value;
        $this->options['form_params']['ApplicationId'] = $value;

        return $this;
    }
}

/**
 * @method string getOriginalContext()
 * @method string getApplicationId()
 */
class GetQuotaApplicationApproval extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOriginalContext($value)
    {
        $this->data['OriginalContext'] = $value;
        $this->options['form_params']['OriginalContext'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApplicationId($value)
    {
        $this->data['ApplicationId'] = $value;
        $this->options['form_params']['ApplicationId'] = $value;

        return $this;
    }
}

/**
 * @method string getOriginalContext()
 * @method string getResourceDirectoryId()
 */
class GetQuotaTemplateServiceStatus extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOriginalContext($value)
    {
        $this->data['OriginalContext'] = $value;
        $this->options['form_params']['OriginalContext'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceDirectoryId($value)
    {
        $this->data['ResourceDirectoryId'] = $value;
        $this->options['form_params']['ResourceDirectoryId'] = $value;

        return $this;
    }
}

/**
 * @method string getProductCode()
 * @method string getStartTime()
 * @method string getNextToken()
 * @method string getKeyword()
 * @method string getOriginalContext()
 * @method string getEndTime()
 * @method string getAlarmId()
 * @method string getMaxResults()
 */
class ListAlarmHistories extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProductCode($value)
    {
        $this->data['ProductCode'] = $value;
        $this->options['form_params']['ProductCode'] = $value;

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
    public function withNextToken($value)
    {
        $this->data['NextToken'] = $value;
        $this->options['form_params']['NextToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withKeyword($value)
    {
        $this->data['Keyword'] = $value;
        $this->options['form_params']['Keyword'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOriginalContext($value)
    {
        $this->data['OriginalContext'] = $value;
        $this->options['form_params']['OriginalContext'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndTime($value)
    {
        $this->data['EndTime'] = $value;
        $this->options['form_params']['EndTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlarmId($value)
    {
        $this->data['AlarmId'] = $value;
        $this->options['form_params']['AlarmId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxResults($value)
    {
        $this->data['MaxResults'] = $value;
        $this->options['form_params']['MaxResults'] = $value;

        return $this;
    }
}

/**
 * @method string getOriginalContext()
 * @method string getProductCode()
 * @method string getQuotaActionCode()
 */
class ListDependentQuotas extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOriginalContext($value)
    {
        $this->data['OriginalContext'] = $value;
        $this->options['form_params']['OriginalContext'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProductCode($value)
    {
        $this->data['ProductCode'] = $value;
        $this->options['form_params']['ProductCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withQuotaActionCode($value)
    {
        $this->data['QuotaActionCode'] = $value;
        $this->options['form_params']['QuotaActionCode'] = $value;

        return $this;
    }
}

/**
 * @method string getOriginalContext()
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListProductDimensionGroups extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOriginalContext($value)
    {
        $this->data['OriginalContext'] = $value;
        $this->options['form_params']['OriginalContext'] = $value;

        return $this;
    }
}

/**
 * @method string getProductCode()
 * @method string getNextToken()
 * @method string getQuotaCategory()
 * @method string getOriginalContext()
 * @method string getMaxResults()
 */
class ListProductQuotaDimensions extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProductCode($value)
    {
        $this->data['ProductCode'] = $value;
        $this->options['form_params']['ProductCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNextToken($value)
    {
        $this->data['NextToken'] = $value;
        $this->options['form_params']['NextToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withQuotaCategory($value)
    {
        $this->data['QuotaCategory'] = $value;
        $this->options['form_params']['QuotaCategory'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOriginalContext($value)
    {
        $this->data['OriginalContext'] = $value;
        $this->options['form_params']['OriginalContext'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxResults($value)
    {
        $this->data['MaxResults'] = $value;
        $this->options['form_params']['MaxResults'] = $value;

        return $this;
    }
}

/**
 * @method string getProductCode()
 * @method string getQuotaActionCode()
 * @method string getGroupCode()
 * @method string getNextToken()
 * @method string getSortOrder()
 * @method string getKeyWord()
 * @method string getQuotaCategory()
 * @method string getOriginalContext()
 * @method string getMaxResults()
 * @method string getSortField()
 * @method array getDimensions()
 */
class ListProductQuotas extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProductCode($value)
    {
        $this->data['ProductCode'] = $value;
        $this->options['form_params']['ProductCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withQuotaActionCode($value)
    {
        $this->data['QuotaActionCode'] = $value;
        $this->options['form_params']['QuotaActionCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupCode($value)
    {
        $this->data['GroupCode'] = $value;
        $this->options['form_params']['GroupCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNextToken($value)
    {
        $this->data['NextToken'] = $value;
        $this->options['form_params']['NextToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSortOrder($value)
    {
        $this->data['SortOrder'] = $value;
        $this->options['form_params']['SortOrder'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withKeyWord($value)
    {
        $this->data['KeyWord'] = $value;
        $this->options['form_params']['KeyWord'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withQuotaCategory($value)
    {
        $this->data['QuotaCategory'] = $value;
        $this->options['form_params']['QuotaCategory'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOriginalContext($value)
    {
        $this->data['OriginalContext'] = $value;
        $this->options['form_params']['OriginalContext'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxResults($value)
    {
        $this->data['MaxResults'] = $value;
        $this->options['form_params']['MaxResults'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSortField($value)
    {
        $this->data['SortField'] = $value;
        $this->options['form_params']['SortField'] = $value;

        return $this;
    }

    /**
     * @param array $dimensions
     *
     * @return $this
     */
	public function withDimensions(array $dimensions)
	{
	    $this->data['Dimensions'] = $dimensions;
		foreach ($dimensions as $depth1 => $depth1Value) {
			if(isset($depth1Value['Key'])){
				$this->options['form_params']['Dimensions.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['form_params']['Dimensions.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
		}

		return $this;
    }
}

/**
 * @method string getOriginalContext()
 * @method string getNextToken()
 * @method string getMaxResults()
 */
class ListProducts extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOriginalContext($value)
    {
        $this->data['OriginalContext'] = $value;
        $this->options['form_params']['OriginalContext'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNextToken($value)
    {
        $this->data['NextToken'] = $value;
        $this->options['form_params']['NextToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxResults($value)
    {
        $this->data['MaxResults'] = $value;
        $this->options['form_params']['MaxResults'] = $value;

        return $this;
    }
}

/**
 * @method string getProductCode()
 * @method string getQuotaActionCode()
 * @method string getNextToken()
 * @method array getQuotaDimensions()
 * @method string getOriginalContext()
 * @method string getMaxResults()
 * @method string getAlarmName()
 */
class ListQuotaAlarms extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProductCode($value)
    {
        $this->data['ProductCode'] = $value;
        $this->options['form_params']['ProductCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withQuotaActionCode($value)
    {
        $this->data['QuotaActionCode'] = $value;
        $this->options['form_params']['QuotaActionCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNextToken($value)
    {
        $this->data['NextToken'] = $value;
        $this->options['form_params']['NextToken'] = $value;

        return $this;
    }

    /**
     * @param array $quotaDimensions
     *
     * @return $this
     */
	public function withQuotaDimensions(array $quotaDimensions)
	{
	    $this->data['QuotaDimensions'] = $quotaDimensions;
		foreach ($quotaDimensions as $depth1 => $depth1Value) {
			if(isset($depth1Value['Key'])){
				$this->options['form_params']['QuotaDimensions.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['form_params']['QuotaDimensions.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOriginalContext($value)
    {
        $this->data['OriginalContext'] = $value;
        $this->options['form_params']['OriginalContext'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxResults($value)
    {
        $this->data['MaxResults'] = $value;
        $this->options['form_params']['MaxResults'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlarmName($value)
    {
        $this->data['AlarmName'] = $value;
        $this->options['form_params']['AlarmName'] = $value;

        return $this;
    }
}

/**
 * @method string getProductCode()
 * @method string getQuotaActionCode()
 * @method string getNextToken()
 * @method string getKeyWord()
 * @method string getQuotaCategory()
 * @method string getOriginalContext()
 * @method string getMaxResults()
 * @method string getStatus()
 * @method array getDimensions()
 */
class ListQuotaApplications extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProductCode($value)
    {
        $this->data['ProductCode'] = $value;
        $this->options['form_params']['ProductCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withQuotaActionCode($value)
    {
        $this->data['QuotaActionCode'] = $value;
        $this->options['form_params']['QuotaActionCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNextToken($value)
    {
        $this->data['NextToken'] = $value;
        $this->options['form_params']['NextToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withKeyWord($value)
    {
        $this->data['KeyWord'] = $value;
        $this->options['form_params']['KeyWord'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withQuotaCategory($value)
    {
        $this->data['QuotaCategory'] = $value;
        $this->options['form_params']['QuotaCategory'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOriginalContext($value)
    {
        $this->data['OriginalContext'] = $value;
        $this->options['form_params']['OriginalContext'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxResults($value)
    {
        $this->data['MaxResults'] = $value;
        $this->options['form_params']['MaxResults'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStatus($value)
    {
        $this->data['Status'] = $value;
        $this->options['form_params']['Status'] = $value;

        return $this;
    }

    /**
     * @param array $dimensions
     *
     * @return $this
     */
	public function withDimensions(array $dimensions)
	{
	    $this->data['Dimensions'] = $dimensions;
		foreach ($dimensions as $depth1 => $depth1Value) {
			if(isset($depth1Value['Key'])){
				$this->options['form_params']['Dimensions.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['form_params']['Dimensions.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
		}

		return $this;
    }
}

/**
 * @method string getProductCode()
 * @method string getQuotaActionCode()
 * @method string getBatchQuotaApplicationId()
 * @method string getNextToken()
 * @method string getQuotaCategory()
 * @method string getOriginalContext()
 * @method string getAliyunUid()
 * @method string getMaxResults()
 * @method string getStatus()
 */
class ListQuotaApplicationsDetailForTemplate extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProductCode($value)
    {
        $this->data['ProductCode'] = $value;
        $this->options['form_params']['ProductCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withQuotaActionCode($value)
    {
        $this->data['QuotaActionCode'] = $value;
        $this->options['form_params']['QuotaActionCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBatchQuotaApplicationId($value)
    {
        $this->data['BatchQuotaApplicationId'] = $value;
        $this->options['form_params']['BatchQuotaApplicationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNextToken($value)
    {
        $this->data['NextToken'] = $value;
        $this->options['form_params']['NextToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withQuotaCategory($value)
    {
        $this->data['QuotaCategory'] = $value;
        $this->options['form_params']['QuotaCategory'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOriginalContext($value)
    {
        $this->data['OriginalContext'] = $value;
        $this->options['form_params']['OriginalContext'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAliyunUid($value)
    {
        $this->data['AliyunUid'] = $value;
        $this->options['form_params']['AliyunUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxResults($value)
    {
        $this->data['MaxResults'] = $value;
        $this->options['form_params']['MaxResults'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStatus($value)
    {
        $this->data['Status'] = $value;
        $this->options['form_params']['Status'] = $value;

        return $this;
    }
}

/**
 * @method string getProductCode()
 * @method string getQuotaActionCode()
 * @method string getBatchQuotaApplicationId()
 * @method string getNextToken()
 * @method string getQuotaCategory()
 * @method string getOriginalContext()
 * @method string getApplyStartTime()
 * @method string getApplyEndTime()
 * @method string getMaxResults()
 */
class ListQuotaApplicationsForTemplate extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProductCode($value)
    {
        $this->data['ProductCode'] = $value;
        $this->options['form_params']['ProductCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withQuotaActionCode($value)
    {
        $this->data['QuotaActionCode'] = $value;
        $this->options['form_params']['QuotaActionCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBatchQuotaApplicationId($value)
    {
        $this->data['BatchQuotaApplicationId'] = $value;
        $this->options['form_params']['BatchQuotaApplicationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNextToken($value)
    {
        $this->data['NextToken'] = $value;
        $this->options['form_params']['NextToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withQuotaCategory($value)
    {
        $this->data['QuotaCategory'] = $value;
        $this->options['form_params']['QuotaCategory'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOriginalContext($value)
    {
        $this->data['OriginalContext'] = $value;
        $this->options['form_params']['OriginalContext'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApplyStartTime($value)
    {
        $this->data['ApplyStartTime'] = $value;
        $this->options['form_params']['ApplyStartTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApplyEndTime($value)
    {
        $this->data['ApplyEndTime'] = $value;
        $this->options['form_params']['ApplyEndTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxResults($value)
    {
        $this->data['MaxResults'] = $value;
        $this->options['form_params']['MaxResults'] = $value;

        return $this;
    }
}

/**
 * @method string getProductCode()
 * @method string getQuotaActionCode()
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getId()
 * @method string getQuotaCategory()
 * @method string getOriginalContext()
 * @method string getMaxResults()
 * @method array getDimensions()
 */
class ListQuotaApplicationTemplates extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProductCode($value)
    {
        $this->data['ProductCode'] = $value;
        $this->options['form_params']['ProductCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withQuotaActionCode($value)
    {
        $this->data['QuotaActionCode'] = $value;
        $this->options['form_params']['QuotaActionCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withQuotaCategory($value)
    {
        $this->data['QuotaCategory'] = $value;
        $this->options['form_params']['QuotaCategory'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOriginalContext($value)
    {
        $this->data['OriginalContext'] = $value;
        $this->options['form_params']['OriginalContext'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxResults($value)
    {
        $this->data['MaxResults'] = $value;
        $this->options['form_params']['MaxResults'] = $value;

        return $this;
    }

    /**
     * @param array $dimensions
     *
     * @return $this
     */
	public function withDimensions(array $dimensions)
	{
	    $this->data['Dimensions'] = $dimensions;
		foreach ($dimensions as $depth1 => $depth1Value) {
			if(isset($depth1Value['Key'])){
				$this->options['form_params']['Dimensions.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['form_params']['Dimensions.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
		}

		return $this;
    }
}

/**
 * @method string getOriginalContext()
 * @method string getServiceStatus()
 */
class ModifyQuotaTemplateServiceStatus extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOriginalContext($value)
    {
        $this->data['OriginalContext'] = $value;
        $this->options['form_params']['OriginalContext'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceStatus($value)
    {
        $this->data['ServiceStatus'] = $value;
        $this->options['form_params']['ServiceStatus'] = $value;

        return $this;
    }
}

/**
 * @method string getProductCode()
 * @method string getQuotaActionCode()
 * @method string getDesireValue()
 * @method string getEffectiveTime()
 * @method string getId()
 * @method string getQuotaCategory()
 * @method $this withQuotaCategory($value)
 * @method string getOriginalContext()
 * @method string getExpireTime()
 * @method string getEnvLanguage()
 * @method string getNoticeType()
 * @method array getDimensions()
 */
class ModifyTemplateQuotaItem extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProductCode($value)
    {
        $this->data['ProductCode'] = $value;
        $this->options['form_params']['ProductCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withQuotaActionCode($value)
    {
        $this->data['QuotaActionCode'] = $value;
        $this->options['form_params']['QuotaActionCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDesireValue($value)
    {
        $this->data['DesireValue'] = $value;
        $this->options['form_params']['DesireValue'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEffectiveTime($value)
    {
        $this->data['EffectiveTime'] = $value;
        $this->options['form_params']['EffectiveTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['form_params']['Id'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOriginalContext($value)
    {
        $this->data['OriginalContext'] = $value;
        $this->options['form_params']['OriginalContext'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExpireTime($value)
    {
        $this->data['ExpireTime'] = $value;
        $this->options['form_params']['ExpireTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnvLanguage($value)
    {
        $this->data['EnvLanguage'] = $value;
        $this->options['form_params']['EnvLanguage'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNoticeType($value)
    {
        $this->data['NoticeType'] = $value;
        $this->options['form_params']['NoticeType'] = $value;

        return $this;
    }

    /**
     * @param array $dimensions
     *
     * @return $this
     */
	public function withDimensions(array $dimensions)
	{
	    $this->data['Dimensions'] = $dimensions;
		foreach ($dimensions as $depth1 => $depth1Value) {
			if(isset($depth1Value['Key'])){
				$this->options['form_params']['Dimensions.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['form_params']['Dimensions.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
		}

		return $this;
    }
}

/**
 * @method string getOriginalContext()
 * @method string getApplicationId()
 */
class RemindQuotaApplicationApproval extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOriginalContext($value)
    {
        $this->data['OriginalContext'] = $value;
        $this->options['form_params']['OriginalContext'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApplicationId($value)
    {
        $this->data['ApplicationId'] = $value;
        $this->options['form_params']['ApplicationId'] = $value;

        return $this;
    }
}

/**
 * @method string getWebHook()
 * @method string getThreshold()
 * @method string getThresholdType()
 * @method string getOriginalContext()
 * @method string getThresholdPercent()
 * @method string getAlarmId()
 * @method string getAlarmName()
 */
class UpdateQuotaAlarm extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWebHook($value)
    {
        $this->data['WebHook'] = $value;
        $this->options['form_params']['WebHook'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withThreshold($value)
    {
        $this->data['Threshold'] = $value;
        $this->options['form_params']['Threshold'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withThresholdType($value)
    {
        $this->data['ThresholdType'] = $value;
        $this->options['form_params']['ThresholdType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOriginalContext($value)
    {
        $this->data['OriginalContext'] = $value;
        $this->options['form_params']['OriginalContext'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withThresholdPercent($value)
    {
        $this->data['ThresholdPercent'] = $value;
        $this->options['form_params']['ThresholdPercent'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlarmId($value)
    {
        $this->data['AlarmId'] = $value;
        $this->options['form_params']['AlarmId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlarmName($value)
    {
        $this->data['AlarmName'] = $value;
        $this->options['form_params']['AlarmName'] = $value;

        return $this;
    }
}
