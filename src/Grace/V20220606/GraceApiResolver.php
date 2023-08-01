<?php

namespace AlibabaCloud\Grace\V20220606;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AnalyzeFile analyzeFile(array $options = [])
 * @method GetFile getFile(array $options = [])
 * @method UploadFileByOSS uploadFileByOSS(array $options = [])
 * @method UploadFileByURL uploadFileByURL(array $options = [])
 */
class GraceApiResolver extends ApiResolver
{
}

class Roa extends \AlibabaCloud\Client\Resolver\Roa
{
    /** @var string */
    public $product = 'grace';

    /** @var string */
    public $version = '2022-06-06';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'grace';
}

/**
 * @method string getKeepUnreachableObjects()
 * @method string getToken()
 * @method string getName()
 */
class AnalyzeFile extends Roa
{
    /** @var string */
    public $pathPattern = '/AnalyzeFile';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withKeepUnreachableObjects($value)
    {
        $this->data['KeepUnreachableObjects'] = $value;
        $this->options['query']['keepUnreachableObjects'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

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
        $this->options['query']['name'] = $value;

        return $this;
    }
}

/**
 * @method string getToken()
 * @method string getName()
 */
class GetFile extends Roa
{
    /** @var string */
    public $pathPattern = '/GetFile';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withToken($value)
    {
        $this->data['Token'] = $value;
        $this->options['query']['token'] = $value;

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
        $this->options['query']['name'] = $value;

        return $this;
    }
}

/**
 * @method string getObjectName()
 * @method string getType()
 * @method string getEndpoint()
 * @method string getBucketName()
 * @method string getDisplayName()
 */
class UploadFileByOSS extends Roa
{
    /** @var string */
    public $pathPattern = '/UploadFileByOSS';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withObjectName($value)
    {
        $this->data['ObjectName'] = $value;
        $this->options['query']['objectName'] = $value;

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndpoint($value)
    {
        $this->data['Endpoint'] = $value;
        $this->options['query']['endpoint'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBucketName($value)
    {
        $this->data['BucketName'] = $value;
        $this->options['query']['bucketName'] = $value;

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
        $this->options['query']['displayName'] = $value;

        return $this;
    }
}

/**
 * @method string getType()
 * @method string getUrl()
 * @method string getDisplayName()
 */
class UploadFileByURL extends Roa
{
    /** @var string */
    public $pathPattern = '/UploadFileByURL';

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUrl($value)
    {
        $this->data['Url'] = $value;
        $this->options['query']['url'] = $value;

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
        $this->options['query']['displayName'] = $value;

        return $this;
    }
}
