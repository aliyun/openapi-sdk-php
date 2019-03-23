<?php

namespace AlibabaCloud\Ft\V20180713;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Rpc;

/**
 * Resolve Api based on the method name.
 *
 * @method FtFlowSpecial ftFlowSpecial(array $options = [])
 * @method FtDynamicAddressHsf ftDynamicAddressHsf(array $options = [])
 * @method FtDynamicAddressDubbo ftDynamicAddressDubbo(array $options = [])
 * @method FtParamList ftParamList(array $options = [])
 * @method FtEagleEye ftEagleEye(array $options = [])
 * @method FTApiAliasApi fTApiAliasApi(array $options = [])
 * @method FtGatedLaunchPolicy4 ftGatedLaunchPolicy4(array $options = [])
 */
class FtApiResolver
{
    use ApiResolverTrait;
}

class V20180713Rpc extends Rpc
{
    /** @var string */
    public $product = 'Ft';

    /** @var string */
    public $version = '2018-07-13';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getName()
 * @method $this withName($value)
 */
class FtFlowSpecial extends V20180713Rpc
{
}

class FtDynamicAddressHsf extends V20180713Rpc
{
}

/**
 * @method string getIntValue()
 * @method $this withIntValue($value)
 * @method string getStringValue()
 * @method $this withStringValue($value)
 */
class FtDynamicAddressDubbo extends V20180713Rpc
{
}

/**
 * @method array getDisk()
 * @method string getName()
 * @method $this withName($value)
 */
class FtParamList extends V20180713Rpc
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
 * @method string getName()
 * @method $this withName($value)
 */
class FtEagleEye extends V20180713Rpc
{
}

/**
 * @method string getName()
 * @method $this withName($value)
 */
class FTApiAliasApi extends V20180713Rpc
{
}

/**
 * @method string getIsGatedLaunch()
 * @method $this withIsGatedLaunch($value)
 */
class FtGatedLaunchPolicy4 extends V20180713Rpc
{
}
