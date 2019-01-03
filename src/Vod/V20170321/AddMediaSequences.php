<?php

namespace AlibabaCloud\Vod\V20170321;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of AddMediaSequences
 *
 * @method string getResourceOwnerId()
 * @method string getMediaURL()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getMediaSequences()
 * @method string getOwnerId()
 * @method string getMediaId()
 * @method string getMediaType()
 */
class AddMediaSequences extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'vod';

    /**
     * @var string
     */
    public $version = '2017-03-21';

    /**
     * @var string
     */
    public $action = 'AddMediaSequences';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'vod';

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
     * @deprecated deprecated since version 2.0, Use withMediaURL() instead.
     *
     * @param string $mediaURL
     *
     * @return $this
     */
    public function setMediaURL($mediaURL)
    {
        return $this->withMediaURL($mediaURL);
    }

    /**
     * @param string $mediaURL
     *
     * @return $this
     */
    public function withMediaURL($mediaURL)
    {
        $this->data['MediaURL'] = $mediaURL;
        $this->options['query']['MediaURL'] = $mediaURL;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceOwnerAccount() instead.
     *
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        return $this->withResourceOwnerAccount($resourceOwnerAccount);
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
     * @deprecated deprecated since version 2.0, Use withOwnerAccount() instead.
     *
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function setOwnerAccount($ownerAccount)
    {
        return $this->withOwnerAccount($ownerAccount);
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
     * @deprecated deprecated since version 2.0, Use withMediaSequences() instead.
     *
     * @param string $mediaSequences
     *
     * @return $this
     */
    public function setMediaSequences($mediaSequences)
    {
        return $this->withMediaSequences($mediaSequences);
    }

    /**
     * @param string $mediaSequences
     *
     * @return $this
     */
    public function withMediaSequences($mediaSequences)
    {
        $this->data['MediaSequences'] = $mediaSequences;
        $this->options['query']['MediaSequences'] = $mediaSequences;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOwnerId() instead.
     *
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        return $this->withOwnerId($ownerId);
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
     * @deprecated deprecated since version 2.0, Use withMediaId() instead.
     *
     * @param string $mediaId
     *
     * @return $this
     */
    public function setMediaId($mediaId)
    {
        return $this->withMediaId($mediaId);
    }

    /**
     * @param string $mediaId
     *
     * @return $this
     */
    public function withMediaId($mediaId)
    {
        $this->data['MediaId'] = $mediaId;
        $this->options['query']['MediaId'] = $mediaId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withMediaType() instead.
     *
     * @param string $mediaType
     *
     * @return $this
     */
    public function setMediaType($mediaType)
    {
        return $this->withMediaType($mediaType);
    }

    /**
     * @param string $mediaType
     *
     * @return $this
     */
    public function withMediaType($mediaType)
    {
        $this->data['MediaType'] = $mediaType;
        $this->options['query']['MediaType'] = $mediaType;

        return $this;
    }
}
