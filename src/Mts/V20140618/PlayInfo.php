<?php

namespace AlibabaCloud\Mts\V20140618;

use AlibabaCloud\Rpc;

/**
 * Api PlayInfo
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
class PlayInfo extends Rpc
{
    public $product = 'Mts';

    public $version = '2014-06-18';

    public $method = 'POST';

    public $serviceCode = 'mts';

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
