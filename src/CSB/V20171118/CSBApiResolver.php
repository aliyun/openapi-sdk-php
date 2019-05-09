<?php

namespace AlibabaCloud\CSB\V20171118;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method FindServiceStatisticalData findServiceStatisticalData(array $options = [])
 * @method GetInstance getInstance(array $options = [])
 * @method DeleteCasService deleteCasService(array $options = [])
 * @method FindInstanceList findInstanceList(array $options = [])
 * @method PublishCasService publishCasService(array $options = [])
 * @method CommitSuccessedServices commitSuccessedServices(array $options = [])
 * @method DeleteUnionCasService deleteUnionCasService(array $options = [])
 * @method PublishUnionCasService publishUnionCasService(array $options = [])
 * @method UpdateServiceQPS updateServiceQPS(array $options = [])
 * @method DeleteServiceList deleteServiceList(array $options = [])
 * @method UpdateOrderList updateOrderList(array $options = [])
 * @method UpdateServiceListStatus updateServiceListStatus(array $options = [])
 * @method UpdateProjectListStatus updateProjectListStatus(array $options = [])
 * @method ApproveOrderList approveOrderList(array $options = [])
 * @method DeleteProject deleteProject(array $options = [])
 * @method DeleteService deleteService(array $options = [])
 * @method DeleteOrderList deleteOrderList(array $options = [])
 * @method DeleteProjectList deleteProjectList(array $options = [])
 * @method CreateCredentials createCredentials(array $options = [])
 * @method CreateService createService(array $options = [])
 * @method UpdateService updateService(array $options = [])
 * @method UpdateOrder updateOrder(array $options = [])
 * @method CreateOrder createOrder(array $options = [])
 * @method UpdateProject updateProject(array $options = [])
 * @method CreateProject createProject(array $options = [])
 * @method DeleteCredentialsList deleteCredentialsList(array $options = [])
 * @method FindProjectsNameList findProjectsNameList(array $options = [])
 * @method GetProject getProject(array $options = [])
 * @method GetService getService(array $options = [])
 * @method CheckServiceExist checkServiceExist(array $options = [])
 * @method GetOrder getOrder(array $options = [])
 * @method FindProjectList findProjectList(array $options = [])
 * @method FindApprovalOrderList findApprovalOrderList(array $options = [])
 * @method FindApproveServiceList findApproveServiceList(array $options = [])
 * @method FindCredentialsList findCredentialsList(array $options = [])
 * @method RenewCredentials renewCredentials(array $options = [])
 * @method ReplaceCredential replaceCredential(array $options = [])
 * @method FindOrderableList findOrderableList(array $options = [])
 * @method FindOrderedList findOrderedList(array $options = [])
 * @method FindServiceList findServiceList(array $options = [])
 */
class CSBApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
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
 * @method string getCsbId()
 * @method $this withCsbId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 */
class FindServiceStatisticalData extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getCsbId()
 * @method $this withCsbId($value)
 */
class GetInstance extends Rpc
{

    /** @var string */
    public $scheme = 'http';

    /** @var string */
    public $method = 'GET';
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
class DeleteCasService extends Rpc
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
class FindInstanceList extends Rpc
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
class PublishCasService extends Rpc
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
 * @method string getCsbName()
 * @method $this withCsbName($value)
 * @method string getServices()
 */
class CommitSuccessedServices extends Rpc
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
 * @method string getLeafOnly()
 * @method $this withLeafOnly($value)
 * @method string getCasCsbName()
 * @method $this withCasCsbName($value)
 * @method string getSrcUserId()
 * @method $this withSrcUserId($value)
 * @method string getCasServiceId()
 * @method $this withCasServiceId($value)
 */
class DeleteUnionCasService extends Rpc
{
}

/**
 * @method string getCasCsbName()
 * @method $this withCasCsbName($value)
 * @method string getData()
 */
class PublishUnionCasService extends Rpc
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
 * @method string getQps()
 * @method $this withQps($value)
 * @method string getServiceId()
 * @method $this withServiceId($value)
 */
class UpdateServiceQPS extends Rpc
{
}

/**
 * @method string getData()
 * @method string getCsbId()
 * @method $this withCsbId($value)
 */
class DeleteServiceList extends Rpc
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
class UpdateOrderList extends Rpc
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
class UpdateServiceListStatus extends Rpc
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
class UpdateProjectListStatus extends Rpc
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
class ApproveOrderList extends Rpc
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
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class DeleteProject extends Rpc
{
}

/**
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getServiceId()
 * @method $this withServiceId($value)
 */
class DeleteService extends Rpc
{
}

/**
 * @method string getData()
 */
class DeleteOrderList extends Rpc
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
class DeleteProjectList extends Rpc
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
class CreateCredentials extends Rpc
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
class CreateService extends Rpc
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
class UpdateService extends Rpc
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
class UpdateOrder extends Rpc
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
class CreateOrder extends Rpc
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
class UpdateProject extends Rpc
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
class CreateProject extends Rpc
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
class DeleteCredentialsList extends Rpc
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
 * @method string getOperationFlag()
 * @method $this withOperationFlag($value)
 * @method string getCsbId()
 * @method $this withCsbId($value)
 */
class FindProjectsNameList extends Rpc
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
class GetProject extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getCsbId()
 * @method $this withCsbId($value)
 * @method string getServiceId()
 * @method $this withServiceId($value)
 */
class GetService extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getCsbId()
 * @method $this withCsbId($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 */
class CheckServiceExist extends Rpc
{
}

/**
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 */
class GetOrder extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getCsbId()
 * @method $this withCsbId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 */
class FindProjectList extends Rpc
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
 * @method string getServiceId()
 * @method $this withServiceId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getOnlyPending()
 * @method $this withOnlyPending($value)
 */
class FindApprovalOrderList extends Rpc
{

    /** @var string */
    public $method = 'GET';
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
class FindApproveServiceList extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getCsbId()
 * @method $this withCsbId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 */
class FindCredentialsList extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getCredentialId()
 * @method $this withCredentialId($value)
 */
class RenewCredentials extends Rpc
{
}

/**
 * @method string getCredentialId()
 * @method $this withCredentialId($value)
 */
class ReplaceCredential extends Rpc
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
 * @method string getPageNum()
 * @method $this withPageNum($value)
 */
class FindOrderableList extends Rpc
{

    /** @var string */
    public $method = 'GET';
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
class FindOrderedList extends Rpc
{

    /** @var string */
    public $method = 'GET';
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
class FindServiceList extends Rpc
{

    /** @var string */
    public $method = 'GET';
}
