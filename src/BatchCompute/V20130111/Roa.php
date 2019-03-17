<?php

namespace AlibabaCloud\BatchCompute\V20130111;

use AlibabaCloud\Roa;

class V20130111Roa extends Roa
{
    /** @var string */
    public $product = 'BatchCompute';

    /** @var string */
    public $version = '2013-01-11';
}

/**
 * @method string getResourceOwnerId()
 * @method string getResourceName()
 * @method $this withResourceName($value)
 */
class ModifyJob extends V20130111Roa
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

/**
 * @method string getResourceOwnerId()
 * @method string getResourceName()
 * @method $this withResourceName($value)
 */
class DeleteJob extends V20130111Roa
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
 * @method string getResourceName()
 * @method $this withResourceName($value)
 */
class DeleteImage extends V20130111Roa
{
    /** @var string */
    public $pathPattern = '/images/[ResourceName]';

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
class GetJobDescription extends V20130111Roa
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
class GetJob extends V20130111Roa
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
class GetImage extends V20130111Roa
{
    /** @var string */
    public $pathPattern = '/images/[ResourceName]';


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
class DeleteSnapshot extends V20130111Roa
{
    /** @var string */
    public $pathPattern = '/snapshots/[ResourceName]';

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
class ListSnapshots extends V20130111Roa
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
class ListJobs extends V20130111Roa
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
class ListImages extends V20130111Roa
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
class GetTasks extends V20130111Roa
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
class GetSnapshot extends V20130111Roa
{
    /** @var string */
    public $pathPattern = '/snapshots/[ResourceName]';


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
class ReleaseJob extends V20130111Roa
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
 * @method string getResourceName()
 * @method $this withResourceName($value)
 */
class PutJob extends V20130111Roa
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
 */
class PostJob extends V20130111Roa
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
