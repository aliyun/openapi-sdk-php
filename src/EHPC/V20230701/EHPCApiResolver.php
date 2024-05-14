<?php

namespace AlibabaCloud\EHPC\V20230701;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddImage addImage(array $options = [])
 * @method CreateJob createJob(array $options = [])
 * @method DeleteJobs deleteJobs(array $options = [])
 * @method DescribeJobMetricData describeJobMetricData(array $options = [])
 * @method DescribeJobMetricLast describeJobMetricLast(array $options = [])
 * @method GetImage getImage(array $options = [])
 * @method GetJob getJob(array $options = [])
 * @method ListExecutors listExecutors(array $options = [])
 * @method ListImages listImages(array $options = [])
 * @method ListJobExecutors listJobExecutors(array $options = [])
 * @method ListJobs listJobs(array $options = [])
 * @method RemoveImage removeImage(array $options = [])
 */
class EHPCApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'EHPC';

    /** @var string */
    public $version = '2023-07-01';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    protected $scheme = 'https';

    /** @var string */
    public $serviceCode = 'ehs';
}

/**
 * @method string getImageType()
 * @method $this withImageType($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getImageVersion()
 * @method $this withImageVersion($value)
 * @method string getContainerImageSpec()
 * @method $this withContainerImageSpec($value)
 * @method string getVMImageSpec()
 * @method $this withVMImageSpec($value)
 */
class AddImage extends Rpc
{

    /** @var string */
    public $scheme = 'http';
}

/**
 * @method string getMonitorPolicy()
 * @method $this withMonitorPolicy($value)
 * @method string getJobDescription()
 * @method $this withJobDescription($value)
 * @method string getDeploymentPolicy()
 * @method $this withDeploymentPolicy($value)
 * @method string getJobName()
 * @method $this withJobName($value)
 * @method string getTasks()
 * @method $this withTasks($value)
 */
class CreateJob extends Rpc
{
}

/**
 * @method string getJobSpec()
 * @method $this withJobSpec($value)
 * @method string getExecutorIds()
 * @method $this withExecutorIds($value)
 */
class DeleteJobs extends Rpc
{
}

/**
 * @method string getTaskName()
 * @method $this withTaskName($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getMetricName()
 * @method $this withMetricName($value)
 * @method string getArrayIndex()
 * @method $this withArrayIndex($value)
 */
class DescribeJobMetricData extends Rpc
{
}

/**
 * @method string getTaskName()
 * @method $this withTaskName($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getArrayIndex()
 * @method $this withArrayIndex($value)
 */
class DescribeJobMetricLast extends Rpc
{
}

/**
 * @method string getImageType()
 * @method $this withImageType($value)
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getImageCategory()
 * @method $this withImageCategory($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class GetImage extends Rpc
{

    /** @var string */
    public $scheme = 'http';
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 */
class GetJob extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getFilter()
 * @method $this withFilter($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListExecutors extends Rpc
{
}

/**
 * @method string getImageType()
 * @method $this withImageType($value)
 * @method string getImageNames()
 * @method $this withImageNames($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getImageCategory()
 * @method $this withImageCategory($value)
 * @method string getAppIds()
 * @method $this withAppIds($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getImageIds()
 * @method $this withImageIds($value)
 */
class ListImages extends Rpc
{

    /** @var string */
    public $scheme = 'http';
}

/**
 * @method string getTaskName()
 * @method $this withTaskName($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListJobExecutors extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getFilter()
 * @method $this withFilter($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSortBy()
 * @method $this withSortBy($value)
 */
class ListJobs extends Rpc
{
}

/**
 * @method string getImageType()
 * @method $this withImageType($value)
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class RemoveImage extends Rpc
{

    /** @var string */
    public $scheme = 'http';
}
