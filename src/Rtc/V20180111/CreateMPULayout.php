<?php

namespace AlibabaCloud\Rtc\V20180111;

use AlibabaCloud\Rpc;

/**
 * @method string getCropMode()
 * @method $this withCropMode($value)
 * @method array getPanes()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getAudioMixCount()
 * @method $this withAudioMixCount($value)
 */
class CreateMPULayout extends Rpc
{
    public $product = 'rtc';

    public $version = '2018-01-11';

    public $method = 'POST';

    public $serviceCode = 'rtc';

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
}
