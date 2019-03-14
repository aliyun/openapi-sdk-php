<?php

namespace AlibabaCloud\Mts\V20140618;

use AlibabaCloud\Rpc;

/**
 * Api UpdateTemplate
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
class UpdateTemplate extends Rpc
{
    public $product = 'Mts';

    public $version = '2014-06-18';

    public $method = 'POST';

    public $serviceCode = 'mts';

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
