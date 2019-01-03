<?php

namespace AlibabaCloud\Mts\V20140618;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ListMedia
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getNextPageToken()
 * @method string getOwnerAccount()
 * @method string getMaximumPageSize()
 * @method string getFrom()
 * @method string getTo()
 * @method string getOwnerId()
 */
class ListMedia extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Mts';

    /**
     * @var string
     */
    public $version = '2014-06-18';

    /**
     * @var string
     */
    public $action = 'ListMedia';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'mts';

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
     * @deprecated deprecated since version 2.0, Use withNextPageToken() instead.
     *
     * @param string $nextPageToken
     *
     * @return $this
     */
    public function setNextPageToken($nextPageToken)
    {
        return $this->withNextPageToken($nextPageToken);
    }

    /**
     * @param string $nextPageToken
     *
     * @return $this
     */
    public function withNextPageToken($nextPageToken)
    {
        $this->data['NextPageToken'] = $nextPageToken;
        $this->options['query']['NextPageToken'] = $nextPageToken;

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
     * @deprecated deprecated since version 2.0, Use withMaximumPageSize() instead.
     *
     * @param string $maximumPageSize
     *
     * @return $this
     */
    public function setMaximumPageSize($maximumPageSize)
    {
        return $this->withMaximumPageSize($maximumPageSize);
    }

    /**
     * @param string $maximumPageSize
     *
     * @return $this
     */
    public function withMaximumPageSize($maximumPageSize)
    {
        $this->data['MaximumPageSize'] = $maximumPageSize;
        $this->options['query']['MaximumPageSize'] = $maximumPageSize;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withFrom() instead.
     *
     * @param string $from
     *
     * @return $this
     */
    public function setFrom($from)
    {
        return $this->withFrom($from);
    }

    /**
     * @param string $from
     *
     * @return $this
     */
    public function withFrom($from)
    {
        $this->data['From'] = $from;
        $this->options['query']['From'] = $from;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTo() instead.
     *
     * @param string $to
     *
     * @return $this
     */
    public function setTo($to)
    {
        return $this->withTo($to);
    }

    /**
     * @param string $to
     *
     * @return $this
     */
    public function withTo($to)
    {
        $this->data['To'] = $to;
        $this->options['query']['To'] = $to;

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
}
