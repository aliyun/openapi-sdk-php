<?php

namespace AlibabaCloud\Videoenhan\V20200320;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AbstractEcommerceVideo abstractEcommerceVideo(array $options = [])
 * @method AbstractFilmVideo abstractFilmVideo(array $options = [])
 * @method AddFaceVideoTemplate addFaceVideoTemplate(array $options = [])
 * @method AdjustVideoColor adjustVideoColor(array $options = [])
 * @method ChangeVideoSize changeVideoSize(array $options = [])
 * @method ConvertHdrVideo convertHdrVideo(array $options = [])
 * @method DeleteFaceVideoTemplate deleteFaceVideoTemplate(array $options = [])
 * @method EnhanceVideoQuality enhanceVideoQuality(array $options = [])
 * @method EraseVideoLogo eraseVideoLogo(array $options = [])
 * @method EraseVideoSubtitles eraseVideoSubtitles(array $options = [])
 * @method GenerateVideo generateVideo(array $options = [])
 * @method GetAsyncJobResult getAsyncJobResult(array $options = [])
 * @method InterpolateVideoFrame interpolateVideoFrame(array $options = [])
 * @method MergeVideoFace mergeVideoFace(array $options = [])
 * @method MergeVideoModelFace mergeVideoModelFace(array $options = [])
 * @method QueryFaceVideoTemplate queryFaceVideoTemplate(array $options = [])
 * @method SuperResolveVideo superResolveVideo(array $options = [])
 * @method ToneSdrVideo toneSdrVideo(array $options = [])
 */
class VideoenhanApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'videoenhan';

    /** @var string */
    public $version = '2020-03-20';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'videoenhan';
}

/**
 * @method string getDuration()
 * @method string getAsync()
 * @method string getVideoUrl()
 * @method string getWidth()
 * @method string getHeight()
 */
class AbstractEcommerceVideo extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDuration($value)
    {
        $this->data['Duration'] = $value;
        $this->options['form_params']['Duration'] = $value;

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
    public function withVideoUrl($value)
    {
        $this->data['VideoUrl'] = $value;
        $this->options['form_params']['VideoUrl'] = $value;

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
 * @method string getLength()
 * @method string getAsync()
 * @method string getVideoUrl()
 */
class AbstractFilmVideo extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLength($value)
    {
        $this->data['Length'] = $value;
        $this->options['form_params']['Length'] = $value;

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
    public function withVideoUrl($value)
    {
        $this->data['VideoUrl'] = $value;
        $this->options['form_params']['VideoUrl'] = $value;

        return $this;
    }
}

/**
 * @method string getUserId()
 * @method string getAsync()
 * @method string getVideoURL()
 */
class AddFaceVideoTemplate extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserId($value)
    {
        $this->data['UserId'] = $value;
        $this->options['form_params']['UserId'] = $value;

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
 * @method string getMode()
 * @method string getAsync()
 * @method string getVideoUrl()
 * @method string getVideoBitrate()
 * @method string getVideoCodec()
 * @method string getVideoFormat()
 */
class AdjustVideoColor extends Rpc
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
    public function withVideoUrl($value)
    {
        $this->data['VideoUrl'] = $value;
        $this->options['form_params']['VideoUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVideoBitrate($value)
    {
        $this->data['VideoBitrate'] = $value;
        $this->options['form_params']['VideoBitrate'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVideoCodec($value)
    {
        $this->data['VideoCodec'] = $value;
        $this->options['form_params']['VideoCodec'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVideoFormat($value)
    {
        $this->data['VideoFormat'] = $value;
        $this->options['form_params']['VideoFormat'] = $value;

        return $this;
    }
}

/**
 * @method string getHeight()
 * @method string getB()
 * @method string getFillType()
 * @method string getG()
 * @method string getCropType()
 * @method string getAsync()
 * @method string getR()
 * @method string getVideoUrl()
 * @method string getWidth()
 * @method string getTightness()
 */
class ChangeVideoSize extends Rpc
{

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
    public function withB($value)
    {
        $this->data['B'] = $value;
        $this->options['form_params']['B'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFillType($value)
    {
        $this->data['FillType'] = $value;
        $this->options['form_params']['FillType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withG($value)
    {
        $this->data['G'] = $value;
        $this->options['form_params']['G'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCropType($value)
    {
        $this->data['CropType'] = $value;
        $this->options['form_params']['CropType'] = $value;

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
    public function withR($value)
    {
        $this->data['R'] = $value;
        $this->options['form_params']['R'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVideoUrl($value)
    {
        $this->data['VideoUrl'] = $value;
        $this->options['form_params']['VideoUrl'] = $value;

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
    public function withTightness($value)
    {
        $this->data['Tightness'] = $value;
        $this->options['form_params']['Tightness'] = $value;

        return $this;
    }
}

/**
 * @method string getHDRFormat()
 * @method string getMaxIlluminance()
 * @method string getBitrate()
 * @method string getAsync()
 * @method string getVideoURL()
 */
class ConvertHdrVideo extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHDRFormat($value)
    {
        $this->data['HDRFormat'] = $value;
        $this->options['form_params']['HDRFormat'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxIlluminance($value)
    {
        $this->data['MaxIlluminance'] = $value;
        $this->options['form_params']['MaxIlluminance'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBitrate($value)
    {
        $this->data['Bitrate'] = $value;
        $this->options['form_params']['Bitrate'] = $value;

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
 * @method string getUserId()
 * @method string getTemplateId()
 */
class DeleteFaceVideoTemplate extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserId($value)
    {
        $this->data['UserId'] = $value;
        $this->options['form_params']['UserId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTemplateId($value)
    {
        $this->data['TemplateId'] = $value;
        $this->options['form_params']['TemplateId'] = $value;

        return $this;
    }
}

/**
 * @method string getHDRFormat()
 * @method string getFrameRate()
 * @method string getMaxIlluminance()
 * @method string getBitrate()
 * @method string getOutPutWidth()
 * @method string getOutPutHeight()
 * @method string getAsync()
 * @method string getVideoURL()
 */
class EnhanceVideoQuality extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHDRFormat($value)
    {
        $this->data['HDRFormat'] = $value;
        $this->options['form_params']['HDRFormat'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFrameRate($value)
    {
        $this->data['FrameRate'] = $value;
        $this->options['form_params']['FrameRate'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxIlluminance($value)
    {
        $this->data['MaxIlluminance'] = $value;
        $this->options['form_params']['MaxIlluminance'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBitrate($value)
    {
        $this->data['Bitrate'] = $value;
        $this->options['form_params']['Bitrate'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOutPutWidth($value)
    {
        $this->data['OutPutWidth'] = $value;
        $this->options['form_params']['OutPutWidth'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOutPutHeight($value)
    {
        $this->data['OutPutHeight'] = $value;
        $this->options['form_params']['OutPutHeight'] = $value;

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
 * @method array getBoxes()
 * @method string getAsync()
 * @method string getVideoUrl()
 */
class EraseVideoLogo extends Rpc
{

    /**
     * @param array $boxes
     *
     * @return $this
     */
	public function withBoxes(array $boxes)
	{
	    $this->data['Boxes'] = $boxes;
		foreach ($boxes as $depth1 => $depth1Value) {
			if(isset($depth1Value['W'])){
				$this->options['form_params']['Boxes.' . ($depth1 + 1) . '.W'] = $depth1Value['W'];
			}
			if(isset($depth1Value['H'])){
				$this->options['form_params']['Boxes.' . ($depth1 + 1) . '.H'] = $depth1Value['H'];
			}
			if(isset($depth1Value['X'])){
				$this->options['form_params']['Boxes.' . ($depth1 + 1) . '.X'] = $depth1Value['X'];
			}
			if(isset($depth1Value['Y'])){
				$this->options['form_params']['Boxes.' . ($depth1 + 1) . '.Y'] = $depth1Value['Y'];
			}
		}

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
    public function withVideoUrl($value)
    {
        $this->data['VideoUrl'] = $value;
        $this->options['form_params']['VideoUrl'] = $value;

        return $this;
    }
}

/**
 * @method string getBH()
 * @method string getAsync()
 * @method string getVideoUrl()
 * @method string getBW()
 * @method string getBX()
 * @method string getBY()
 */
class EraseVideoSubtitles extends Rpc
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
    public function withVideoUrl($value)
    {
        $this->data['VideoUrl'] = $value;
        $this->options['form_params']['VideoUrl'] = $value;

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
    public function withBY($value)
    {
        $this->data['BY'] = $value;
        $this->options['form_params']['BY'] = $value;

        return $this;
    }
}

/**
 * @method string getTransitionStyle()
 * @method string getScene()
 * @method string getDuration()
 * @method string getPuzzleEffect()
 * @method string getHeight()
 * @method string getDurationAdaption()
 * @method array getFileList()
 * @method string getMute()
 * @method string getAsync()
 * @method string getSmartEffect()
 * @method string getWidth()
 * @method string getStyle()
 */
class GenerateVideo extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTransitionStyle($value)
    {
        $this->data['TransitionStyle'] = $value;
        $this->options['form_params']['TransitionStyle'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScene($value)
    {
        $this->data['Scene'] = $value;
        $this->options['form_params']['Scene'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDuration($value)
    {
        $this->data['Duration'] = $value;
        $this->options['form_params']['Duration'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPuzzleEffect($value)
    {
        $this->data['PuzzleEffect'] = $value;
        $this->options['form_params']['PuzzleEffect'] = $value;

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
    public function withDurationAdaption($value)
    {
        $this->data['DurationAdaption'] = $value;
        $this->options['form_params']['DurationAdaption'] = $value;

        return $this;
    }

    /**
     * @param array $fileList
     *
     * @return $this
     */
	public function withFileList(array $fileList)
	{
	    $this->data['FileList'] = $fileList;
		foreach ($fileList as $depth1 => $depth1Value) {
			if(isset($depth1Value['FileName'])){
				$this->options['form_params']['FileList.' . ($depth1 + 1) . '.FileName'] = $depth1Value['FileName'];
			}
			if(isset($depth1Value['FileUrl'])){
				$this->options['form_params']['FileList.' . ($depth1 + 1) . '.FileUrl'] = $depth1Value['FileUrl'];
			}
			if(isset($depth1Value['Type'])){
				$this->options['form_params']['FileList.' . ($depth1 + 1) . '.Type'] = $depth1Value['Type'];
			}
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMute($value)
    {
        $this->data['Mute'] = $value;
        $this->options['form_params']['Mute'] = $value;

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
    public function withSmartEffect($value)
    {
        $this->data['SmartEffect'] = $value;
        $this->options['form_params']['SmartEffect'] = $value;

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
    public function withStyle($value)
    {
        $this->data['Style'] = $value;
        $this->options['form_params']['Style'] = $value;

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
 * @method string getFrameRate()
 * @method string getBitrate()
 * @method string getAsync()
 * @method string getVideoURL()
 */
class InterpolateVideoFrame extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFrameRate($value)
    {
        $this->data['FrameRate'] = $value;
        $this->options['form_params']['FrameRate'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBitrate($value)
    {
        $this->data['Bitrate'] = $value;
        $this->options['form_params']['Bitrate'] = $value;

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
 * @method string getPostURL()
 * @method string getReferenceURL()
 * @method string getAsync()
 * @method string getVideoURL()
 */
class MergeVideoFace extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPostURL($value)
    {
        $this->data['PostURL'] = $value;
        $this->options['form_params']['PostURL'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReferenceURL($value)
    {
        $this->data['ReferenceURL'] = $value;
        $this->options['form_params']['ReferenceURL'] = $value;

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
 * @method string getFaceImageURL()
 * @method string getUserId()
 * @method string getTemplateId()
 * @method string getAsync()
 */
class MergeVideoModelFace extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFaceImageURL($value)
    {
        $this->data['FaceImageURL'] = $value;
        $this->options['form_params']['FaceImageURL'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserId($value)
    {
        $this->data['UserId'] = $value;
        $this->options['form_params']['UserId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTemplateId($value)
    {
        $this->data['TemplateId'] = $value;
        $this->options['form_params']['TemplateId'] = $value;

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
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 */
class QueryFaceVideoTemplate extends Rpc
{
}

/**
 * @method string getBitRate()
 * @method string getAsync()
 * @method string getVideoUrl()
 */
class SuperResolveVideo extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBitRate($value)
    {
        $this->data['BitRate'] = $value;
        $this->options['form_params']['BitRate'] = $value;

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
    public function withVideoUrl($value)
    {
        $this->data['VideoUrl'] = $value;
        $this->options['form_params']['VideoUrl'] = $value;

        return $this;
    }
}

/**
 * @method string getRecolorModel()
 * @method string getBitrate()
 * @method string getAsync()
 * @method string getVideoURL()
 */
class ToneSdrVideo extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRecolorModel($value)
    {
        $this->data['RecolorModel'] = $value;
        $this->options['form_params']['RecolorModel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBitrate($value)
    {
        $this->data['Bitrate'] = $value;
        $this->options['form_params']['Bitrate'] = $value;

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
