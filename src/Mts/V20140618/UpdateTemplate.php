<?php

namespace AlibabaCloud\Mts\V20140618;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of UpdateTemplate
 *
 * @method string getContainer()
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getMuxConfig()
 * @method string getVideo()
 * @method string getOwnerId()
 * @method string getTemplateId()
 * @method string getName()
 * @method string getTransConfig()
 * @method string getAudio()
 */
class UpdateTemplate extends RpcRequest
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
    public $action = 'UpdateTemplate';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'mts';

    /**
     * @deprecated deprecated since version 2.0, Use withContainer() instead.
     *
     * @param string $container
     *
     * @return $this
     */
    public function setContainer($container)
    {
        return $this->withContainer($container);
    }

    /**
     * @param string $container
     *
     * @return $this
     */
    public function withContainer($container)
    {
        $this->data['Container'] = $container;
        $this->options['query']['Container'] = $container;

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
     * @deprecated deprecated since version 2.0, Use withMuxConfig() instead.
     *
     * @param string $muxConfig
     *
     * @return $this
     */
    public function setMuxConfig($muxConfig)
    {
        return $this->withMuxConfig($muxConfig);
    }

    /**
     * @param string $muxConfig
     *
     * @return $this
     */
    public function withMuxConfig($muxConfig)
    {
        $this->data['MuxConfig'] = $muxConfig;
        $this->options['query']['MuxConfig'] = $muxConfig;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withVideo() instead.
     *
     * @param string $video
     *
     * @return $this
     */
    public function setVideo($video)
    {
        return $this->withVideo($video);
    }

    /**
     * @param string $video
     *
     * @return $this
     */
    public function withVideo($video)
    {
        $this->data['Video'] = $video;
        $this->options['query']['Video'] = $video;

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
     * @deprecated deprecated since version 2.0, Use withTemplateId() instead.
     *
     * @param string $templateId
     *
     * @return $this
     */
    public function setTemplateId($templateId)
    {
        return $this->withTemplateId($templateId);
    }

    /**
     * @param string $templateId
     *
     * @return $this
     */
    public function withTemplateId($templateId)
    {
        $this->data['TemplateId'] = $templateId;
        $this->options['query']['TemplateId'] = $templateId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withName() instead.
     *
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        return $this->withName($name);
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
     * @deprecated deprecated since version 2.0, Use withTransConfig() instead.
     *
     * @param string $transConfig
     *
     * @return $this
     */
    public function setTransConfig($transConfig)
    {
        return $this->withTransConfig($transConfig);
    }

    /**
     * @param string $transConfig
     *
     * @return $this
     */
    public function withTransConfig($transConfig)
    {
        $this->data['TransConfig'] = $transConfig;
        $this->options['query']['TransConfig'] = $transConfig;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withAudio() instead.
     *
     * @param string $audio
     *
     * @return $this
     */
    public function setAudio($audio)
    {
        return $this->withAudio($audio);
    }

    /**
     * @param string $audio
     *
     * @return $this
     */
    public function withAudio($audio)
    {
        $this->data['Audio'] = $audio;
        $this->options['query']['Audio'] = $audio;

        return $this;
    }
}
