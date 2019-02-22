<?php

namespace AlibabaCloud\TagINner\V20181109;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of InnerFixRegion
 *
 * @method string getResourceOwnerId()
 * @method string getFixRegionId()
 * @method string getTagOwnerUid()
 * @method string getResourceRelId()
 * @method string getTagOwnerBid()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getTagValueId()
 * @method string getTagKeyId()
 */
class InnerFixRegion extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Tag-Inner';

    /**
     * @var string
     */
    public $version = '2018-11-09';

    /**
     * @var string
     */
    public $action = 'InnerFixRegion';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'tag';

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
     * @param string $fixRegionId
     *
     * @return $this
     */
    public function withFixRegionId($fixRegionId)
    {
        $this->data['FixRegionId'] = $fixRegionId;
        $this->options['query']['FixRegionId'] = $fixRegionId;

        return $this;
    }

    /**
     * @param string $tagOwnerUid
     *
     * @return $this
     */
    public function withTagOwnerUid($tagOwnerUid)
    {
        $this->data['TagOwnerUid'] = $tagOwnerUid;
        $this->options['query']['TagOwnerUid'] = $tagOwnerUid;

        return $this;
    }

    /**
     * @param string $resourceRelId
     *
     * @return $this
     */
    public function withResourceRelId($resourceRelId)
    {
        $this->data['ResourceRelId'] = $resourceRelId;
        $this->options['query']['ResourceRelId'] = $resourceRelId;

        return $this;
    }

    /**
     * @param string $tagOwnerBid
     *
     * @return $this
     */
    public function withTagOwnerBid($tagOwnerBid)
    {
        $this->data['TagOwnerBid'] = $tagOwnerBid;
        $this->options['query']['TagOwnerBid'] = $tagOwnerBid;

        return $this;
    }

    /**
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function withResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->data['ResourceOwnerAccount'] = $resourceOwnerAccount;
        $this->options['query']['ResourceOwnerAccount'] = $resourceOwnerAccount;

        return $this;
    }

    /**
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function withOwnerAccount($ownerAccount)
    {
        $this->data['OwnerAccount'] = $ownerAccount;
        $this->options['query']['OwnerAccount'] = $ownerAccount;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function withOwnerId($ownerId)
    {
        $this->data['OwnerId'] = $ownerId;
        $this->options['query']['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $tagValueId
     *
     * @return $this
     */
    public function withTagValueId($tagValueId)
    {
        $this->data['TagValueId'] = $tagValueId;
        $this->options['query']['TagValueId'] = $tagValueId;

        return $this;
    }

    /**
     * @param string $tagKeyId
     *
     * @return $this
     */
    public function withTagKeyId($tagKeyId)
    {
        $this->data['TagKeyId'] = $tagKeyId;
        $this->options['query']['TagKeyId'] = $tagKeyId;

        return $this;
    }
}
