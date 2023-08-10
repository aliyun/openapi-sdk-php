<?php

namespace AlibabaCloud\Ft\V20210101;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method DataRateLimitTest dataRateLimitTest(array $options = [])
 * @method NormalRpcHsfApi normalRpcHsfApi(array $options = [])
 * @method NormalRpcHttpApi normalRpcHttpApi(array $options = [])
 * @method RpcDataUpload rpcDataUpload(array $options = [])
 * @method RpcDataUploadAndDownload rpcDataUploadAndDownload(array $options = [])
 * @method RpcDataUploadTest rpcDataUploadTest(array $options = [])
 */
class FtApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Ft';

    /** @var string */
    public $version = '2021-01-01';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getNewparam2()
 * @method string getNewparam1()
 * @method string getData()
 * @method $this withData($value)
 * @method string getMap()
 * @method $this withMap($value)
 */
class DataRateLimitTest extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNewparam2($value)
    {
        $this->data['Newparam2'] = $value;
        $this->options['query']['new-param-2'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNewparam1($value)
    {
        $this->data['Newparam1'] = $value;
        $this->options['query']['new-param-1'] = $value;

        return $this;
    }
}

class NormalRpcHsfApi extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

class NormalRpcHttpApi extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getQuery1()
 * @method string getQuery2()
 * @method string getLargeParam()
 */
class RpcDataUpload extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withQuery1($value)
    {
        $this->data['Query1'] = $value;
        $this->options['query']['query1'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withQuery2($value)
    {
        $this->data['Query2'] = $value;
        $this->options['query']['query2'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLargeParam($value)
    {
        $this->data['LargeParam'] = $value;
        $this->options['form_params']['largeParam'] = $value;

        return $this;
    }
}

/**
 * @method string getQuery1()
 */
class RpcDataUploadAndDownload extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withQuery1($value)
    {
        $this->data['Query1'] = $value;
        $this->options['query']['query1'] = $value;

        return $this;
    }
}

class RpcDataUploadTest extends Rpc
{

    /** @var string */
    public $method = 'GET';
}
