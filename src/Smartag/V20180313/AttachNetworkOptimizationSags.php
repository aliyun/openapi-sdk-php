<?php

namespace AlibabaCloud\Smartag\V20180313;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getNetworkOptId()
 * @method $this withNetworkOptId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method array getSmartAGIds()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class AttachNetworkOptimizationSags extends Rpc
{
    public $product = 'Smartag';

    public $version = '2018-03-13';

    public $method = 'POST';

    public $serviceCode = 'smartag';

    /**
     * @param array $smartAGIds
     *
     * @return $this
     */
    public function withSmartAGIds(array $smartAGIds)
    {
        $this->data['SmartAGIds'] = $smartAGIds;
        foreach ($smartAGIds as $i => $iValue) {
            $this->options['query']['SmartAGIds.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}
