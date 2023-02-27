<?php

namespace AlibabaCloud\Viapi\V20230117;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CancelWaitingAsyncJob cancelWaitingAsyncJob(array $options = [])
 * @method GetAsyncJobResult getAsyncJobResult(array $options = [])
 * @method QueryAsyncJobList queryAsyncJobList(array $options = [])
 */
class ViapiApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'viapi';

    /** @var string */
    public $version = '2023-01-17';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'viapi';
}

/**
 * @method string getJobId()
 * @method string getAsync()
 */
class CancelWaitingAsyncJob extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobId($value)
    {
        $this->data['JobId'] = $value;
        $this->options['form_params']['JobId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAsync($value)
    {
        $this->data['Async'] = $value;
        $this->options['form_params']['Async'] = $value;

        return $this;
    }
}

/**
 * @method string getJobId()
 * @method string getAsync()
 */
class GetAsyncJobResult extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobId($value)
    {
        $this->data['JobId'] = $value;
        $this->options['form_params']['JobId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAsync($value)
    {
        $this->data['Async'] = $value;
        $this->options['form_params']['Async'] = $value;

        return $this;
    }
}

/**
 * @method string getStartTime()
 * @method string getPageNum()
 * @method string getJobId()
 * @method string getPopApiName()
 * @method string getPageSize()
 * @method string getPopProduct()
 * @method string getEndTime()
 * @method string getStatus()
 */
class QueryAsyncJobList extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartTime($value)
    {
        $this->data['StartTime'] = $value;
        $this->options['form_params']['StartTime'] = $value;

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
        $this->options['form_params']['PageNum'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobId($value)
    {
        $this->data['JobId'] = $value;
        $this->options['form_params']['JobId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPopApiName($value)
    {
        $this->data['PopApiName'] = $value;
        $this->options['form_params']['PopApiName'] = $value;

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
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPopProduct($value)
    {
        $this->data['PopProduct'] = $value;
        $this->options['form_params']['PopProduct'] = $value;

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
        $this->options['form_params']['EndTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStatus($value)
    {
        $this->data['Status'] = $value;
        $this->options['form_params']['Status'] = $value;

        return $this;
    }
}
