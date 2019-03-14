<?php

namespace AlibabaCloud\Cloudauth\V20180916;

use AlibabaCloud\Rpc;

/**
 * Api SubmitVerification
 *
 * @method string getResourceOwnerId()
 * @method string getBiz()
 * @method string getSourceIp()
 * @method array getMaterial()
 * @method string getTicketId()
 */
class SubmitVerification extends Rpc
{
    public $product = 'Cloudauth';

    public $version = '2018-09-16';

    public $scheme = 'https';

    public $method = 'POST';

    public $serviceCode = 'cloudauth';

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function withResourceOwnerId($resourceOwnerId)
    {
        $this->data['ResourceOwnerId'] = $resourceOwnerId;
        $this->options['query']['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param string $biz
     *
     * @return $this
     */
    public function withBiz($biz)
    {
        $this->data['Biz'] = $biz;
        $this->options['query']['Biz'] = $biz;

        return $this;
    }

    /**
     * @param string $sourceIp
     *
     * @return $this
     */
    public function withSourceIp($sourceIp)
    {
        $this->data['SourceIp'] = $sourceIp;
        $this->options['query']['SourceIp'] = $sourceIp;

        return $this;
    }

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

    /**
     * @param string $ticketId
     *
     * @return $this
     */
    public function withTicketId($ticketId)
    {
        $this->data['TicketId'] = $ticketId;
        $this->options['query']['TicketId'] = $ticketId;

        return $this;
    }
}
