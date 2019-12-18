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
 * @method array getScene()
 * @method array getTask()
 */
class ScanImage extends Rpc
{

    /**
     * @param array $scene
     *
     * @return $this
     */
	public function withScene(array $scene)
	{
	    $this->data['Scene'] = $scene;
		foreach ($scene as $i => $iValue) {
			$this->options['form_params']['Scene.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $task
     *
     * @return $this
     */
	public function withTask(array $task)
	{
	    $this->data['Task'] = $task;
		foreach ($task as $depth1 => $depth1Value) {
			$this->options['form_params']['Task.' . ($depth1 + 1) . '.DataId'] = $depth1Value['DataId'];
			$this->options['form_params']['Task.' . ($depth1 + 1) . '.ImageURL'] = $depth1Value['ImageURL'];
			$this->options['form_params']['Task.' . ($depth1 + 1) . '.MaxFrames'] = $depth1Value['MaxFrames'];
			$this->options['form_params']['Task.' . ($depth1 + 1) . '.Interval'] = $depth1Value['Interval'];
			$this->options['form_params']['Task.' . ($depth1 + 1) . '.ImageTimeMillisecond'] = $depth1Value['ImageTimeMillisecond'];
		}

		return $this;
    }
}
