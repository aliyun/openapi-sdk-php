<?php

namespace AlibabaCloud\Cloudauth\V20180916;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getBiz()
 * @method $this withBiz($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method array getMaterial()
 * @method string getTicketId()
 * @method $this withTicketId($value)
 */
class SubmitVerification extends Rpc
{
    public $product = 'Cloudauth';

    public $version = '2018-09-16';

    public $scheme = 'https';

    public $method = 'POST';

    public $serviceCode = 'cloudauth';

    /**
     * @param array $material
     *
     * @return $this
     */
    public function withMaterial(array $material)
    {
        $this->data['Material'] = $material;
        foreach ($material as $i => $iValue) {
            $this->options['query']['Material.' . ($i + 1) . '.MaterialType'] = $material[$i]['MaterialType'];
            $this->options['query']['Material.' . ($i + 1) . '.Value'] = $material[$i]['Value'];
        }

        return $this;
    }
}
