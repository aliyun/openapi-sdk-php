<?php

namespace AlibabaCloud\Dyvmsapi\V20170525;

use AlibabaCloud\ApiResolverTrait;

/**
 * Resolve Api based on the method name.
 *
 * @method QueryRobotInfoList queryRobotInfoList(array $options = [])
 * @method QueryCallDetailByTaskId queryCallDetailByTaskId(array $options = [])
 * @method BatchRobotSmartCall batchRobotSmartCall(array $options = [])
 * @method AddRtcAccount addRtcAccount(array $options = [])
 * @method GetRtcToken getRtcToken(array $options = [])
 * @method VoipAddAccount voipAddAccount(array $options = [])
 * @method VoipGetToken voipGetToken(array $options = [])
 * @method AddVoipAccount addVoipAccount(array $options = [])
 * @method GetVoipToken getVoipToken(array $options = [])
 * @method SmartCall smartCall(array $options = [])
 * @method QueryCallDetailByCallId queryCallDetailByCallId(array $options = [])
 * @method CancelCall cancelCall(array $options = [])
 * @method ClickToDial clickToDial(array $options = [])
 * @method IvrCall ivrCall(array $options = [])
 * @method SingleCallByTts singleCallByTts(array $options = [])
 * @method SingleCallByVoice singleCallByVoice(array $options = [])
 */
class DyvmsapiApiResolver
{
    use ApiResolverTrait;
}
