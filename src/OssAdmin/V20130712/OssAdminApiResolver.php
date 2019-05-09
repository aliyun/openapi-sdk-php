<?php

namespace AlibabaCloud\OssAdmin\V20130712;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method PutBucketStatus putBucketStatus(array $options = [])
 * @method PutBucketPolicy putBucketPolicy(array $options = [])
 * @method PutBucketLimit putBucketLimit(array $options = [])
 * @method GetBucketPolicy getBucketPolicy(array $options = [])
 * @method CreateOssInstance createOssInstance(array $options = [])
 */
class OssAdminApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'OssAdmin';

    /** @var string */
    public $version = '2013-07-12';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getBucket()
 * @method $this withBucket($value)
 * @method string getUid()
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getBid()
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class PutBucketStatus extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUid($value)
    {
        $this->data['Uid'] = $value;
        $this->options['query']['uid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBid($value)
    {
        $this->data['Bid'] = $value;
        $this->options['query']['bid'] = $value;

        return $this;
    }
}

/**
 * @method string getLogPrefix()
 * @method $this withLogPrefix($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getErrorFile()
 * @method $this withErrorFile($value)
 * @method string getIndexFile()
 * @method $this withIndexFile($value)
 * @method string getDisallowEmptyRefer()
 * @method $this withDisallowEmptyRefer($value)
 * @method string getUid()
 * @method string getLogBucket()
 * @method $this withLogBucket($value)
 * @method string getBucketName()
 * @method $this withBucketName($value)
 * @method string getLocation()
 * @method $this withLocation($value)
 * @method string getBid()
 * @method string getEnableDualCluster()
 * @method $this withEnableDualCluster($value)
 * @method string getWhiteReferList()
 * @method $this withWhiteReferList($value)
 * @method string getIamPolicy()
 * @method $this withIamPolicy($value)
 */
class PutBucketPolicy extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUid($value)
    {
        $this->data['Uid'] = $value;
        $this->options['query']['uid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBid($value)
    {
        $this->data['Bid'] = $value;
        $this->options['query']['bid'] = $value;

        return $this;
    }
}

/**
 * @method string getUid()
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getBid()
 * @method string getBucketLimit()
 * @method $this withBucketLimit($value)
 */
class PutBucketLimit extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUid($value)
    {
        $this->data['Uid'] = $value;
        $this->options['query']['uid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBid($value)
    {
        $this->data['Bid'] = $value;
        $this->options['query']['bid'] = $value;

        return $this;
    }
}

/**
 * @method string getUid()
 * @method string getBucketName()
 * @method $this withBucketName($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getBid()
 */
class GetBucketPolicy extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUid($value)
    {
        $this->data['Uid'] = $value;
        $this->options['query']['uid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBid($value)
    {
        $this->data['Bid'] = $value;
        $this->options['query']['bid'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getAliUid()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRegion()
 */
class CreateOssInstance extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAliUid($value)
    {
        $this->data['AliUid'] = $value;
        $this->options['query']['aliUid'] = $value;

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
