<?php

namespace AlibabaCloud\CSB\V20171118;

use AlibabaCloud\Rpc;

class V20171118Rpc extends Rpc
{
    /** @var string */
    public $product = 'CSB';

    /** @var string */
    public $version = '2017-11-18';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getId()
 * @method $this withId($value)
 */
class DeleteAlarmRule extends V20171118Rpc
{
    /** @var string */
    public $scheme = 'http';
}

/**
 * @method string getData()
 * @method $this withData($value)
 * @method string getCsbId()
 * @method $this withCsbId($value)
 */
class CreateOrUpdateAlarmRule extends V20171118Rpc
{
    /** @var string */
    public $scheme = 'http';
}

/**
 * @method string getCsbId()
 * @method $this withCsbId($value)
 * @method string getServiceId()
 * @method $this withServiceId($value)
 */
class FindAllAlarmRuleForService extends V20171118Rpc
{
    /** @var string */
    public $scheme = 'http';

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getCsbId()
 * @method $this withCsbId($value)
 * @method string getTimeWindow()
 * @method $this withTimeWindow($value)
 */
class FindAlarmHistory extends V20171118Rpc
{
    /** @var string */
    public $scheme = 'http';

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getData()
 * @method $this withData($value)
 * @method string getButlerGroupId()
 * @method $this withButlerGroupId($value)
 */
class AddMember2AlarmGroup extends V20171118Rpc
{
    /** @var string */
    public $scheme = 'http';
}

/**
 * @method string getData()
 * @method $this withData($value)
 * @method string getCsbId()
 * @method $this withCsbId($value)
 */
class CreateOrUpdateAlarmGroup extends V20171118Rpc
{
    /** @var string */
    public $scheme = 'http';
}

/**
 * @method string getId()
 * @method $this withId($value)
 */
class DeleteAlarmGroup extends V20171118Rpc
{
    /** @var string */
    public $scheme = 'http';
}

/**
 * @method string getData()
 * @method $this withData($value)
 * @method string getButlerGroupId()
 * @method $this withButlerGroupId($value)
 */
class DeleteMemberFromAlarmGroup extends V20171118Rpc
{
    /** @var string */
    public $scheme = 'http';
}

class FindAllAlarmGroupsForUser extends V20171118Rpc
{
    /** @var string */
    public $scheme = 'http';

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getButlerGroupId()
 * @method $this withButlerGroupId($value)
 */
class FindAllMembersForAlarmGroup extends V20171118Rpc
{
    /** @var string */
    public $scheme = 'http';

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getCsbId()
 * @method $this withCsbId($value)
 * @method string getId()
 * @method $this withId($value)
 */
class FindAlarmRule extends V20171118Rpc
{
    /** @var string */
    public $scheme = 'http';

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getCsbId()
 * @method $this withCsbId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 */
class FindServiceStatisticalData extends V20171118Rpc
{
    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getCsbId()
 * @method $this withCsbId($value)
 */
class GetInstance extends V20171118Rpc
{
    /** @var string */
    public $scheme = 'http';

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getCsbName()
 * @method $this withCsbName($value)
 * @method string getServices()
 * @method $this withServices($value)
 */
class CommitSuccessedServices extends V20171118Rpc
{
}

/**
 * @method string getCasCsbName()
 * @method $this withCasCsbName($value)
 * @method string getData()
 * @method $this withData($value)
 */
class PublishCasService extends V20171118Rpc
{
}

/**
 * @method string getLeafOnly()
 * @method $this withLeafOnly($value)
 * @method string getCasCsbName()
 * @method $this withCasCsbName($value)
 * @method string getSrcUserId()
 * @method $this withSrcUserId($value)
 * @method string getCasServiceId()
 * @method $this withCasServiceId($value)
 */
class DeleteCasService extends V20171118Rpc
{
}

/**
 * @method string getSearchTxt()
 * @method $this withSearchTxt($value)
 * @method string getCsbId()
 * @method $this withCsbId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class FindInstanceList extends V20171118Rpc
{
    /** @var string */
    public $scheme = 'http';

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getCasCsbName()
 * @method $this withCasCsbName($value)
 * @method string getData()
 * @method $this withData($value)
 */
class PublishUnionCasService extends V20171118Rpc
{
}

/**
 * @method string getLeafOnly()
 * @method $this withLeafOnly($value)
 * @method string getCasCsbName()
 * @method $this withCasCsbName($value)
 * @method string getSrcUserId()
 * @method $this withSrcUserId($value)
 * @method string getCasServiceId()
 * @method $this withCasServiceId($value)
 */
class DeleteUnionCasService extends V20171118Rpc
{
}

/**
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getShowDelOrder()
 * @method $this withShowDelOrder($value)
 * @method string getCsbId()
 * @method $this withCsbId($value)
 * @method string getAlias()
 * @method $this withAlias($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getServiceId()
 * @method $this withServiceId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class FindOrderedList extends V20171118Rpc
{
    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getCsbId()
 * @method $this withCsbId($value)
 * @method string getAlias()
 * @method $this withAlias($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 */
class FindOrderableList extends V20171118Rpc
{
    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getCsbId()
 * @method $this withCsbId($value)
 */
class GetProject extends V20171118Rpc
{
    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getCsbId()
 * @method $this withCsbId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class DeleteProject extends V20171118Rpc
{
}

/**
 * @method string getCsbId()
 * @method $this withCsbId($value)
 * @method string getServiceId()
 * @method $this withServiceId($value)
 */
class GetService extends V20171118Rpc
{
    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getServiceId()
 * @method $this withServiceId($value)
 */
class DeleteService extends V20171118Rpc
{
}

/**
 * @method string getQps()
 * @method $this withQps($value)
 * @method string getServiceId()
 * @method $this withServiceId($value)
 */
class UpdateServiceQPS extends V20171118Rpc
{
}

/**
 * @method string getCsbId()
 * @method $this withCsbId($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 */
class CheckServiceExist extends V20171118Rpc
{
}

/**
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 */
class GetOrder extends V20171118Rpc
{
    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getData()
 * @method $this withData($value)
 */
class DeleteOrderList extends V20171118Rpc
{
}

/**
 * @method string getData()
 * @method $this withData($value)
 * @method string getCsbId()
 * @method $this withCsbId($value)
 */
class DeleteProjectList extends V20171118Rpc
{
}

/**
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getCsbId()
 * @method $this withCsbId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 */
class FindProjectList extends V20171118Rpc
{
    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getOperationFlag()
 * @method $this withOperationFlag($value)
 * @method string getCsbId()
 * @method $this withCsbId($value)
 */
class FindProjectsNameList extends V20171118Rpc
{
    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getData()
 * @method $this withData($value)
 * @method string getCsbId()
 * @method $this withCsbId($value)
 */
class DeleteServiceList extends V20171118Rpc
{
}

/**
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getCsbId()
 * @method $this withCsbId($value)
 * @method string getAlias()
 * @method $this withAlias($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getServiceId()
 * @method $this withServiceId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getOnlyPending()
 * @method $this withOnlyPending($value)
 */
class FindApprovalOrderList extends V20171118Rpc
{
    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getData()
 * @method $this withData($value)
 */
class UpdateOrderList extends V20171118Rpc
{
}

/**
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getApproveLevel()
 * @method $this withApproveLevel($value)
 * @method string getShowDelService()
 * @method $this withShowDelService($value)
 * @method string getCsbId()
 * @method $this withCsbId($value)
 * @method string getAlias()
 * @method $this withAlias($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 */
class FindApproveServiceList extends V20171118Rpc
{
    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getData()
 * @method $this withData($value)
 * @method string getCsbId()
 * @method $this withCsbId($value)
 */
class UpdateServiceListStatus extends V20171118Rpc
{
}

/**
 * @method string getData()
 * @method $this withData($value)
 * @method string getCsbId()
 * @method $this withCsbId($value)
 */
class UpdateProjectListStatus extends V20171118Rpc
{
}

/**
 * @method string getData()
 * @method $this withData($value)
 * @method string getCsbId()
 * @method $this withCsbId($value)
 */
class CreateCredentials extends V20171118Rpc
{
}

/**
 * @method string getCsbId()
 * @method $this withCsbId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 */
class FindCredentialsList extends V20171118Rpc
{
    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getData()
 * @method $this withData($value)
 * @method string getCsbId()
 * @method $this withCsbId($value)
 */
class CreateService extends V20171118Rpc
{
}

/**
 * @method string getData()
 * @method $this withData($value)
 * @method string getCsbId()
 * @method $this withCsbId($value)
 */
class UpdateService extends V20171118Rpc
{
}

/**
 * @method string getData()
 * @method $this withData($value)
 * @method string getCsbId()
 * @method $this withCsbId($value)
 */
class UpdateOrder extends V20171118Rpc
{
}

/**
 * @method string getData()
 * @method $this withData($value)
 * @method string getCsbId()
 * @method $this withCsbId($value)
 */
class CreateOrder extends V20171118Rpc
{
}

/**
 * @method string getData()
 * @method $this withData($value)
 * @method string getCsbId()
 * @method $this withCsbId($value)
 */
class UpdateProject extends V20171118Rpc
{
}

/**
 * @method string getData()
 * @method $this withData($value)
 * @method string getCsbId()
 * @method $this withCsbId($value)
 */
class CreateProject extends V20171118Rpc
{
}

/**
 * @method string getData()
 * @method $this withData($value)
 */
class ApproveOrderList extends V20171118Rpc
{
}

/**
 * @method string getData()
 * @method $this withData($value)
 * @method string getIgnoreDauth()
 * @method $this withIgnoreDauth($value)
 * @method string getForce()
 * @method $this withForce($value)
 */
class DeleteCredentialsList extends V20171118Rpc
{
}

/**
 * @method string getCredentialId()
 * @method $this withCredentialId($value)
 */
class RenewCredentials extends V20171118Rpc
{
}

/**
 * @method string getCredentialId()
 * @method $this withCredentialId($value)
 */
class ReplaceCredential extends V20171118Rpc
{
}

/**
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getShowDelService()
 * @method $this withShowDelService($value)
 * @method string getCasShowType()
 * @method $this withCasShowType($value)
 * @method string getCsbId()
 * @method $this withCsbId($value)
 * @method string getAlias()
 * @method $this withAlias($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 */
class FindServiceList extends V20171118Rpc
{
    /** @var string */
    public $method = 'GET';
}
