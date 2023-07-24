<?php

namespace AlibabaCloud\Sasti\V20200512;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method DescribeDomainReport describeDomainReport(array $options = [])
 * @method DescribeFileReport describeFileReport(array $options = [])
 * @method DescribeIpReport describeIpReport(array $options = [])
 * @method GetGraphQueryTemplates getGraphQueryTemplates(array $options = [])
 */
class SastiApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Sasti';

    /** @var string */
    public $version = '2020-05-12';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getField()
 * @method $this withField($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getServiceLang()
 * @method $this withServiceLang($value)
 */
class DescribeDomainReport extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getField()
 * @method $this withField($value)
 * @method string getServiceLang()
 * @method $this withServiceLang($value)
 * @method string getFileHash()
 * @method $this withFileHash($value)
 */
class DescribeFileReport extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getIp()
 * @method $this withIp($value)
 * @method string getField()
 * @method $this withField($value)
 * @method string getServiceLang()
 * @method $this withServiceLang($value)
 */
class DescribeIpReport extends Rpc
{
}

/**
 * @method string getServiceUnit()
 * @method string getEnv()
 */
class GetGraphQueryTemplates extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceUnit($value)
    {
        $this->data['ServiceUnit'] = $value;
        $this->options['form_params']['ServiceUnit'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnv($value)
    {
        $this->data['Env'] = $value;
        $this->options['form_params']['Env'] = $value;

        return $this;
    }
}
