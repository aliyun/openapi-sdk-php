<?php

namespace AlibabaCloud\Imageaudit\V20191230;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method ScanImage scanImage(array $options = [])
 */
class ImageauditApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'imageaudit';

    /** @var string */
    public $version = '2019-12-30';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'imageaudit';
}

/**
 * @method array getScenes()
 * @method array getTasks()
 */
class ScanImage extends Rpc
{

    /**
     * @param array $scenes
     *
     * @return $this
     */
	public function withScenes(array $scenes)
	{
	    $this->data['Scenes'] = $scenes;
		foreach ($scenes as $i => $iValue) {
			$this->options['form_params']['Scenes.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $tasks
     *
     * @return $this
     */
	public function withTasks(array $tasks)
	{
	    $this->data['Tasks'] = $tasks;
		foreach ($tasks as $depth1 => $depth1Value) {
			$this->options['form_params']['Tasks.' . ($depth1 + 1) . '.DataId'] = $depth1Value['DataId'];
			$this->options['form_params']['Tasks.' . ($depth1 + 1) . '.ImageURL'] = $depth1Value['ImageURL'];
			$this->options['form_params']['Tasks.' . ($depth1 + 1) . '.MaxFrames'] = $depth1Value['MaxFrames'];
			$this->options['form_params']['Tasks.' . ($depth1 + 1) . '.Interval'] = $depth1Value['Interval'];
			$this->options['form_params']['Tasks.' . ($depth1 + 1) . '.ImageTimeMillisecond'] = $depth1Value['ImageTimeMillisecond'];
		}

		return $this;
    }
}
