<?php

namespace AlibabaCloud\Eas\V20210701;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CreateBenchmarkTask createBenchmarkTask(array $options = [])
 * @method CreateResource createResource(array $options = [])
 * @method CreateResourceInstances createResourceInstances(array $options = [])
 * @method CreateResourceLog createResourceLog(array $options = [])
 * @method CreateService createService(array $options = [])
 * @method CreateServiceAutoScaler createServiceAutoScaler(array $options = [])
 * @method CreateServiceCronScaler createServiceCronScaler(array $options = [])
 * @method CreateServiceMirror createServiceMirror(array $options = [])
 * @method DeleteBenchmarkTask deleteBenchmarkTask(array $options = [])
 * @method DeleteResource deleteResource(array $options = [])
 * @method DeleteResourceDLink deleteResourceDLink(array $options = [])
 * @method DeleteResourceInstances deleteResourceInstances(array $options = [])
 * @method DeleteResourceLog deleteResourceLog(array $options = [])
 * @method DeleteService deleteService(array $options = [])
 * @method DeleteServiceAutoScaler deleteServiceAutoScaler(array $options = [])
 * @method DeleteServiceCronScaler deleteServiceCronScaler(array $options = [])
 * @method DeleteServiceInstances deleteServiceInstances(array $options = [])
 * @method DeleteServiceMirror deleteServiceMirror(array $options = [])
 * @method DescribeBenchmarkTask describeBenchmarkTask(array $options = [])
 * @method DescribeBenchmarkTaskReport describeBenchmarkTaskReport(array $options = [])
 * @method DescribeResource describeResource(array $options = [])
 * @method DescribeResourceDLink describeResourceDLink(array $options = [])
 * @method DescribeResourceLog describeResourceLog(array $options = [])
 * @method DescribeService describeService(array $options = [])
 * @method DescribeServiceAutoScaler describeServiceAutoScaler(array $options = [])
 * @method DescribeServiceCronScaler describeServiceCronScaler(array $options = [])
 * @method DescribeServiceLog describeServiceLog(array $options = [])
 * @method DescribeServiceMirror describeServiceMirror(array $options = [])
 * @method ListBenchmarkTask listBenchmarkTask(array $options = [])
 * @method ListResourceInstances listResourceInstances(array $options = [])
 * @method ListResourceInstanceWorker listResourceInstanceWorker(array $options = [])
 * @method ListResources listResources(array $options = [])
 * @method ListResourceServices listResourceServices(array $options = [])
 * @method ListServiceInstances listServiceInstances(array $options = [])
 * @method ListServices listServices(array $options = [])
 * @method ReleaseService releaseService(array $options = [])
 * @method StartBenchmarkTask startBenchmarkTask(array $options = [])
 * @method StartService startService(array $options = [])
 * @method StopBenchmarkTask stopBenchmarkTask(array $options = [])
 * @method StopService stopService(array $options = [])
 * @method UpdateBenchmarkTask updateBenchmarkTask(array $options = [])
 * @method UpdateResource updateResource(array $options = [])
 * @method UpdateResourceDLink updateResourceDLink(array $options = [])
 * @method UpdateService updateService(array $options = [])
 * @method UpdateServiceAutoScaler updateServiceAutoScaler(array $options = [])
 * @method UpdateServiceCronScaler updateServiceCronScaler(array $options = [])
 * @method UpdateServiceMirror updateServiceMirror(array $options = [])
 * @method UpdateServiceVersion updateServiceVersion(array $options = [])
 */
class EasApiResolver extends ApiResolver
{
}

class Roa extends \AlibabaCloud\Client\Resolver\Roa
{
    /** @var string */
    public $product = 'eas';

    /** @var string */
    public $version = '2021-07-01';

    /** @var string */
    public $serviceCode = 'eas';
}

/**
 * @method string getBody()
 */
class CreateBenchmarkTask extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/benchmark-tasks';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class CreateResource extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/resources';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getBody()
 */
class CreateResourceInstances extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/resources/[ClusterId]/[ResourceId]/instances';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getBody()
 */
class CreateResourceLog extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/resources/[ClusterId]/[ResourceId]/log';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getBody()
 */
class CreateService extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/services';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getBody()
 */
class CreateServiceAutoScaler extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/services/[ClusterId]/[ServiceName]/autoscaler';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getBody()
 */
class CreateServiceCronScaler extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/services/[ClusterId]/[ServiceName]/cronscaler';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getBody()
 */
class CreateServiceMirror extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/services/[ClusterId]/[ServiceName]/mirror';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getTaskName()
 * @method $this withTaskName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DeleteBenchmarkTask extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/benchmark-tasks/[ClusterId]/[TaskName]';

    /** @var string */
    public $method = 'DELETE';
}

/**
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DeleteResource extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/resources/[ClusterId]/[ResourceId]';

    /** @var string */
    public $method = 'DELETE';
}

/**
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DeleteResourceDLink extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/resources/[ClusterId]/[ResourceId]/dlink';

    /** @var string */
    public $method = 'DELETE';
}

/**
 * @method string getInstanceList()
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getAllFailed()
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DeleteResourceInstances extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/resources/[ClusterId]/[ResourceId]/instances';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceList($value)
    {
        $this->data['InstanceList'] = $value;
        $this->options['query']['InstanceList'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAllFailed($value)
    {
        $this->data['AllFailed'] = $value;
        $this->options['query']['AllFailed'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DeleteResourceLog extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/resources/[ClusterId]/[ResourceId]/log';

    /** @var string */
    public $method = 'DELETE';
}

/**
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DeleteService extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/services/[ClusterId]/[ServiceName]';

    /** @var string */
    public $method = 'DELETE';
}

/**
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DeleteServiceAutoScaler extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/services/[ClusterId]/[ServiceName]/autoscaler';

    /** @var string */
    public $method = 'DELETE';
}

/**
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DeleteServiceCronScaler extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/services/[ClusterId]/[ServiceName]/cronscaler';

    /** @var string */
    public $method = 'DELETE';
}

/**
 * @method string getInstanceList()
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DeleteServiceInstances extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/services/[ClusterId]/[ServiceName]/instances';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceList($value)
    {
        $this->data['InstanceList'] = $value;
        $this->options['query']['InstanceList'] = $value;

        return $this;
    }
}

/**
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DeleteServiceMirror extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/services/[ClusterId]/[ServiceName]/mirror';

    /** @var string */
    public $method = 'DELETE';
}

/**
 * @method string getTaskName()
 * @method $this withTaskName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeBenchmarkTask extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/benchmark-tasks/[ClusterId]/[TaskName]';
}

/**
 * @method string getTaskName()
 * @method $this withTaskName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeBenchmarkTaskReport extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/benchmark-tasks/[ClusterId]/[TaskName]/report';
}

/**
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeResource extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/resources/[ClusterId]/[ResourceId]';
}

/**
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeResourceDLink extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/resources/[ClusterId]/[ResourceId]/dlink';
}

/**
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeResourceLog extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/resources/[ClusterId]/[ResourceId]/log';
}

/**
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeService extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/services/[ClusterId]/[ServiceName]';
}

/**
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeServiceAutoScaler extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/services/[ClusterId]/[ServiceName]/autoscaler';
}

/**
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeServiceCronScaler extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/services/[ClusterId]/[ServiceName]/cronscaler';
}

/**
 * @method string getIp()
 * @method string getPageSize()
 * @method string getEndTime()
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getStartTime()
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNum()
 * @method string getKeyword()
 */
class DescribeServiceLog extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/services/[ClusterId]/[ServiceName]/logs';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIp($value)
    {
        $this->data['Ip'] = $value;
        $this->options['query']['Ip'] = $value;

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
        $this->options['query']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndTime($value)
    {
        $this->data['EndTime'] = $value;
        $this->options['query']['EndTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartTime($value)
    {
        $this->data['StartTime'] = $value;
        $this->options['query']['StartTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNum($value)
    {
        $this->data['PageNum'] = $value;
        $this->options['query']['PageNum'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withKeyword($value)
    {
        $this->data['Keyword'] = $value;
        $this->options['query']['Keyword'] = $value;

        return $this;
    }
}

/**
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeServiceMirror extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/services/[ClusterId]/[ServiceName]/mirror';
}

class ListBenchmarkTask extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/benchmark-tasks';
}

/**
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getPageSize()
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getChargeType()
 * @method string getPageNumber()
 */
class ListResourceInstances extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/resources/[ClusterId]/[ResourceId]/instances';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['query']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChargeType($value)
    {
        $this->data['ChargeType'] = $value;
        $this->options['query']['ChargeType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['query']['PageNumber'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 * @method string getPageSize()
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNumber()
 */
class ListResourceInstanceWorker extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/resources/[ClusterId]/[ResourceId]/instance/[InstanceName]/workers';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['query']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['query']['PageNumber'] = $value;

        return $this;
    }
}

/**
 * @method string getPageSize()
 * @method string getPageNumber()
 */
class ListResources extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/resources';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['query']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['query']['PageNumber'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getPageSize()
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNumber()
 */
class ListResourceServices extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/resources/[ClusterId]/[ResourceId]/services';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['query']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['query']['PageNumber'] = $value;

        return $this;
    }
}

/**
 * @method string getPageSize()
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNumber()
 */
class ListServiceInstances extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/services/[ClusterId]/[ServiceName]/instances';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['query']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['query']['PageNumber'] = $value;

        return $this;
    }
}

/**
 * @method string getFilter()
 * @method string getPageSize()
 * @method string getSort()
 * @method string getPageNumber()
 * @method string getOrder()
 */
class ListServices extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/services';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFilter($value)
    {
        $this->data['Filter'] = $value;
        $this->options['query']['Filter'] = $value;

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
        $this->options['query']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSort($value)
    {
        $this->data['Sort'] = $value;
        $this->options['query']['Sort'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['query']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrder($value)
    {
        $this->data['Order'] = $value;
        $this->options['query']['Order'] = $value;

        return $this;
    }
}

/**
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getBody()
 */
class ReleaseService extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/services/[ClusterId]/[ServiceName]/release';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getTaskName()
 * @method $this withTaskName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class StartBenchmarkTask extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/benchmark-tasks/[ClusterId]/[TaskName]/start';

    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class StartService extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/services/[ClusterId]/[ServiceName]/start';

    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getTaskName()
 * @method $this withTaskName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class StopBenchmarkTask extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/benchmark-tasks/[ClusterId]/[TaskName]/stop';

    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class StopService extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/services/[ClusterId]/[ServiceName]/stop';

    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getTaskName()
 * @method $this withTaskName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getBody()
 */
class UpdateBenchmarkTask extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/benchmark-tasks/[ClusterId]/[TaskName]';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getBody()
 */
class UpdateResource extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/resources/[ClusterId]/[ResourceId]';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getBody()
 */
class UpdateResourceDLink extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/resources/[ClusterId]/[ResourceId]/dlink';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getBody()
 */
class UpdateService extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/services/[ClusterId]/[ServiceName]';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getBody()
 */
class UpdateServiceAutoScaler extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/services/[ClusterId]/[ServiceName]/autoscaler';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getBody()
 */
class UpdateServiceCronScaler extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/services/[ClusterId]/[ServiceName]/cronscaler';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getBody()
 */
class UpdateServiceMirror extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/services/[ClusterId]/[ServiceName]/mirror';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}

/**
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getBody()
 */
class UpdateServiceVersion extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/services/[ClusterId]/[ServiceName]/version';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['body'] = $value;

        return $this;
    }
}
