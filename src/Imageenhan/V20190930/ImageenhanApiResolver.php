<?php

namespace AlibabaCloud\Imageenhan\V20190930;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AssessComposition assessComposition(array $options = [])
 * @method AssessExposure assessExposure(array $options = [])
 * @method AssessSharpness assessSharpness(array $options = [])
 * @method ChangeImageSize changeImageSize(array $options = [])
 * @method ColorizeImage colorizeImage(array $options = [])
 * @method EnhanceImageColor enhanceImageColor(array $options = [])
 * @method ErasePerson erasePerson(array $options = [])
 * @method ExtendImageStyle extendImageStyle(array $options = [])
 * @method GenerateDynamicImage generateDynamicImage(array $options = [])
 * @method GetAsyncJobResult getAsyncJobResult(array $options = [])
 * @method ImageBlindCharacterWatermark imageBlindCharacterWatermark(array $options = [])
 * @method ImageBlindPicWatermark imageBlindPicWatermark(array $options = [])
 * @method ImitatePhotoStyle imitatePhotoStyle(array $options = [])
 * @method IntelligentComposition intelligentComposition(array $options = [])
 * @method MakeSuperResolutionImage makeSuperResolutionImage(array $options = [])
 * @method RecolorHDImage recolorHDImage(array $options = [])
 * @method RecolorImage recolorImage(array $options = [])
 * @method RemoveImageSubtitles removeImageSubtitles(array $options = [])
 * @method RemoveImageWatermark removeImageWatermark(array $options = [])
 */
class ImageenhanApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'imageenhan';

    /** @var string */
    public $version = '2019-09-30';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'imageenhan';
}

/**
 * @method string getImageURL()
 */
class AssessComposition extends Rpc
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
class AssessExposure extends Rpc
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
class AssessSharpness extends Rpc
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
 * @method string getUrl()
 * @method string getWidth()
 * @method string getHeight()
 */
class ChangeImageSize extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUrl($value)
    {
        $this->data['Url'] = $value;
        $this->options['form_params']['Url'] = $value;

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
}

/**
 * @method string getImageURL()
 */
class ColorizeImage extends Rpc
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
 * @method string getMode()
 * @method string getImageURL()
 * @method string getOutputFormat()
 */
class EnhanceImageColor extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMode($value)
    {
        $this->data['Mode'] = $value;
        $this->options['form_params']['Mode'] = $value;

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
    public function withOutputFormat($value)
    {
        $this->data['OutputFormat'] = $value;
        $this->options['form_params']['OutputFormat'] = $value;

        return $this;
    }
}

/**
 * @method string getImageURL()
 * @method string getUserMask()
 */
class ErasePerson extends Rpc
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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserMask($value)
    {
        $this->data['UserMask'] = $value;
        $this->options['form_params']['UserMask'] = $value;

        return $this;
    }
}

/**
 * @method string getMajorUrl()
 * @method string getStyleUrl()
 */
class ExtendImageStyle extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMajorUrl($value)
    {
        $this->data['MajorUrl'] = $value;
        $this->options['form_params']['MajorUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStyleUrl($value)
    {
        $this->data['StyleUrl'] = $value;
        $this->options['form_params']['StyleUrl'] = $value;

        return $this;
    }
}

/**
 * @method string getUrl()
 * @method string getOperation()
 */
class GenerateDynamicImage extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUrl($value)
    {
        $this->data['Url'] = $value;
        $this->options['form_params']['Url'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperation($value)
    {
        $this->data['Operation'] = $value;
        $this->options['form_params']['Operation'] = $value;

        return $this;
    }
}

/**
 * @method string getAsync()
 * @method string getJobId()
 */
class GetAsyncJobResult extends Rpc
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
    public function withJobId($value)
    {
        $this->data['JobId'] = $value;
        $this->options['form_params']['JobId'] = $value;

        return $this;
    }
}

/**
 * @method string getWatermarkImageURL()
 * @method string getQualityFactor()
 * @method string getFunctionType()
 * @method string getOutputFileType()
 * @method string getOriginImageURL()
 * @method string getText()
 */
class ImageBlindCharacterWatermark extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWatermarkImageURL($value)
    {
        $this->data['WatermarkImageURL'] = $value;
        $this->options['form_params']['WatermarkImageURL'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withQualityFactor($value)
    {
        $this->data['QualityFactor'] = $value;
        $this->options['form_params']['QualityFactor'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFunctionType($value)
    {
        $this->data['FunctionType'] = $value;
        $this->options['form_params']['FunctionType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOutputFileType($value)
    {
        $this->data['OutputFileType'] = $value;
        $this->options['form_params']['OutputFileType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOriginImageURL($value)
    {
        $this->data['OriginImageURL'] = $value;
        $this->options['form_params']['OriginImageURL'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withText($value)
    {
        $this->data['Text'] = $value;
        $this->options['form_params']['Text'] = $value;

        return $this;
    }
}

/**
 * @method string getWatermarkImageURL()
 * @method string getQualityFactor()
 * @method string getFunctionType()
 * @method string getLogoURL()
 * @method string getOutputFileType()
 * @method string getOriginImageURL()
 */
class ImageBlindPicWatermark extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWatermarkImageURL($value)
    {
        $this->data['WatermarkImageURL'] = $value;
        $this->options['form_params']['WatermarkImageURL'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withQualityFactor($value)
    {
        $this->data['QualityFactor'] = $value;
        $this->options['form_params']['QualityFactor'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFunctionType($value)
    {
        $this->data['FunctionType'] = $value;
        $this->options['form_params']['FunctionType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLogoURL($value)
    {
        $this->data['LogoURL'] = $value;
        $this->options['form_params']['LogoURL'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOutputFileType($value)
    {
        $this->data['OutputFileType'] = $value;
        $this->options['form_params']['OutputFileType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOriginImageURL($value)
    {
        $this->data['OriginImageURL'] = $value;
        $this->options['form_params']['OriginImageURL'] = $value;

        return $this;
    }
}

/**
 * @method string getStyleUrl()
 * @method string getImageURL()
 */
class ImitatePhotoStyle extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStyleUrl($value)
    {
        $this->data['StyleUrl'] = $value;
        $this->options['form_params']['StyleUrl'] = $value;

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
 * @method string getNumBoxes()
 * @method string getImageURL()
 */
class IntelligentComposition extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNumBoxes($value)
    {
        $this->data['NumBoxes'] = $value;
        $this->options['form_params']['NumBoxes'] = $value;

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
 * @method string getUpscaleFactor()
 * @method string getMode()
 * @method string getUrl()
 */
class MakeSuperResolutionImage extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUpscaleFactor($value)
    {
        $this->data['UpscaleFactor'] = $value;
        $this->options['form_params']['UpscaleFactor'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMode($value)
    {
        $this->data['Mode'] = $value;
        $this->options['form_params']['Mode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUrl($value)
    {
        $this->data['Url'] = $value;
        $this->options['form_params']['Url'] = $value;

        return $this;
    }
}

/**
 * @method array getColorTemplate()
 * @method string getDegree()
 * @method string getUrl()
 * @method string getMode()
 * @method string getAsync()
 * @method string getColorCount()
 * @method string getRefUrl()
 */
class RecolorHDImage extends Rpc
{

    /**
     * @param array $colorTemplate
     *
     * @return $this
     */
	public function withColorTemplate(array $colorTemplate)
	{
	    $this->data['ColorTemplate'] = $colorTemplate;
		foreach ($colorTemplate as $depth1 => $depth1Value) {
			if(isset($depth1Value['Color'])){
				$this->options['form_params']['ColorTemplate.' . ($depth1 + 1) . '.Color'] = $depth1Value['Color'];
			}
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDegree($value)
    {
        $this->data['Degree'] = $value;
        $this->options['form_params']['Degree'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUrl($value)
    {
        $this->data['Url'] = $value;
        $this->options['form_params']['Url'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMode($value)
    {
        $this->data['Mode'] = $value;
        $this->options['form_params']['Mode'] = $value;

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
    public function withColorCount($value)
    {
        $this->data['ColorCount'] = $value;
        $this->options['form_params']['ColorCount'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRefUrl($value)
    {
        $this->data['RefUrl'] = $value;
        $this->options['form_params']['RefUrl'] = $value;

        return $this;
    }
}

/**
 * @method array getColorTemplate()
 * @method string getUrl()
 * @method string getMode()
 * @method string getColorCount()
 * @method string getRefUrl()
 */
class RecolorImage extends Rpc
{

    /**
     * @param array $colorTemplate
     *
     * @return $this
     */
	public function withColorTemplate(array $colorTemplate)
	{
	    $this->data['ColorTemplate'] = $colorTemplate;
		foreach ($colorTemplate as $depth1 => $depth1Value) {
			if(isset($depth1Value['Color'])){
				$this->options['form_params']['ColorTemplate.' . ($depth1 + 1) . '.Color'] = $depth1Value['Color'];
			}
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUrl($value)
    {
        $this->data['Url'] = $value;
        $this->options['form_params']['Url'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMode($value)
    {
        $this->data['Mode'] = $value;
        $this->options['form_params']['Mode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withColorCount($value)
    {
        $this->data['ColorCount'] = $value;
        $this->options['form_params']['ColorCount'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRefUrl($value)
    {
        $this->data['RefUrl'] = $value;
        $this->options['form_params']['RefUrl'] = $value;

        return $this;
    }
}

/**
 * @method string getBH()
 * @method string getBW()
 * @method string getBX()
 * @method string getImageURL()
 * @method string getBY()
 */
class RemoveImageSubtitles extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBH($value)
    {
        $this->data['BH'] = $value;
        $this->options['form_params']['BH'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBW($value)
    {
        $this->data['BW'] = $value;
        $this->options['form_params']['BW'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBX($value)
    {
        $this->data['BX'] = $value;
        $this->options['form_params']['BX'] = $value;

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
    public function withBY($value)
    {
        $this->data['BY'] = $value;
        $this->options['form_params']['BY'] = $value;

        return $this;
    }
}

/**
 * @method string getImageURL()
 */
class RemoveImageWatermark extends Rpc
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
