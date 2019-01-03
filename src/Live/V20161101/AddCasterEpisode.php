<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of AddCasterEpisode
 *
 * @method string getResourceId()
 * @method array getComponentId()
 * @method string getSwitchType()
 * @method string getCasterId()
 * @method string getEpisodeType()
 * @method string getEpisodeName()
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getOwnerId()
 */
class AddCasterEpisode extends RpcRequest
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
    public $action = 'AddCasterEpisode';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'live';

    /**
     * @deprecated deprecated since version 2.0, Use withResourceId() instead.
     *
     * @param string $resourceId
     *
     * @return $this
     */
    public function setResourceId($resourceId)
    {
        return $this->withResourceId($resourceId);
    }

    /**
     * @param string $resourceId
     *
     * @return $this
     */
    public function withResourceId($resourceId)
    {
        $this->data['ResourceId'] = $resourceId;
        $this->options['query']['ResourceId'] = $resourceId;

        return $this;
    }

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
     * @deprecated deprecated since version 2.0, Use withSwitchType() instead.
     *
     * @param string $switchType
     *
     * @return $this
     */
    public function setSwitchType($switchType)
    {
        return $this->withSwitchType($switchType);
    }

    /**
     * @param string $switchType
     *
     * @return $this
     */
    public function withSwitchType($switchType)
    {
        $this->data['SwitchType'] = $switchType;
        $this->options['query']['SwitchType'] = $switchType;

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
     * @deprecated deprecated since version 2.0, Use withEpisodeType() instead.
     *
     * @param string $episodeType
     *
     * @return $this
     */
    public function setEpisodeType($episodeType)
    {
        return $this->withEpisodeType($episodeType);
    }

    /**
     * @param string $episodeType
     *
     * @return $this
     */
    public function withEpisodeType($episodeType)
    {
        $this->data['EpisodeType'] = $episodeType;
        $this->options['query']['EpisodeType'] = $episodeType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withEpisodeName() instead.
     *
     * @param string $episodeName
     *
     * @return $this
     */
    public function setEpisodeName($episodeName)
    {
        return $this->withEpisodeName($episodeName);
    }

    /**
     * @param string $episodeName
     *
     * @return $this
     */
    public function withEpisodeName($episodeName)
    {
        $this->data['EpisodeName'] = $episodeName;
        $this->options['query']['EpisodeName'] = $episodeName;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withEndTime() instead.
     *
     * @param string $endTime
     *
     * @return $this
     */
    public function setEndTime($endTime)
    {
        return $this->withEndTime($endTime);
    }

    /**
     * @param string $endTime
     *
     * @return $this
     */
    public function withEndTime($endTime)
    {
        $this->data['EndTime'] = $endTime;
        $this->options['query']['EndTime'] = $endTime;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withStartTime() instead.
     *
     * @param string $startTime
     *
     * @return $this
     */
    public function setStartTime($startTime)
    {
        return $this->withStartTime($startTime);
    }

    /**
     * @param string $startTime
     *
     * @return $this
     */
    public function withStartTime($startTime)
    {
        $this->data['StartTime'] = $startTime;
        $this->options['query']['StartTime'] = $startTime;

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
