<?php

namespace AlibabaCloud\Objectdet\V20191230;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method ClassifyVehicleInsurance classifyVehicleInsurance(array $options = [])
 * @method DetectIPCObject detectIPCObject(array $options = [])
 * @method DetectMainBody detectMainBody(array $options = [])
 * @method DetectObject detectObject(array $options = [])
 * @method DetectTransparentImage detectTransparentImage(array $options = [])
 * @method DetectVehicle detectVehicle(array $options = [])
 * @method DetectVehicleICongestion detectVehicleICongestion(array $options = [])
 * @method DetectVehicleIllegalParking detectVehicleIllegalParking(array $options = [])
 * @method DetectVideoIPCObject detectVideoIPCObject(array $options = [])
 * @method DetectWhiteBaseImage detectWhiteBaseImage(array $options = [])
 * @method GenerateVehicleRepairPlan generateVehicleRepairPlan(array $options = [])
 * @method GetAsyncJobResult getAsyncJobResult(array $options = [])
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
 */
class DetectIPCObject extends Rpc
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
 * @method string getRoadRegions()
 * @method string getPreRegionIntersectFeatures()
 * @method string getImageURL()
 */
class DetectVehicleICongestion extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRoadRegions($value)
    {
        $this->data['RoadRegions'] = $value;
        $this->options['form_params']['RoadRegions'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPreRegionIntersectFeatures($value)
    {
        $this->data['PreRegionIntersectFeatures'] = $value;
        $this->options['form_params']['PreRegionIntersectFeatures'] = $value;

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
 * @method string getRoadRegions()
 * @method string getImageURL()
 */
class DetectVehicleIllegalParking extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRoadRegions($value)
    {
        $this->data['RoadRegions'] = $value;
        $this->options['form_params']['RoadRegions'] = $value;

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
 * @method string getAsync()
 * @method string getVideoURL()
 */
class DetectVideoIPCObject extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAsync($value)
    {
        $this->data['Async'] = $value;
        $this->options['form_params']['Async'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVideoURL($value)
    {
        $this->data['VideoURL'] = $value;
        $this->options['form_params']['VideoURL'] = $value;

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
 * @method string getJobId()
 * @method string getAsync()
 */
class GetAsyncJobResult extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobId($value)
    {
        $this->data['JobId'] = $value;
        $this->options['form_params']['JobId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAsync($value)
    {
        $this->data['Async'] = $value;
        $this->options['form_params']['Async'] = $value;

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
