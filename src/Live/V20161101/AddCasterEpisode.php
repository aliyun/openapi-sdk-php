<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Rpc;

/**
 * Api AddCasterEpisode
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
class AddCasterEpisode extends Rpc
{
    public $product = 'live';

    public $version = '2016-11-01';

    public $method = 'POST';

    public $serviceCode = 'live';

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
