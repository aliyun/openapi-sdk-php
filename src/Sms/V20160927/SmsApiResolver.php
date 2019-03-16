<?php

namespace AlibabaCloud\Sms\V20160927;

use AlibabaCloud\ApiResolverTrait;

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
