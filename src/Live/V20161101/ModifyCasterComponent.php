<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Rpc;

/**
 * Api ModifyCasterComponent
 *
 * @method string getComponentId()
 * @method string getComponentType()
 * @method string getImageLayerContent()
 * @method string getCasterId()
 * @method string getEffect()
 * @method string getComponentLayer()
 * @method string getCaptionLayerContent()
 * @method string getComponentName()
 * @method string getOwnerId()
 * @method string getTextLayerContent()
 */
class ModifyCasterComponent extends Rpc
{
    public $product = 'live';

    public $version = '2016-11-01';

    public $method = 'POST';

    public $serviceCode = 'live';

    /**
     * @param string $componentId
     *
     * @return $this
     */
    public function withComponentId($componentId)
    {
        $this->data['ComponentId'] = $componentId;
        $this->options['query']['ComponentId'] = $componentId;

        return $this;
    }

    /**
     * @param string $componentType
     *
     * @return $this
     */
    public function withComponentType($componentType)
    {
        $this->data['ComponentType'] = $componentType;
        $this->options['query']['ComponentType'] = $componentType;

        return $this;
    }

    /**
     * @param string $imageLayerContent
     *
     * @return $this
     */
    public function withImageLayerContent($imageLayerContent)
    {
        $this->data['ImageLayerContent'] = $imageLayerContent;
        $this->options['query']['ImageLayerContent'] = $imageLayerContent;

        return $this;
    }

    /**
     * @param string $casterId
     *
     * @return $this
     */
    public function withCasterId($casterId)
    {
        $this->data['CasterId'] = $casterId;
        $this->options['query']['CasterId'] = $casterId;

        return $this;
    }

    /**
     * @param string $effect
     *
     * @return $this
     */
    public function withEffect($effect)
    {
        $this->data['Effect'] = $effect;
        $this->options['query']['Effect'] = $effect;

        return $this;
    }

    /**
     * @param string $componentLayer
     *
     * @return $this
     */
    public function withComponentLayer($componentLayer)
    {
        $this->data['ComponentLayer'] = $componentLayer;
        $this->options['query']['ComponentLayer'] = $componentLayer;

        return $this;
    }

    /**
     * @param string $captionLayerContent
     *
     * @return $this
     */
    public function withCaptionLayerContent($captionLayerContent)
    {
        $this->data['CaptionLayerContent'] = $captionLayerContent;
        $this->options['query']['CaptionLayerContent'] = $captionLayerContent;

        return $this;
    }

    /**
     * @param string $componentName
     *
     * @return $this
     */
    public function withComponentName($componentName)
    {
        $this->data['ComponentName'] = $componentName;
        $this->options['query']['ComponentName'] = $componentName;

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
     * @param string $textLayerContent
     *
     * @return $this
     */
    public function withTextLayerContent($textLayerContent)
    {
        $this->data['TextLayerContent'] = $textLayerContent;
        $this->options['query']['TextLayerContent'] = $textLayerContent;

        return $this;
    }
}
