<?php

namespace AlibabaCloud\Afs\V20180112;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method UpdateConfigName updateConfigName(array $options = [])
 * @method DescribeCaptchaOrder describeCaptchaOrder(array $options = [])
 * @method DescribeOrderInfo describeOrderInfo(array $options = [])
 * @method SetEarlyWarning setEarlyWarning(array $options = [])
 * @method DescribePersonMachineList describePersonMachineList(array $options = [])
 * @method DescribeEarlyWarning describeEarlyWarning(array $options = [])
 * @method DescribeConfigName describeConfigName(array $options = [])
 * @method DescribeCaptchaRisk describeCaptchaRisk(array $options = [])
 * @method DescribeCaptchaMin describeCaptchaMin(array $options = [])
 * @method DescribeCaptchaIpCity describeCaptchaIpCity(array $options = [])
 * @method DescribeCaptchaDay describeCaptchaDay(array $options = [])
 * @method CreateConfiguration createConfiguration(array $options = [])
 * @method ConfigurationStyle configurationStyle(array $options = [])
 * @method AuthenticateSig authenticateSig(array $options = [])
 * @method AnalyzeNvc analyzeNvc(array $options = [])
 */
class AfsApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
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
 * @method string getConfigName()
 * @method $this withConfigName($value)
 * @method string getRefExtId()
 * @method $this withRefExtId($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class UpdateConfigName extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeCaptchaOrder extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeOrderInfo extends Rpc
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
class SetEarlyWarning extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribePersonMachineList extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeEarlyWarning extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeConfigName extends Rpc
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
class DescribeCaptchaRisk extends Rpc
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
class DescribeCaptchaMin extends Rpc
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
class DescribeCaptchaIpCity extends Rpc
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
class DescribeCaptchaDay extends Rpc
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
class CreateConfiguration extends Rpc
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
class ConfigurationStyle extends Rpc
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
class AuthenticateSig extends Rpc
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
class AnalyzeNvc extends Rpc
{
}
