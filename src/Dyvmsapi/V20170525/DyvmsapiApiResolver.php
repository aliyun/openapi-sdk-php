<?php

namespace AlibabaCloud\Dyvmsapi\V20170525;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Rpc;

/**
 * Resolve Api based on the method name.
 *
 * @method SmartCallOperate smartCallOperate(array $options = [])
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

class V20170525Rpc extends Rpc
{
    /** @var string */
    public $product = 'Dyvmsapi';

    /** @var string */
    public $version = '2017-05-25';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getCallId()
 * @method $this withCallId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getParam()
 * @method $this withParam($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCommand()
 * @method $this withCommand($value)
 */
class SmartCallOperate extends V20170525Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAuditStatus()
 * @method $this withAuditStatus($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class QueryRobotInfoList extends V20170525Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getQueryDate()
 * @method $this withQueryDate($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getCallee()
 * @method $this withCallee($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class QueryCallDetailByTaskId extends V20170525Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getEarlyMediaAsr()
 * @method $this withEarlyMediaAsr($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getTtsParamHead()
 * @method $this withTtsParamHead($value)
 * @method string getTaskName()
 * @method $this withTaskName($value)
 * @method string getTtsParam()
 * @method $this withTtsParam($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDialogId()
 * @method $this withDialogId($value)
 * @method string getCalledNumber()
 * @method $this withCalledNumber($value)
 * @method string getScheduleTime()
 * @method $this withScheduleTime($value)
 * @method string getCalledShowNumber()
 * @method $this withCalledShowNumber($value)
 * @method string getCorpName()
 * @method $this withCorpName($value)
 * @method string getScheduleCall()
 * @method $this withScheduleCall($value)
 * @method string getIsSelfLine()
 * @method $this withIsSelfLine($value)
 */
class BatchRobotSmartCall extends V20170525Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 */
class AddRtcAccount extends V20170525Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 * @method string getIsCustomAccount()
 * @method $this withIsCustomAccount($value)
 */
class GetRtcToken extends V20170525Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 */
class VoipAddAccount extends V20170525Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getVoipId()
 * @method $this withVoipId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 * @method string getIsCustomAccount()
 * @method $this withIsCustomAccount($value)
 */
class VoipGetToken extends V20170525Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 */
class AddVoipAccount extends V20170525Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getVoipId()
 * @method $this withVoipId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class GetVoipToken extends V20170525Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getVoiceCodeParam()
 * @method $this withVoiceCodeParam($value)
 * @method string getEarlyMediaAsr()
 * @method $this withEarlyMediaAsr($value)
 * @method string getSpeed()
 * @method $this withSpeed($value)
 * @method string getAsrBaseId()
 * @method $this withAsrBaseId($value)
 * @method string getSessionTimeout()
 * @method $this withSessionTimeout($value)
 * @method string getDynamicId()
 * @method $this withDynamicId($value)
 * @method string getCalledNumber()
 * @method $this withCalledNumber($value)
 * @method string getTtsSpeed()
 * @method $this withTtsSpeed($value)
 * @method string getVoiceCode()
 * @method $this withVoiceCode($value)
 * @method string getCalledShowNumber()
 * @method $this withCalledShowNumber($value)
 * @method string getActionCodeTimeBreak()
 * @method $this withActionCodeTimeBreak($value)
 * @method string getTtsConf()
 * @method $this withTtsConf($value)
 * @method string getActionCodeBreak()
 * @method $this withActionCodeBreak($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getRecordFlag()
 * @method $this withRecordFlag($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTtsVolume()
 * @method $this withTtsVolume($value)
 * @method string getVolume()
 * @method $this withVolume($value)
 * @method string getMuteTime()
 * @method $this withMuteTime($value)
 * @method string getOutId()
 * @method $this withOutId($value)
 * @method string getAsrModelId()
 * @method $this withAsrModelId($value)
 * @method string getPauseTime()
 * @method $this withPauseTime($value)
 * @method string getTtsStyle()
 * @method $this withTtsStyle($value)
 */
class SmartCall extends V20170525Rpc
{
}

/**
 * @method string getCallId()
 * @method $this withCallId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getQueryDate()
 * @method $this withQueryDate($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getProdId()
 * @method $this withProdId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class QueryCallDetailByCallId extends V20170525Rpc
{
}

/**
 * @method string getCallId()
 * @method $this withCallId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CancelCall extends V20170525Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getRecordFlag()
 * @method $this withRecordFlag($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCallerShowNumber()
 * @method $this withCallerShowNumber($value)
 * @method string getSessionTimeout()
 * @method $this withSessionTimeout($value)
 * @method string getCalledNumber()
 * @method $this withCalledNumber($value)
 * @method string getCalledShowNumber()
 * @method $this withCalledShowNumber($value)
 * @method string getOutId()
 * @method $this withOutId($value)
 * @method string getAsrFlag()
 * @method $this withAsrFlag($value)
 * @method string getAsrModelId()
 * @method $this withAsrModelId($value)
 * @method string getCallerNumber()
 * @method $this withCallerNumber($value)
 */
class ClickToDial extends V20170525Rpc
{
}

/**
 * @method string getByeCode()
 * @method $this withByeCode($value)
 * @method array getMenuKeyMap()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getStartTtsParams()
 * @method $this withStartTtsParams($value)
 * @method string getPlayTimes()
 * @method $this withPlayTimes($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTimeout()
 * @method $this withTimeout($value)
 * @method string getStartCode()
 * @method $this withStartCode($value)
 * @method string getCalledNumber()
 * @method $this withCalledNumber($value)
 * @method string getCalledShowNumber()
 * @method $this withCalledShowNumber($value)
 * @method string getOutId()
 * @method $this withOutId($value)
 * @method string getByeTtsParams()
 * @method $this withByeTtsParams($value)
 */
class IvrCall extends V20170525Rpc
{

    /**
     * @param array $menuKeyMap
     *
     * @return $this
     */
    public function withMenuKeyMap(array $menuKeyMap)
    {
        $this->data['MenuKeyMap'] = $menuKeyMap;
        foreach ($menuKeyMap as $depth1 => $depth1Value) {
            $this->options['query']['MenuKeyMap.' . ($depth1 + 1) . '.Code'] = $depth1Value['Code'];
            $this->options['query']['MenuKeyMap.' . ($depth1 + 1) . '.TtsParams'] = $depth1Value['TtsParams'];
            $this->options['query']['MenuKeyMap.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getTtsCode()
 * @method $this withTtsCode($value)
 * @method string getPlayTimes()
 * @method $this withPlayTimes($value)
 * @method string getTtsParam()
 * @method $this withTtsParam($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSpeed()
 * @method $this withSpeed($value)
 * @method string getVolume()
 * @method $this withVolume($value)
 * @method string getCalledNumber()
 * @method $this withCalledNumber($value)
 * @method string getCalledShowNumber()
 * @method $this withCalledShowNumber($value)
 * @method string getOutId()
 * @method $this withOutId($value)
 */
class SingleCallByTts extends V20170525Rpc
{
}

/**
 * @method string getVolume()
 * @method $this withVolume($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getCalledNumber()
 * @method $this withCalledNumber($value)
 * @method string getVoiceCode()
 * @method $this withVoiceCode($value)
 * @method string getCalledShowNumber()
 * @method $this withCalledShowNumber($value)
 * @method string getPlayTimes()
 * @method $this withPlayTimes($value)
 * @method string getOutId()
 * @method $this withOutId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSpeed()
 * @method $this withSpeed($value)
 */
class SingleCallByVoice extends V20170525Rpc
{
}
