<?php

namespace AlibabaCloud\CSB\V20171118;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Rpc;

/**
 * Resolve Api based on the method name.
 *
 * @method DeleteAlarmRule deleteAlarmRule(array $options = [])
 * @method CreateOrUpdateAlarmRule createOrUpdateAlarmRule(array $options = [])
 * @method FindAllAlarmRuleForService findAllAlarmRuleForService(array $options = [])
 * @method FindAlarmHistory findAlarmHistory(array $options = [])
 * @method AddMember2AlarmGroup addMember2AlarmGroup(array $options = [])
 * @method CreateOrUpdateAlarmGroup createOrUpdateAlarmGroup(array $options = [])
 * @method DeleteAlarmGroup deleteAlarmGroup(array $options = [])
 * @method DeleteMemberFromAlarmGroup deleteMemberFromAlarmGroup(array $options = [])
 * @method FindAllAlarmGroupsForUser findAllAlarmGroupsForUser(array $options = [])
 * @method FindAllMembersForAlarmGroup findAllMembersForAlarmGroup(array $options = [])
 * @method FindAlarmRule findAlarmRule(array $options = [])
 * @method FindServiceStatisticalData findServiceStatisticalData(array $options = [])
 * @method GetInstance getInstance(array $options = [])
 * @method CommitSuccessedServices commitSuccessedServices(array $options = [])
 * @method PublishCasService publishCasService(array $options = [])
 * @method DeleteCasService deleteCasService(array $options = [])
 * @method FindInstanceList findInstanceList(array $options = [])
 * @method PublishUnionCasService publishUnionCasService(array $options = [])
 * @method DeleteUnionCasService deleteUnionCasService(array $options = [])
 * @method FindOrderedList findOrderedList(array $options = [])
 * @method FindOrderableList findOrderableList(array $options = [])
 * @method GetProject getProject(array $options = [])
 * @method DeleteProject deleteProject(array $options = [])
 * @method GetService getService(array $options = [])
 * @method DeleteService deleteService(array $options = [])
 * @method UpdateServiceQPS updateServiceQPS(array $options = [])
 * @method CheckServiceExist checkServiceExist(array $options = [])
 * @method GetOrder getOrder(array $options = [])
 * @method DeleteOrderList deleteOrderList(array $options = [])
 * @method DeleteProjectList deleteProjectList(array $options = [])
 * @method FindProjectList findProjectList(array $options = [])
 * @method FindProjectsNameList findProjectsNameList(array $options = [])
 * @method DeleteServiceList deleteServiceList(array $options = [])
 * @method FindApprovalOrderList findApprovalOrderList(array $options = [])
 * @method UpdateOrderList updateOrderList(array $options = [])
 * @method FindApproveServiceList findApproveServiceList(array $options = [])
 * @method UpdateServiceListStatus updateServiceListStatus(array $options = [])
 * @method UpdateProjectListStatus updateProjectListStatus(array $options = [])
 * @method CreateCredentials createCredentials(array $options = [])
 * @method FindCredentialsList findCredentialsList(array $options = [])
 * @method CreateService createService(array $options = [])
 * @method UpdateService updateService(array $options = [])
 * @method UpdateOrder updateOrder(array $options = [])
 * @method CreateOrder createOrder(array $options = [])
 * @method UpdateProject updateProject(array $options = [])
 * @method CreateProject createProject(array $options = [])
 * @method ApproveOrderList approveOrderList(array $options = [])
 * @method DeleteCredentialsList deleteCredentialsList(array $options = [])
 * @method RenewCredentials renewCredentials(array $options = [])
 * @method ReplaceCredential replaceCredential(array $options = [])
 * @method FindServiceList findServiceList(array $options = [])
 */
class CSBApiResolver
{
    use ApiResolverTrait;
}

class V20171118Rpc extends Rpc
{
    /** @var string */
    public $product = 'CSB';

    /** @var string */
    public $version = '2017-11-18';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    protected $scheme = 'https';

    /** @var string */
    public $serviceCode = 'csb';
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
 * @method string getCsbId()
 * @method $this withCsbId($value)
 */
class CreateOrUpdateAlarmRule extends V20171118Rpc
{

    /** @var string */
    public $scheme = 'http';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withData($value)
    {
        $this->data['Data'] = $value;
        $this->options['form_params']['Data'] = $value;

        return $this;
    }
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
 * @method string getButlerGroupId()
 */
class AddMember2AlarmGroup extends V20171118Rpc
{

    /** @var string */
    public $scheme = 'http';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withData($value)
    {
        $this->data['Data'] = $value;
        $this->options['form_params']['Data'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withButlerGroupId($value)
    {
        $this->data['ButlerGroupId'] = $value;
        $this->options['form_params']['ButlerGroupId'] = $value;

        return $this;
    }
}

/**
 * @method string getData()
 * @method string getCsbId()
 * @method $this withCsbId($value)
 */
class CreateOrUpdateAlarmGroup extends V20171118Rpc
{

    /** @var string */
    public $scheme = 'http';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withData($value)
    {
        $this->data['Data'] = $value;
        $this->options['form_params']['Data'] = $value;

        return $this;
    }
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
 * @method string getButlerGroupId()
 */
class DeleteMemberFromAlarmGroup extends V20171118Rpc
{

    /** @var string */
    public $scheme = 'http';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withData($value)
    {
        $this->data['Data'] = $value;
        $this->options['form_params']['Data'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withButlerGroupId($value)
    {
        $this->data['ButlerGroupId'] = $value;
        $this->options['form_params']['ButlerGroupId'] = $value;

        return $this;
    }
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
 */
class CommitSuccessedServices extends V20171118Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServices($value)
    {
        $this->data['Services'] = $value;
        $this->options['form_params']['Services'] = $value;

        return $this;
    }
}

/**
 * @method string getCasCsbName()
 * @method $this withCasCsbName($value)
 * @method string getData()
 */
class PublishCasService extends V20171118Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withData($value)
    {
        $this->data['Data'] = $value;
        $this->options['form_params']['Data'] = $value;

        return $this;
    }
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
 */
class PublishUnionCasService extends V20171118Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withData($value)
    {
        $this->data['Data'] = $value;
        $this->options['form_params']['Data'] = $value;

        return $this;
    }
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
 */
class DeleteOrderList extends V20171118Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withData($value)
    {
        $this->data['Data'] = $value;
        $this->options['form_params']['Data'] = $value;

        return $this;
    }
}

/**
 * @method string getData()
 * @method string getCsbId()
 * @method $this withCsbId($value)
 */
class DeleteProjectList extends V20171118Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withData($value)
    {
        $this->data['Data'] = $value;
        $this->options['form_params']['Data'] = $value;

        return $this;
    }
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
 * @method string getCsbId()
 * @method $this withCsbId($value)
 */
class DeleteServiceList extends V20171118Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withData($value)
    {
        $this->data['Data'] = $value;
        $this->options['form_params']['Data'] = $value;

        return $this;
    }
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
 */
class UpdateOrderList extends V20171118Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withData($value)
    {
        $this->data['Data'] = $value;
        $this->options['form_params']['Data'] = $value;

        return $this;
    }
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
 * @method string getCsbId()
 * @method $this withCsbId($value)
 */
class UpdateServiceListStatus extends V20171118Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withData($value)
    {
        $this->data['Data'] = $value;
        $this->options['form_params']['Data'] = $value;

        return $this;
    }
}

/**
 * @method string getData()
 * @method string getCsbId()
 * @method $this withCsbId($value)
 */
class UpdateProjectListStatus extends V20171118Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withData($value)
    {
        $this->data['Data'] = $value;
        $this->options['form_params']['Data'] = $value;

        return $this;
    }
}

/**
 * @method string getData()
 * @method string getCsbId()
 * @method $this withCsbId($value)
 */
class CreateCredentials extends V20171118Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withData($value)
    {
        $this->data['Data'] = $value;
        $this->options['form_params']['Data'] = $value;

        return $this;
    }
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
 * @method string getCsbId()
 * @method $this withCsbId($value)
 */
class CreateService extends V20171118Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withData($value)
    {
        $this->data['Data'] = $value;
        $this->options['form_params']['Data'] = $value;

        return $this;
    }
}

/**
 * @method string getData()
 * @method string getCsbId()
 * @method $this withCsbId($value)
 */
class UpdateService extends V20171118Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withData($value)
    {
        $this->data['Data'] = $value;
        $this->options['form_params']['Data'] = $value;

        return $this;
    }
}

/**
 * @method string getData()
 * @method string getCsbId()
 * @method $this withCsbId($value)
 */
class UpdateOrder extends V20171118Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withData($value)
    {
        $this->data['Data'] = $value;
        $this->options['form_params']['Data'] = $value;

        return $this;
    }
}

/**
 * @method string getData()
 * @method string getCsbId()
 * @method $this withCsbId($value)
 */
class CreateOrder extends V20171118Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withData($value)
    {
        $this->data['Data'] = $value;
        $this->options['form_params']['Data'] = $value;

        return $this;
    }
}

/**
 * @method string getData()
 * @method string getCsbId()
 * @method $this withCsbId($value)
 */
class UpdateProject extends V20171118Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withData($value)
    {
        $this->data['Data'] = $value;
        $this->options['form_params']['Data'] = $value;

        return $this;
    }
}

/**
 * @method string getData()
 * @method string getCsbId()
 * @method $this withCsbId($value)
 */
class CreateProject extends V20171118Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withData($value)
    {
        $this->data['Data'] = $value;
        $this->options['form_params']['Data'] = $value;

        return $this;
    }
}

/**
 * @method string getData()
 */
class ApproveOrderList extends V20171118Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withData($value)
    {
        $this->data['Data'] = $value;
        $this->options['form_params']['Data'] = $value;

        return $this;
    }
}

/**
 * @method string getData()
 * @method string getIgnoreDauth()
 * @method $this withIgnoreDauth($value)
 * @method string getForce()
 * @method $this withForce($value)
 */
class DeleteCredentialsList extends V20171118Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withData($value)
    {
        $this->data['Data'] = $value;
        $this->options['form_params']['Data'] = $value;

        return $this;
    }
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
