<?php

namespace AlibabaCloud\CSB;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the CSB based on the method name as the Api name.
 *
 * @package   AlibabaCloud\CSB
 *
 * @method static V20171118\AddMember2AlarmGroup addMember2AlarmGroup(array $options = [])
 * @method static V20171118\ApproveOrderList approveOrderList(array $options = [])
 * @method static V20171118\CheckServiceExist checkServiceExist(array $options = [])
 * @method static V20171118\CommitSuccessedServices commitSuccessedServices(array $options = [])
 * @method static V20171118\CreateCredentials createCredentials(array $options = [])
 * @method static V20171118\CreateOrUpdateAlarmGroup createOrUpdateAlarmGroup(array $options = [])
 * @method static V20171118\CreateOrUpdateAlarmRule createOrUpdateAlarmRule(array $options = [])
 * @method static V20171118\CreateOrder createOrder(array $options = [])
 * @method static V20171118\CreateProject createProject(array $options = [])
 * @method static V20171118\CreateService createService(array $options = [])
 * @method static V20171118\DeleteAlarmGroup deleteAlarmGroup(array $options = [])
 * @method static V20171118\DeleteAlarmRule deleteAlarmRule(array $options = [])
 * @method static V20171118\DeleteCasService deleteCasService(array $options = [])
 * @method static V20171118\DeleteCredentialsList deleteCredentialsList(array $options = [])
 * @method static V20171118\DeleteMemberFromAlarmGroup deleteMemberFromAlarmGroup(array $options = [])
 * @method static V20171118\DeleteOrderList deleteOrderList(array $options = [])
 * @method static V20171118\DeleteProject deleteProject(array $options = [])
 * @method static V20171118\DeleteProjectList deleteProjectList(array $options = [])
 * @method static V20171118\DeleteService deleteService(array $options = [])
 * @method static V20171118\DeleteServiceList deleteServiceList(array $options = [])
 * @method static V20171118\DeleteUnionCasService deleteUnionCasService(array $options = [])
 * @method static V20171118\FindAlarmHistory findAlarmHistory(array $options = [])
 * @method static V20171118\FindAlarmRule findAlarmRule(array $options = [])
 * @method static V20171118\FindAllAlarmGroupsForUser findAllAlarmGroupsForUser(array $options = [])
 * @method static V20171118\FindAllAlarmRuleForService findAllAlarmRuleForService(array $options = [])
 * @method static V20171118\FindAllMembersForAlarmGroup findAllMembersForAlarmGroup(array $options = [])
 * @method static V20171118\FindApprovalOrderList findApprovalOrderList(array $options = [])
 * @method static V20171118\FindApproveServiceList findApproveServiceList(array $options = [])
 * @method static V20171118\FindCredentialsList findCredentialsList(array $options = [])
 * @method static V20171118\FindInstanceList findInstanceList(array $options = [])
 * @method static V20171118\FindOrderableList findOrderableList(array $options = [])
 * @method static V20171118\FindOrderedList findOrderedList(array $options = [])
 * @method static V20171118\FindProjectList findProjectList(array $options = [])
 * @method static V20171118\FindProjectsNameList findProjectsNameList(array $options = [])
 * @method static V20171118\FindServiceList findServiceList(array $options = [])
 * @method static V20171118\FindServiceStatisticalData findServiceStatisticalData(array $options = [])
 * @method static V20171118\GetInstance getInstance(array $options = [])
 * @method static V20171118\GetOrder getOrder(array $options = [])
 * @method static V20171118\GetProject getProject(array $options = [])
 * @method static V20171118\GetService getService(array $options = [])
 * @method static V20171118\PublishCasService publishCasService(array $options = [])
 * @method static V20171118\PublishUnionCasService publishUnionCasService(array $options = [])
 * @method static V20171118\RenewCredentials renewCredentials(array $options = [])
 * @method static V20171118\ReplaceCredential replaceCredential(array $options = [])
 * @method static V20171118\UpdateOrder updateOrder(array $options = [])
 * @method static V20171118\UpdateOrderList updateOrderList(array $options = [])
 * @method static V20171118\UpdateProject updateProject(array $options = [])
 * @method static V20171118\UpdateProjectListStatus updateProjectListStatus(array $options = [])
 * @method static V20171118\UpdateService updateService(array $options = [])
 * @method static V20171118\UpdateServiceListStatus updateServiceListStatus(array $options = [])
 * @method static V20171118\UpdateServiceQPS updateServiceQPS(array $options = [])
 */
class CSBV20171118
{
    use ApiResolverTrait;

    /**
     * @var string
     */
    protected $namespace = 'AlibabaCloud\\CSB\\V20171118';
}
