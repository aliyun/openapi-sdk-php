<?php

namespace AlibabaCloud\Dyvmsapi\V20170525;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddRtcAccount addRtcAccount(array $options = [])
 * @method AddVirtualNumberRelation addVirtualNumberRelation(array $options = [])
 * @method BatchRobotSmartCall batchRobotSmartCall(array $options = [])
 * @method BindNumberAndVoipId bindNumberAndVoipId(array $options = [])
 * @method CancelCall cancelCall(array $options = [])
 * @method CancelOrderRobotTask cancelOrderRobotTask(array $options = [])
 * @method CancelRobotTask cancelRobotTask(array $options = [])
 * @method ClickToDial clickToDial(array $options = [])
 * @method CloseSipAccount closeSipAccount(array $options = [])
 * @method CreateCallTask createCallTask(array $options = [])
 * @method CreateRobotTask createRobotTask(array $options = [])
 * @method CreateSipAccount createSipAccount(array $options = [])
 * @method DeleteRobotTask deleteRobotTask(array $options = [])
 * @method DescribeRecordData describeRecordData(array $options = [])
 * @method DoRtcNumberAuth doRtcNumberAuth(array $options = [])
 * @method DoubleCallSeat doubleCallSeat(array $options = [])
 * @method ExecuteCallTask executeCallTask(array $options = [])
 * @method GetCallInfo getCallInfo(array $options = [])
 * @method GetHotlineQualificationByOrder getHotlineQualificationByOrder(array $options = [])
 * @method GetRtcToken getRtcToken(array $options = [])
 * @method GetToken getToken(array $options = [])
 * @method IvrCall ivrCall(array $options = [])
 * @method ListCallTask listCallTask(array $options = [])
 * @method ListCallTaskDetail listCallTaskDetail(array $options = [])
 * @method ListHotlineTransferNumber listHotlineTransferNumber(array $options = [])
 * @method ListHotlineTransferRegisterFile listHotlineTransferRegisterFile(array $options = [])
 * @method ListOrderedNumbers listOrderedNumbers(array $options = [])
 * @method ListOutboundStrategies listOutboundStrategies(array $options = [])
 * @method ListRobotTaskCalls listRobotTaskCalls(array $options = [])
 * @method QueryCallDetailByCallId queryCallDetailByCallId(array $options = [])
 * @method QueryCallDetailByTaskId queryCallDetailByTaskId(array $options = [])
 * @method QueryCallInPoolTransferConfig queryCallInPoolTransferConfig(array $options = [])
 * @method QueryCallInTransferRecord queryCallInTransferRecord(array $options = [])
 * @method QueryRobotInfoList queryRobotInfoList(array $options = [])
 * @method QueryRobotTaskCallDetail queryRobotTaskCallDetail(array $options = [])
 * @method QueryRobotTaskCallList queryRobotTaskCallList(array $options = [])
 * @method QueryRobotTaskDetail queryRobotTaskDetail(array $options = [])
 * @method QueryRobotTaskList queryRobotTaskList(array $options = [])
 * @method QueryRobotv2AllList queryRobotv2AllList(array $options = [])
 * @method QueryRtcNumberAuthStatus queryRtcNumberAuthStatus(array $options = [])
 * @method QueryVirtualNumber queryVirtualNumber(array $options = [])
 * @method QueryVirtualNumberRelation queryVirtualNumberRelation(array $options = [])
 * @method QueryVoipNumberBindInfos queryVoipNumberBindInfos(array $options = [])
 * @method ReportVoipProblems reportVoipProblems(array $options = [])
 * @method SendVerification sendVerification(array $options = [])
 * @method SetTransferCalleePoolConfig setTransferCalleePoolConfig(array $options = [])
 * @method SingleCallByTts singleCallByTts(array $options = [])
 * @method SingleCallByVoice singleCallByVoice(array $options = [])
 * @method SmartCall smartCall(array $options = [])
 * @method SmartCallOperate smartCallOperate(array $options = [])
 * @method StartMicroOutbound startMicroOutbound(array $options = [])
 * @method StartRobotTask startRobotTask(array $options = [])
 * @method StopRobotTask stopRobotTask(array $options = [])
 * @method SubmitHotlineTransferRegister submitHotlineTransferRegister(array $options = [])
 * @method UnbindNumberAndVoipId unbindNumberAndVoipId(array $options = [])
 * @method UndoRtcNumberAuth undoRtcNumberAuth(array $options = [])
 * @method UploadRobotTaskCalledFile uploadRobotTaskCalledFile(array $options = [])
 * @method VoipAddAccount voipAddAccount(array $options = [])
 * @method VoipGetToken voipGetToken(array $options = [])
 */
class DyvmsapiApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Dyvmsapi';

    /** @var string */
    public $version = '2017-05-25';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'dyvms';
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
class AddRtcAccount extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNumberList()
 * @method $this withNumberList($value)
 * @method string getRouteType()
 * @method $this withRouteType($value)
 * @method string getCorpNameList()
 * @method $this withCorpNameList($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getProdCode()
 * @method $this withProdCode($value)
 * @method string getPhoneNum()
 * @method $this withPhoneNum($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class AddVirtualNumberRelation extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getEarlyMediaAsr()
 * @method $this withEarlyMediaAsr($value)
 * @method string getTtsParamHead()
 * @method $this withTtsParamHead($value)
 * @method string getTaskName()
 * @method $this withTaskName($value)
 * @method string getTtsParam()
 * @method $this withTtsParam($value)
 * @method string getCalledNumber()
 * @method $this withCalledNumber($value)
 * @method string getCalledShowNumber()
 * @method $this withCalledShowNumber($value)
 * @method string getIsSelfLine()
 * @method $this withIsSelfLine($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDialogId()
 * @method $this withDialogId($value)
 * @method string getScheduleTime()
 * @method $this withScheduleTime($value)
 * @method string getCorpName()
 * @method $this withCorpName($value)
 * @method string getScheduleCall()
 * @method $this withScheduleCall($value)
 */
class BatchRobotSmartCall extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPhoneNumber()
 * @method $this withPhoneNumber($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVoipId()
 * @method $this withVoipId($value)
 */
class BindNumberAndVoipId extends Rpc
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
class CancelCall extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class CancelOrderRobotTask extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class CancelRobotTask extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCallerShowNumber()
 * @method $this withCallerShowNumber($value)
 * @method string getSessionTimeout()
 * @method $this withSessionTimeout($value)
 * @method string getCalledNumber()
 * @method $this withCalledNumber($value)
 * @method string getCalledShowNumber()
 * @method $this withCalledShowNumber($value)
 * @method string getAsrFlag()
 * @method $this withAsrFlag($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getRecordFlag()
 * @method $this withRecordFlag($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOutId()
 * @method $this withOutId($value)
 * @method string getAsrModelId()
 * @method $this withAsrModelId($value)
 * @method string getCallerNumber()
 * @method $this withCallerNumber($value)
 */
class ClickToDial extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPartnerId()
 * @method $this withPartnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSipAccountID()
 * @method $this withSipAccountID($value)
 */
class CloseSipAccount extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getScheduleType()
 * @method $this withScheduleType($value)
 * @method string getData()
 * @method $this withData($value)
 * @method string getTaskName()
 * @method $this withTaskName($value)
 * @method string getStopTime()
 * @method $this withStopTime($value)
 * @method string getDataType()
 * @method $this withDataType($value)
 * @method string getTemplateName()
 * @method $this withTemplateName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getResource()
 * @method $this withResource($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getFireTime()
 * @method $this withFireTime($value)
 * @method string getTemplateCode()
 * @method $this withTemplateCode($value)
 */
class CreateCallTask extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getRecallStateCodes()
 * @method $this withRecallStateCodes($value)
 * @method string getTaskName()
 * @method $this withTaskName($value)
 * @method string getRecallTimes()
 * @method $this withRecallTimes($value)
 * @method string getIsSelfLine()
 * @method $this withIsSelfLine($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getRetryType()
 * @method $this withRetryType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDialogId()
 * @method $this withDialogId($value)
 * @method string getCaller()
 * @method $this withCaller($value)
 * @method string getNumberStatusIdent()
 * @method $this withNumberStatusIdent($value)
 * @method string getCorpName()
 * @method $this withCorpName($value)
 * @method string getRecallInterval()
 * @method $this withRecallInterval($value)
 */
class CreateRobotTask extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getBusinessKey()
 * @method $this withBusinessKey($value)
 * @method string getPartnerId()
 * @method $this withPartnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CreateSipAccount extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class DeleteRobotTask extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAccountType()
 * @method $this withAccountType($value)
 * @method string getAcid()
 * @method $this withAcid($value)
 * @method string getAccountId()
 * @method $this withAccountId($value)
 * @method string getSecLevel()
 * @method $this withSecLevel($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getProdCode()
 * @method $this withProdCode($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeRecordData extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPhoneNumber()
 * @method $this withPhoneNumber($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DoRtcNumberAuth extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCallerShowNumber()
 * @method $this withCallerShowNumber($value)
 * @method string getSessionTimeout()
 * @method $this withSessionTimeout($value)
 * @method string getCalledNumber()
 * @method $this withCalledNumber($value)
 * @method string getVoiceCode()
 * @method $this withVoiceCode($value)
 * @method string getCalledShowNumber()
 * @method $this withCalledShowNumber($value)
 * @method string getAsrFlag()
 * @method $this withAsrFlag($value)
 * @method string getCallType()
 * @method $this withCallType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getRecordFlag()
 * @method $this withRecordFlag($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRecordPoint()
 * @method $this withRecordPoint($value)
 * @method string getOutId()
 * @method $this withOutId($value)
 * @method string getAsrModelId()
 * @method $this withAsrModelId($value)
 * @method string getCallerNumber()
 * @method $this withCallerNumber($value)
 */
class DoubleCallSeat extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getFireTime()
 * @method $this withFireTime($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ExecuteCallTask extends Rpc
{
}

/**
 * @method string getRtcId()
 * @method $this withRtcId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class GetCallInfo extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class GetHotlineQualificationByOrder extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 * @method string getIsCustomAccount()
 * @method $this withIsCustomAccount($value)
 */
class GetRtcToken extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTokenType()
 * @method $this withTokenType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class GetToken extends Rpc
{
}

/**
 * @method string getByeCode()
 * @method $this withByeCode($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getStartTtsParams()
 * @method $this withStartTtsParams($value)
 * @method string getTimeout()
 * @method $this withTimeout($value)
 * @method string getStartCode()
 * @method $this withStartCode($value)
 * @method string getCalledNumber()
 * @method $this withCalledNumber($value)
 * @method string getCalledShowNumber()
 * @method $this withCalledShowNumber($value)
 * @method array getMenuKeyMap()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPlayTimes()
 * @method $this withPlayTimes($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOutId()
 * @method $this withOutId($value)
 * @method string getByeTtsParams()
 * @method $this withByeTtsParams($value)
 */
class IvrCall extends Rpc
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
			if(isset($depth1Value['Code'])){
				$this->options['query']['MenuKeyMap.' . ($depth1 + 1) . '.Code'] = $depth1Value['Code'];
			}
			if(isset($depth1Value['TtsParams'])){
				$this->options['query']['MenuKeyMap.' . ($depth1 + 1) . '.TtsParams'] = $depth1Value['TtsParams'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['MenuKeyMap.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTaskName()
 * @method $this withTaskName($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTemplateName()
 * @method $this withTemplateName($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListCallTask extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCalledNum()
 * @method $this withCalledNum($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListCallTaskDetail extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getHotlineNumber()
 * @method $this withHotlineNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getQualificationId()
 * @method $this withQualificationId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 */
class ListHotlineTransferNumber extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getHotlineNumber()
 * @method $this withHotlineNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getQualificationId()
 * @method $this withQualificationId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 */
class ListHotlineTransferRegisterFile extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getProdCode()
 * @method $this withProdCode($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ListOrderedNumbers extends Rpc
{
}

/**
 * @method string getBuId()
 * @method $this withBuId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getProdCode()
 * @method $this withProdCode($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ListOutboundStrategies extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCalled()
 * @method $this withCalled($value)
 * @method string getDialogCountTo()
 * @method $this withDialogCountTo($value)
 * @method string getDurationFrom()
 * @method $this withDurationFrom($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDialogCountFrom()
 * @method $this withDialogCountFrom($value)
 * @method string getDurationTo()
 * @method $this withDurationTo($value)
 * @method string getHangupDirection()
 * @method $this withHangupDirection($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getCallResult()
 * @method $this withCallResult($value)
 */
class ListRobotTaskCalls extends Rpc
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
class QueryCallDetailByCallId extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCallee()
 * @method $this withCallee($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getQueryDate()
 * @method $this withQueryDate($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class QueryCallDetailByTaskId extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPhoneNumber()
 * @method $this withPhoneNumber($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class QueryCallInPoolTransferConfig extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPhoneNumber()
 * @method $this withPhoneNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getQueryDate()
 * @method $this withQueryDate($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getCallInCaller()
 * @method $this withCallInCaller($value)
 */
class QueryCallInTransferRecord extends Rpc
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
class QueryRobotInfoList extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCallee()
 * @method $this withCallee($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getQueryDate()
 * @method $this withQueryDate($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class QueryRobotTaskCallDetail extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCalled()
 * @method $this withCalled($value)
 * @method string getDialogCountTo()
 * @method $this withDialogCountTo($value)
 * @method string getDurationFrom()
 * @method $this withDurationFrom($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDialogCountFrom()
 * @method $this withDialogCountFrom($value)
 * @method string getDurationTo()
 * @method $this withDurationTo($value)
 * @method string getHangupDirection()
 * @method $this withHangupDirection($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getCallResult()
 * @method $this withCallResult($value)
 */
class QueryRobotTaskCallList extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getId()
 * @method $this withId($value)
 */
class QueryRobotTaskDetail extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTaskName()
 * @method $this withTaskName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getTime()
 * @method $this withTime($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class QueryRobotTaskList extends Rpc
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
class QueryRobotv2AllList extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPhoneNumber()
 * @method $this withPhoneNumber($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class QueryRtcNumberAuthStatus extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getRouteType()
 * @method $this withRouteType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getProdCode()
 * @method $this withProdCode($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 */
class QueryVirtualNumber extends Rpc
{
}

/**
 * @method string getSpecId()
 * @method $this withSpecId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getRouteType()
 * @method $this withRouteType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getRelatedNum()
 * @method $this withRelatedNum($value)
 * @method string getRegionNameCity()
 * @method $this withRegionNameCity($value)
 * @method string getQualificationId()
 * @method $this withQualificationId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getProdCode()
 * @method $this withProdCode($value)
 * @method string getPhoneNum()
 * @method $this withPhoneNum($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 */
class QueryVirtualNumberRelation extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPhoneNumber()
 * @method $this withPhoneNumber($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVoipId()
 * @method $this withVoipId($value)
 */
class QueryVoipNumberBindInfos extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getVoipId()
 * @method $this withVoipId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 * @method string getDesc()
 * @method $this withDesc($value)
 */
class ReportVoipProblems extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getVerifyType()
 * @method $this withVerifyType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTarget()
 * @method $this withTarget($value)
 * @method string getBizType()
 * @method $this withBizType($value)
 */
class SendVerification extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPhoneNumber()
 * @method $this withPhoneNumber($value)
 * @method array getDetails()
 * @method string getCalledRouteMode()
 * @method $this withCalledRouteMode($value)
 * @method string getQualificationId()
 * @method $this withQualificationId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class SetTransferCalleePoolConfig extends Rpc
{

    /**
     * @param array $details
     *
     * @return $this
     */
	public function withDetails(array $details)
	{
	    $this->data['Details'] = $details;
		foreach ($details as $depth1 => $depth1Value) {
			if(isset($depth1Value['Caller'])){
				$this->options['query']['Details.' . ($depth1 + 1) . '.Caller'] = $depth1Value['Caller'];
			}
			if(isset($depth1Value['Called'])){
				$this->options['query']['Details.' . ($depth1 + 1) . '.Called'] = $depth1Value['Called'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTtsParam()
 * @method $this withTtsParam($value)
 * @method string getSpeed()
 * @method $this withSpeed($value)
 * @method string getCalledNumber()
 * @method $this withCalledNumber($value)
 * @method string getCalledShowNumber()
 * @method $this withCalledShowNumber($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getTtsCode()
 * @method $this withTtsCode($value)
 * @method string getPlayTimes()
 * @method $this withPlayTimes($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVolume()
 * @method $this withVolume($value)
 * @method string getOutId()
 * @method $this withOutId($value)
 */
class SingleCallByTts extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSpeed()
 * @method $this withSpeed($value)
 * @method string getCalledNumber()
 * @method $this withCalledNumber($value)
 * @method string getVoiceCode()
 * @method $this withVoiceCode($value)
 * @method string getCalledShowNumber()
 * @method $this withCalledShowNumber($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPlayTimes()
 * @method $this withPlayTimes($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVolume()
 * @method $this withVolume($value)
 * @method string getOutId()
 * @method $this withOutId($value)
 */
class SingleCallByVoice extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getVoiceCodeParam()
 * @method $this withVoiceCodeParam($value)
 * @method string getEarlyMediaAsr()
 * @method $this withEarlyMediaAsr($value)
 * @method string getBackgroundSpeed()
 * @method $this withBackgroundSpeed($value)
 * @method string getBackgroundVolume()
 * @method $this withBackgroundVolume($value)
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
 * @method string getEnableITN()
 * @method $this withEnableITN($value)
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
 * @method string getStreamAsr()
 * @method $this withStreamAsr($value)
 * @method string getVolume()
 * @method $this withVolume($value)
 * @method string getMuteTime()
 * @method $this withMuteTime($value)
 * @method string getBackgroundFileCode()
 * @method $this withBackgroundFileCode($value)
 * @method string getOutId()
 * @method $this withOutId($value)
 * @method string getAsrModelId()
 * @method $this withAsrModelId($value)
 * @method string getPauseTime()
 * @method $this withPauseTime($value)
 * @method string getTtsStyle()
 * @method $this withTtsStyle($value)
 */
class SmartCall extends Rpc
{
}

/**
 * @method string getCallId()
 * @method $this withCallId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getParam()
 * @method $this withParam($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCommand()
 * @method $this withCommand($value)
 */
class SmartCallOperate extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAccountType()
 * @method $this withAccountType($value)
 * @method string getAccountId()
 * @method $this withAccountId($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getCommandCode()
 * @method $this withCommandCode($value)
 * @method string getCalledNumber()
 * @method $this withCalledNumber($value)
 * @method string getExtInfo()
 * @method $this withExtInfo($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getProdCode()
 * @method $this withProdCode($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCallingNumber()
 * @method $this withCallingNumber($value)
 */
class StartMicroOutbound extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getScheduleTime()
 * @method $this withScheduleTime($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class StartRobotTask extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class StopRobotTask extends Rpc
{
}

/**
 * @method string getOperatorIdentityCard()
 * @method $this withOperatorIdentityCard($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getOperatorMail()
 * @method $this withOperatorMail($value)
 * @method string getHotlineNumber()
 * @method $this withHotlineNumber($value)
 * @method array getTransferPhoneNumberInfos()
 * @method string getOperatorMobileVerifyCode()
 * @method $this withOperatorMobileVerifyCode($value)
 * @method string getAgreement()
 * @method $this withAgreement($value)
 * @method string getQualificationId()
 * @method $this withQualificationId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOperatorMobile()
 * @method $this withOperatorMobile($value)
 * @method string getOperatorMailVerifyCode()
 * @method $this withOperatorMailVerifyCode($value)
 * @method string getOperatorName()
 * @method $this withOperatorName($value)
 */
class SubmitHotlineTransferRegister extends Rpc
{

    /**
     * @param array $transferPhoneNumberInfos
     *
     * @return $this
     */
	public function withTransferPhoneNumberInfos(array $transferPhoneNumberInfos)
	{
	    $this->data['TransferPhoneNumberInfos'] = $transferPhoneNumberInfos;
		foreach ($transferPhoneNumberInfos as $depth1 => $depth1Value) {
			if(isset($depth1Value['PhoneNumber'])){
				$this->options['query']['TransferPhoneNumberInfos.' . ($depth1 + 1) . '.PhoneNumber'] = $depth1Value['PhoneNumber'];
			}
			if(isset($depth1Value['PhoneNumberOwnerName'])){
				$this->options['query']['TransferPhoneNumberInfos.' . ($depth1 + 1) . '.PhoneNumberOwnerName'] = $depth1Value['PhoneNumberOwnerName'];
			}
			if(isset($depth1Value['IdentityCard'])){
				$this->options['query']['TransferPhoneNumberInfos.' . ($depth1 + 1) . '.IdentityCard'] = $depth1Value['IdentityCard'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPhoneNumber()
 * @method $this withPhoneNumber($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVoipId()
 * @method $this withVoipId($value)
 */
class UnbindNumberAndVoipId extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPhoneNumber()
 * @method $this withPhoneNumber($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class UndoRtcNumberAuth extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTtsParamHead()
 * @method $this withTtsParamHead($value)
 * @method string getTtsParam()
 * @method $this withTtsParam($value)
 * @method string getCalledNumber()
 * @method $this withCalledNumber($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class UploadRobotTaskCalledFile extends Rpc
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
class VoipAddAccount extends Rpc
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
class VoipGetToken extends Rpc
{
}
