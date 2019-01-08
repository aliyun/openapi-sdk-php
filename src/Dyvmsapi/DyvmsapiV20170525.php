<?php

namespace AlibabaCloud\Dyvmsapi;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the Dyvmsapi based on the method name as the Api name.
 *
 * @package   AlibabaCloud\Dyvmsapi
 *
 * @method static V20170525\AddRtcAccount addRtcAccount(array $options = [])
 * @method static V20170525\AddVoipAccount addVoipAccount(array $options = [])
 * @method static V20170525\BatchRobotSmartCall batchRobotSmartCall(array $options = [])
 * @method static V20170525\CancelCall cancelCall(array $options = [])
 * @method static V20170525\ClickToDial clickToDial(array $options = [])
 * @method static V20170525\GetRtcToken getRtcToken(array $options = [])
 * @method static V20170525\GetVoipToken getVoipToken(array $options = [])
 * @method static V20170525\IvrCall ivrCall(array $options = [])
 * @method static V20170525\QueryCallDetailByCallId queryCallDetailByCallId(array $options = [])
 * @method static V20170525\QueryCallDetailByTaskId queryCallDetailByTaskId(array $options = [])
 * @method static V20170525\QueryRobotInfoList queryRobotInfoList(array $options = [])
 * @method static V20170525\SingleCallByTts singleCallByTts(array $options = [])
 * @method static V20170525\SingleCallByVoice singleCallByVoice(array $options = [])
 * @method static V20170525\SmartCall smartCall(array $options = [])
 * @method static V20170525\VoipAddAccount voipAddAccount(array $options = [])
 * @method static V20170525\VoipGetToken voipGetToken(array $options = [])
 */
class DyvmsapiV20170525
{
    use ApiResolverTrait;

    /**
     * @var string
     */
    protected $namespace = 'AlibabaCloud\\Dyvmsapi\\V20170525';
}
