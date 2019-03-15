<?php

namespace AlibabaCloud\Smartag\V20180313;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 * @method array getUserNames()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeUserFlowStatistics extends Rpc
{
    public $product = 'Smartag';

    public $version = '2018-03-13';

    public $method = 'POST';

    public $serviceCode = 'smartag';

    /**
     * @param array $userNames
     *
     * @return $this
     */
    public function withUserNames(array $userNames)
    {
        $this->data['UserNames'] = $userNames;
        foreach ($userNames as $i => $iValue) {
            $this->options['query']['UserNames.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}
