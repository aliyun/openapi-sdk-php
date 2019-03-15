<?php

namespace AlibabaCloud\Alidns\V20150109;

use AlibabaCloud\Rpc;

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getType()
 * @method $this withType($value)
 * @method array getAddr()
 * @method string getMinAvailableAddrNum()
 * @method $this withMinAvailableAddrNum($value)
 */
class AddGtmAddressPool extends Rpc
{
    public $product = 'Alidns';

    public $version = '2015-01-09';

    public $method = 'POST';

    public $serviceCode = 'alidns';

    /**
     * @param array $addr
     *
     * @return $this
     */
    public function withAddr(array $addr)
    {
        $this->data['Addr'] = $addr;
        foreach ($addr as $i => $iValue) {
            $this->options['query']['Addr.' . ($i + 1) . '.Mode'] = $addr[$i]['Mode'];
            $this->options['query']['Addr.' . ($i + 1) . '.LbaWeight'] = $addr[$i]['LbaWeight'];
            $this->options['query']['Addr.' . ($i + 1) . '.Value'] = $addr[$i]['Value'];
        }

        return $this;
    }
}
