<?php

namespace AlibabaCloud\Dyvmsapi\V20170525;

use AlibabaCloud\Rpc;

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
     * @param array $value
     *
     * @return $this
     */
    public function withMenuKeyMap(array $value)
    {
        $this->data['MenuKeyMap'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['MenuKeyMap.' . ($i + 1) . '.Code'] = $value[$i]['Code'];
            $this->options['query']['MenuKeyMap.' . ($i + 1) . '.TtsParams'] = $value[$i]['TtsParams'];
            $this->options['query']['MenuKeyMap.' . ($i + 1) . '.Key'] = $value[$i]['Key'];
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
