<?php

namespace AlibabaCloud\Sms;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the Sms based on the method name as the Api name.
 *
 * @package   AlibabaCloud\Sms
 *
 * @method V20160927\BatchSendSms batchSendSms(array $options = [])
 * @method V20160927\CreateMarketing createMarketing(array $options = [])
 * @method V20160927\CreateSign createSign(array $options = [])
 * @method V20160927\CreateTemplate createTemplate(array $options = [])
 * @method V20160927\DeleteSign deleteSign(array $options = [])
 * @method V20160927\DeleteTemplate deleteTemplate(array $options = [])
 * @method V20160927\DescAccountSummary descAccountSummary(array $options = [])
 * @method V20160927\ModifyAccountSummary modifyAccountSummary(array $options = [])
 * @method V20160927\ModifyDayu modifyDayu(array $options = [])
 * @method V20160927\QuerySignByParam querySignByParam(array $options = [])
 * @method V20160927\QuerySmsCurrentStatistics querySmsCurrentStatistics(array $options = [])
 * @method V20160927\QuerySmsDetailByPage querySmsDetailByPage(array $options = [])
 * @method V20160927\QuerySmsFailByPage querySmsFailByPage(array $options = [])
 * @method V20160927\QuerySmsStatistics querySmsStatistics(array $options = [])
 * @method V20160927\QuerySmsTemplateInfoList querySmsTemplateInfoList(array $options = [])
 * @method V20160927\QueryTemplateByParam queryTemplateByParam(array $options = [])
 * @method V20160927\SingleSendSms singleSendSms(array $options = [])
 */
class SmsV20160927ApiResolver
{
    use ApiResolverTrait;

    /**
     * @var string
     */
    protected $namespace = 'AlibabaCloud\\Sms\\V20160927';
}
