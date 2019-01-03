<?php

namespace AlibabaCloud\Mts\V20140618;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of PlayInfo
 *
 * @method string getPlayDomain()
 * @method string getResourceOwnerId()
 * @method string getFormats()
 * @method string getResourceOwnerAccount()
 * @method string getIncludeSnapshotList()
 * @method string getOwnerAccount()
 * @method string getHlsUriToken()
 * @method string getTerminal()
 * @method string getOwnerId()
 * @method string getMediaId()
 * @method string getRand()
 * @method string getAuthTimeout()
 * @method string getAuthInfo()
 */
class PlayInfo extends RpcRequest
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
    public $action = 'PlayInfo';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'mts';

    /**
     * @deprecated deprecated since version 2.0, Use withPlayDomain() instead.
     *
     * @param string $playDomain
     *
     * @return $this
     */
    public function setPlayDomain($playDomain)
    {
        return $this->withPlayDomain($playDomain);
    }

    /**
     * @param string $playDomain
     *
     * @return $this
     */
    public function withPlayDomain($playDomain)
    {
        $this->data['PlayDomain'] = $playDomain;
        $this->options['query']['PlayDomain'] = $playDomain;

        return $this;
    }

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
     * @deprecated deprecated since version 2.0, Use withFormats() instead.
     *
     * @param string $formats
     *
     * @return $this
     */
    public function setFormats($formats)
    {
        return $this->withFormats($formats);
    }

    /**
     * @param string $formats
     *
     * @return $this
     */
    public function withFormats($formats)
    {
        $this->data['Formats'] = $formats;
        $this->options['query']['Formats'] = $formats;

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
     * @deprecated deprecated since version 2.0, Use withIncludeSnapshotList() instead.
     *
     * @param string $includeSnapshotList
     *
     * @return $this
     */
    public function setIncludeSnapshotList($includeSnapshotList)
    {
        return $this->withIncludeSnapshotList($includeSnapshotList);
    }

    /**
     * @param string $includeSnapshotList
     *
     * @return $this
     */
    public function withIncludeSnapshotList($includeSnapshotList)
    {
        $this->data['IncludeSnapshotList'] = $includeSnapshotList;
        $this->options['query']['IncludeSnapshotList'] = $includeSnapshotList;

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
     * @deprecated deprecated since version 2.0, Use withHlsUriToken() instead.
     *
     * @param string $hlsUriToken
     *
     * @return $this
     */
    public function setHlsUriToken($hlsUriToken)
    {
        return $this->withHlsUriToken($hlsUriToken);
    }

    /**
     * @param string $hlsUriToken
     *
     * @return $this
     */
    public function withHlsUriToken($hlsUriToken)
    {
        $this->data['HlsUriToken'] = $hlsUriToken;
        $this->options['query']['HlsUriToken'] = $hlsUriToken;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTerminal() instead.
     *
     * @param string $terminal
     *
     * @return $this
     */
    public function setTerminal($terminal)
    {
        return $this->withTerminal($terminal);
    }

    /**
     * @param string $terminal
     *
     * @return $this
     */
    public function withTerminal($terminal)
    {
        $this->data['Terminal'] = $terminal;
        $this->options['query']['Terminal'] = $terminal;

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
     * @deprecated deprecated since version 2.0, Use withRand() instead.
     *
     * @param string $rand
     *
     * @return $this
     */
    public function setRand($rand)
    {
        return $this->withRand($rand);
    }

    /**
     * @param string $rand
     *
     * @return $this
     */
    public function withRand($rand)
    {
        $this->data['Rand'] = $rand;
        $this->options['query']['Rand'] = $rand;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withAuthTimeout() instead.
     *
     * @param string $authTimeout
     *
     * @return $this
     */
    public function setAuthTimeout($authTimeout)
    {
        return $this->withAuthTimeout($authTimeout);
    }

    /**
     * @param string $authTimeout
     *
     * @return $this
     */
    public function withAuthTimeout($authTimeout)
    {
        $this->data['AuthTimeout'] = $authTimeout;
        $this->options['query']['AuthTimeout'] = $authTimeout;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withAuthInfo() instead.
     *
     * @param string $authInfo
     *
     * @return $this
     */
    public function setAuthInfo($authInfo)
    {
        return $this->withAuthInfo($authInfo);
    }

    /**
     * @param string $authInfo
     *
     * @return $this
     */
    public function withAuthInfo($authInfo)
    {
        $this->data['AuthInfo'] = $authInfo;
        $this->options['query']['AuthInfo'] = $authInfo;

        return $this;
    }
}
