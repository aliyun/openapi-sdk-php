<?php

namespace AlibabaCloud\Foas\V20181111;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Roa;

/**
 * Resolve Api based on the method name.
 *
 * @method ModifyMasterSpec modifyMasterSpec(array $options = [])
 * @method UnbindQueue unbindQueue(array $options = [])
 * @method BindQueue bindQueue(array $options = [])
 * @method DeleteQueue deleteQueue(array $options = [])
 * @method CreateQueue createQueue(array $options = [])
 * @method GetClusterMetrics getClusterMetrics(array $options = [])
 * @method GetClusterEngineVersions getClusterEngineVersions(array $options = [])
 * @method GetClusterDetails getClusterDetails(array $options = [])
 * @method GetClusterQueueInfo getClusterQueueInfo(array $options = [])
 * @method GetClusterResource getClusterResource(array $options = [])
 * @method ListCluster listCluster(array $options = [])
 * @method ShrinkCluster shrinkCluster(array $options = [])
 * @method ExpandCluster expandCluster(array $options = [])
 * @method DestroyCluster destroyCluster(array $options = [])
 * @method CreateCluster createCluster(array $options = [])
 * @method GetProject getProject(array $options = [])
 * @method DeleteProject deleteProject(array $options = [])
 * @method CreateProject createProject(array $options = [])
 * @method ListProject listProject(array $options = [])
 * @method CheckRawPlanJson checkRawPlanJson(array $options = [])
 * @method ListProjectBindQueueResource listProjectBindQueueResource(array $options = [])
 * @method ListProjectBindQueue listProjectBindQueue(array $options = [])
 * @method ValidateJob validateJob(array $options = [])
 * @method GetInstanceDetail getInstanceDetail(array $options = [])
 * @method GetInstanceConfig getInstanceConfig(array $options = [])
 * @method GetInstanceCheckpoint getInstanceCheckpoint(array $options = [])
 * @method GetInstanceExceptions getInstanceExceptions(array $options = [])
 * @method GetInstanceResource getInstanceResource(array $options = [])
 * @method GetInstanceFinalState getInstanceFinalState(array $options = [])
 * @method GetInstanceMetric getInstanceMetric(array $options = [])
 * @method ModifyInstanceState modifyInstanceState(array $options = [])
 * @method ListInstance listInstance(array $options = [])
 * @method GetInstanceRunSummary getInstanceRunSummary(array $options = [])
 * @method GetInstance getInstance(array $options = [])
 * @method GetRefPackageJob getRefPackageJob(array $options = [])
 * @method DeletePackage deletePackage(array $options = [])
 * @method UpdatePackage updatePackage(array $options = [])
 * @method ListPackage listPackage(array $options = [])
 * @method CreatePackage createPackage(array $options = [])
 * @method GetPackage getPackage(array $options = [])
 * @method DeleteFolder deleteFolder(array $options = [])
 * @method MVFolder mVFolder(array $options = [])
 * @method ListChildFolder listChildFolder(array $options = [])
 * @method StartJob startJob(array $options = [])
 * @method ListJob listJob(array $options = [])
 * @method DeleteJob deleteJob(array $options = [])
 * @method GetJob getJob(array $options = [])
 * @method OfflineJob offlineJob(array $options = [])
 * @method GetRawPlanJson getRawPlanJson(array $options = [])
 * @method UpdateJob updateJob(array $options = [])
 * @method CreateJob createJob(array $options = [])
 * @method GetFolder getFolder(array $options = [])
 * @method CreateFolder createFolder(array $options = [])
 * @method CommitJob commitJob(array $options = [])
 * @method BatchGetInstanceRunSummary batchGetInstanceRunSummary(array $options = [])
 */
class FoasApiResolver
{
    use ApiResolverTrait;
}

class V20181111Roa extends Roa
{
    /** @var string */
    public $product = 'foas';

    /** @var string */
    public $version = '2018-11-11';

    /** @var string */
    protected $scheme = 'https';

    /** @var string */
    public $serviceCode = 'foas';
}

/**
 * @method string getClusterId()
 * @method string getMasterTargetModel()
 */
class ModifyMasterSpec extends V20181111Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/clusters/[clusterId]/specification';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->pathParameters['clusterId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMasterTargetModel($value)
    {
        $this->data['MasterTargetModel'] = $value;
        $this->options['form_params']['masterTargetModel'] = $value;

        return $this;
    }
}

/**
 * @method string getQueueName()
 * @method string getProjectName()
 * @method string getClusterId()
 */
class UnbindQueue extends V20181111Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/projects/[projectName]/queue';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withQueueName($value)
    {
        $this->data['QueueName'] = $value;
        $this->options['query']['queueName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->pathParameters['projectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->options['query']['clusterId'] = $value;

        return $this;
    }
}

/**
 * @method string getQueueName()
 * @method string getProjectName()
 * @method string getClusterId()
 */
class BindQueue extends V20181111Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/projects/[projectName]/queue';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withQueueName($value)
    {
        $this->data['QueueName'] = $value;
        $this->options['form_params']['queueName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->pathParameters['projectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->options['form_params']['clusterId'] = $value;

        return $this;
    }
}

/**
 * @method string getQueueName()
 * @method string getClusterId()
 */
class DeleteQueue extends V20181111Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/clusters/[clusterId]/queue';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withQueueName($value)
    {
        $this->data['QueueName'] = $value;
        $this->options['query']['queueName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->pathParameters['clusterId'] = $value;

        return $this;
    }
}

/**
 * @method string getQueueName()
 * @method string getMaxMemMB()
 * @method string getClusterId()
 * @method string getGpu()
 * @method string getMaxVcore()
 */
class CreateQueue extends V20181111Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/clusters/[clusterId]/queue';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withQueueName($value)
    {
        $this->data['QueueName'] = $value;
        $this->options['form_params']['queueName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxMemMB($value)
    {
        $this->data['MaxMemMB'] = $value;
        $this->options['form_params']['maxMemMB'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->pathParameters['clusterId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGpu($value)
    {
        $this->data['Gpu'] = $value;
        $this->options['form_params']['gpu'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxVcore($value)
    {
        $this->data['MaxVcore'] = $value;
        $this->options['form_params']['maxVcore'] = $value;

        return $this;
    }
}

/**
 * @method string getClusterId()
 * @method string getMetricJson()
 */
class GetClusterMetrics extends V20181111Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/clusters/[clusterId]/metrics';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->pathParameters['clusterId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMetricJson($value)
    {
        $this->data['MetricJson'] = $value;
        $this->options['form_params']['metricJson'] = $value;

        return $this;
    }
}

/**
 * @method string getClusterId()
 */
class GetClusterEngineVersions extends V20181111Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/clusters/[clusterId]/engineversions';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->pathParameters['clusterId'] = $value;

        return $this;
    }
}

/**
 * @method string getClusterId()
 */
class GetClusterDetails extends V20181111Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/clusters/[clusterId]/details';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->pathParameters['clusterId'] = $value;

        return $this;
    }
}

/**
 * @method string getClusterId()
 */
class GetClusterQueueInfo extends V20181111Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/clusters/[clusterId]/queueinfo';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->pathParameters['clusterId'] = $value;

        return $this;
    }
}

/**
 * @method string getClusterId()
 */
class GetClusterResource extends V20181111Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/clusters/[clusterId]/resource';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->pathParameters['clusterId'] = $value;

        return $this;
    }
}

/**
 * @method string getDisplayName()
 * @method string getPageSize()
 * @method string getPageIndex()
 * @method string getClusterId()
 * @method string getState()
 * @method string getRegion()
 */
class ListCluster extends V20181111Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/clusters';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDisplayName($value)
    {
        $this->data['DisplayName'] = $value;
        $this->options['query']['displayName'] = $value;

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
        $this->options['query']['pageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageIndex($value)
    {
        $this->data['PageIndex'] = $value;
        $this->options['query']['pageIndex'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->options['query']['clusterId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withState($value)
    {
        $this->data['State'] = $value;
        $this->options['query']['state'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRegion($value)
    {
        $this->data['Region'] = $value;
        $this->options['query']['region'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceIds()
 * @method string getClusterId()
 * @method string getModelTargetCount()
 */
class ShrinkCluster extends V20181111Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/clusters/[clusterId]/shrink';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceIds($value)
    {
        $this->data['InstanceIds'] = $value;
        $this->options['form_params']['instanceIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->pathParameters['clusterId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withModelTargetCount($value)
    {
        $this->data['ModelTargetCount'] = $value;
        $this->options['form_params']['modelTargetCount'] = $value;

        return $this;
    }
}

/**
 * @method string getCount()
 * @method string getModel()
 * @method string getUserVSwitch()
 * @method string getClusterId()
 */
class ExpandCluster extends V20181111Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/clusters/[clusterId]/expand';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCount($value)
    {
        $this->data['Count'] = $value;
        $this->options['form_params']['count'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withModel($value)
    {
        $this->data['Model'] = $value;
        $this->options['form_params']['model'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserVSwitch($value)
    {
        $this->data['UserVSwitch'] = $value;
        $this->options['form_params']['userVSwitch'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->pathParameters['clusterId'] = $value;

        return $this;
    }
}

/**
 * @method string getClusterId()
 */
class DestroyCluster extends V20181111Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/clusters/[clusterId]';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->pathParameters['clusterId'] = $value;

        return $this;
    }
}

/**
 * @method string getOrderId()
 * @method string getUserOssBucket()
 * @method string getDisplayName()
 * @method string getUserVpcId()
 * @method string getZoneId()
 * @method string getDescription()
 * @method string getUserVSwitch()
 */
class CreateCluster extends V20181111Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/clusters';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrderId($value)
    {
        $this->data['OrderId'] = $value;
        $this->options['form_params']['orderId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserOssBucket($value)
    {
        $this->data['UserOssBucket'] = $value;
        $this->options['form_params']['userOssBucket'] = $value;

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
        $this->options['form_params']['displayName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserVpcId($value)
    {
        $this->data['UserVpcId'] = $value;
        $this->options['form_params']['userVpcId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withZoneId($value)
    {
        $this->data['ZoneId'] = $value;
        $this->options['form_params']['zoneId'] = $value;

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
        $this->options['form_params']['description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserVSwitch($value)
    {
        $this->data['UserVSwitch'] = $value;
        $this->options['form_params']['userVSwitch'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectName()
 */
class GetProject extends V20181111Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/projects/[projectName]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->pathParameters['projectName'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectName()
 */
class DeleteProject extends V20181111Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/projects/[projectName]';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->pathParameters['projectName'] = $value;

        return $this;
    }
}

/**
 * @method string getManagerIds()
 * @method string getOrderId()
 * @method string getName()
 * @method string getDescription()
 * @method string getClusterId()
 * @method string getDeployType()
 */
class CreateProject extends V20181111Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/projects';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withManagerIds($value)
    {
        $this->data['ManagerIds'] = $value;
        $this->options['form_params']['managerIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrderId($value)
    {
        $this->data['OrderId'] = $value;
        $this->options['form_params']['orderId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['form_params']['name'] = $value;

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
        $this->options['form_params']['description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->options['form_params']['clusterId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeployType($value)
    {
        $this->data['DeployType'] = $value;
        $this->options['form_params']['deployType'] = $value;

        return $this;
    }
}

/**
 * @method string getName()
 * @method string getPageSize()
 * @method string getPageIndex()
 * @method string getClusterId()
 * @method string getRegion()
 * @method string getDeployType()
 */
class ListProject extends V20181111Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/projects';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['query']['name'] = $value;

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
        $this->options['query']['pageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageIndex($value)
    {
        $this->data['PageIndex'] = $value;
        $this->options['query']['pageIndex'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->options['query']['clusterId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRegion($value)
    {
        $this->data['Region'] = $value;
        $this->options['query']['region'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeployType($value)
    {
        $this->data['DeployType'] = $value;
        $this->options['query']['deployType'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectName()
 * @method string getSessionId()
 * @method string getJobName()
 */
class CheckRawPlanJson extends V20181111Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/projects/[projectName]/jobs/[jobName]/planjson/check';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->pathParameters['projectName'] = $value;

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
        $this->options['query']['sessionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobName($value)
    {
        $this->data['JobName'] = $value;
        $this->pathParameters['jobName'] = $value;

        return $this;
    }
}

/**
 * @method string getQueueName()
 * @method string getProjectName()
 * @method string getClusterId()
 */
class ListProjectBindQueueResource extends V20181111Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/projects/[projectName]/queueresource';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withQueueName($value)
    {
        $this->data['QueueName'] = $value;
        $this->options['query']['queueName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->pathParameters['projectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->options['query']['clusterId'] = $value;

        return $this;
    }
}

/**
 * @method string getQueueName()
 * @method string getProjectName()
 * @method string getClusterId()
 */
class ListProjectBindQueue extends V20181111Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/projects/[projectName]/queues';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withQueueName($value)
    {
        $this->data['QueueName'] = $value;
        $this->options['query']['queueName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->pathParameters['projectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->options['query']['clusterId'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectName()
 * @method string getJobName()
 */
class ValidateJob extends V20181111Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/projects/[projectName]/jobs/[jobName]/validate';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->pathParameters['projectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobName($value)
    {
        $this->data['JobName'] = $value;
        $this->pathParameters['jobName'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectName()
 * @method string getInstanceId()
 * @method string getJobName()
 */
class GetInstanceDetail extends V20181111Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/projects/[projectName]/jobs/[jobName]/instances/[instanceId]/details';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->pathParameters['projectName'] = $value;

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
        $this->pathParameters['instanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobName($value)
    {
        $this->data['JobName'] = $value;
        $this->pathParameters['jobName'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectName()
 * @method string getInstanceId()
 * @method string getJobName()
 */
class GetInstanceConfig extends V20181111Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/projects/[projectName]/jobs/[jobName]/instances/[instanceId]/config';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->pathParameters['projectName'] = $value;

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
        $this->pathParameters['instanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobName($value)
    {
        $this->data['JobName'] = $value;
        $this->pathParameters['jobName'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectName()
 * @method string getInstanceId()
 * @method string getJobName()
 */
class GetInstanceCheckpoint extends V20181111Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/projects/[projectName]/jobs/[jobName]/instances/[instanceId]/checkpoints';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->pathParameters['projectName'] = $value;

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
        $this->pathParameters['instanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobName($value)
    {
        $this->data['JobName'] = $value;
        $this->pathParameters['jobName'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectName()
 * @method string getInstanceId()
 * @method string getJobName()
 */
class GetInstanceExceptions extends V20181111Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/projects/[projectName]/jobs/[jobName]/instances/[instanceId]/exceptions';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->pathParameters['projectName'] = $value;

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
        $this->pathParameters['instanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobName($value)
    {
        $this->data['JobName'] = $value;
        $this->pathParameters['jobName'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectName()
 * @method string getInstanceId()
 * @method string getJobName()
 */
class GetInstanceResource extends V20181111Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/projects/[projectName]/jobs/[jobName]/instances/[instanceId]/resource';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->pathParameters['projectName'] = $value;

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
        $this->pathParameters['instanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobName($value)
    {
        $this->data['JobName'] = $value;
        $this->pathParameters['jobName'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectName()
 * @method string getInstanceId()
 * @method string getJobName()
 */
class GetInstanceFinalState extends V20181111Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/projects/[projectName]/jobs/[jobName]/instances/[instanceId]/finalstate';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->pathParameters['projectName'] = $value;

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
        $this->pathParameters['instanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobName($value)
    {
        $this->data['JobName'] = $value;
        $this->pathParameters['jobName'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectName()
 * @method string getInstanceId()
 * @method string getMetricJson()
 * @method string getJobName()
 */
class GetInstanceMetric extends V20181111Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/projects/[projectName]/jobs/[jobName]/metric';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->pathParameters['projectName'] = $value;

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
        $this->options['query']['instanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMetricJson($value)
    {
        $this->data['MetricJson'] = $value;
        $this->options['form_params']['metricJson'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobName($value)
    {
        $this->data['JobName'] = $value;
        $this->pathParameters['jobName'] = $value;

        return $this;
    }
}

/**
 * @method string getIsFlush()
 * @method string getProjectName()
 * @method string getInstanceId()
 * @method string getExpectState()
 * @method string getJobName()
 */
class ModifyInstanceState extends V20181111Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/projects/[projectName]/jobs/[jobName]/instances/[instanceId]/expectstate';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsFlush($value)
    {
        $this->data['IsFlush'] = $value;
        $this->options['form_params']['isFlush'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->pathParameters['projectName'] = $value;

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
        $this->pathParameters['instanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExpectState($value)
    {
        $this->data['ExpectState'] = $value;
        $this->options['form_params']['expectState'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobName($value)
    {
        $this->data['JobName'] = $value;
        $this->pathParameters['jobName'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectName()
 * @method string getEndBeginTs()
 * @method string getExpectState()
 * @method string getJobType()
 * @method string getApiType()
 * @method string getActualState()
 * @method string getEndEndTs()
 * @method string getStartEndTs()
 * @method string getPageSize()
 * @method string getStartBeginTs()
 * @method string getPageIndex()
 * @method string getIsArchived()
 * @method string getJobName()
 */
class ListInstance extends V20181111Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/projects/[projectName]/instances';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->pathParameters['projectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndBeginTs($value)
    {
        $this->data['EndBeginTs'] = $value;
        $this->options['query']['endBeginTs'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExpectState($value)
    {
        $this->data['ExpectState'] = $value;
        $this->options['query']['expectState'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobType($value)
    {
        $this->data['JobType'] = $value;
        $this->options['query']['jobType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiType($value)
    {
        $this->data['ApiType'] = $value;
        $this->options['query']['apiType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withActualState($value)
    {
        $this->data['ActualState'] = $value;
        $this->options['query']['actualState'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndEndTs($value)
    {
        $this->data['EndEndTs'] = $value;
        $this->options['query']['endEndTs'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartEndTs($value)
    {
        $this->data['StartEndTs'] = $value;
        $this->options['query']['startEndTs'] = $value;

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
        $this->options['query']['pageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartBeginTs($value)
    {
        $this->data['StartBeginTs'] = $value;
        $this->options['query']['startBeginTs'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageIndex($value)
    {
        $this->data['PageIndex'] = $value;
        $this->options['query']['pageIndex'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsArchived($value)
    {
        $this->data['IsArchived'] = $value;
        $this->options['query']['isArchived'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobName($value)
    {
        $this->data['JobName'] = $value;
        $this->options['query']['jobName'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectName()
 * @method string getInstanceId()
 * @method string getJobName()
 */
class GetInstanceRunSummary extends V20181111Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/projects/[projectName]/jobs/[jobName]/instances/[instanceId]/runsummary';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->pathParameters['projectName'] = $value;

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
        $this->pathParameters['instanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobName($value)
    {
        $this->data['JobName'] = $value;
        $this->pathParameters['jobName'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectName()
 * @method string getInstanceId()
 * @method string getJobName()
 */
class GetInstance extends V20181111Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/projects/[projectName]/jobs/[jobName]/instances/[instanceId]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->pathParameters['projectName'] = $value;

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
        $this->pathParameters['instanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobName($value)
    {
        $this->data['JobName'] = $value;
        $this->pathParameters['jobName'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectName()
 * @method string getPackageName()
 * @method string getPageSize()
 * @method string getPageIndex()
 */
class GetRefPackageJob extends V20181111Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/projects/[projectName]/packages/[packageName]/jobs';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->pathParameters['projectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPackageName($value)
    {
        $this->data['PackageName'] = $value;
        $this->pathParameters['packageName'] = $value;

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
        $this->options['query']['pageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageIndex($value)
    {
        $this->data['PageIndex'] = $value;
        $this->options['query']['pageIndex'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectName()
 * @method string getPackageName()
 */
class DeletePackage extends V20181111Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/projects/[projectName]/packages/[packageName]';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->pathParameters['projectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPackageName($value)
    {
        $this->data['PackageName'] = $value;
        $this->pathParameters['packageName'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectName()
 * @method string getOssBucket()
 * @method string getOssOwner()
 * @method string getPackageName()
 * @method string getOssEndpoint()
 * @method string getDescription()
 * @method string getTag()
 * @method string getOriginName()
 * @method string getOssPath()
 * @method string getMd5()
 */
class UpdatePackage extends V20181111Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/projects/[projectName]/packages/[packageName]';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->pathParameters['projectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOssBucket($value)
    {
        $this->data['OssBucket'] = $value;
        $this->options['form_params']['ossBucket'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOssOwner($value)
    {
        $this->data['OssOwner'] = $value;
        $this->options['form_params']['ossOwner'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPackageName($value)
    {
        $this->data['PackageName'] = $value;
        $this->pathParameters['packageName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOssEndpoint($value)
    {
        $this->data['OssEndpoint'] = $value;
        $this->options['form_params']['ossEndpoint'] = $value;

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
        $this->options['form_params']['description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag($value)
    {
        $this->data['Tag'] = $value;
        $this->options['form_params']['tag'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOriginName($value)
    {
        $this->data['OriginName'] = $value;
        $this->options['form_params']['originName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOssPath($value)
    {
        $this->data['OssPath'] = $value;
        $this->options['form_params']['ossPath'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMd5($value)
    {
        $this->data['Md5'] = $value;
        $this->options['form_params']['md5'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectName()
 * @method string getPackageName()
 * @method string getPageSize()
 * @method string getPageIndex()
 * @method string getTag()
 * @method string getType()
 */
class ListPackage extends V20181111Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/projects/[projectName]/packages';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->pathParameters['projectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPackageName($value)
    {
        $this->data['PackageName'] = $value;
        $this->options['query']['packageName'] = $value;

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
        $this->options['query']['pageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageIndex($value)
    {
        $this->data['PageIndex'] = $value;
        $this->options['query']['pageIndex'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag($value)
    {
        $this->data['Tag'] = $value;
        $this->options['query']['tag'] = $value;

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
        $this->options['query']['type'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectName()
 * @method string getOssBucket()
 * @method string getOssOwner()
 * @method string getPackageName()
 * @method string getOssEndpoint()
 * @method string getDescription()
 * @method string getTag()
 * @method string getOriginName()
 * @method string getType()
 * @method string getOssPath()
 * @method string getMd5()
 */
class CreatePackage extends V20181111Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/projects/[projectName]/packages';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->pathParameters['projectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOssBucket($value)
    {
        $this->data['OssBucket'] = $value;
        $this->options['form_params']['ossBucket'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOssOwner($value)
    {
        $this->data['OssOwner'] = $value;
        $this->options['form_params']['ossOwner'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPackageName($value)
    {
        $this->data['PackageName'] = $value;
        $this->options['form_params']['packageName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOssEndpoint($value)
    {
        $this->data['OssEndpoint'] = $value;
        $this->options['form_params']['ossEndpoint'] = $value;

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
        $this->options['form_params']['description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag($value)
    {
        $this->data['Tag'] = $value;
        $this->options['form_params']['tag'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOriginName($value)
    {
        $this->data['OriginName'] = $value;
        $this->options['form_params']['originName'] = $value;

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
        $this->options['form_params']['type'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOssPath($value)
    {
        $this->data['OssPath'] = $value;
        $this->options['form_params']['ossPath'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMd5($value)
    {
        $this->data['Md5'] = $value;
        $this->options['form_params']['md5'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectName()
 * @method string getPackageName()
 */
class GetPackage extends V20181111Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/projects/[projectName]/packages/[packageName]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->pathParameters['projectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPackageName($value)
    {
        $this->data['PackageName'] = $value;
        $this->pathParameters['packageName'] = $value;

        return $this;
    }
}

/**
 * @method string getPath()
 * @method string getProjectName()
 */
class DeleteFolder extends V20181111Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/projects/[projectName]/folders';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPath($value)
    {
        $this->data['Path'] = $value;
        $this->options['query']['path'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->pathParameters['projectName'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectName()
 * @method string getSrcPath()
 * @method string getDestPath()
 */
class MVFolder extends V20181111Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/projects/[projectName]/folders';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->pathParameters['projectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSrcPath($value)
    {
        $this->data['SrcPath'] = $value;
        $this->options['form_params']['srcPath'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDestPath($value)
    {
        $this->data['DestPath'] = $value;
        $this->options['form_params']['destPath'] = $value;

        return $this;
    }
}

/**
 * @method string getPath()
 * @method string getProjectName()
 */
class ListChildFolder extends V20181111Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/projects/[projectName]/folders/children';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPath($value)
    {
        $this->data['Path'] = $value;
        $this->options['query']['path'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->pathParameters['projectName'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectName()
 * @method string getParameterJson()
 * @method string getJobName()
 */
class StartJob extends V20181111Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/projects/[projectName]/jobs/[jobName]/instance';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->pathParameters['projectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParameterJson($value)
    {
        $this->data['ParameterJson'] = $value;
        $this->options['form_params']['parameterJson'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobName($value)
    {
        $this->data['JobName'] = $value;
        $this->pathParameters['jobName'] = $value;

        return $this;
    }
}

/**
 * @method string getQueueName()
 * @method string getProjectName()
 * @method string getPageSize()
 * @method string getPageIndex()
 * @method string getEngineVersion()
 * @method string getClusterId()
 * @method string getJobType()
 * @method string getApiType()
 * @method string getJobName()
 * @method string getFolderId()
 */
class ListJob extends V20181111Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/projects/[projectName]/jobs';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withQueueName($value)
    {
        $this->data['QueueName'] = $value;
        $this->options['query']['queueName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->pathParameters['projectName'] = $value;

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
        $this->options['query']['pageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageIndex($value)
    {
        $this->data['PageIndex'] = $value;
        $this->options['query']['pageIndex'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEngineVersion($value)
    {
        $this->data['EngineVersion'] = $value;
        $this->options['query']['engineVersion'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->options['query']['clusterId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobType($value)
    {
        $this->data['JobType'] = $value;
        $this->options['query']['jobType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiType($value)
    {
        $this->data['ApiType'] = $value;
        $this->options['query']['apiType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobName($value)
    {
        $this->data['JobName'] = $value;
        $this->options['query']['jobName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFolderId($value)
    {
        $this->data['FolderId'] = $value;
        $this->options['query']['folderId'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectName()
 * @method string getJobName()
 */
class DeleteJob extends V20181111Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/projects/[projectName]/jobs/[jobName]';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->pathParameters['projectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobName($value)
    {
        $this->data['JobName'] = $value;
        $this->pathParameters['jobName'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectName()
 * @method string getJobName()
 */
class GetJob extends V20181111Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/projects/[projectName]/jobs/[jobName]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->pathParameters['projectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobName($value)
    {
        $this->data['JobName'] = $value;
        $this->pathParameters['jobName'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectName()
 * @method string getJobName()
 */
class OfflineJob extends V20181111Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/projects/[projectName]/jobs/[jobName]/offline';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->pathParameters['projectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobName($value)
    {
        $this->data['JobName'] = $value;
        $this->pathParameters['jobName'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectName()
 * @method string getExpectedGB()
 * @method string getExpectedCore()
 * @method string getJobName()
 * @method string getAutoconfEnable()
 */
class GetRawPlanJson extends V20181111Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/projects/[projectName]/jobs/[jobName]/planjson';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->pathParameters['projectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExpectedGB($value)
    {
        $this->data['ExpectedGB'] = $value;
        $this->options['query']['expectedGB'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExpectedCore($value)
    {
        $this->data['ExpectedCore'] = $value;
        $this->options['query']['expectedCore'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobName($value)
    {
        $this->data['JobName'] = $value;
        $this->pathParameters['jobName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAutoconfEnable($value)
    {
        $this->data['AutoconfEnable'] = $value;
        $this->options['query']['autoconfEnable'] = $value;

        return $this;
    }
}

/**
 * @method string getQueueName()
 * @method string getProjectName()
 * @method string getCode()
 * @method string getDescription()
 * @method string getPlanJson()
 * @method string getEngineVersion()
 * @method string getClusterId()
 * @method string getPackages()
 * @method string getFolderId()
 * @method string getProperties()
 * @method string getJobName()
 */
class UpdateJob extends V20181111Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/projects/[projectName]/jobs/[jobName]';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withQueueName($value)
    {
        $this->data['QueueName'] = $value;
        $this->options['form_params']['queueName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->pathParameters['projectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCode($value)
    {
        $this->data['Code'] = $value;
        $this->options['form_params']['code'] = $value;

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
        $this->options['form_params']['description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPlanJson($value)
    {
        $this->data['PlanJson'] = $value;
        $this->options['form_params']['planJson'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEngineVersion($value)
    {
        $this->data['EngineVersion'] = $value;
        $this->options['form_params']['engineVersion'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->options['form_params']['clusterId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPackages($value)
    {
        $this->data['Packages'] = $value;
        $this->options['form_params']['packages'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFolderId($value)
    {
        $this->data['FolderId'] = $value;
        $this->options['form_params']['folderId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProperties($value)
    {
        $this->data['Properties'] = $value;
        $this->options['form_params']['properties'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobName($value)
    {
        $this->data['JobName'] = $value;
        $this->pathParameters['jobName'] = $value;

        return $this;
    }
}

/**
 * @method string getQueueName()
 * @method string getProjectName()
 * @method string getCode()
 * @method string getDescription()
 * @method string getEngineVersion()
 * @method string getClusterId()
 * @method string getPackages()
 * @method string getJobType()
 * @method string getApiType()
 * @method string getFolderId()
 * @method string getPlanJson()
 * @method string getProperties()
 * @method string getJobName()
 */
class CreateJob extends V20181111Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/projects/[projectName]/jobs';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withQueueName($value)
    {
        $this->data['QueueName'] = $value;
        $this->options['form_params']['queueName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->pathParameters['projectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCode($value)
    {
        $this->data['Code'] = $value;
        $this->options['form_params']['code'] = $value;

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
        $this->options['form_params']['description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEngineVersion($value)
    {
        $this->data['EngineVersion'] = $value;
        $this->options['form_params']['engineVersion'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->options['form_params']['clusterId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPackages($value)
    {
        $this->data['Packages'] = $value;
        $this->options['form_params']['packages'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobType($value)
    {
        $this->data['JobType'] = $value;
        $this->options['form_params']['jobType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiType($value)
    {
        $this->data['ApiType'] = $value;
        $this->options['form_params']['apiType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFolderId($value)
    {
        $this->data['FolderId'] = $value;
        $this->options['form_params']['folderId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPlanJson($value)
    {
        $this->data['PlanJson'] = $value;
        $this->options['form_params']['planJson'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProperties($value)
    {
        $this->data['Properties'] = $value;
        $this->options['form_params']['properties'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobName($value)
    {
        $this->data['JobName'] = $value;
        $this->options['form_params']['jobName'] = $value;

        return $this;
    }
}

/**
 * @method string getPath()
 * @method string getProjectName()
 */
class GetFolder extends V20181111Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/projects/[projectName]/folders';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPath($value)
    {
        $this->data['Path'] = $value;
        $this->options['query']['path'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->pathParameters['projectName'] = $value;

        return $this;
    }
}

/**
 * @method string getPath()
 * @method string getProjectName()
 */
class CreateFolder extends V20181111Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/projects/[projectName]/folders';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPath($value)
    {
        $this->data['Path'] = $value;
        $this->options['form_params']['path'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->pathParameters['projectName'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectName()
 * @method string getJobName()
 */
class CommitJob extends V20181111Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/projects/[projectName]/jobs/[jobName]/commit';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->pathParameters['projectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobName($value)
    {
        $this->data['JobName'] = $value;
        $this->pathParameters['jobName'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectName()
 * @method string getJobNames()
 * @method string getJobType()
 */
class BatchGetInstanceRunSummary extends V20181111Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/projects/[projectName]/runsummary';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectName($value)
    {
        $this->data['ProjectName'] = $value;
        $this->pathParameters['projectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobNames($value)
    {
        $this->data['JobNames'] = $value;
        $this->options['query']['jobNames'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobType($value)
    {
        $this->data['JobType'] = $value;
        $this->options['query']['jobType'] = $value;

        return $this;
    }
}
