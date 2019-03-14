<?php

namespace AlibabaCloud\Vpc\V20160428;

use AlibabaCloud\Rpc;

/**
 * Api AddIPv6TranslatorAclListEntry
 *
 * @method string getAclId()
 * @method string getResourceOwnerId()
 * @method string getAclEntryIp()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getAclEntryComment()
 * @method string getOwnerId()
 */
class AddIPv6TranslatorAclListEntry extends Rpc
{
    public $product = 'Vpc';

    public $version = '2016-04-28';

    public $method = 'POST';

    public $serviceCode = 'vpc';

    /**
     * @param string $aclId
     *
     * @return $this
     */
    public function withAclId($aclId)
    {
        $this->data['AclId'] = $aclId;
        $this->options['query']['AclId'] = $aclId;

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
     * @param string $aclEntryIp
     *
     * @return $this
     */
    public function withAclEntryIp($aclEntryIp)
    {
        $this->data['AclEntryIp'] = $aclEntryIp;
        $this->options['query']['AclEntryIp'] = $aclEntryIp;

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
     * @param string $aclEntryComment
     *
     * @return $this
     */
    public function withAclEntryComment($aclEntryComment)
    {
        $this->data['AclEntryComment'] = $aclEntryComment;
        $this->options['query']['AclEntryComment'] = $aclEntryComment;

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
}
