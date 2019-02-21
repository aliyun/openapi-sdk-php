<?php

namespace AlibabaCloud\Vod\V20170321;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of AddTranscodeTemplateGroup
 *
 * @method string getTranscodeTemplateList()
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getName()
 * @method string getOwnerId()
 * @method string getTranscodeTemplateGroupId()
 */
class AddTranscodeTemplateGroup extends RpcRequest
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
    public $action = 'AddTranscodeTemplateGroup';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'vod';

    /**
     * @param string $transcodeTemplateList
     *
     * @return $this
     */
    public function withTranscodeTemplateList($transcodeTemplateList)
    {
        $this->data['TranscodeTemplateList'] = $transcodeTemplateList;
        $this->options['query']['TranscodeTemplateList'] = $transcodeTemplateList;

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
     * @param string $name
     *
     * @return $this
     */
    public function withName($name)
    {
        $this->data['Name'] = $name;
        $this->options['query']['Name'] = $name;

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
}
