<?php

namespace AlibabaCloud\Foas\V20181111;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method BatchGetInstanceRunSummary batchGetInstanceRunSummary(array $options = [])
 * @method BindQueue bindQueue(array $options = [])
 * @method CalcPlanJsonResource calcPlanJsonResource(array $options = [])
 * @method CheckRawPlanJson checkRawPlanJson(array $options = [])
 * @method CommitJob commitJob(array $options = [])
 * @method CreateCellClusterOrder createCellClusterOrder(array $options = [])
 * @method CreateCluster createCluster(array $options = [])
 * @method CreateFolder createFolder(array $options = [])
 * @method CreateJob createJob(array $options = [])
 * @method CreatePackage createPackage(array $options = [])
 * @method CreateProject createProject(array $options = [])
 * @method CreateQueue createQueue(array $options = [])
 * @method DeleteFolder deleteFolder(array $options = [])
 * @method DeleteJob deleteJob(array $options = [])
 * @method DeletePackage deletePackage(array $options = [])
 * @method DeleteProject deleteProject(array $options = [])
 * @method DeleteQueue deleteQueue(array $options = [])
 * @method DestroyCluster destroyCluster(array $options = [])
 * @method ExpandCluster expandCluster(array $options = [])
 * @method GetClusterDetails getClusterDetails(array $options = [])
 * @method GetClusterEngineVersions getClusterEngineVersions(array $options = [])
 * @method GetClusterMetrics getClusterMetrics(array $options = [])
 * @method GetClusterQueueInfo getClusterQueueInfo(array $options = [])
 * @method GetClusterResource getClusterResource(array $options = [])
 * @method GetFolder getFolder(array $options = [])
 * @method GetInstance getInstance(array $options = [])
 * @method GetInstanceCheckpoint getInstanceCheckpoint(array $options = [])
 * @method GetInstanceConfig getInstanceConfig(array $options = [])
 * @method GetInstanceDetail getInstanceDetail(array $options = [])
 * @method GetInstanceExceptions getInstanceExceptions(array $options = [])
 * @method GetInstanceFinalState getInstanceFinalState(array $options = [])
 * @method GetInstanceHistoryAutoScalePlanContent getInstanceHistoryAutoScalePlanContent(array $options = [])
 * @method GetInstanceHistoryAutoScalePlanList getInstanceHistoryAutoScalePlanList(array $options = [])
 * @method GetInstanceMetric getInstanceMetric(array $options = [])
 * @method GetInstanceResource getInstanceResource(array $options = [])
 * @method GetInstanceRunSummary getInstanceRunSummary(array $options = [])
 * @method GetJob getJob(array $options = [])
 * @method GetJobLatestAutoScalePlan getJobLatestAutoScalePlan(array $options = [])
 * @method GetPackage getPackage(array $options = [])
 * @method GetProject getProject(array $options = [])
 * @method GetRawPlanJson getRawPlanJson(array $options = [])
 * @method GetRefPackageJob getRefPackageJob(array $options = [])
 * @method ListChildFolder listChildFolder(array $options = [])
 * @method ListCluster listCluster(array $options = [])
 * @method ListInstance listInstance(array $options = [])
 * @method ListJob listJob(array $options = [])
 * @method ListPackage listPackage(array $options = [])
 * @method ListProject listProject(array $options = [])
 * @method ListProjectBindQueue listProjectBindQueue(array $options = [])
 * @method ListProjectBindQueueResource listProjectBindQueueResource(array $options = [])
 * @method ListTagResources listTagResources(array $options = [])
 * @method ModifyInstanceState modifyInstanceState(array $options = [])
 * @method ModifyMasterSpec modifyMasterSpec(array $options = [])
 * @method MVFolder mVFolder(array $options = [])
 * @method OfflineJob offlineJob(array $options = [])
 * @method ShrinkCluster shrinkCluster(array $options = [])
 * @method StartJob startJob(array $options = [])
 * @method TagResources tagResources(array $options = [])
 * @method UnbindQueue unbindQueue(array $options = [])
 * @method UntagResources untagResources(array $options = [])
 * @method UpdateAutoScaleConfig updateAutoScaleConfig(array $options = [])
 * @method UpdateJob updateJob(array $options = [])
 * @method UpdatePackage updatePackage(array $options = [])
 * @method UpdateProject updateProject(array $options = [])
 * @method UpdateProjectConfig updateProjectConfig(array $options = [])
 * @method UpdateQueue updateQueue(array $options = [])
 * @method ValidateJob validateJob(array $options = [])
 */
class FoasApiResolver extends ApiResolver
{
}

class Roa extends \AlibabaCloud\Client\Resolver\Roa
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
 * @method string getProjectName()
 * @method string getJobNames()
 * @method string getJobType()
 */
class BatchGetInstanceRunSummary extends Roa
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

/**
 * @method string getQueueName()
 * @method string getProjectName()
 * @method string getClusterId()
 */
class BindQueue extends Roa
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
 * @method string getProjectName()
 * @method string getJobName()
 */
class CalcPlanJsonResource extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/projects/[projectName]/jobs/[jobName]/planjson-resource';

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
 * @method string getSessionId()
 * @method string getJobName()
 */
class CheckRawPlanJson extends Roa
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
 * @method string getProjectName()
 * @method string getRecommendOnly()
 * @method string getSuspendPeriods()
 * @method string getMaxCU()
 * @method string getConfigure()
 * @method string getIsOnOff()
 * @method string getJobName()
 * @method array getSuspendPeriodParam()
 */
class CommitJob extends Roa
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
    public function withRecommendOnly($value)
    {
        $this->data['RecommendOnly'] = $value;
        $this->options['form_params']['recommendOnly'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSuspendPeriods($value)
    {
        $this->data['SuspendPeriods'] = $value;
        $this->options['form_params']['suspendPeriods'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxCU($value)
    {
        $this->data['MaxCU'] = $value;
        $this->options['form_params']['maxCU'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConfigure($value)
    {
        $this->data['Configure'] = $value;
        $this->options['form_params']['configure'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsOnOff($value)
    {
        $this->data['IsOnOff'] = $value;
        $this->options['form_params']['isOnOff'] = $value;

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
     * @param array $suspendPeriodParam
     *
     * @return $this
     */
	public function withSuspendPeriodParam(array $suspendPeriodParam)
	{
	    $this->data['SuspendPeriodParam'] = $suspendPeriodParam;
		foreach ($suspendPeriodParam as $depth1 => $depth1Value) {
			if(isset($depth1Value['EndTime'])){
				$this->options['form_params']['suspendPeriodParam.' . ($depth1 + 1) . '.endTime'] = $depth1Value['EndTime'];
			}
			if(isset($depth1Value['StartTime'])){
				$this->options['form_params']['suspendPeriodParam.' . ($depth1 + 1) . '.startTime'] = $depth1Value['StartTime'];
			}
			if(isset($depth1Value['Plan'])){
				$this->options['form_params']['suspendPeriodParam.' . ($depth1 + 1) . '.plan'] = $depth1Value['Plan'];
			}
			if(isset($depth1Value['Policy'])){
				$this->options['form_params']['suspendPeriodParam.' . ($depth1 + 1) . '.policy'] = $depth1Value['Policy'];
			}
		}

		return $this;
    }
}

/**
 * @method string getPeriod()
 * @method string getSlaveNum()
 * @method string getSlaveSpec()
 * @method string getRegion()
 * @method string getMasterNum()
 * @method string getMasterSpec()
 * @method string getPayModel()
 */
class CreateCellClusterOrder extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/realtime-compute/cell/buy';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPeriod($value)
    {
        $this->data['Period'] = $value;
        $this->options['form_params']['period'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSlaveNum($value)
    {
        $this->data['SlaveNum'] = $value;
        $this->options['form_params']['slaveNum'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSlaveSpec($value)
    {
        $this->data['SlaveSpec'] = $value;
        $this->options['form_params']['slaveSpec'] = $value;

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
        $this->options['form_params']['region'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMasterNum($value)
    {
        $this->data['MasterNum'] = $value;
        $this->options['form_params']['masterNum'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMasterSpec($value)
    {
        $this->data['MasterSpec'] = $value;
        $this->options['form_params']['masterSpec'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPayModel($value)
    {
        $this->data['PayModel'] = $value;
        $this->options['form_params']['payModel'] = $value;

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
class CreateCluster extends Roa
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
 * @method string getPath()
 * @method string getProjectName()
 */
class CreateFolder extends Roa
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
class CreateJob extends Roa
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
class CreatePackage extends Roa
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
 * @method string getManagerIds()
 * @method string getOrderId()
 * @method string getName()
 * @method string getDescription()
 * @method string getClusterId()
 * @method string getDeployType()
 */
class CreateProject extends Roa
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
 * @method string getQueueName()
 * @method string getMaxMemMB()
 * @method string getClusterId()
 * @method string getGpu()
 * @method string getMaxVcore()
 */
class CreateQueue extends Roa
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
 * @method string getPath()
 * @method string getProjectName()
 */
class DeleteFolder extends Roa
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
 * @method string getJobName()
 */
class DeleteJob extends Roa
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
 * @method string getPackageName()
 */
class DeletePackage extends Roa
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
 */
class DeleteProject extends Roa
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
 * @method string getQueueName()
 * @method string getClusterId()
 */
class DeleteQueue extends Roa
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
 * @method string getClusterId()
 */
class DestroyCluster extends Roa
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
 * @method string getCount()
 * @method string getModel()
 * @method string getUserVSwitch()
 * @method string getClusterId()
 */
class ExpandCluster extends Roa
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
class GetClusterDetails extends Roa
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
class GetClusterEngineVersions extends Roa
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
 * @method string getMetricJson()
 */
class GetClusterMetrics extends Roa
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
class GetClusterQueueInfo extends Roa
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
class GetClusterResource extends Roa
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
 * @method string getPath()
 * @method string getProjectName()
 */
class GetFolder extends Roa
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
 * @method string getProjectName()
 * @method string getInstanceId()
 * @method string getJobName()
 */
class GetInstance extends Roa
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
 * @method string getInstanceId()
 * @method string getJobName()
 */
class GetInstanceCheckpoint extends Roa
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
class GetInstanceConfig extends Roa
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
class GetInstanceDetail extends Roa
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
class GetInstanceExceptions extends Roa
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
class GetInstanceFinalState extends Roa
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
 * @method string getPlanName()
 * @method string getJobName()
 */
class GetInstanceHistoryAutoScalePlanContent extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/projects/[projectName]/jobs/[jobName]/instance/[instanceId]/autoscale/plancontent';

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
    public function withPlanName($value)
    {
        $this->data['PlanName'] = $value;
        $this->options['query']['planName'] = $value;

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
class GetInstanceHistoryAutoScalePlanList extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/projects/[projectName]/jobs/[jobName]/instance/[instanceId]/autoscale/planlist';

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
class GetInstanceMetric extends Roa
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
 * @method string getProjectName()
 * @method string getInstanceId()
 * @method string getJobName()
 */
class GetInstanceResource extends Roa
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
class GetInstanceRunSummary extends Roa
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
 * @method string getJobName()
 */
class GetJob extends Roa
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
class GetJobLatestAutoScalePlan extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/projects/[projectName]/jobs/[jobName]/autoscale/latestplanjson';

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
 * @method string getPackageName()
 */
class GetPackage extends Roa
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
 * @method string getProjectName()
 */
class GetProject extends Roa
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
 * @method string getExpectedGB()
 * @method string getExpectedCore()
 * @method string getAdvisorAction()
 * @method string getJobName()
 * @method string getAutoconfEnable()
 */
class GetRawPlanJson extends Roa
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
    public function withAdvisorAction($value)
    {
        $this->data['AdvisorAction'] = $value;
        $this->options['query']['AdvisorAction'] = $value;

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
 * @method string getProjectName()
 * @method string getPackageName()
 * @method string getPageSize()
 * @method string getPageIndex()
 */
class GetRefPackageJob extends Roa
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
 * @method string getPath()
 * @method string getProjectName()
 */
class ListChildFolder extends Roa
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
 * @method string getDisplayName()
 * @method string getPageSize()
 * @method string getPageIndex()
 * @method string getClusterId()
 * @method string getState()
 * @method string getRegion()
 */
class ListCluster extends Roa
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
class ListInstance extends Roa
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
 * @method string getQueueName()
 * @method string getProjectName()
 * @method string getPageSize()
 * @method string getIsShowFullField()
 * @method string getPageIndex()
 * @method string getEngineVersion()
 * @method string getClusterId()
 * @method string getJobType()
 * @method string getApiType()
 * @method string getJobName()
 * @method string getFolderId()
 */
class ListJob extends Roa
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
    public function withIsShowFullField($value)
    {
        $this->data['IsShowFullField'] = $value;
        $this->options['query']['isShowFullField'] = $value;

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
 * @method string getPackageName()
 * @method string getPageSize()
 * @method string getPageIndex()
 * @method string getTag()
 * @method string getType()
 */
class ListPackage extends Roa
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
 * @method string getName()
 * @method string getPageSize()
 * @method string getPageIndex()
 * @method string getClusterId()
 * @method string getRegion()
 * @method string getDeployType()
 */
class ListProject extends Roa
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
 * @method string getQueueName()
 * @method string getProjectName()
 * @method string getClusterId()
 */
class ListProjectBindQueue extends Roa
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
 * @method string getQueueName()
 * @method string getProjectName()
 * @method string getClusterId()
 */
class ListProjectBindQueueResource extends Roa
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
 * @method string getNextToken()
 * @method string getResourceType()
 * @method string getResourceIds()
 * @method string getTags()
 */
class ListTagResources extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/cluster/tags';

    /** @var string */
    public $scheme = 'http';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNextToken($value)
    {
        $this->data['NextToken'] = $value;
        $this->options['query']['NextToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceType($value)
    {
        $this->data['ResourceType'] = $value;
        $this->options['query']['ResourceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceIds($value)
    {
        $this->data['ResourceIds'] = $value;
        $this->options['query']['ResourceIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTags($value)
    {
        $this->data['Tags'] = $value;
        $this->options['query']['Tags'] = $value;

        return $this;
    }
}

/**
 * @method string getIsFlush()
 * @method string getProjectName()
 * @method string getInstanceId()
 * @method string getTriggerCheckpoint()
 * @method string getExpectState()
 * @method string getJobName()
 */
class ModifyInstanceState extends Roa
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
    public function withTriggerCheckpoint($value)
    {
        $this->data['TriggerCheckpoint'] = $value;
        $this->options['form_params']['triggerCheckpoint'] = $value;

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
 * @method string getClusterId()
 * @method string getMasterTargetModel()
 */
class ModifyMasterSpec extends Roa
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
 * @method string getProjectName()
 * @method string getSrcPath()
 * @method string getDestPath()
 */
class MVFolder extends Roa
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
 * @method string getProjectName()
 * @method string getJobName()
 */
class OfflineJob extends Roa
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
 * @method string getInstanceIds()
 * @method string getClusterId()
 * @method string getModelTargetCount()
 */
class ShrinkCluster extends Roa
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
 * @method string getProjectName()
 * @method string getParameterJson()
 * @method string getJobName()
 */
class StartJob extends Roa
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

class TagResources extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/cluster/tags';

    /** @var string */
    public $scheme = 'http';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getQueueName()
 * @method string getProjectName()
 * @method string getClusterId()
 */
class UnbindQueue extends Roa
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
 * @method string getAll()
 * @method string getTagKeys()
 * @method string getResourceType()
 * @method string getResourceIds()
 */
class UntagResources extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/cluster/tags';

    /** @var string */
    public $scheme = 'http';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAll($value)
    {
        $this->data['All'] = $value;
        $this->options['query']['All'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTagKeys($value)
    {
        $this->data['TagKeys'] = $value;
        $this->options['query']['TagKeys'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceType($value)
    {
        $this->data['ResourceType'] = $value;
        $this->options['query']['ResourceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceIds($value)
    {
        $this->data['ResourceIds'] = $value;
        $this->options['query']['ResourceIds'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectName()
 * @method string getInstanceId()
 * @method string getConfigJson()
 * @method string getJobName()
 */
class UpdateAutoScaleConfig extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/projects/[projectName]/jobs/[jobName]/instance/[instanceId]/autoscale/config';

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
    public function withConfigJson($value)
    {
        $this->data['ConfigJson'] = $value;
        $this->options['form_params']['configJson'] = $value;

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
 * @method string getPlanJson()
 * @method string getEngineVersion()
 * @method string getClusterId()
 * @method string getPackages()
 * @method string getFolderId()
 * @method string getProperties()
 * @method string getJobName()
 */
class UpdateJob extends Roa
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
class UpdatePackage extends Roa
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
 * @method string getGlobalJobConfig()
 */
class UpdateProject extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/projects/[projectName]';

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
    public function withGlobalJobConfig($value)
    {
        $this->data['GlobalJobConfig'] = $value;
        $this->options['form_params']['globalJobConfig'] = $value;

        return $this;
    }
}

/**
 * @method string getProjectName()
 * @method string getIsOpenBatchSQL()
 */
class UpdateProjectConfig extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/project/config';

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
        $this->options['query']['ProjectName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsOpenBatchSQL($value)
    {
        $this->data['IsOpenBatchSQL'] = $value;
        $this->options['query']['IsOpenBatchSQL'] = $value;

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
class UpdateQueue extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/clusters/[clusterId]/queue';

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
 * @method string getProjectName()
 * @method string getJobName()
 */
class ValidateJob extends Roa
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
