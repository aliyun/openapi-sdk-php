<?php

namespace AlibabaCloud\BatchCompute\V20130111;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the BatchCompute based on the method name as the Api name.
 *
 * @package   AlibabaCloud\BatchCompute\V20130111
 *
 * @method DeleteImage deleteImage(array $options = [])
 * @method DeleteJob deleteJob(array $options = [])
 * @method DeleteSnapshot deleteSnapshot(array $options = [])
 * @method GetImage getImage(array $options = [])
 * @method GetJob getJob(array $options = [])
 * @method GetJobDescription getJobDescription(array $options = [])
 * @method GetSnapshot getSnapshot(array $options = [])
 * @method GetTasks getTasks(array $options = [])
 * @method ListImages listImages(array $options = [])
 * @method ListJobs listJobs(array $options = [])
 * @method ListSnapshots listSnapshots(array $options = [])
 * @method ModifyJob modifyJob(array $options = [])
 * @method PostJob postJob(array $options = [])
 * @method PutJob putJob(array $options = [])
 * @method ReleaseJob releaseJob(array $options = [])
 */
class BatchComputeApiResolver
{
    use ApiResolverTrait;
}
