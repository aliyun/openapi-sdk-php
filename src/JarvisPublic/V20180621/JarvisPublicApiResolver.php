<?php

namespace AlibabaCloud\JarvisPublic\V20180621;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Rpc;

/**
 * Resolve Api based on the method name.
 *
 * @method DescribeCountAttackEvent describeCountAttackEvent(array $options = [])
 * @method DescribeAttackedIp describeAttackedIp(array $options = [])
 * @method DescribeAttackEvent describeAttackEvent(array $options = [])
 * @method DescribePhoneInfo describePhoneInfo(array $options = [])
 */
class JarvisPublicApiResolver
{
    use ApiResolverTrait;
}

class V20180621Rpc extends Rpc
{
    /** @var string */
    public $product = 'jarvis-public';

    /** @var string */
    public $version = '2018-06-21';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'jarvis-public';
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getServerIpList()
 * @method $this withServerIpList($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getProductType()
 * @method $this withProductType($value)
 */
class DescribeCountAttackEvent extends V20180621Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getServerIpList()
 * @method $this withServerIpList($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getProductType()
 * @method $this withProductType($value)
 */
class DescribeAttackedIp extends V20180621Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getServerIpList()
 * @method $this withServerIpList($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getProductType()
 * @method $this withProductType($value)
 */
class DescribeAttackEvent extends V20180621Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPhoneNum()
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getSourceCode()
 */
class DescribePhoneInfo extends V20180621Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPhoneNum($value)
    {
        $this->data['PhoneNum'] = $value;
        $this->options['query']['phoneNum'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceCode($value)
    {
        $this->data['SourceCode'] = $value;
        $this->options['query']['sourceCode'] = $value;

        return $this;
    }
}
