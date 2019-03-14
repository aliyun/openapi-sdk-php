<?php

namespace AlibabaCloud\Rds\V20140815;

use AlibabaCloud\Rpc;

/**
 * Api AddTagsToResource
 *
 * @method string getTag4value()
 * @method string getResourceOwnerId()
 * @method string getTag2key()
 * @method string getTag5key()
 * @method string getResourceOwnerAccount()
 * @method string getClientToken()
 * @method string getOwnerAccount()
 * @method string getTag3key()
 * @method string getOwnerId()
 * @method string getTag5value()
 * @method string getTags()
 * @method string getTag1key()
 * @method string getTag1value()
 * @method string getTag2value()
 * @method string getTag4key()
 * @method string getDBInstanceId()
 * @method string getTag3value()
 * @method string getProxyId()
 */
class AddTagsToResource extends Rpc
{
    public $product = 'Rds';

    public $version = '2014-08-15';

    public $method = 'POST';

    public $serviceCode = 'rds';

    /**
     * @param string $tag4value
     *
     * @return $this
     */
    public function withTag4value($tag4value)
    {
        $this->data['Tag4value'] = $tag4value;
        $this->options['query']['Tag.4.value'] = $tag4value;

        return $this;
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
     * @param string $tag2key
     *
     * @return $this
     */
    public function withTag2key($tag2key)
    {
        $this->data['Tag2key'] = $tag2key;
        $this->options['query']['Tag.2.key'] = $tag2key;

        return $this;
    }

    /**
     * @param string $tag5key
     *
     * @return $this
     */
    public function withTag5key($tag5key)
    {
        $this->data['Tag5key'] = $tag5key;
        $this->options['query']['Tag.5.key'] = $tag5key;

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
     * @param string $clientToken
     *
     * @return $this
     */
    public function withClientToken($clientToken)
    {
        $this->data['ClientToken'] = $clientToken;
        $this->options['query']['ClientToken'] = $clientToken;

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
     * @param string $tag3key
     *
     * @return $this
     */
    public function withTag3key($tag3key)
    {
        $this->data['Tag3key'] = $tag3key;
        $this->options['query']['Tag.3.key'] = $tag3key;

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
     * @param string $tag5value
     *
     * @return $this
     */
    public function withTag5value($tag5value)
    {
        $this->data['Tag5value'] = $tag5value;
        $this->options['query']['Tag.5.value'] = $tag5value;

        return $this;
    }

    /**
     * @param string $tags
     *
     * @return $this
     */
    public function withTags($tags)
    {
        $this->data['Tags'] = $tags;
        $this->options['query']['Tags'] = $tags;

        return $this;
    }

    /**
     * @param string $tag1key
     *
     * @return $this
     */
    public function withTag1key($tag1key)
    {
        $this->data['Tag1key'] = $tag1key;
        $this->options['query']['Tag.1.key'] = $tag1key;

        return $this;
    }

    /**
     * @param string $tag1value
     *
     * @return $this
     */
    public function withTag1value($tag1value)
    {
        $this->data['Tag1value'] = $tag1value;
        $this->options['query']['Tag.1.value'] = $tag1value;

        return $this;
    }

    /**
     * @param string $tag2value
     *
     * @return $this
     */
    public function withTag2value($tag2value)
    {
        $this->data['Tag2value'] = $tag2value;
        $this->options['query']['Tag.2.value'] = $tag2value;

        return $this;
    }

    /**
     * @param string $tag4key
     *
     * @return $this
     */
    public function withTag4key($tag4key)
    {
        $this->data['Tag4key'] = $tag4key;
        $this->options['query']['Tag.4.key'] = $tag4key;

        return $this;
    }

    /**
     * @param string $dBInstanceId
     *
     * @return $this
     */
    public function withDBInstanceId($dBInstanceId)
    {
        $this->data['DBInstanceId'] = $dBInstanceId;
        $this->options['query']['DBInstanceId'] = $dBInstanceId;

        return $this;
    }

    /**
     * @param string $tag3value
     *
     * @return $this
     */
    public function withTag3value($tag3value)
    {
        $this->data['Tag3value'] = $tag3value;
        $this->options['query']['Tag.3.value'] = $tag3value;

        return $this;
    }

    /**
     * @param string $proxyId
     *
     * @return $this
     */
    public function withProxyId($proxyId)
    {
        $this->data['ProxyId'] = $proxyId;
        $this->options['query']['proxyId'] = $proxyId;

        return $this;
    }
}
