<?php

namespace AlibabaCloud\BatchCompute\V20150630;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method PostJob postJob(array $options = [])
 * @method GetTasks getTasks(array $options = [])
 * @method DeleteJob deleteJob(array $options = [])
 * @method ListJobs listJobs(array $options = [])
 * @method ListSnapshots listSnapshots(array $options = [])
 * @method ListImages listImages(array $options = [])
 * @method GetJobDescription getJobDescription(array $options = [])
 * @method ReleaseJob releaseJob(array $options = [])
 * @method GetJob getJob(array $options = [])
 * @method PutJob putJob(array $options = [])
 * @method ModifyJob modifyJob(array $options = [])
 */
class BatchComputeApiResolver extends ApiResolver
{
}

class Roa extends \AlibabaCloud\Client\Resolver\Roa
{
    /** @var string */
    public $product = 'BatchCompute';

    /** @var string */
    public $version = '2015-06-30';
}

/**
 * @method string getResourceOwnerId()
 */
class PostJob extends Roa
{
    /** @var string */
    public $pathPattern = '/jobs';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceOwnerId($value)
    {
        $this->data['ResourceOwnerId'] = $value;
        $this->options['query']['ResourceOwnerId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method string getResourceName()
 * @method $this withResourceName($value)
 */
class GetTasks extends Roa
{
    /** @var string */
    public $pathPattern = '/jobs/[ResourceName]/tasks';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceOwnerId($value)
    {
        $this->data['ResourceOwnerId'] = $value;
        $this->options['query']['ResourceOwnerId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method string getResourceName()
 * @method $this withResourceName($value)
 */
class DeleteJob extends Roa
{
    /** @var string */
    public $pathPattern = '/jobs/[ResourceName]';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceOwnerId($value)
    {
        $this->data['ResourceOwnerId'] = $value;
        $this->options['query']['ResourceOwnerId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 */
class ListJobs extends Roa
{
    /** @var string */
    public $pathPattern = '/jobs';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceOwnerId($value)
    {
        $this->data['ResourceOwnerId'] = $value;
        $this->options['query']['ResourceOwnerId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 */
class ListSnapshots extends Roa
{
    /** @var string */
    public $pathPattern = '/snapshots';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceOwnerId($value)
    {
        $this->data['ResourceOwnerId'] = $value;
        $this->options['query']['ResourceOwnerId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 */
class ListImages extends Roa
{
    /** @var string */
    public $pathPattern = '/images';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceOwnerId($value)
    {
        $this->data['ResourceOwnerId'] = $value;
        $this->options['query']['ResourceOwnerId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method string getResourceName()
 * @method $this withResourceName($value)
 */
class GetJobDescription extends Roa
{
    /** @var string */
    public $pathPattern = '/jobs/[ResourceName]/description';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceOwnerId($value)
    {
        $this->data['ResourceOwnerId'] = $value;
        $this->options['query']['ResourceOwnerId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method string getResourceName()
 * @method $this withResourceName($value)
 */
class ReleaseJob extends Roa
{
    /** @var string */
    public $pathPattern = '/2013-01-11/jobs/[ResourceName]';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceOwnerId($value)
    {
        $this->data['ResourceOwnerId'] = $value;
        $this->options['query']['ResourceOwnerId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method string getResourceName()
 * @method $this withResourceName($value)
 */
class GetJob extends Roa
{
    /** @var string */
    public $pathPattern = '/jobs/[ResourceName]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceOwnerId($value)
    {
        $this->data['ResourceOwnerId'] = $value;
        $this->options['query']['ResourceOwnerId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method string getResourceName()
 * @method $this withResourceName($value)
 */
class PutJob extends Roa
{
    /** @var string */
    public $pathPattern = '/jobs/[ResourceName]/Priority';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceOwnerId($value)
    {
        $this->data['ResourceOwnerId'] = $value;
        $this->options['query']['ResourceOwnerId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method string getResourceName()
 * @method $this withResourceName($value)
 */
class ModifyJob extends Roa
{
    /** @var string */
    public $pathPattern = '/jobs/[ResourceName]';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceOwnerId($value)
    {
        $this->data['ResourceOwnerId'] = $value;
        $this->options['query']['ResourceOwnerId'] = $value;

        return $this;
    }
}
