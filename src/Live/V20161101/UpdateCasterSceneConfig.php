<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of UpdateCasterSceneConfig
 *
 * @method array getComponentId()
 * @method string getCasterId()
 * @method string getSceneId()
 * @method string getOwnerId()
 * @method string getLayoutId()
 */
class UpdateCasterSceneConfig extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'live';

    /**
     * @var string
     */
    public $version = '2016-11-01';

    /**
     * @var string
     */
    public $action = 'UpdateCasterSceneConfig';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'live';

    /**
     * @deprecated deprecated since version 2.0, Use getComponentId() instead.
     *
     * @return array
     */
    public function getComponentIds()
    {
        return $this->getComponentId();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withComponentId() instead.
     *
     * @param array $componentIds
     *
     * @return $this
     */
    public function setComponentIds(array $componentIds)
    {
        return $this->withComponentId($componentIds);
    }

    /**
     * @param array $componentId
     *
     * @return $this
     */
    public function withComponentId(array $componentId)
    {
        $this->data['ComponentId'] = $componentId;
        foreach ($componentId as $i => $iValue) {
            $this->options['query']['ComponentId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withCasterId() instead.
     *
     * @param string $casterId
     *
     * @return $this
     */
    public function setCasterId($casterId)
    {
        return $this->withCasterId($casterId);
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
     * @deprecated deprecated since version 2.0, Use withSceneId() instead.
     *
     * @param string $sceneId
     *
     * @return $this
     */
    public function setSceneId($sceneId)
    {
        return $this->withSceneId($sceneId);
    }

    /**
     * @param string $sceneId
     *
     * @return $this
     */
    public function withSceneId($sceneId)
    {
        $this->data['SceneId'] = $sceneId;
        $this->options['query']['SceneId'] = $sceneId;

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
     * @deprecated deprecated since version 2.0, Use withLayoutId() instead.
     *
     * @param string $layoutId
     *
     * @return $this
     */
    public function setLayoutId($layoutId)
    {
        return $this->withLayoutId($layoutId);
    }

    /**
     * @param string $layoutId
     *
     * @return $this
     */
    public function withLayoutId($layoutId)
    {
        $this->data['LayoutId'] = $layoutId;
        $this->options['query']['LayoutId'] = $layoutId;

        return $this;
    }
}
