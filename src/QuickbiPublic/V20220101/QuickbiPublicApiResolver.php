<?php

namespace AlibabaCloud\QuickbiPublic\V20220101;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddDataLevelPermissionRuleUsers addDataLevelPermissionRuleUsers(array $options = [])
 * @method AddDataLevelPermissionWhiteList addDataLevelPermissionWhiteList(array $options = [])
 * @method AddShareReport addShareReport(array $options = [])
 * @method AddUser addUser(array $options = [])
 * @method AddUserGroupMember addUserGroupMember(array $options = [])
 * @method AddUserGroupMembers addUserGroupMembers(array $options = [])
 * @method AddUserTagMeta addUserTagMeta(array $options = [])
 * @method AddUserToWorkspace addUserToWorkspace(array $options = [])
 * @method AddWorkspaceUsers addWorkspaceUsers(array $options = [])
 * @method AllotDatasetAccelerationTask allotDatasetAccelerationTask(array $options = [])
 * @method AuthorizeMenu authorizeMenu(array $options = [])
 * @method BatchAddFeishuUsers batchAddFeishuUsers(array $options = [])
 * @method CancelAuthorizationMenu cancelAuthorizationMenu(array $options = [])
 * @method CancelCollection cancelCollection(array $options = [])
 * @method CancelReportShare cancelReportShare(array $options = [])
 * @method ChangeVisibilityModel changeVisibilityModel(array $options = [])
 * @method CheckReadable checkReadable(array $options = [])
 * @method CreateTicket createTicket(array $options = [])
 * @method CreateUserGroup createUserGroup(array $options = [])
 * @method DelayTicketExpireTime delayTicketExpireTime(array $options = [])
 * @method DeleteDataLevelPermissionRuleUsers deleteDataLevelPermissionRuleUsers(array $options = [])
 * @method DeleteDataLevelRuleConfig deleteDataLevelRuleConfig(array $options = [])
 * @method DeleteTicket deleteTicket(array $options = [])
 * @method DeleteUser deleteUser(array $options = [])
 * @method DeleteUserFromWorkspace deleteUserFromWorkspace(array $options = [])
 * @method DeleteUserGroup deleteUserGroup(array $options = [])
 * @method DeleteUserGroupMember deleteUserGroupMember(array $options = [])
 * @method DeleteUserGroupMembers deleteUserGroupMembers(array $options = [])
 * @method DeleteUserTagMeta deleteUserTagMeta(array $options = [])
 * @method GetUserGroupInfo getUserGroupInfo(array $options = [])
 * @method ListApiDatasource listApiDatasource(array $options = [])
 * @method ListByUserGroupId listByUserGroupId(array $options = [])
 * @method ListCollections listCollections(array $options = [])
 * @method ListCubeDataLevelPermissionConfig listCubeDataLevelPermissionConfig(array $options = [])
 * @method ListDataLevelPermissionWhiteList listDataLevelPermissionWhiteList(array $options = [])
 * @method ListFavoriteReports listFavoriteReports(array $options = [])
 * @method ListPortalMenuAuthorization listPortalMenuAuthorization(array $options = [])
 * @method ListPortalMenus listPortalMenus(array $options = [])
 * @method ListRecentViewReports listRecentViewReports(array $options = [])
 * @method ListSharedReports listSharedReports(array $options = [])
 * @method ListUserGroupsByUserId listUserGroupsByUserId(array $options = [])
 * @method ModifyApiDatasourceParameters modifyApiDatasourceParameters(array $options = [])
 * @method QueryComponentPerformance queryComponentPerformance(array $options = [])
 * @method QueryCubeOptimization queryCubeOptimization(array $options = [])
 * @method QueryCubePerformance queryCubePerformance(array $options = [])
 * @method QueryDataService queryDataService(array $options = [])
 * @method QueryDatasetDetailInfo queryDatasetDetailInfo(array $options = [])
 * @method QueryDatasetInfo queryDatasetInfo(array $options = [])
 * @method QueryDatasetList queryDatasetList(array $options = [])
 * @method QueryDatasetSwitchInfo queryDatasetSwitchInfo(array $options = [])
 * @method QueryEmbeddedInfo queryEmbeddedInfo(array $options = [])
 * @method QueryEmbeddedStatus queryEmbeddedStatus(array $options = [])
 * @method QueryOrganizationWorkspaceList queryOrganizationWorkspaceList(array $options = [])
 * @method QueryReadableResourcesListByUserId queryReadableResourcesListByUserId(array $options = [])
 * @method QueryReportPerformance queryReportPerformance(array $options = [])
 * @method QueryShareList queryShareList(array $options = [])
 * @method QuerySharesToUserList querySharesToUserList(array $options = [])
 * @method QueryTicketInfo queryTicketInfo(array $options = [])
 * @method QueryUserGroupListByParentId queryUserGroupListByParentId(array $options = [])
 * @method QueryUserGroupMember queryUserGroupMember(array $options = [])
 * @method QueryUserInfoByAccount queryUserInfoByAccount(array $options = [])
 * @method QueryUserInfoByUserId queryUserInfoByUserId(array $options = [])
 * @method QueryUserList queryUserList(array $options = [])
 * @method QueryUserRoleInfoInWorkspace queryUserRoleInfoInWorkspace(array $options = [])
 * @method QueryUserTagMetaList queryUserTagMetaList(array $options = [])
 * @method QueryUserTagValueList queryUserTagValueList(array $options = [])
 * @method QueryWorks queryWorks(array $options = [])
 * @method QueryWorksBloodRelationship queryWorksBloodRelationship(array $options = [])
 * @method QueryWorksByOrganization queryWorksByOrganization(array $options = [])
 * @method QueryWorksByWorkspace queryWorksByWorkspace(array $options = [])
 * @method QueryWorkspaceUserList queryWorkspaceUserList(array $options = [])
 * @method ResultCallback resultCallback(array $options = [])
 * @method SaveFavorites saveFavorites(array $options = [])
 * @method SetDataLevelPermissionExtraConfig setDataLevelPermissionExtraConfig(array $options = [])
 * @method SetDataLevelPermissionRuleConfig setDataLevelPermissionRuleConfig(array $options = [])
 * @method SetDataLevelPermissionWhiteList setDataLevelPermissionWhiteList(array $options = [])
 * @method UpdateDataLevelPermissionStatus updateDataLevelPermissionStatus(array $options = [])
 * @method UpdateEmbeddedStatus updateEmbeddedStatus(array $options = [])
 * @method UpdateTicketNum updateTicketNum(array $options = [])
 * @method UpdateUser updateUser(array $options = [])
 * @method UpdateUserGroup updateUserGroup(array $options = [])
 * @method UpdateUserTagMeta updateUserTagMeta(array $options = [])
 * @method UpdateUserTagValue updateUserTagValue(array $options = [])
 * @method UpdateWorkspaceUserRole updateWorkspaceUserRole(array $options = [])
 * @method UpdateWorkspaceUsersRole updateWorkspaceUsersRole(array $options = [])
 * @method WithdrawAllUserGroups withdrawAllUserGroups(array $options = [])
 */
class QuickbiPublicApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'quickbi-public';

    /** @var string */
    public $version = '2022-01-01';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = '2.2.0';
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getAddUserModel()
 * @method $this withAddUserModel($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 */
class AddDataLevelPermissionRuleUsers extends Rpc
{
}

/**
 * @method string getTargetType()
 * @method $this withTargetType($value)
 * @method string getTargetIds()
 * @method $this withTargetIds($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getRuleType()
 * @method $this withRuleType($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getOperateType()
 * @method $this withOperateType($value)
 * @method string getCubeId()
 * @method $this withCubeId($value)
 */
class AddDataLevelPermissionWhiteList extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getAuthPoint()
 * @method $this withAuthPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getExpireDate()
 * @method $this withExpireDate($value)
 * @method string getShareToType()
 * @method $this withShareToType($value)
 * @method string getWorksId()
 * @method $this withWorksId($value)
 * @method string getShareToId()
 * @method $this withShareToId($value)
 */
class AddShareReport extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAdminUser()
 * @method $this withAdminUser($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getAccountType()
 * @method $this withAccountType($value)
 * @method string getUserType()
 * @method $this withUserType($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getAccountId()
 * @method $this withAccountId($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getPhone()
 * @method $this withPhone($value)
 * @method string getNickName()
 * @method $this withNickName($value)
 * @method string getAuthAdminUser()
 * @method $this withAuthAdminUser($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 */
class AddUser extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getUserIdList()
 * @method $this withUserIdList($value)
 * @method string getUserGroupId()
 * @method $this withUserGroupId($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 */
class AddUserGroupMember extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getUserGroupIds()
 * @method $this withUserGroupIds($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class AddUserGroupMembers extends Rpc
{
}

/**
 * @method string getTagDescription()
 * @method $this withTagDescription($value)
 * @method string getTagName()
 * @method $this withTagName($value)
 * @method string getTagId()
 * @method $this withTagId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 */
class AddUserTagMeta extends Rpc
{
}

/**
 * @method string getRoleId()
 * @method $this withRoleId($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getWorkspaceId()
 * @method $this withWorkspaceId($value)
 */
class AddUserToWorkspace extends Rpc
{
}

/**
 * @method string getUserIds()
 * @method $this withUserIds($value)
 * @method string getRoleId()
 * @method $this withRoleId($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getWorkspaceId()
 * @method $this withWorkspaceId($value)
 */
class AddWorkspaceUsers extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getCubeId()
 * @method $this withCubeId($value)
 */
class AllotDatasetAccelerationTask extends Rpc
{
}

/**
 * @method string getDataPortalId()
 * @method $this withDataPortalId($value)
 * @method string getUserIds()
 * @method $this withUserIds($value)
 * @method string getAuthPointsValue()
 * @method $this withAuthPointsValue($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getUserGroupIds()
 * @method $this withUserGroupIds($value)
 * @method string getMenuIds()
 * @method $this withMenuIds($value)
 */
class AuthorizeMenu extends Rpc
{
}

/**
 * @method string getIsAdmin()
 * @method $this withIsAdmin($value)
 * @method string getFeishuUsers()
 * @method $this withFeishuUsers($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getUserType()
 * @method $this withUserType($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getUserGroupIds()
 * @method $this withUserGroupIds($value)
 * @method string getIsAuthAdmin()
 * @method $this withIsAuthAdmin($value)
 */
class BatchAddFeishuUsers extends Rpc
{
}

/**
 * @method string getDataPortalId()
 * @method $this withDataPortalId($value)
 * @method string getUserIds()
 * @method $this withUserIds($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getUserGroupIds()
 * @method $this withUserGroupIds($value)
 * @method string getMenuIds()
 * @method $this withMenuIds($value)
 */
class CancelAuthorizationMenu extends Rpc
{
}

/**
 * @method string getWorksId()
 * @method $this withWorksId($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class CancelCollection extends Rpc
{
}

/**
 * @method string getReportId()
 * @method $this withReportId($value)
 * @method string getShareToType()
 * @method $this withShareToType($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getShareToIds()
 * @method $this withShareToIds($value)
 */
class CancelReportShare extends Rpc
{
}

/**
 * @method string getDataPortalId()
 * @method $this withDataPortalId($value)
 * @method string getShowOnlyWithAccess()
 * @method $this withShowOnlyWithAccess($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getMenuIds()
 * @method $this withMenuIds($value)
 */
class ChangeVisibilityModel extends Rpc
{
}

/**
 * @method string getWorksId()
 * @method $this withWorksId($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class CheckReadable extends Rpc
{
}

/**
 * @method string getExpireTime()
 * @method $this withExpireTime($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getAccountType()
 * @method $this withAccountType($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getCmptId()
 * @method $this withCmptId($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getGlobalParam()
 * @method $this withGlobalParam($value)
 * @method string getWorksId()
 * @method $this withWorksId($value)
 * @method string getTicketNum()
 * @method $this withTicketNum($value)
 * @method string getWatermarkParam()
 * @method $this withWatermarkParam($value)
 */
class CreateTicket extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getUserGroupId()
 * @method $this withUserGroupId($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getUserGroupName()
 * @method $this withUserGroupName($value)
 * @method string getUserGroupDescription()
 * @method $this withUserGroupDescription($value)
 * @method string getParentUserGroupId()
 * @method $this withParentUserGroupId($value)
 */
class CreateUserGroup extends Rpc
{
}

/**
 * @method string getExpireTime()
 * @method $this withExpireTime($value)
 * @method string getTicket()
 * @method $this withTicket($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 */
class DelayTicketExpireTime extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getDeleteUserModel()
 * @method $this withDeleteUserModel($value)
 */
class DeleteDataLevelPermissionRuleUsers extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getRuleId()
 * @method $this withRuleId($value)
 * @method string getCubeId()
 * @method $this withCubeId($value)
 */
class DeleteDataLevelRuleConfig extends Rpc
{
}

/**
 * @method string getTicket()
 * @method $this withTicket($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 */
class DeleteTicket extends Rpc
{
}

/**
 * @method string getTransferUserId()
 * @method $this withTransferUserId($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class DeleteUser extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getWorkspaceId()
 * @method $this withWorkspaceId($value)
 */
class DeleteUserFromWorkspace extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getUserGroupId()
 * @method $this withUserGroupId($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 */
class DeleteUserGroup extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getUserGroupId()
 * @method $this withUserGroupId($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class DeleteUserGroupMember extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getUserGroupIds()
 * @method $this withUserGroupIds($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class DeleteUserGroupMembers extends Rpc
{
}

/**
 * @method string getTagId()
 * @method $this withTagId($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 */
class DeleteUserTagMeta extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 */
class GetUserGroupInfo extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getKeyWord()
 * @method $this withKeyWord($value)
 * @method string getWorkspaceId()
 * @method $this withWorkspaceId($value)
 */
class ListApiDatasource extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getUserGroupIds()
 * @method $this withUserGroupIds($value)
 */
class ListByUserGroupId extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class ListCollections extends Rpc
{
}

/**
 * @method string getRuleType()
 * @method $this withRuleType($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getCubeId()
 * @method $this withCubeId($value)
 */
class ListCubeDataLevelPermissionConfig extends Rpc
{
}

/**
 * @method string getRuleType()
 * @method $this withRuleType($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getCubeId()
 * @method $this withCubeId($value)
 */
class ListDataLevelPermissionWhiteList extends Rpc
{
}

/**
 * @method string getTreeType()
 * @method $this withTreeType($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class ListFavoriteReports extends Rpc
{
}

/**
 * @method string getDataPortalId()
 * @method $this withDataPortalId($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 */
class ListPortalMenuAuthorization extends Rpc
{
}

/**
 * @method string getDataPortalId()
 * @method $this withDataPortalId($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class ListPortalMenus extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getOffsetDay()
 * @method $this withOffsetDay($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getQueryMode()
 * @method $this withQueryMode($value)
 * @method string getTreeType()
 * @method $this withTreeType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 */
class ListRecentViewReports extends Rpc
{
}

/**
 * @method string getTreeType()
 * @method $this withTreeType($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class ListSharedReports extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class ListUserGroupsByUserId extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getParameters()
 * @method $this withParameters($value)
 * @method string getApiId()
 * @method $this withApiId($value)
 * @method string getWorkspaceId()
 * @method $this withWorkspaceId($value)
 */
class ModifyApiDatasourceParameters extends Rpc
{
}

/**
 * @method string getReportId()
 * @method $this withReportId($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCostTimeAvgMin()
 * @method $this withCostTimeAvgMin($value)
 * @method string getQueryType()
 * @method $this withQueryType($value)
 * @method string getWorkspaceId()
 * @method $this withWorkspaceId($value)
 */
class QueryComponentPerformance extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getWorkspaceId()
 * @method $this withWorkspaceId($value)
 */
class QueryCubeOptimization extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCostTimeAvgMin()
 * @method $this withCostTimeAvgMin($value)
 * @method string getQueryType()
 * @method $this withQueryType($value)
 * @method string getCubeId()
 * @method $this withCubeId($value)
 * @method string getWorkspaceId()
 * @method $this withWorkspaceId($value)
 */
class QueryCubePerformance extends Rpc
{
}

/**
 * @method string getReturnFields()
 * @method $this withReturnFields($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getConditions()
 * @method $this withConditions($value)
 * @method string getApiId()
 * @method $this withApiId($value)
 */
class QueryDataService extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getDatasetId()
 * @method $this withDatasetId($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 */
class QueryDatasetDetailInfo extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getDatasetId()
 * @method $this withDatasetId($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 */
class QueryDatasetInfo extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDirectoryId()
 * @method $this withDirectoryId($value)
 * @method string getWithChildren()
 * @method $this withWithChildren($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getWorkspaceId()
 * @method $this withWorkspaceId($value)
 */
class QueryDatasetList extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getCubeId()
 * @method $this withCubeId($value)
 */
class QueryDatasetSwitchInfo extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 */
class QueryEmbeddedInfo extends Rpc
{
}

/**
 * @method string getWorksId()
 * @method $this withWorksId($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 */
class QueryEmbeddedStatus extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class QueryOrganizationWorkspaceList extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class QueryReadableResourcesListByUserId extends Rpc
{
}

/**
 * @method string getReportId()
 * @method $this withReportId($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCostTimeAvgMin()
 * @method $this withCostTimeAvgMin($value)
 * @method string getQueryType()
 * @method $this withQueryType($value)
 * @method string getWorkspaceId()
 * @method $this withWorkspaceId($value)
 */
class QueryReportPerformance extends Rpc
{
}

/**
 * @method string getReportId()
 * @method $this withReportId($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 */
class QueryShareList extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class QuerySharesToUserList extends Rpc
{
}

/**
 * @method string getTicket()
 * @method $this withTicket($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 */
class QueryTicketInfo extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getParentUserGroupId()
 * @method $this withParentUserGroupId($value)
 */
class QueryUserGroupListByParentId extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getUserGroupId()
 * @method $this withUserGroupId($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 */
class QueryUserGroupMember extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getAccountType()
 * @method $this withAccountType($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getAccount()
 * @method $this withAccount($value)
 */
class QueryUserInfoByAccount extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class QueryUserInfoByUserId extends Rpc
{
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAccountType()
 * @method $this withAccountType($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 */
class QueryUserList extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getWorkspaceId()
 * @method $this withWorkspaceId($value)
 */
class QueryUserRoleInfoInWorkspace extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 */
class QueryUserTagMetaList extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class QueryUserTagValueList extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getApiLevel()
 * @method $this withApiLevel($value)
 * @method string getWorksId()
 * @method $this withWorksId($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 */
class QueryWorks extends Rpc
{
}

/**
 * @method string getApiLevel()
 * @method $this withApiLevel($value)
 * @method string getWorksId()
 * @method $this withWorksId($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 */
class QueryWorksBloodRelationship extends Rpc
{
}

/**
 * @method string getWorksType()
 * @method $this withWorksType($value)
 * @method string getThirdPartAuthFlag()
 * @method $this withThirdPartAuthFlag($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class QueryWorksByOrganization extends Rpc
{
}

/**
 * @method string getWorksType()
 * @method $this withWorksType($value)
 * @method string getThirdPartAuthFlag()
 * @method $this withThirdPartAuthFlag($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getWorkspaceId()
 * @method $this withWorkspaceId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class QueryWorksByWorkspace extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getWorkspaceId()
 * @method $this withWorkspaceId($value)
 */
class QueryWorkspaceUserList extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getHandleReason()
 * @method $this withHandleReason($value)
 * @method string getApplicationId()
 * @method $this withApplicationId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ResultCallback extends Rpc
{
}

/**
 * @method string getWorksId()
 * @method $this withWorksId($value)
 * @method string getWorksType()
 * @method $this withWorksType($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class SaveFavorites extends Rpc
{
}

/**
 * @method string getMissHitPolicy()
 * @method $this withMissHitPolicy($value)
 * @method string getRuleType()
 * @method $this withRuleType($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getCubeId()
 * @method $this withCubeId($value)
 */
class SetDataLevelPermissionExtraConfig extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getRuleModel()
 * @method $this withRuleModel($value)
 */
class SetDataLevelPermissionRuleConfig extends Rpc
{
}

/**
 * @method string getWhiteListModel()
 * @method $this withWhiteListModel($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 */
class SetDataLevelPermissionWhiteList extends Rpc
{
}

/**
 * @method string getIsOpen()
 * @method $this withIsOpen($value)
 * @method string getRuleType()
 * @method $this withRuleType($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getCubeId()
 * @method $this withCubeId($value)
 */
class UpdateDataLevelPermissionStatus extends Rpc
{
}

/**
 * @method string getWorksId()
 * @method $this withWorksId($value)
 * @method string getThirdPartAuthFlag()
 * @method $this withThirdPartAuthFlag($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 */
class UpdateEmbeddedStatus extends Rpc
{
}

/**
 * @method string getTicket()
 * @method $this withTicket($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getTicketNum()
 * @method $this withTicketNum($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 */
class UpdateTicketNum extends Rpc
{
}

/**
 * @method string getAdminUser()
 * @method $this withAdminUser($value)
 * @method string getAccountType()
 * @method $this withAccountType($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getUserType()
 * @method $this withUserType($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getPhone()
 * @method $this withPhone($value)
 * @method string getNickName()
 * @method $this withNickName($value)
 * @method string getAuthAdminUser()
 * @method $this withAuthAdminUser($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 */
class UpdateUser extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getUserGroupId()
 * @method $this withUserGroupId($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getUserGroupName()
 * @method $this withUserGroupName($value)
 * @method string getUserGroupDescription()
 * @method $this withUserGroupDescription($value)
 */
class UpdateUserGroup extends Rpc
{
}

/**
 * @method string getTagDescription()
 * @method $this withTagDescription($value)
 * @method string getTagName()
 * @method $this withTagName($value)
 * @method string getTagId()
 * @method $this withTagId($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 */
class UpdateUserTagMeta extends Rpc
{
}

/**
 * @method string getTagValue()
 * @method $this withTagValue($value)
 * @method string getTagId()
 * @method $this withTagId($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class UpdateUserTagValue extends Rpc
{
}

/**
 * @method string getRoleId()
 * @method $this withRoleId($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getWorkspaceId()
 * @method $this withWorkspaceId($value)
 */
class UpdateWorkspaceUserRole extends Rpc
{
}

/**
 * @method string getUserIds()
 * @method $this withUserIds($value)
 * @method string getRoleId()
 * @method $this withRoleId($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getWorkspaceId()
 * @method $this withWorkspaceId($value)
 */
class UpdateWorkspaceUsersRole extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class WithdrawAllUserGroups extends Rpc
{
}
