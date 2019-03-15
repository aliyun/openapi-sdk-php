<?php

namespace AlibabaCloud\Smartag\V20180313;

use AlibabaCloud\Rpc;

/**
 * @method array getSnatEntries()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getCity()
 * @method $this withCity($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityLockThreshold()
 * @method $this withSecurityLockThreshold($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getCidrBlock()
 * @method $this withCidrBlock($value)
 * @method string getSmartAGId()
 * @method $this withSmartAGId($value)
 */
class ModifySmartAccessGateway extends Rpc
{
    public $product = 'Smartag';

    public $version = '2018-03-13';

    public $method = 'POST';

    public $serviceCode = 'smartag';

    /**
     * @param array $snatEntries
     *
     * @return $this
     */
    public function withSnatEntries(array $snatEntries)
    {
        $this->data['SnatEntries'] = $snatEntries;
        foreach ($snatEntries as $i => $iValue) {
            $this->options['query']['SnatEntries.' . ($i + 1) . '.CidrBlock'] = $snatEntries[$i]['CidrBlock'];
            $this->options['query']['SnatEntries.' . ($i + 1) . '.SnatIp'] = $snatEntries[$i]['SnatIp'];
        }

        return $this;
    }
}
