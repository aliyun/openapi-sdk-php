<?php

namespace AlibabaCloud\Objectdet\V20191230;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method ClassifyVehicleInsurance classifyVehicleInsurance(array $options = [])
 * @method DetectIPCObject detectIPCObject(array $options = [])
 * @method DetectKitchenAnimals detectKitchenAnimals(array $options = [])
 * @method DetectMainBody detectMainBody(array $options = [])
 * @method DetectObject detectObject(array $options = [])
 * @method DetectTransparentImage detectTransparentImage(array $options = [])
 * @method DetectVehicle detectVehicle(array $options = [])
 * @method DetectVehicleICongestion detectVehicleICongestion(array $options = [])
 * @method DetectVehicleIllegalParking detectVehicleIllegalParking(array $options = [])
 * @method DetectVideoFrame detectVideoFrame(array $options = [])
 * @method DetectVideoIPCObject detectVideoIPCObject(array $options = [])
 * @method DetectWhiteBaseImage detectWhiteBaseImage(array $options = [])
 * @method DetectWorkwear detectWorkwear(array $options = [])
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
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
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
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method string getImageURLB()
 * @method string getImageURLA()
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
 */
class DetectKitchenAnimals extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageURLB($value)
    {
        $this->data['ImageURLB'] = $value;
        $this->options['form_params']['ImageURLB'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageURLA($value)
    {
        $this->data['ImageURLA'] = $value;
        $this->options['form_params']['ImageURLA'] = $value;

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
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method string getRoadRegions()
 * @method string getOriginRequestId()
 * @method $this withOriginRequestId($value)
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getPreRegionIntersectFeatures()
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
 * @method string getStreamArn()
 * @method $this withStreamArn($value)
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
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method string getRoadRegions()
 * @method string getOriginRequestId()
 * @method $this withOriginRequestId($value)
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
 * @method string getStreamArn()
 * @method $this withStreamArn($value)
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
 * @method string getFeatures()
 * @method string getHeight()
 * @method string getCreateTime()
 * @method string getFeatureConfig()
 * @method string getOwnerId()
 * @method string getStreamArn()
 * @method string getImageURL()
 * @method string getWidth()
 */
class DetectVideoFrame extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFeatures($value)
    {
        $this->data['Features'] = $value;
        $this->options['form_params']['Features'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHeight($value)
    {
        $this->data['Height'] = $value;
        $this->options['form_params']['Height'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCreateTime($value)
    {
        $this->data['CreateTime'] = $value;
        $this->options['form_params']['CreateTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFeatureConfig($value)
    {
        $this->data['FeatureConfig'] = $value;
        $this->options['form_params']['FeatureConfig'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOwnerId($value)
    {
        $this->data['OwnerId'] = $value;
        $this->options['form_params']['OwnerId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStreamArn($value)
    {
        $this->data['StreamArn'] = $value;
        $this->options['form_params']['StreamArn'] = $value;

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWidth($value)
    {
        $this->data['Width'] = $value;
        $this->options['form_params']['Width'] = $value;

        return $this;
    }
}

/**
 * @method string getStartTimestamp()
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getCallbackOnlyHasObject()
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
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
    public function withStartTimestamp($value)
    {
        $this->data['StartTimestamp'] = $value;
        $this->options['form_params']['StartTimestamp'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCallbackOnlyHasObject($value)
    {
        $this->data['CallbackOnlyHasObject'] = $value;
        $this->options['form_params']['CallbackOnlyHasObject'] = $value;

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
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
 * @method string getClothes()
 * @method array getLabels()
 * @method string getImageUrl()
 */
class DetectWorkwear extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClothes($value)
    {
        $this->data['Clothes'] = $value;
        $this->options['form_params']['Clothes'] = $value;

        return $this;
    }

    /**
     * @param array $labels
     *
     * @return $this
     */
	public function withLabels(array $labels)
	{
	    $this->data['Labels'] = $labels;
		foreach ($labels as $i => $iValue) {
			$this->options['form_params']['Labels.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageUrl($value)
    {
        $this->data['ImageUrl'] = $value;
        $this->options['form_params']['ImageUrl'] = $value;

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
