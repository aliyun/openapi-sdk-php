<?php

namespace AlibabaCloud\Sms\V20160927;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the Sms based on the method name as the Api name.
 *
 * @package   AlibabaCloud\Sms\V20160927
 *
 * @method BatchSendSms batchSendSms(array $options = [])
 * @method CreateMarketing createMarketing(array $options = [])
 * @method CreateSign createSign(array $options = [])
 * @method CreateTemplate createTemplate(array $options = [])
 * @method DeleteSign deleteSign(array $options = [])
 * @method DeleteTemplate deleteTemplate(array $options = [])
 * @method DescAccountSummary descAccountSummary(array $options = [])
 * @method ModifyAccountSummary modifyAccountSummary(array $options = [])
 * @method ModifyDayu modifyDayu(array $options = [])
 * @method QuerySignByParam querySignByParam(array $options = [])
 * @method QuerySmsCurrentStatistics querySmsCurrentStatistics(array $options = [])
 * @method QuerySmsDetailByPage querySmsDetailByPage(array $options = [])
 * @method QuerySmsFailByPage querySmsFailByPage(array $options = [])
 * @method QuerySmsStatistics querySmsStatistics(array $options = [])
 * @method QuerySmsTemplateInfoList querySmsTemplateInfoList(array $options = [])
 * @method QueryTemplateByParam queryTemplateByParam(array $options = [])
 * @method SingleSendSms singleSendSms(array $options = [])
 */
class SmsApiResolver
{
    use ApiResolverTrait;
}
