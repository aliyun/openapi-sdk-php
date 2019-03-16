<?php

namespace AlibabaCloud\Ft\V20180713;

use AlibabaCloud\Rpc;

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
     * @param array $value
     *
     * @return $this
     */
    public function withDisk(array $value)
    {
        $this->data['Disk'] = $value;
        foreach ($value as $i => $iValue) {
            foreach ($value[$i]['Sizes'] as $j => $jValue) {
                $this->options['query']['Disk.' . ($i + 1) . '.Size.' . ($j + 1)] = $jValue;
            }
            foreach ($value[$i]['Types'] as $j => $jValue) {
                $this->options['query']['Disk.' . ($i + 1) . '.Type.' . ($j + 1)] = $jValue;
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
