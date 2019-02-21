<?php

namespace AlibabaCloud\Vod\V20170321;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DeleteTranscodeTemplateGroup
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerId()
 * @method string getTranscodeTemplateGroupId()
 * @method string getTranscodeTemplateIdList()
 * @method string getForceDelGroup()
 */
class DeleteTranscodeTemplateGroup extends RpcRequest
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
    public $action = 'DeleteTranscodeTemplateGroup';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'vod';

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
     * @param string $transcodeTemplateGroupId
     *
     * @return $this
     */
    public function withTranscodeTemplateGroupId($transcodeTemplateGroupId)
    {
        $this->data['TranscodeTemplateGroupId'] = $transcodeTemplateGroupId;
        $this->options['query']['TranscodeTemplateGroupId'] = $transcodeTemplateGroupId;

        return $this;
    }

    /**
     * @param string $transcodeTemplateIdList
     *
     * @return $this
     */
    public function withTranscodeTemplateIdList($transcodeTemplateIdList)
    {
        $this->data['TranscodeTemplateIdList'] = $transcodeTemplateIdList;
        $this->options['query']['TranscodeTemplateIdList'] = $transcodeTemplateIdList;

        return $this;
    }

    /**
     * @param string $forceDelGroup
     *
     * @return $this
     */
    public function withForceDelGroup($forceDelGroup)
    {
        $this->data['ForceDelGroup'] = $forceDelGroup;
        $this->options['query']['ForceDelGroup'] = $forceDelGroup;

        return $this;
    }
}
