<?php

namespace AlibabaCloud\Facebody\V20191230;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddFace addFace(array $options = [])
 * @method BodyPosture bodyPosture(array $options = [])
 * @method CompareFace compareFace(array $options = [])
 * @method CreateFaceDb createFaceDb(array $options = [])
 * @method DeleteFace deleteFace(array $options = [])
 * @method DeleteFaceDb deleteFaceDb(array $options = [])
 * @method DetectBodyCount detectBodyCount(array $options = [])
 * @method DetectFace detectFace(array $options = [])
 * @method DetectLivingFace detectLivingFace(array $options = [])
 * @method DetectMask detectMask(array $options = [])
 * @method DetectPedestrian detectPedestrian(array $options = [])
 * @method EnhanceFace enhanceFace(array $options = [])
 * @method FaceBeauty faceBeauty(array $options = [])
 * @method FaceFilter faceFilter(array $options = [])
 * @method FaceMakeup faceMakeup(array $options = [])
 * @method FaceTidyup faceTidyup(array $options = [])
 * @method HandPosture handPosture(array $options = [])
 * @method ListFaceDbs listFaceDbs(array $options = [])
 * @method ListFaces listFaces(array $options = [])
 * @method RecognizeExpression recognizeExpression(array $options = [])
 * @method RecognizeFace recognizeFace(array $options = [])
 * @method RecognizePublicFace recognizePublicFace(array $options = [])
 * @method SearchFace searchFace(array $options = [])
 */
class FacebodyApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'facebody';

    /** @var string */
    public $version = '2019-12-30';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'facebody';
}

/**
 * @method string getEntityId()
 * @method string getExtraData()
 * @method string getFaceId()
 * @method string getDbName()
 * @method string getImageUrl()
 */
class AddFace extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEntityId($value)
    {
        $this->data['EntityId'] = $value;
        $this->options['form_params']['EntityId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtraData($value)
    {
        $this->data['ExtraData'] = $value;
        $this->options['form_params']['ExtraData'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFaceId($value)
    {
        $this->data['FaceId'] = $value;
        $this->options['form_params']['FaceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDbName($value)
    {
        $this->data['DbName'] = $value;
        $this->options['form_params']['DbName'] = $value;

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
 * @method string getImageURL()
 */
class BodyPosture extends Rpc
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
 * @method string getImageURLB()
 * @method string getImageURLA()
 */
class CompareFace extends Rpc
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
 * @method string getName()
 */
class CreateFaceDb extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['form_params']['Name'] = $value;

        return $this;
    }
}

/**
 * @method string getFaceId()
 * @method string getDbName()
 */
class DeleteFace extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFaceId($value)
    {
        $this->data['FaceId'] = $value;
        $this->options['form_params']['FaceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDbName($value)
    {
        $this->data['DbName'] = $value;
        $this->options['form_params']['DbName'] = $value;

        return $this;
    }
}

/**
 * @method string getName()
 */
class DeleteFaceDb extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['form_params']['Name'] = $value;

        return $this;
    }
}

/**
 * @method string getImageURL()
 */
class DetectBodyCount extends Rpc
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
class DetectFace extends Rpc
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
 * @method array getTasks()
 */
class DetectLivingFace extends Rpc
{

    /**
     * @param array $tasks
     *
     * @return $this
     */
	public function withTasks(array $tasks)
	{
	    $this->data['Tasks'] = $tasks;
		foreach ($tasks as $depth1 => $depth1Value) {
			$this->options['form_params']['Tasks.' . ($depth1 + 1) . '.ImageURL'] = $depth1Value['ImageURL'];
		}

		return $this;
    }
}

/**
 * @method string getImageURL()
 */
class DetectMask extends Rpc
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
class DetectPedestrian extends Rpc
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
class EnhanceFace extends Rpc
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
 * @method string getSharp()
 * @method string getWhite()
 * @method string getImageURL()
 * @method string getSmooth()
 */
class FaceBeauty extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSharp($value)
    {
        $this->data['Sharp'] = $value;
        $this->options['form_params']['Sharp'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWhite($value)
    {
        $this->data['White'] = $value;
        $this->options['form_params']['White'] = $value;

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
    public function withSmooth($value)
    {
        $this->data['Smooth'] = $value;
        $this->options['form_params']['Smooth'] = $value;

        return $this;
    }
}

/**
 * @method string getStrength()
 * @method string getResourceType()
 * @method string getImageURL()
 */
class FaceFilter extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStrength($value)
    {
        $this->data['Strength'] = $value;
        $this->options['form_params']['Strength'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceType($value)
    {
        $this->data['ResourceType'] = $value;
        $this->options['form_params']['ResourceType'] = $value;

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
 * @method string getStrength()
 * @method string getMakeupType()
 * @method string getResourceType()
 * @method string getImageURL()
 */
class FaceMakeup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStrength($value)
    {
        $this->data['Strength'] = $value;
        $this->options['form_params']['Strength'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMakeupType($value)
    {
        $this->data['MakeupType'] = $value;
        $this->options['form_params']['MakeupType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceType($value)
    {
        $this->data['ResourceType'] = $value;
        $this->options['form_params']['ResourceType'] = $value;

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
 * @method string getShapeType()
 * @method string getStrength()
 * @method string getImageURL()
 */
class FaceTidyup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withShapeType($value)
    {
        $this->data['ShapeType'] = $value;
        $this->options['form_params']['ShapeType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStrength($value)
    {
        $this->data['Strength'] = $value;
        $this->options['form_params']['Strength'] = $value;

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
class HandPosture extends Rpc
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

class ListFaceDbs extends Rpc
{
}

/**
 * @method string getFromScrollId()
 * @method string getDbName()
 */
class ListFaces extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFromScrollId($value)
    {
        $this->data['FromScrollId'] = $value;
        $this->options['form_params']['FromScrollId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDbName($value)
    {
        $this->data['DbName'] = $value;
        $this->options['form_params']['DbName'] = $value;

        return $this;
    }
}

/**
 * @method string getImageURL()
 */
class RecognizeExpression extends Rpc
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
class RecognizeFace extends Rpc
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
 * @method array getTask()
 */
class RecognizePublicFace extends Rpc
{

    /**
     * @param array $task
     *
     * @return $this
     */
	public function withTask(array $task)
	{
	    $this->data['Task'] = $task;
		foreach ($task as $depth1 => $depth1Value) {
			$this->options['form_params']['Task.' . ($depth1 + 1) . '.ImageURL'] = $depth1Value['ImageURL'];
		}

		return $this;
    }
}

/**
 * @method string getDbName()
 * @method string getImageUrl()
 * @method string getLimit()
 */
class SearchFace extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDbName($value)
    {
        $this->data['DbName'] = $value;
        $this->options['form_params']['DbName'] = $value;

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLimit($value)
    {
        $this->data['Limit'] = $value;
        $this->options['form_params']['Limit'] = $value;

        return $this;
    }
}
