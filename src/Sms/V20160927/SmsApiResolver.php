<?php

namespace AlibabaCloud\Sms\V20160927;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Rpc;

/**
 * Resolve Api based on the method name.
 *
 * @method ModifyAccountSummary modifyAccountSummary(array $options = [])
 * @method QuerySmsTemplateInfoList querySmsTemplateInfoList(array $options = [])
 * @method QuerySmsCurrentStatistics querySmsCurrentStatistics(array $options = [])
 * @method BatchSendSms batchSendSms(array $options = [])
 * @method ModifyDayu modifyDayu(array $options = [])
 * @method SingleSendSms singleSendSms(array $options = [])
 * @method QuerySmsFailByPage querySmsFailByPage(array $options = [])
 * @method QuerySmsStatistics querySmsStatistics(array $options = [])
 * @method QueryTemplateByParam queryTemplateByParam(array $options = [])
 * @method DeleteTemplate deleteTemplate(array $options = [])
 * @method DescAccountSummary descAccountSummary(array $options = [])
 * @method QuerySignByParam querySignByParam(array $options = [])
 * @method QuerySmsDetailByPage querySmsDetailByPage(array $options = [])
 * @method CreateMarketing createMarketing(array $options = [])
 * @method CreateSign createSign(array $options = [])
 * @method CreateTemplate createTemplate(array $options = [])
 * @method DeleteSign deleteSign(array $options = [])
 */
class SmsApiResolver
{
    use ApiResolverTrait;
}

class V20160927Rpc extends Rpc
{
    /** @var string */
    public $product = 'Sms';

    /** @var string */
    public $version = '2016-09-27';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getMonthQuota()
 * @method $this withMonthQuota($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDailyQuota()
 * @method $this withDailyQuota($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyAccountSummary extends V20160927Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class QuerySmsTemplateInfoList extends V20160927Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTagCode()
 * @method $this withTagCode($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getEndDateStr()
 * @method $this withEndDateStr($value)
 * @method string getTemplateType()
 * @method $this withTemplateType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getStartDateStr()
 * @method $this withStartDateStr($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTemplateCode()
 * @method $this withTemplateCode($value)
 */
class QuerySmsCurrentStatistics extends V20160927Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSmsResourceOwnerId()
 * @method $this withSmsResourceOwnerId($value)
 * @method string getData()
 * @method $this withData($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getMessageID()
 * @method $this withMessageID($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 */
class BatchSendSms extends V20160927Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyDayu extends V20160927Rpc
{
}

/**
 * @method string getRecNum()
 * @method $this withRecNum($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSignName()
 * @method $this withSignName($value)
 * @method string getParamString()
 * @method $this withParamString($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTemplateCode()
 * @method $this withTemplateCode($value)
 */
class SingleSendSms extends V20160927Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSmsType()
 * @method $this withSmsType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getQueryTime()
 * @method $this withQueryTime($value)
 */
class QuerySmsFailByPage extends V20160927Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSmsType()
 * @method $this withSmsType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class QuerySmsStatistics extends V20160927Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getFromType()
 * @method $this withFromType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getKeyWord()
 * @method $this withKeyWord($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class QueryTemplateByParam extends V20160927Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getFromType()
 * @method $this withFromType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 */
class DeleteTemplate extends V20160927Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 */
class DescAccountSummary extends V20160927Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getFromType()
 * @method $this withFromType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getKeyWord()
 * @method $this withKeyWord($value)
 */
class QuerySignByParam extends V20160927Rpc
{
}

/**
 * @method string getRecNum()
 * @method $this withRecNum($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getQueryTime()
 * @method $this withQueryTime($value)
 */
class QuerySmsDetailByPage extends V20160927Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CreateMarketing extends V20160927Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSignName()
 * @method $this withSignName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getFileNames()
 * @method $this withFileNames($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getFromType()
 * @method $this withFromType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getType()
 * @method $this withType($value)
 */
class CreateSign extends V20160927Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSmsType()
 * @method $this withSmsType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getTemplateType()
 * @method $this withTemplateType($value)
 * @method string getTemplateName()
 * @method $this withTemplateName($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getFromType()
 * @method $this withFromType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSmsContent()
 * @method $this withSmsContent($value)
 */
class CreateTemplate extends V20160927Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getFromType()
 * @method $this withFromType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSignId()
 * @method $this withSignId($value)
 */
class DeleteSign extends V20160927Rpc
{
}
