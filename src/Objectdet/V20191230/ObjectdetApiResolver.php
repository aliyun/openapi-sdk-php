<?php

namespace AlibabaCloud\Objectdet\V20191230;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method ClassifyVehicleInsurance classifyVehicleInsurance(array $options = [])
 * @method DetectMainBody detectMainBody(array $options = [])
 * @method DetectObject detectObject(array $options = [])
 * @method DetectTransparentImage detectTransparentImage(array $options = [])
 * @method DetectVehicle detectVehicle(array $options = [])
 * @method DetectWhiteBaseImage detectWhiteBaseImage(array $options = [])
 * @method GenerateVehicleRepairPlan generateVehicleRepairPlan(array $options = [])
 * @method GetVehicleRepairPlan getVehicleRepairPlan(array $options = [])
 * @method RecognizeVehicleDamage recognizeVehicleDamage(array $options = [])
 * @method RecognizeVehicleDashboard recognizeVehicleDashboard(array $options = [])
 * @method RecognizeVehicleParts recognizeVehicleParts(array $options = [])
 */
class ObjectdetApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'objectdet';

    /** @var string */
    public $version = '2019-12-30';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'objectdet';
}

/**
 * @method string getImageURL()
 */
class ClassifyVehicleInsurance extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageURL($value)
    {
        $this->data['ImageURL'] = $value;
        $this->options['form_params']['ImageURL'] = $value;

        return $this;
    }
}

/**
 * @method string getImageURL()
 * @method $this withImageURL($value)
 */
class DetectMainBody extends Rpc
{
}

/**
 * @method string getImageURL()
 */
class DetectObject extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageURL($value)
    {
        $this->data['ImageURL'] = $value;
        $this->options['form_params']['ImageURL'] = $value;

        return $this;
    }
}

/**
 * @method string getImageURL()
 */
class DetectTransparentImage extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageURL($value)
    {
        $this->data['ImageURL'] = $value;
        $this->options['form_params']['ImageURL'] = $value;

        return $this;
    }
}

/**
 * @method string getImageType()
 * @method string getImageURL()
 */
class DetectVehicle extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageType($value)
    {
        $this->data['ImageType'] = $value;
        $this->options['form_params']['ImageType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageURL($value)
    {
        $this->data['ImageURL'] = $value;
        $this->options['form_params']['ImageURL'] = $value;

        return $this;
    }
}

/**
 * @method string getImageURL()
 */
class DetectWhiteBaseImage extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageURL($value)
    {
        $this->data['ImageURL'] = $value;
        $this->options['form_params']['ImageURL'] = $value;

        return $this;
    }
}

/**
 * @method array getDamageImageList()
 */
class GenerateVehicleRepairPlan extends Rpc
{

    /**
     * @param array $damageImageList
     *
     * @return $this
     */
	public function withDamageImageList(array $damageImageList)
	{
	    $this->data['DamageImageList'] = $damageImageList;
		foreach ($damageImageList as $depth1 => $depth1Value) {
			if(isset($depth1Value['ImageUrl'])){
				$this->options['form_params']['DamageImageList.' . ($depth1 + 1) . '.ImageUrl'] = $depth1Value['ImageUrl'];
			}
			if(isset($depth1Value['CreateTimeStamp'])){
				$this->options['form_params']['DamageImageList.' . ($depth1 + 1) . '.CreateTimeStamp'] = $depth1Value['CreateTimeStamp'];
			}
		}

		return $this;
    }
}

/**
 * @method string getVinCodeImage()
 * @method string getCarNumberImage()
 * @method string getTaskId()
 */
class GetVehicleRepairPlan extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVinCodeImage($value)
    {
        $this->data['VinCodeImage'] = $value;
        $this->options['form_params']['VinCodeImage'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCarNumberImage($value)
    {
        $this->data['CarNumberImage'] = $value;
        $this->options['form_params']['CarNumberImage'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTaskId($value)
    {
        $this->data['TaskId'] = $value;
        $this->options['form_params']['TaskId'] = $value;

        return $this;
    }
}

/**
 * @method string getImageURL()
 */
class RecognizeVehicleDamage extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageURL($value)
    {
        $this->data['ImageURL'] = $value;
        $this->options['form_params']['ImageURL'] = $value;

        return $this;
    }
}

/**
 * @method string getImageURL()
 */
class RecognizeVehicleDashboard extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageURL($value)
    {
        $this->data['ImageURL'] = $value;
        $this->options['form_params']['ImageURL'] = $value;

        return $this;
    }
}

/**
 * @method string getImageURL()
 */
class RecognizeVehicleParts extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageURL($value)
    {
        $this->data['ImageURL'] = $value;
        $this->options['form_params']['ImageURL'] = $value;

        return $this;
    }
}
