<?php

namespace AlibabaCloud\BatchCompute;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the BatchCompute based on the method name as the Api name.
 *
 * @package   AlibabaCloud\BatchCompute
 *
 * @method V20130111\DeleteImage deleteImage(array $options = [])
 * @method V20130111\DeleteJob deleteJob(array $options = [])
 * @method V20130111\DeleteSnapshot deleteSnapshot(array $options = [])
 * @method V20130111\GetImage getImage(array $options = [])
 * @method V20130111\GetJob getJob(array $options = [])
 * @method V20130111\GetJobDescription getJobDescription(array $options = [])
 * @method V20130111\GetSnapshot getSnapshot(array $options = [])
 * @method V20130111\GetTasks getTasks(array $options = [])
 * @method V20130111\ListImages listImages(array $options = [])
 * @method V20130111\ListJobs listJobs(array $options = [])
 * @method V20130111\ListSnapshots listSnapshots(array $options = [])
 * @method V20130111\ModifyJob modifyJob(array $options = [])
 * @method V20130111\PostJob postJob(array $options = [])
 * @method V20130111\PutJob putJob(array $options = [])
 * @method V20130111\ReleaseJob releaseJob(array $options = [])
 */
class BatchComputeV20130111ApiResolver
{
    use ApiResolverTrait;

    /**
     * @var string
     */
    protected $namespace = 'AlibabaCloud\\BatchCompute\\V20130111';
}
