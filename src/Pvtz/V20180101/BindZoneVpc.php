<?php

namespace AlibabaCloud\Pvtz\V20180101;

use AlibabaCloud\Rpc;

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method array getVpcs()
 */
class BindZoneVpc extends Rpc
{
    public $product = 'pvtz';

    public $version = '2018-01-01';

    public $method = 'POST';

    public $serviceCode = 'pvtz';

    /**
     * @param array $vpcs
     *
     * @return $this
     */
    public function withVpcs(array $vpcs)
    {
        $this->data['Vpcs'] = $vpcs;
        foreach ($vpcs as $i => $iValue) {
            $this->options['query']['Vpcs.' . ($i + 1) . '.RegionId'] = $vpcs[$i]['RegionId'];
            $this->options['query']['Vpcs.' . ($i + 1) . '.VpcId'] = $vpcs[$i]['VpcId'];
        }

        return $this;
    }
}
