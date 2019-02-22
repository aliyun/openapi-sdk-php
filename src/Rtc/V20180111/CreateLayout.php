<?php

namespace AlibabaCloud\Rtc\V20180111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateLayout
 *
 * @method string getCropMode()
 * @method array getPanes()
 * @method string getOwnerId()
 * @method string getAppId()
 * @method string getAudioMixCount()
 */
class CreateLayout extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'rtc';

    /**
     * @var string
     */
    public $version = '2018-01-11';

    /**
     * @var string
     */
    public $action = 'CreateLayout';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'rtc';

    /**
     * @param string $cropMode
     *
     * @return $this
     */
    public function withCropMode($cropMode)
    {
        $this->data['CropMode'] = $cropMode;
        $this->options['query']['CropMode'] = $cropMode;

        return $this;
    }

    /**
     * @param array $panes
     *
     * @return $this
     */
    public function withPanes(array $panes)
    {
        $this->data['Panes'] = $panes;
        foreach ($panes as $i => $iValue) {
            $this->options['query']['Panes.' . ($i + 1) . '.PaneId'] = $panes[$i]['PaneId'];
            $this->options['query']['Panes.' . ($i + 1) . '.MajorPane'] = $panes[$i]['MajorPane'];
            $this->options['query']['Panes.' . ($i + 1) . '.X'] = $panes[$i]['X'];
            $this->options['query']['Panes.' . ($i + 1) . '.Y'] = $panes[$i]['Y'];
            $this->options['query']['Panes.' . ($i + 1) . '.Width'] = $panes[$i]['Width'];
            $this->options['query']['Panes.' . ($i + 1) . '.Height'] = $panes[$i]['Height'];
            $this->options['query']['Panes.' . ($i + 1) . '.ZOrder'] = $panes[$i]['ZOrder'];
        }

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
     * @param string $appId
     *
     * @return $this
     */
    public function withAppId($appId)
    {
        $this->data['AppId'] = $appId;
        $this->options['query']['AppId'] = $appId;

        return $this;
    }

    /**
     * @param string $audioMixCount
     *
     * @return $this
     */
    public function withAudioMixCount($audioMixCount)
    {
        $this->data['AudioMixCount'] = $audioMixCount;
        $this->options['query']['AudioMixCount'] = $audioMixCount;

        return $this;
    }
}
