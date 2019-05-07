<?php

namespace AlibabaCloud\Afs\V20180112;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Rpc;

/**
 * Resolve Api based on the method name.
 *
 * @method DescribeCaptchaOrder describeCaptchaOrder(array $options = [])
 * @method UpdateConfigName updateConfigName(array $options = [])
 * @method DescribeOrderInfo describeOrderInfo(array $options = [])
 * @method DescribePersonMachineList describePersonMachineList(array $options = [])
 * @method SetEarlyWarning setEarlyWarning(array $options = [])
 * @method DescribeConfigName describeConfigName(array $options = [])
 * @method CreateConfiguration createConfiguration(array $options = [])
 * @method AnalyzeNvc analyzeNvc(array $options = [])
 * @method ConfigurationStyle configurationStyle(array $options = [])
 * @method AuthenticateSig authenticateSig(array $options = [])
 * @method DescribeCaptchaRisk describeCaptchaRisk(array $options = [])
 * @method DescribeCaptchaMin describeCaptchaMin(array $options = [])
 * @method DescribeEarlyWarning describeEarlyWarning(array $options = [])
 * @method DescribeCaptchaDay describeCaptchaDay(array $options = [])
 * @method DescribeCaptchaIpCity describeCaptchaIpCity(array $options = [])
 */
class AfsApiResolver
{
    use ApiResolverTrait;
}

class V20180112Rpc extends Rpc
{
    /** @var string */
    public $product = 'afs';

    /** @var string */
    public $version = '2018-01-12';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeCaptchaOrder extends V20180112Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getConfigName()
 * @method $this withConfigName($value)
 * @method string getRefExtId()
 * @method $this withRefExtId($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class UpdateConfigName extends V20180112Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeOrderInfo extends V20180112Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribePersonMachineList extends V20180112Rpc
{
}

/**
 * @method string getTimeEnd()
 * @method $this withTimeEnd($value)
 * @method string getWarnOpen()
 * @method $this withWarnOpen($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getChannel()
 * @method $this withChannel($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getTimeOpen()
 * @method $this withTimeOpen($value)
 * @method string getTimeBegin()
 * @method $this withTimeBegin($value)
 * @method string getFrequency()
 * @method $this withFrequency($value)
 */
class SetEarlyWarning extends V20180112Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeConfigName extends V20180112Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getConfigurationName()
 * @method $this withConfigurationName($value)
 * @method string getMaxPV()
 * @method $this withMaxPV($value)
 * @method string getConfigurationMethod()
 * @method $this withConfigurationMethod($value)
 * @method string getApplyType()
 * @method $this withApplyType($value)
 * @method string getScene()
 * @method $this withScene($value)
 */
class CreateConfiguration extends V20180112Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getData()
 * @method $this withData($value)
 * @method string getScoreJsonStr()
 * @method $this withScoreJsonStr($value)
 */
class AnalyzeNvc extends V20180112Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getConfigurationMethod()
 * @method $this withConfigurationMethod($value)
 * @method string getRefExtId()
 * @method $this withRefExtId($value)
 * @method string getApplyType()
 * @method $this withApplyType($value)
 * @method string getScene()
 * @method $this withScene($value)
 */
class ConfigurationStyle extends V20180112Rpc
{
}

/**
 * @method string getSig()
 * @method $this withSig($value)
 * @method string getRemoteIp()
 * @method $this withRemoteIp($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 * @method string getSessionId()
 * @method $this withSessionId($value)
 * @method string getToken()
 * @method $this withToken($value)
 * @method string getScene()
 * @method $this withScene($value)
 */
class AuthenticateSig extends V20180112Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getConfigName()
 * @method $this withConfigName($value)
 * @method string getRefExtId()
 * @method $this withRefExtId($value)
 * @method string getTime()
 * @method $this withTime($value)
 */
class DescribeCaptchaRisk extends V20180112Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getConfigName()
 * @method $this withConfigName($value)
 * @method string getRefExtId()
 * @method $this withRefExtId($value)
 * @method string getTime()
 * @method $this withTime($value)
 * @method string getType()
 * @method $this withType($value)
 */
class DescribeCaptchaMin extends V20180112Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeEarlyWarning extends V20180112Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getConfigName()
 * @method $this withConfigName($value)
 * @method string getRefExtId()
 * @method $this withRefExtId($value)
 * @method string getTime()
 * @method $this withTime($value)
 * @method string getType()
 * @method $this withType($value)
 */
class DescribeCaptchaDay extends V20180112Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getConfigName()
 * @method $this withConfigName($value)
 * @method string getRefExtId()
 * @method $this withRefExtId($value)
 * @method string getTime()
 * @method $this withTime($value)
 * @method string getType()
 * @method $this withType($value)
 */
class DescribeCaptchaIpCity extends V20180112Rpc
{
}
