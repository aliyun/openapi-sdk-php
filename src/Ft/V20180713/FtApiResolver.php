<?php

namespace AlibabaCloud\Ft\V20180713;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method BatchAuditTest01 batchAuditTest01(array $options = [])
 * @method FTApiAliasApi fTApiAliasApi(array $options = [])
 * @method FtDynamicAddressDubbo ftDynamicAddressDubbo(array $options = [])
 * @method FtDynamicAddressHsf ftDynamicAddressHsf(array $options = [])
 * @method FtDynamicAddressHttpVpc ftDynamicAddressHttpVpc(array $options = [])
 * @method FtEagleEye ftEagleEye(array $options = [])
 * @method FtFlowSpecial ftFlowSpecial(array $options = [])
 * @method FtGatedLaunchPolicy4 ftGatedLaunchPolicy4(array $options = [])
 * @method FtIpFlowControl ftIpFlowControl(array $options = [])
 * @method FtParamList ftParamList(array $options = [])
 * @method TestFlowStrategy01 testFlowStrategy01(array $options = [])
 * @method TestHttpApi testHttpApi(array $options = [])
 */
class FtApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Ft';

    /** @var string */
    public $version = '2018-07-13';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getDemo01()
 * @method $this withDemo01($value)
 * @method string getTest010101()
 * @method string getName()
 * @method $this withName($value)
 * @method string getBatchAuditTest01()
 * @method $this withBatchAuditTest01($value)
 */
class BatchAuditTest01 extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTest010101($value)
    {
        $this->data['Test010101'] = $value;
        $this->options['form_params']['Test010101'] = $value;

        return $this;
    }
}

/**
 * @method string getName()
 * @method $this withName($value)
 */
class FTApiAliasApi extends Rpc
{
}

/**
 * @method string getIntValue()
 * @method $this withIntValue($value)
 * @method string getStringValue()
 * @method $this withStringValue($value)
 */
class FtDynamicAddressDubbo extends Rpc
{
}

class FtDynamicAddressHsf extends Rpc
{
}

/**
 * @method string getP1()
 * @method $this withP1($value)
 * @method string getStringValue()
 * @method $this withStringValue($value)
 * @method string getOtherParam()
 * @method $this withOtherParam($value)
 * @method string getBooleanParam()
 * @method $this withBooleanParam($value)
 * @method string getDefaultValue()
 * @method $this withDefaultValue($value)
 */
class FtDynamicAddressHttpVpc extends Rpc
{
}

/**
 * @method string getName()
 * @method $this withName($value)
 */
class FtEagleEye extends Rpc
{
}

/**
 * @method string getName()
 * @method $this withName($value)
 */
class FtFlowSpecial extends Rpc
{
}

/**
 * @method string getIsGatedLaunch()
 * @method $this withIsGatedLaunch($value)
 */
class FtGatedLaunchPolicy4 extends Rpc
{
}

/**
 * @method string getName()
 * @method $this withName($value)
 */
class FtIpFlowControl extends Rpc
{
}

/**
 * @method array getDisk()
 * @method string getName()
 * @method $this withName($value)
 */
class FtParamList extends Rpc
{

    /**
     * @param array $disk
     *
     * @return $this
     */
	public function withDisk(array $disk)
	{
	    $this->data['Disk'] = $disk;
		foreach ($disk as $depth1 => $depth1Value) {
			foreach ($depth1Value['Size'] as $i => $iValue) {
				$this->options['query']['Disk.' . ($depth1 + 1) . '.Size.' . ($i + 1)] = $iValue;
			}
			foreach ($depth1Value['Type'] as $i => $iValue) {
				$this->options['query']['Disk.' . ($depth1 + 1) . '.Type.' . ($i + 1)] = $iValue;
			}
		}

		return $this;
    }
}

/**
 * @method string getNames()
 */
class TestFlowStrategy01 extends Rpc
{

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNames($value)
    {
        $this->data['Names'] = $value;
        $this->options['form_params']['Names'] = $value;

        return $this;
    }
}

/**
 * @method string getStringValue()
 * @method $this withStringValue($value)
 * @method string getOtherParam()
 * @method $this withOtherParam($value)
 * @method string getBooleanParam()
 * @method $this withBooleanParam($value)
 * @method string getDefaultValue()
 * @method $this withDefaultValue($value)
 */
class TestHttpApi extends Rpc
{
}
