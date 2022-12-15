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
 * @method DetectVideoIPCObject detectVideoIPCObject(array $options = [])
 * @method DetectWhiteBaseImage detectWhiteBaseImage(array $options = [])
 * @method DetectWorkwear detectWorkwear(array $options = [])
 * @method GetAsyncJobResult getAsyncJobResult(array $options = [])
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
}

/**
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
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
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
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
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
 * @method string getImageURL()
 * @method $this withImageURL($value)
 */
class DetectMainBody extends Rpc
{
}

/**
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
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
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
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
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getImageType()
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
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
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
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
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
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
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method string getJobId()
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
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
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
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
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
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
 * @method string getFormatResultToJson()
 * @method $this withFormatResultToJson($value)
 * @method string getOssFile()
 * @method $this withOssFile($value)
 * @method string getRequestProxyBy()
 * @method $this withRequestProxyBy($value)
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
