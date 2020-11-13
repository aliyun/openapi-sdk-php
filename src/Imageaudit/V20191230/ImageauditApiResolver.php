<?php

namespace AlibabaCloud\Imageaudit\V20191230;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method ScanImage scanImage(array $options = [])
 * @method ScanText scanText(array $options = [])
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
			if(isset($depth1Value['DataId'])){
				$this->options['form_params']['Task.' . ($depth1 + 1) . '.DataId'] = $depth1Value['DataId'];
			}
			if(isset($depth1Value['ImageURL'])){
				$this->options['form_params']['Task.' . ($depth1 + 1) . '.ImageURL'] = $depth1Value['ImageURL'];
			}
			if(isset($depth1Value['MaxFrames'])){
				$this->options['form_params']['Task.' . ($depth1 + 1) . '.MaxFrames'] = $depth1Value['MaxFrames'];
			}
			if(isset($depth1Value['Interval'])){
				$this->options['form_params']['Task.' . ($depth1 + 1) . '.Interval'] = $depth1Value['Interval'];
			}
			if(isset($depth1Value['ImageTimeMillisecond'])){
				$this->options['form_params']['Task.' . ($depth1 + 1) . '.ImageTimeMillisecond'] = $depth1Value['ImageTimeMillisecond'];
			}
		}

		return $this;
    }
}

/**
 * @method array getLabels()
 * @method array getTasks()
 */
class ScanText extends Rpc
{

    /**
     * @param array $labels
     *
     * @return $this
     */
	public function withLabels(array $labels)
	{
	    $this->data['Labels'] = $labels;
		foreach ($labels as $depth1 => $depth1Value) {
			if(isset($depth1Value['Label'])){
				$this->options['form_params']['Labels.' . ($depth1 + 1) . '.Label'] = $depth1Value['Label'];
			}
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
			if(isset($depth1Value['Content'])){
				$this->options['form_params']['Tasks.' . ($depth1 + 1) . '.Content'] = $depth1Value['Content'];
			}
		}

		return $this;
    }
}
