<?php

namespace AlibabaCloud\Scsp\V20200702;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AnswerCall answerCall(array $options = [])
 * @method AppMessagePush appMessagePush(array $options = [])
 * @method AssignTicket assignTicket(array $options = [])
 * @method ChangeChatAgentStatus changeChatAgentStatus(array $options = [])
 * @method CloseTicket closeTicket(array $options = [])
 * @method CreateAgent createAgent(array $options = [])
 * @method CreateCustomer createCustomer(array $options = [])
 * @method CreateEntityIvrRoute createEntityIvrRoute(array $options = [])
 * @method CreateOuterCallCenterData createOuterCallCenterData(array $options = [])
 * @method CreateRole createRole(array $options = [])
 * @method CreateSkillGroup createSkillGroup(array $options = [])
 * @method CreateThirdSsoAgent createThirdSsoAgent(array $options = [])
 * @method CreateTicket createTicket(array $options = [])
 * @method CreateTicketWithBizData createTicketWithBizData(array $options = [])
 * @method DeleteAgent deleteAgent(array $options = [])
 * @method DeleteEntityRoute deleteEntityRoute(array $options = [])
 * @method DisableRole disableRole(array $options = [])
 * @method EditEntityRoute editEntityRoute(array $options = [])
 * @method EnableRole enableRole(array $options = [])
 * @method ExecuteActivity executeActivity(array $options = [])
 * @method FetchCall fetchCall(array $options = [])
 * @method FinishHotlineService finishHotlineService(array $options = [])
 * @method GenerateWebSocketSign generateWebSocketSign(array $options = [])
 * @method GetAgent getAgent(array $options = [])
 * @method GetAuthInfo getAuthInfo(array $options = [])
 * @method GetCallsPerDay getCallsPerDay(array $options = [])
 * @method GetCMSIdByForeignId getCMSIdByForeignId(array $options = [])
 * @method GetEntityRoute getEntityRoute(array $options = [])
 * @method GetEntityRouteList getEntityRouteList(array $options = [])
 * @method GetEntityTagRelation getEntityTagRelation(array $options = [])
 * @method GetGrantedRoleIds getGrantedRoleIds(array $options = [])
 * @method GetHotlineAgentDetail getHotlineAgentDetail(array $options = [])
 * @method GetHotlineAgentDetailReport getHotlineAgentDetailReport(array $options = [])
 * @method GetHotlineAgentStatus getHotlineAgentStatus(array $options = [])
 * @method GetHotlineGroupDetailReport getHotlineGroupDetailReport(array $options = [])
 * @method GetHotlineWaitingNumber getHotlineWaitingNumber(array $options = [])
 * @method GetNumLocation getNumLocation(array $options = [])
 * @method GetOutbounNumList getOutbounNumList(array $options = [])
 * @method GetOuterCallCenterDataList getOuterCallCenterDataList(array $options = [])
 * @method GetTagList getTagList(array $options = [])
 * @method GetTicketTemplateSchema getTicketTemplateSchema(array $options = [])
 * @method GetUserToken getUserToken(array $options = [])
 * @method GrantRoles grantRoles(array $options = [])
 * @method HangupCall hangupCall(array $options = [])
 * @method HangupThirdCall hangupThirdCall(array $options = [])
 * @method HoldCall holdCall(array $options = [])
 * @method JoinThirdCall joinThirdCall(array $options = [])
 * @method ListAgentBySkillGroupId listAgentBySkillGroupId(array $options = [])
 * @method ListHotlineRecord listHotlineRecord(array $options = [])
 * @method ListOutboundPhoneNumber listOutboundPhoneNumber(array $options = [])
 * @method ListSkillGroup listSkillGroup(array $options = [])
 * @method QueryHotlineSession queryHotlineSession(array $options = [])
 * @method QueryRingDetailList queryRingDetailList(array $options = [])
 * @method QueryServiceConfig queryServiceConfig(array $options = [])
 * @method QuerySkillGroups querySkillGroups(array $options = [])
 * @method QueryTicketActions queryTicketActions(array $options = [])
 * @method QueryTicketCount queryTicketCount(array $options = [])
 * @method QueryTickets queryTickets(array $options = [])
 * @method RemoveSkillGroup removeSkillGroup(array $options = [])
 * @method SearchTicketById searchTicketById(array $options = [])
 * @method SearchTicketByPhone searchTicketByPhone(array $options = [])
 * @method SearchTicketList searchTicketList(array $options = [])
 * @method SendHotlineHeartBeat sendHotlineHeartBeat(array $options = [])
 * @method SendOutboundCommand sendOutboundCommand(array $options = [])
 * @method StartCall startCall(array $options = [])
 * @method StartCallV2 startCallV2(array $options = [])
 * @method StartChatWork startChatWork(array $options = [])
 * @method StartHotlineService startHotlineService(array $options = [])
 * @method SuspendHotlineService suspendHotlineService(array $options = [])
 * @method TransferCallToAgent transferCallToAgent(array $options = [])
 * @method TransferCallToPhone transferCallToPhone(array $options = [])
 * @method TransferCallToSkillGroup transferCallToSkillGroup(array $options = [])
 * @method TransferToThirdCall transferToThirdCall(array $options = [])
 * @method UpdateAgent updateAgent(array $options = [])
 * @method UpdateCustomer updateCustomer(array $options = [])
 * @method UpdateEntityTagRelation updateEntityTagRelation(array $options = [])
 * @method UpdateRingStatus updateRingStatus(array $options = [])
 * @method UpdateRole updateRole(array $options = [])
 * @method UpdateSkillGroup updateSkillGroup(array $options = [])
 * @method UpdateTicket updateTicket(array $options = [])
 */
class ScspApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'scsp';

    /** @var string */
    public $version = '2020-07-02';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getClientToken()
 * @method string getInstanceId()
 * @method string getAccountName()
 * @method string getCallId()
 * @method string getJobId()
 * @method string getConnectionId()
 */
class AnswerCall extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccountName($value)
    {
        $this->data['AccountName'] = $value;
        $this->options['form_params']['AccountName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCallId($value)
    {
        $this->data['CallId'] = $value;
        $this->options['form_params']['CallId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobId($value)
    {
        $this->data['JobId'] = $value;
        $this->options['form_params']['JobId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConnectionId($value)
    {
        $this->data['ConnectionId'] = $value;
        $this->options['form_params']['ConnectionId'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getExpirationTime()
 * @method $this withExpirationTime($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class AppMessagePush extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method string getInstanceId()
 * @method string getTicketId()
 * @method string getOperatorId()
 * @method string getAcceptorId()
 */
class AssignTicket extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTicketId($value)
    {
        $this->data['TicketId'] = $value;
        $this->options['form_params']['TicketId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperatorId($value)
    {
        $this->data['OperatorId'] = $value;
        $this->options['form_params']['OperatorId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAcceptorId($value)
    {
        $this->data['AcceptorId'] = $value;
        $this->options['form_params']['AcceptorId'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getInstanceId()
 * @method string getAccountName()
 * @method string getMethod()
 */
class ChangeChatAgentStatus extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccountName($value)
    {
        $this->data['AccountName'] = $value;
        $this->options['form_params']['AccountName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMethod($value)
    {
        $this->data['Method'] = $value;
        $this->options['form_params']['Method'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getInstanceId()
 * @method string getTicketId()
 * @method string getActionItems()
 * @method string getOperatorId()
 */
class CloseTicket extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTicketId($value)
    {
        $this->data['TicketId'] = $value;
        $this->options['form_params']['TicketId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withActionItems($value)
    {
        $this->data['ActionItems'] = $value;
        $this->options['form_params']['ActionItems'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperatorId($value)
    {
        $this->data['OperatorId'] = $value;
        $this->options['form_params']['OperatorId'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getInstanceId()
 * @method string getAccountName()
 * @method string getDisplayName()
 * @method string getSkillGroupId()
 * @method string getSkillGroupIdList()
 */
class CreateAgent extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccountName($value)
    {
        $this->data['AccountName'] = $value;
        $this->options['form_params']['AccountName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDisplayName($value)
    {
        $this->data['DisplayName'] = $value;
        $this->options['form_params']['DisplayName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSkillGroupId($value)
    {
        $this->data['SkillGroupId'] = $value;
        $this->options['form_params']['SkillGroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSkillGroupIdList($value)
    {
        $this->data['SkillGroupIdList'] = $value;
        $this->options['form_params']['SkillGroupIdList'] = $value;

        return $this;
    }
}

/**
 * @method string getIndustry()
 * @method $this withIndustry($value)
 * @method string getOuterIdType()
 * @method $this withOuterIdType($value)
 * @method string getDingding()
 * @method $this withDingding($value)
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getTypeCode()
 * @method $this withTypeCode($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getContacter()
 * @method $this withContacter($value)
 * @method string getProdLineId()
 * @method $this withProdLineId($value)
 * @method string getPhone()
 * @method $this withPhone($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getManagerName()
 * @method $this withManagerName($value)
 * @method string getOuterId()
 * @method $this withOuterId($value)
 * @method string getPosition()
 * @method $this withPosition($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 */
class CreateCustomer extends Rpc
{
}

/**
 * @method string getExtInfo()
 * @method string getDepartmentId()
 * @method string getGroupId()
 * @method string getEntityName()
 * @method string getEntityId()
 * @method string getEntityBizCodeType()
 * @method string getEntityBizCode()
 * @method string getInstanceId()
 * @method string getEntityRelationNumber()
 * @method string getServiceId()
 */
class CreateEntityIvrRoute extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtInfo($value)
    {
        $this->data['ExtInfo'] = $value;
        $this->options['form_params']['ExtInfo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDepartmentId($value)
    {
        $this->data['DepartmentId'] = $value;
        $this->options['form_params']['DepartmentId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['form_params']['GroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEntityName($value)
    {
        $this->data['EntityName'] = $value;
        $this->options['form_params']['EntityName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEntityId($value)
    {
        $this->data['EntityId'] = $value;
        $this->options['form_params']['EntityId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEntityBizCodeType($value)
    {
        $this->data['EntityBizCodeType'] = $value;
        $this->options['form_params']['EntityBizCodeType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEntityBizCode($value)
    {
        $this->data['EntityBizCode'] = $value;
        $this->options['form_params']['EntityBizCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEntityRelationNumber($value)
    {
        $this->data['EntityRelationNumber'] = $value;
        $this->options['form_params']['EntityRelationNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceId($value)
    {
        $this->data['ServiceId'] = $value;
        $this->options['form_params']['ServiceId'] = $value;

        return $this;
    }
}

/**
 * @method string getExtInfo()
 * @method string getRecordUrl()
 * @method string getEndReason()
 * @method string getSessionId()
 * @method string getFromPhoneNum()
 * @method string getInterveneTime()
 * @method string getBizType()
 * @method string getInstanceId()
 * @method string getToPhoneNum()
 * @method string getBizId()
 * @method string getTenantId()
 * @method string getCallType()
 * @method string getUserInfo()
 */
class CreateOuterCallCenterData extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtInfo($value)
    {
        $this->data['ExtInfo'] = $value;
        $this->options['form_params']['ExtInfo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRecordUrl($value)
    {
        $this->data['RecordUrl'] = $value;
        $this->options['form_params']['RecordUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndReason($value)
    {
        $this->data['EndReason'] = $value;
        $this->options['form_params']['EndReason'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSessionId($value)
    {
        $this->data['SessionId'] = $value;
        $this->options['form_params']['SessionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFromPhoneNum($value)
    {
        $this->data['FromPhoneNum'] = $value;
        $this->options['form_params']['FromPhoneNum'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInterveneTime($value)
    {
        $this->data['InterveneTime'] = $value;
        $this->options['form_params']['InterveneTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizType($value)
    {
        $this->data['BizType'] = $value;
        $this->options['form_params']['BizType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToPhoneNum($value)
    {
        $this->data['ToPhoneNum'] = $value;
        $this->options['form_params']['ToPhoneNum'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizId($value)
    {
        $this->data['BizId'] = $value;
        $this->options['form_params']['BizId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCallType($value)
    {
        $this->data['CallType'] = $value;
        $this->options['form_params']['CallType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserInfo($value)
    {
        $this->data['UserInfo'] = $value;
        $this->options['form_params']['UserInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getInstanceId()
 * @method string getRoleName()
 * @method array getPermissionId()
 * @method string getOperator()
 */
class CreateRole extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRoleName($value)
    {
        $this->data['RoleName'] = $value;
        $this->options['form_params']['RoleName'] = $value;

        return $this;
    }

    /**
     * @param array $permissionId
     *
     * @return $this
     */
	public function withPermissionId(array $permissionId)
	{
	    $this->data['PermissionId'] = $permissionId;
		foreach ($permissionId as $i => $iValue) {
			$this->options['form_params']['PermissionId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['form_params']['Operator'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method string getClientToken()
 * @method string getDisplayName()
 * @method string getChannelType()
 * @method string getSkillGroupName()
 * @method string getDescription()
 */
class CreateSkillGroup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDisplayName($value)
    {
        $this->data['DisplayName'] = $value;
        $this->options['form_params']['DisplayName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannelType($value)
    {
        $this->data['ChannelType'] = $value;
        $this->options['form_params']['ChannelType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSkillGroupName($value)
    {
        $this->data['SkillGroupName'] = $value;
        $this->options['form_params']['SkillGroupName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDescription($value)
    {
        $this->data['Description'] = $value;
        $this->options['form_params']['Description'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getInstanceId()
 * @method string getClientId()
 * @method string getAccountId()
 * @method string getAccountName()
 * @method string getDisplayName()
 * @method string getSkillGroupIds()
 * @method string getRoleIds()
 */
class CreateThirdSsoAgent extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientId($value)
    {
        $this->data['ClientId'] = $value;
        $this->options['form_params']['ClientId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccountId($value)
    {
        $this->data['AccountId'] = $value;
        $this->options['form_params']['AccountId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccountName($value)
    {
        $this->data['AccountName'] = $value;
        $this->options['form_params']['AccountName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDisplayName($value)
    {
        $this->data['DisplayName'] = $value;
        $this->options['form_params']['DisplayName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSkillGroupIds($value)
    {
        $this->data['SkillGroupIds'] = $value;
        $this->options['form_params']['SkillGroupIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRoleIds($value)
    {
        $this->data['RoleIds'] = $value;
        $this->options['form_params']['RoleIds'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getInstanceId()
 * @method string getTemplateId()
 * @method string getCategoryId()
 * @method string getCreatorId()
 * @method string getCreatorType()
 * @method string getCreatorName()
 * @method string getMemberId()
 * @method string getMemberName()
 * @method string getFromInfo()
 * @method string getPriority()
 * @method string getCarbonCopy()
 * @method string getFormData()
 */
class CreateTicket extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTemplateId($value)
    {
        $this->data['TemplateId'] = $value;
        $this->options['form_params']['TemplateId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCategoryId($value)
    {
        $this->data['CategoryId'] = $value;
        $this->options['form_params']['CategoryId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCreatorId($value)
    {
        $this->data['CreatorId'] = $value;
        $this->options['form_params']['CreatorId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCreatorType($value)
    {
        $this->data['CreatorType'] = $value;
        $this->options['form_params']['CreatorType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCreatorName($value)
    {
        $this->data['CreatorName'] = $value;
        $this->options['form_params']['CreatorName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMemberId($value)
    {
        $this->data['MemberId'] = $value;
        $this->options['form_params']['MemberId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMemberName($value)
    {
        $this->data['MemberName'] = $value;
        $this->options['form_params']['MemberName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFromInfo($value)
    {
        $this->data['FromInfo'] = $value;
        $this->options['form_params']['FromInfo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPriority($value)
    {
        $this->data['Priority'] = $value;
        $this->options['form_params']['Priority'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCarbonCopy($value)
    {
        $this->data['CarbonCopy'] = $value;
        $this->options['form_params']['CarbonCopy'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFormData($value)
    {
        $this->data['FormData'] = $value;
        $this->options['form_params']['FormData'] = $value;

        return $this;
    }
}

/**
 * @method string getFromInfo()
 * @method string getClientToken()
 * @method string getCarbonCopy()
 * @method string getCreatorId()
 * @method string getBizData()
 * @method string getTemplateId()
 * @method string getPriority()
 * @method string getFormData()
 * @method string getInstanceId()
 * @method string getCreatorType()
 * @method string getCreatorName()
 * @method string getCategoryId()
 * @method string getMemberName()
 * @method string getMemberId()
 */
class CreateTicketWithBizData extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFromInfo($value)
    {
        $this->data['FromInfo'] = $value;
        $this->options['form_params']['FromInfo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCarbonCopy($value)
    {
        $this->data['CarbonCopy'] = $value;
        $this->options['form_params']['CarbonCopy'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCreatorId($value)
    {
        $this->data['CreatorId'] = $value;
        $this->options['form_params']['CreatorId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizData($value)
    {
        $this->data['BizData'] = $value;
        $this->options['form_params']['BizData'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTemplateId($value)
    {
        $this->data['TemplateId'] = $value;
        $this->options['form_params']['TemplateId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPriority($value)
    {
        $this->data['Priority'] = $value;
        $this->options['form_params']['Priority'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFormData($value)
    {
        $this->data['FormData'] = $value;
        $this->options['form_params']['FormData'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCreatorType($value)
    {
        $this->data['CreatorType'] = $value;
        $this->options['form_params']['CreatorType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCreatorName($value)
    {
        $this->data['CreatorName'] = $value;
        $this->options['form_params']['CreatorName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCategoryId($value)
    {
        $this->data['CategoryId'] = $value;
        $this->options['form_params']['CategoryId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMemberName($value)
    {
        $this->data['MemberName'] = $value;
        $this->options['form_params']['MemberName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMemberId($value)
    {
        $this->data['MemberId'] = $value;
        $this->options['form_params']['MemberId'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 */
class DeleteAgent extends Rpc
{

    /** @var string */
    public $method = 'DELETE';
}

/**
 * @method string getInstanceId()
 * @method string getUniqueId()
 */
class DeleteEntityRoute extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUniqueId($value)
    {
        $this->data['UniqueId'] = $value;
        $this->options['form_params']['UniqueId'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getInstanceId()
 * @method string getRoleId()
 */
class DisableRole extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRoleId($value)
    {
        $this->data['RoleId'] = $value;
        $this->options['form_params']['RoleId'] = $value;

        return $this;
    }
}

/**
 * @method string getExtInfo()
 * @method string getDepartmentId()
 * @method string getGroupId()
 * @method string getEntityName()
 * @method string getEntityId()
 * @method string getEntityBizCodeType()
 * @method string getEntityBizCode()
 * @method string getInstanceId()
 * @method string getEntityRelationNumber()
 * @method string getServiceId()
 * @method string getUniqueId()
 */
class EditEntityRoute extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtInfo($value)
    {
        $this->data['ExtInfo'] = $value;
        $this->options['form_params']['ExtInfo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDepartmentId($value)
    {
        $this->data['DepartmentId'] = $value;
        $this->options['form_params']['DepartmentId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['form_params']['GroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEntityName($value)
    {
        $this->data['EntityName'] = $value;
        $this->options['form_params']['EntityName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEntityId($value)
    {
        $this->data['EntityId'] = $value;
        $this->options['form_params']['EntityId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEntityBizCodeType($value)
    {
        $this->data['EntityBizCodeType'] = $value;
        $this->options['form_params']['EntityBizCodeType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEntityBizCode($value)
    {
        $this->data['EntityBizCode'] = $value;
        $this->options['form_params']['EntityBizCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEntityRelationNumber($value)
    {
        $this->data['EntityRelationNumber'] = $value;
        $this->options['form_params']['EntityRelationNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceId($value)
    {
        $this->data['ServiceId'] = $value;
        $this->options['form_params']['ServiceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUniqueId($value)
    {
        $this->data['UniqueId'] = $value;
        $this->options['form_params']['UniqueId'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getInstanceId()
 * @method string getRoleId()
 */
class EnableRole extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRoleId($value)
    {
        $this->data['RoleId'] = $value;
        $this->options['form_params']['RoleId'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getInstanceId()
 * @method string getTicketId()
 * @method string getOperatorId()
 * @method string getActivityCode()
 * @method string getActivityForm()
 */
class ExecuteActivity extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTicketId($value)
    {
        $this->data['TicketId'] = $value;
        $this->options['form_params']['TicketId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperatorId($value)
    {
        $this->data['OperatorId'] = $value;
        $this->options['form_params']['OperatorId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withActivityCode($value)
    {
        $this->data['ActivityCode'] = $value;
        $this->options['form_params']['ActivityCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withActivityForm($value)
    {
        $this->data['ActivityForm'] = $value;
        $this->options['form_params']['ActivityForm'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getInstanceId()
 * @method string getAccountName()
 * @method string getCallId()
 * @method string getJobId()
 * @method string getConnectionId()
 * @method string getHoldConnectionId()
 */
class FetchCall extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccountName($value)
    {
        $this->data['AccountName'] = $value;
        $this->options['form_params']['AccountName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCallId($value)
    {
        $this->data['CallId'] = $value;
        $this->options['form_params']['CallId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobId($value)
    {
        $this->data['JobId'] = $value;
        $this->options['form_params']['JobId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConnectionId($value)
    {
        $this->data['ConnectionId'] = $value;
        $this->options['form_params']['ConnectionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHoldConnectionId($value)
    {
        $this->data['HoldConnectionId'] = $value;
        $this->options['form_params']['HoldConnectionId'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getInstanceId()
 * @method string getAccountName()
 */
class FinishHotlineService extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccountName($value)
    {
        $this->data['AccountName'] = $value;
        $this->options['form_params']['AccountName'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getInstanceId()
 * @method string getAccountName()
 */
class GenerateWebSocketSign extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccountName($value)
    {
        $this->data['AccountName'] = $value;
        $this->options['form_params']['AccountName'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 */
class GetAgent extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getForeignId()
 * @method $this withForeignId($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 */
class GetAuthInfo extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDataIdStart()
 * @method $this withDataIdStart($value)
 * @method string getDataIdEnd()
 * @method $this withDataIdEnd($value)
 * @method string getDataId()
 * @method $this withDataId($value)
 * @method string getHourId()
 * @method $this withHourId($value)
 * @method string getMinuteId()
 * @method $this withMinuteId($value)
 * @method string getPhoneNumbers()
 * @method $this withPhoneNumbers($value)
 * @method string getHavePhoneNumbers()
 * @method $this withHavePhoneNumbers($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class GetCallsPerDay extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getNick()
 * @method $this withNick($value)
 * @method string getSourceId()
 * @method $this withSourceId($value)
 * @method string getForeignId()
 * @method $this withForeignId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetCMSIdByForeignId extends Rpc
{
}

/**
 * @method string getEntityBizCode()
 * @method string getInstanceId()
 * @method string getEntityName()
 * @method string getEntityId()
 * @method string getEntityRelationNumber()
 * @method string getUniqueId()
 */
class GetEntityRoute extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEntityBizCode($value)
    {
        $this->data['EntityBizCode'] = $value;
        $this->options['form_params']['EntityBizCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEntityName($value)
    {
        $this->data['EntityName'] = $value;
        $this->options['form_params']['EntityName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEntityId($value)
    {
        $this->data['EntityId'] = $value;
        $this->options['form_params']['EntityId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEntityRelationNumber($value)
    {
        $this->data['EntityRelationNumber'] = $value;
        $this->options['form_params']['EntityRelationNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUniqueId($value)
    {
        $this->data['UniqueId'] = $value;
        $this->options['form_params']['UniqueId'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method string getPageNo()
 * @method string getPageSize()
 * @method string getEntityName()
 * @method string getEntityRelationNumber()
 */
class GetEntityRouteList extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNo($value)
    {
        $this->data['PageNo'] = $value;
        $this->options['form_params']['PageNo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEntityName($value)
    {
        $this->data['EntityName'] = $value;
        $this->options['form_params']['EntityName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEntityRelationNumber($value)
    {
        $this->data['EntityRelationNumber'] = $value;
        $this->options['form_params']['EntityRelationNumber'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method string getEntityType()
 * @method string getEntityId()
 */
class GetEntityTagRelation extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEntityType($value)
    {
        $this->data['EntityType'] = $value;
        $this->options['form_params']['EntityType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEntityId($value)
    {
        $this->data['EntityId'] = $value;
        $this->options['form_params']['EntityId'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 */
class GetGrantedRoleIds extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 */
class GetHotlineAgentDetail extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method array getDepIds()
 * @method string getEndDate()
 * @method $this withEndDate($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method array getGroupIds()
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getStartDate()
 * @method $this withStartDate($value)
 */
class GetHotlineAgentDetailReport extends Rpc
{

    /**
     * @param array $depIds
     *
     * @return $this
     */
	public function withDepIds(array $depIds)
	{
	    $this->data['DepIds'] = $depIds;
		foreach ($depIds as $i => $iValue) {
			$this->options['query']['DepIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $groupIds
     *
     * @return $this
     */
	public function withGroupIds(array $groupIds)
	{
	    $this->data['GroupIds'] = $groupIds;
		foreach ($groupIds as $i => $iValue) {
			$this->options['query']['GroupIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method string getAccountName()
 */
class GetHotlineAgentStatus extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccountName($value)
    {
        $this->data['AccountName'] = $value;
        $this->options['form_params']['AccountName'] = $value;

        return $this;
    }
}

/**
 * @method array getDepIds()
 * @method string getEndDate()
 * @method $this withEndDate($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method array getGroupIds()
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getStartDate()
 * @method $this withStartDate($value)
 */
class GetHotlineGroupDetailReport extends Rpc
{

    /**
     * @param array $depIds
     *
     * @return $this
     */
	public function withDepIds(array $depIds)
	{
	    $this->data['DepIds'] = $depIds;
		foreach ($depIds as $i => $iValue) {
			$this->options['query']['DepIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $groupIds
     *
     * @return $this
     */
	public function withGroupIds(array $groupIds)
	{
	    $this->data['GroupIds'] = $groupIds;
		foreach ($groupIds as $i => $iValue) {
			$this->options['query']['GroupIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 */
class GetHotlineWaitingNumber extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPhoneNum()
 * @method $this withPhoneNum($value)
 */
class GetNumLocation extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getClientToken()
 * @method string getInstanceId()
 * @method string getAccountName()
 */
class GetOutbounNumList extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccountName($value)
    {
        $this->data['AccountName'] = $value;
        $this->options['form_params']['AccountName'] = $value;

        return $this;
    }
}

/**
 * @method string getQueryEndTime()
 * @method string getInstanceId()
 * @method string getToPhoneNum()
 * @method string getQueryStartTime()
 * @method string getBizId()
 * @method string getSessionId()
 * @method string getFromPhoneNum()
 */
class GetOuterCallCenterDataList extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withQueryEndTime($value)
    {
        $this->data['QueryEndTime'] = $value;
        $this->options['form_params']['QueryEndTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToPhoneNum($value)
    {
        $this->data['ToPhoneNum'] = $value;
        $this->options['form_params']['ToPhoneNum'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withQueryStartTime($value)
    {
        $this->data['QueryStartTime'] = $value;
        $this->options['form_params']['QueryStartTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizId($value)
    {
        $this->data['BizId'] = $value;
        $this->options['form_params']['BizId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSessionId($value)
    {
        $this->data['SessionId'] = $value;
        $this->options['form_params']['SessionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFromPhoneNum($value)
    {
        $this->data['FromPhoneNum'] = $value;
        $this->options['form_params']['FromPhoneNum'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method string getEntityType()
 * @method string getEntityId()
 */
class GetTagList extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEntityType($value)
    {
        $this->data['EntityType'] = $value;
        $this->options['form_params']['EntityType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEntityId($value)
    {
        $this->data['EntityId'] = $value;
        $this->options['form_params']['EntityId'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 */
class GetTicketTemplateSchema extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getNick()
 * @method string getInstanceId()
 * @method string getAppKey()
 * @method string getUserId()
 */
class GetUserToken extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNick($value)
    {
        $this->data['Nick'] = $value;
        $this->options['form_params']['Nick'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppKey($value)
    {
        $this->data['AppKey'] = $value;
        $this->options['form_params']['AppKey'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserId($value)
    {
        $this->data['UserId'] = $value;
        $this->options['form_params']['UserId'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getInstanceId()
 * @method string getAccountName()
 * @method array getRoleId()
 * @method string getOperator()
 */
class GrantRoles extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccountName($value)
    {
        $this->data['AccountName'] = $value;
        $this->options['form_params']['AccountName'] = $value;

        return $this;
    }

    /**
     * @param array $roleId
     *
     * @return $this
     */
	public function withRoleId(array $roleId)
	{
	    $this->data['RoleId'] = $roleId;
		foreach ($roleId as $i => $iValue) {
			$this->options['form_params']['RoleId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['form_params']['Operator'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getInstanceId()
 * @method string getAccountName()
 * @method string getCallId()
 * @method string getJobId()
 * @method string getConnectionId()
 */
class HangupCall extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccountName($value)
    {
        $this->data['AccountName'] = $value;
        $this->options['form_params']['AccountName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCallId($value)
    {
        $this->data['CallId'] = $value;
        $this->options['form_params']['CallId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobId($value)
    {
        $this->data['JobId'] = $value;
        $this->options['form_params']['JobId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConnectionId($value)
    {
        $this->data['ConnectionId'] = $value;
        $this->options['form_params']['ConnectionId'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getInstanceId()
 * @method string getAccountName()
 * @method string getCallId()
 * @method string getJobId()
 * @method string getConnectionId()
 */
class HangupThirdCall extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccountName($value)
    {
        $this->data['AccountName'] = $value;
        $this->options['form_params']['AccountName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCallId($value)
    {
        $this->data['CallId'] = $value;
        $this->options['form_params']['CallId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobId($value)
    {
        $this->data['JobId'] = $value;
        $this->options['form_params']['JobId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConnectionId($value)
    {
        $this->data['ConnectionId'] = $value;
        $this->options['form_params']['ConnectionId'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getInstanceId()
 * @method string getAccountName()
 * @method string getCallId()
 * @method string getJobId()
 * @method string getConnectionId()
 */
class HoldCall extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccountName($value)
    {
        $this->data['AccountName'] = $value;
        $this->options['form_params']['AccountName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCallId($value)
    {
        $this->data['CallId'] = $value;
        $this->options['form_params']['CallId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobId($value)
    {
        $this->data['JobId'] = $value;
        $this->options['form_params']['JobId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConnectionId($value)
    {
        $this->data['ConnectionId'] = $value;
        $this->options['form_params']['ConnectionId'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getInstanceId()
 * @method string getAccountName()
 * @method string getCallId()
 * @method string getJobId()
 * @method string getConnectionId()
 * @method string getHoldConnectionId()
 */
class JoinThirdCall extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccountName($value)
    {
        $this->data['AccountName'] = $value;
        $this->options['form_params']['AccountName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCallId($value)
    {
        $this->data['CallId'] = $value;
        $this->options['form_params']['CallId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobId($value)
    {
        $this->data['JobId'] = $value;
        $this->options['form_params']['JobId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConnectionId($value)
    {
        $this->data['ConnectionId'] = $value;
        $this->options['form_params']['ConnectionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHoldConnectionId($value)
    {
        $this->data['HoldConnectionId'] = $value;
        $this->options['form_params']['HoldConnectionId'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSkillGroupId()
 * @method $this withSkillGroupId($value)
 */
class ListAgentBySkillGroupId extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getCallId()
 * @method $this withCallId($value)
 */
class ListHotlineRecord extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 */
class ListOutboundPhoneNumber extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getChannelType()
 * @method $this withChannelType($value)
 */
class ListSkillGroup extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getServicerId()
 * @method $this withServicerId($value)
 * @method string getParams()
 * @method $this withParams($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getAcid()
 * @method $this withAcid($value)
 * @method string getCallingNumber()
 * @method $this withCallingNumber($value)
 * @method string getQueryEndTime()
 * @method $this withQueryEndTime($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getCalledNumber()
 * @method $this withCalledNumber($value)
 * @method string getRequestId()
 * @method $this withRequestId($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getQueryStartTime()
 * @method $this withQueryStartTime($value)
 * @method string getServicerName()
 * @method $this withServicerName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCallResult()
 * @method $this withCallResult($value)
 * @method string getCallType()
 * @method $this withCallType($value)
 * @method string getMemberName()
 * @method $this withMemberName($value)
 * @method string getMemberId()
 * @method $this withMemberId($value)
 */
class QueryHotlineSession extends Rpc
{
}

/**
 * @method string getFromPhoneNumList()
 * @method string getCallOutStatus()
 * @method string getStartDate()
 * @method string getEndDate()
 * @method string getInstanceId()
 * @method string getPageNo()
 * @method string getExtra()
 * @method string getPageSize()
 * @method string getToPhoneNumList()
 */
class QueryRingDetailList extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFromPhoneNumList($value)
    {
        $this->data['FromPhoneNumList'] = $value;
        $this->options['form_params']['FromPhoneNumList'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCallOutStatus($value)
    {
        $this->data['CallOutStatus'] = $value;
        $this->options['form_params']['CallOutStatus'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartDate($value)
    {
        $this->data['StartDate'] = $value;
        $this->options['form_params']['StartDate'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndDate($value)
    {
        $this->data['EndDate'] = $value;
        $this->options['form_params']['EndDate'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNo($value)
    {
        $this->data['PageNo'] = $value;
        $this->options['form_params']['PageNo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtra($value)
    {
        $this->data['Extra'] = $value;
        $this->options['form_params']['Extra'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToPhoneNumList($value)
    {
        $this->data['ToPhoneNumList'] = $value;
        $this->options['form_params']['ToPhoneNumList'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getViewCode()
 * @method $this withViewCode($value)
 * @method string getParameters()
 * @method $this withParameters($value)
 */
class QueryServiceConfig extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getGroupType()
 * @method $this withGroupType($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 */
class QuerySkillGroups extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method string getTicketId()
 * @method array getActionCodeList()
 */
class QueryTicketActions extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTicketId($value)
    {
        $this->data['TicketId'] = $value;
        $this->options['form_params']['TicketId'] = $value;

        return $this;
    }

    /**
     * @param array $actionCodeList
     *
     * @return $this
     */
	public function withActionCodeList(array $actionCodeList)
	{
	    $this->data['ActionCodeList'] = $actionCodeList;
		foreach ($actionCodeList as $i => $iValue) {
			$this->options['form_params']['ActionCodeList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getOperatorId()
 * @method $this withOperatorId($value)
 */
class QueryTicketCount extends Rpc
{
}

/**
 * @method string getSrType()
 * @method string getTouchId()
 * @method string getDealId()
 * @method string getCurrentPage()
 * @method string getTaskStatus()
 * @method string getInstanceId()
 * @method string getAccountName()
 * @method string getCaseId()
 * @method string getExtra()
 * @method string getChannelType()
 * @method string getPageSize()
 * @method string getCaseType()
 * @method string getCaseStatus()
 * @method string getChannelId()
 */
class QueryTickets extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSrType($value)
    {
        $this->data['SrType'] = $value;
        $this->options['form_params']['SrType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTouchId($value)
    {
        $this->data['TouchId'] = $value;
        $this->options['form_params']['TouchId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDealId($value)
    {
        $this->data['DealId'] = $value;
        $this->options['form_params']['DealId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCurrentPage($value)
    {
        $this->data['CurrentPage'] = $value;
        $this->options['form_params']['CurrentPage'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTaskStatus($value)
    {
        $this->data['TaskStatus'] = $value;
        $this->options['form_params']['TaskStatus'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccountName($value)
    {
        $this->data['AccountName'] = $value;
        $this->options['form_params']['AccountName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCaseId($value)
    {
        $this->data['CaseId'] = $value;
        $this->options['form_params']['CaseId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtra($value)
    {
        $this->data['Extra'] = $value;
        $this->options['form_params']['Extra'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannelType($value)
    {
        $this->data['ChannelType'] = $value;
        $this->options['form_params']['ChannelType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCaseType($value)
    {
        $this->data['CaseType'] = $value;
        $this->options['form_params']['CaseType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCaseStatus($value)
    {
        $this->data['CaseStatus'] = $value;
        $this->options['form_params']['CaseStatus'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannelId($value)
    {
        $this->data['ChannelId'] = $value;
        $this->options['form_params']['ChannelId'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method string getClientToken()
 * @method string getSkillGroupId()
 */
class RemoveSkillGroup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSkillGroupId($value)
    {
        $this->data['SkillGroupId'] = $value;
        $this->options['form_params']['SkillGroupId'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTicketId()
 * @method $this withTicketId($value)
 * @method string getStatusCode()
 * @method $this withStatusCode($value)
 */
class SearchTicketById extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPhone()
 * @method $this withPhone($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getTicketStatus()
 * @method $this withTicketStatus($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 */
class SearchTicketByPhone extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getOperatorId()
 * @method $this withOperatorId($value)
 * @method string getTicketStatus()
 * @method $this withTicketStatus($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 */
class SearchTicketList extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getClientToken()
 * @method string getInstanceId()
 * @method string getAccountName()
 * @method string getToken()
 */
class SendHotlineHeartBeat extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccountName($value)
    {
        $this->data['AccountName'] = $value;
        $this->options['form_params']['AccountName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['form_params']['Token'] = $value;

        return $this;
    }
}

/**
 * @method string getCallingNumber()
 * @method string getInstanceId()
 * @method string getAccountName()
 * @method string getCalledNumber()
 * @method string getCustomerInfo()
 */
class SendOutboundCommand extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCallingNumber($value)
    {
        $this->data['CallingNumber'] = $value;
        $this->options['form_params']['CallingNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccountName($value)
    {
        $this->data['AccountName'] = $value;
        $this->options['form_params']['AccountName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCalledNumber($value)
    {
        $this->data['CalledNumber'] = $value;
        $this->options['form_params']['CalledNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCustomerInfo($value)
    {
        $this->data['CustomerInfo'] = $value;
        $this->options['form_params']['CustomerInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getInstanceId()
 * @method string getAccountName()
 * @method string getCaller()
 * @method string getCallee()
 */
class StartCall extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccountName($value)
    {
        $this->data['AccountName'] = $value;
        $this->options['form_params']['AccountName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCaller($value)
    {
        $this->data['Caller'] = $value;
        $this->options['form_params']['Caller'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCallee($value)
    {
        $this->data['Callee'] = $value;
        $this->options['form_params']['Callee'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getInstanceId()
 * @method string getAccountName()
 * @method string getCaller()
 * @method string getCallee()
 * @method string getJsonMsg()
 */
class StartCallV2 extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccountName($value)
    {
        $this->data['AccountName'] = $value;
        $this->options['form_params']['AccountName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCaller($value)
    {
        $this->data['Caller'] = $value;
        $this->options['form_params']['Caller'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCallee($value)
    {
        $this->data['Callee'] = $value;
        $this->options['form_params']['Callee'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJsonMsg($value)
    {
        $this->data['JsonMsg'] = $value;
        $this->options['form_params']['JsonMsg'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method string getAccountName()
 * @method string getStationType()
 * @method string getWorkType()
 * @method string getUserAgent()
 */
class StartChatWork extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccountName($value)
    {
        $this->data['AccountName'] = $value;
        $this->options['form_params']['AccountName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStationType($value)
    {
        $this->data['StationType'] = $value;
        $this->options['form_params']['StationType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkType($value)
    {
        $this->data['WorkType'] = $value;
        $this->options['form_params']['WorkType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserAgent($value)
    {
        $this->data['UserAgent'] = $value;
        $this->options['form_params']['UserAgent'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getInstanceId()
 * @method string getAccountName()
 */
class StartHotlineService extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccountName($value)
    {
        $this->data['AccountName'] = $value;
        $this->options['form_params']['AccountName'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getInstanceId()
 * @method string getAccountName()
 * @method string getType()
 */
class SuspendHotlineService extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccountName($value)
    {
        $this->data['AccountName'] = $value;
        $this->options['form_params']['AccountName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withType($value)
    {
        $this->data['Type'] = $value;
        $this->options['form_params']['Type'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getInstanceId()
 * @method string getAccountName()
 * @method string getTargetAccountName()
 * @method string getCallId()
 * @method string getJobId()
 * @method string getConnectionId()
 * @method string getHoldConnectionId()
 * @method string getType()
 * @method string getIsSingleTransfer()
 */
class TransferCallToAgent extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccountName($value)
    {
        $this->data['AccountName'] = $value;
        $this->options['form_params']['AccountName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetAccountName($value)
    {
        $this->data['TargetAccountName'] = $value;
        $this->options['form_params']['TargetAccountName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCallId($value)
    {
        $this->data['CallId'] = $value;
        $this->options['form_params']['CallId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobId($value)
    {
        $this->data['JobId'] = $value;
        $this->options['form_params']['JobId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConnectionId($value)
    {
        $this->data['ConnectionId'] = $value;
        $this->options['form_params']['ConnectionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHoldConnectionId($value)
    {
        $this->data['HoldConnectionId'] = $value;
        $this->options['form_params']['HoldConnectionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withType($value)
    {
        $this->data['Type'] = $value;
        $this->options['form_params']['Type'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsSingleTransfer($value)
    {
        $this->data['IsSingleTransfer'] = $value;
        $this->options['form_params']['IsSingleTransfer'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getInstanceId()
 * @method string getAccountName()
 * @method string getCaller()
 * @method string getCallee()
 * @method string getCallId()
 * @method string getJobId()
 * @method string getConnectionId()
 * @method string getHoldConnectionId()
 * @method string getType()
 * @method string getIsSingleTransfer()
 * @method string getCallerPhone()
 * @method string getCalleePhone()
 */
class TransferCallToPhone extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccountName($value)
    {
        $this->data['AccountName'] = $value;
        $this->options['form_params']['AccountName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCaller($value)
    {
        $this->data['Caller'] = $value;
        $this->options['form_params']['Caller'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCallee($value)
    {
        $this->data['Callee'] = $value;
        $this->options['form_params']['Callee'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCallId($value)
    {
        $this->data['CallId'] = $value;
        $this->options['form_params']['CallId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobId($value)
    {
        $this->data['JobId'] = $value;
        $this->options['form_params']['JobId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConnectionId($value)
    {
        $this->data['ConnectionId'] = $value;
        $this->options['form_params']['ConnectionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHoldConnectionId($value)
    {
        $this->data['HoldConnectionId'] = $value;
        $this->options['form_params']['HoldConnectionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withType($value)
    {
        $this->data['Type'] = $value;
        $this->options['form_params']['Type'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsSingleTransfer($value)
    {
        $this->data['IsSingleTransfer'] = $value;
        $this->options['form_params']['IsSingleTransfer'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCallerPhone($value)
    {
        $this->data['CallerPhone'] = $value;
        $this->options['form_params']['callerPhone'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCalleePhone($value)
    {
        $this->data['CalleePhone'] = $value;
        $this->options['form_params']['calleePhone'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getInstanceId()
 * @method string getAccountName()
 * @method string getSkillGroupId()
 * @method string getCallId()
 * @method string getJobId()
 * @method string getConnectionId()
 * @method string getHoldConnectionId()
 * @method string getType()
 * @method string getIsSingleTransfer()
 */
class TransferCallToSkillGroup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccountName($value)
    {
        $this->data['AccountName'] = $value;
        $this->options['form_params']['AccountName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSkillGroupId($value)
    {
        $this->data['SkillGroupId'] = $value;
        $this->options['form_params']['SkillGroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCallId($value)
    {
        $this->data['CallId'] = $value;
        $this->options['form_params']['CallId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobId($value)
    {
        $this->data['JobId'] = $value;
        $this->options['form_params']['JobId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConnectionId($value)
    {
        $this->data['ConnectionId'] = $value;
        $this->options['form_params']['ConnectionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHoldConnectionId($value)
    {
        $this->data['HoldConnectionId'] = $value;
        $this->options['form_params']['HoldConnectionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withType($value)
    {
        $this->data['Type'] = $value;
        $this->options['form_params']['Type'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsSingleTransfer($value)
    {
        $this->data['IsSingleTransfer'] = $value;
        $this->options['form_params']['IsSingleTransfer'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getInstanceId()
 * @method string getAccountName()
 * @method string getCallId()
 * @method string getJobId()
 * @method string getConnectionId()
 * @method string getHoldConnectionId()
 */
class TransferToThirdCall extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccountName($value)
    {
        $this->data['AccountName'] = $value;
        $this->options['form_params']['AccountName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCallId($value)
    {
        $this->data['CallId'] = $value;
        $this->options['form_params']['CallId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobId($value)
    {
        $this->data['JobId'] = $value;
        $this->options['form_params']['JobId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConnectionId($value)
    {
        $this->data['ConnectionId'] = $value;
        $this->options['form_params']['ConnectionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHoldConnectionId($value)
    {
        $this->data['HoldConnectionId'] = $value;
        $this->options['form_params']['HoldConnectionId'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getInstanceId()
 * @method string getAccountName()
 * @method string getDisplayName()
 * @method array getSkillGroupId()
 * @method array getSkillGroupIdList()
 */
class UpdateAgent extends Rpc
{

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccountName($value)
    {
        $this->data['AccountName'] = $value;
        $this->options['form_params']['AccountName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDisplayName($value)
    {
        $this->data['DisplayName'] = $value;
        $this->options['form_params']['DisplayName'] = $value;

        return $this;
    }

    /**
     * @param array $skillGroupId
     *
     * @return $this
     */
	public function withSkillGroupId(array $skillGroupId)
	{
	    $this->data['SkillGroupId'] = $skillGroupId;
		foreach ($skillGroupId as $i => $iValue) {
			$this->options['form_params']['SkillGroupId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $skillGroupIdList
     *
     * @return $this
     */
	public function withSkillGroupIdList(array $skillGroupIdList)
	{
	    $this->data['SkillGroupIdList'] = $skillGroupIdList;
		foreach ($skillGroupIdList as $i => $iValue) {
			$this->options['form_params']['SkillGroupIdList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getIndustry()
 * @method $this withIndustry($value)
 * @method string getOuterIdType()
 * @method $this withOuterIdType($value)
 * @method string getDingding()
 * @method $this withDingding($value)
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getTypeCode()
 * @method $this withTypeCode($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getContacter()
 * @method $this withContacter($value)
 * @method string getProdLineId()
 * @method $this withProdLineId($value)
 * @method string getPhone()
 * @method $this withPhone($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getCustomerId()
 * @method $this withCustomerId($value)
 * @method string getManagerName()
 * @method $this withManagerName($value)
 * @method string getOuterId()
 * @method $this withOuterId($value)
 * @method string getPosition()
 * @method $this withPosition($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 */
class UpdateCustomer extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method string getEntityTagParam()
 */
class UpdateEntityTagRelation extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEntityTagParam($value)
    {
        $this->data['EntityTagParam'] = $value;
        $this->options['form_params']['EntityTagParam'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method string getExtra()
 * @method string getCallOutStatus()
 * @method string getUniqueBizId()
 */
class UpdateRingStatus extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtra($value)
    {
        $this->data['Extra'] = $value;
        $this->options['form_params']['Extra'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCallOutStatus($value)
    {
        $this->data['CallOutStatus'] = $value;
        $this->options['form_params']['CallOutStatus'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUniqueBizId($value)
    {
        $this->data['UniqueBizId'] = $value;
        $this->options['form_params']['UniqueBizId'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getInstanceId()
 * @method string getRoleId()
 * @method string getRoleName()
 * @method array getPermissionId()
 * @method string getOperator()
 */
class UpdateRole extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRoleId($value)
    {
        $this->data['RoleId'] = $value;
        $this->options['form_params']['RoleId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRoleName($value)
    {
        $this->data['RoleName'] = $value;
        $this->options['form_params']['RoleName'] = $value;

        return $this;
    }

    /**
     * @param array $permissionId
     *
     * @return $this
     */
	public function withPermissionId(array $permissionId)
	{
	    $this->data['PermissionId'] = $permissionId;
		foreach ($permissionId as $i => $iValue) {
			$this->options['form_params']['PermissionId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperator($value)
    {
        $this->data['Operator'] = $value;
        $this->options['form_params']['Operator'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getSkillGroupId()
 * @method $this withSkillGroupId($value)
 * @method string getDisplayName()
 * @method $this withDisplayName($value)
 * @method string getChannelType()
 * @method $this withChannelType($value)
 * @method string getSkillGroupName()
 * @method $this withSkillGroupName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 */
class UpdateSkillGroup extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method string getInstanceId()
 * @method string getTicketId()
 * @method string getOperatorId()
 * @method string getFormData()
 */
class UpdateTicket extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTicketId($value)
    {
        $this->data['TicketId'] = $value;
        $this->options['form_params']['TicketId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperatorId($value)
    {
        $this->data['OperatorId'] = $value;
        $this->options['form_params']['OperatorId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFormData($value)
    {
        $this->data['FormData'] = $value;
        $this->options['form_params']['FormData'] = $value;

        return $this;
    }
}
