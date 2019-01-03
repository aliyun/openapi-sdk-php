<?php

namespace AlibabaCloud\Cloudauth\V20180916;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SubmitMaterials
 *
 * @method string getResourceOwnerId()
 * @method string getSourceIp()
 * @method array getMaterial()
 * @method string getVerifyToken()
 */
class SubmitMaterials extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Cloudauth';

    /**
     * @var string
     */
    public $version = '2018-09-16';

    /**
     * @var string
     */
    public $action = 'SubmitMaterials';

    /**
     * @var string
     */
    public $scheme = 'https';


    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'cloudauth';

    /**
     * @deprecated deprecated since version 2.0, Use withResourceOwnerId() instead.
     *
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        return $this->withResourceOwnerId($resourceOwnerId);
    }

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
     * @deprecated deprecated since version 2.0, Use withSourceIp() instead.
     *
     * @param string $sourceIp
     *
     * @return $this
     */
    public function setSourceIp($sourceIp)
    {
        return $this->withSourceIp($sourceIp);
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
     * @deprecated deprecated since version 2.0, Use getMaterial() instead.
     *
     * @return array
     */
    public function getMaterials()
    {
        return $this->getMaterial();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withMaterial() instead.
     *
     * @param array $materials
     *
     * @return $this
     */
    public function setMaterials(array $materials)
    {
        return $this->withMaterial($materials);
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
     * @deprecated deprecated since version 2.0, Use withVerifyToken() instead.
     *
     * @param string $verifyToken
     *
     * @return $this
     */
    public function setVerifyToken($verifyToken)
    {
        return $this->withVerifyToken($verifyToken);
    }

    /**
     * @param string $verifyToken
     *
     * @return $this
     */
    public function withVerifyToken($verifyToken)
    {
        $this->data['VerifyToken'] = $verifyToken;
        $this->options['query']['VerifyToken'] = $verifyToken;

        return $this;
    }
}
