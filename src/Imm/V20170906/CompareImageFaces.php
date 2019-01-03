<?php

namespace AlibabaCloud\Imm\V20170906;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CompareImageFaces
 *
 * @method string getImageUriB()
 * @method string getImageUriA()
 * @method string getProject()
 * @method string getSetId()
 * @method string getFaceIdA()
 * @method string getFaceIdB()
 */
class CompareImageFaces extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'imm';

    /**
     * @var string
     */
    public $version = '2017-09-06';

    /**
     * @var string
     */
    public $action = 'CompareImageFaces';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'imm';

    /**
     * @deprecated deprecated since version 2.0, Use withImageUriB() instead.
     *
     * @param string $imageUriB
     *
     * @return $this
     */
    public function setImageUriB($imageUriB)
    {
        return $this->withImageUriB($imageUriB);
    }

    /**
     * @param string $imageUriB
     *
     * @return $this
     */
    public function withImageUriB($imageUriB)
    {
        $this->data['ImageUriB'] = $imageUriB;
        $this->options['query']['ImageUriB'] = $imageUriB;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withImageUriA() instead.
     *
     * @param string $imageUriA
     *
     * @return $this
     */
    public function setImageUriA($imageUriA)
    {
        return $this->withImageUriA($imageUriA);
    }

    /**
     * @param string $imageUriA
     *
     * @return $this
     */
    public function withImageUriA($imageUriA)
    {
        $this->data['ImageUriA'] = $imageUriA;
        $this->options['query']['ImageUriA'] = $imageUriA;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withProject() instead.
     *
     * @param string $project
     *
     * @return $this
     */
    public function setProject($project)
    {
        return $this->withProject($project);
    }

    /**
     * @param string $project
     *
     * @return $this
     */
    public function withProject($project)
    {
        $this->data['Project'] = $project;
        $this->options['query']['Project'] = $project;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSetId() instead.
     *
     * @param string $setId
     *
     * @return $this
     */
    public function setSetId($setId)
    {
        return $this->withSetId($setId);
    }

    /**
     * @param string $setId
     *
     * @return $this
     */
    public function withSetId($setId)
    {
        $this->data['SetId'] = $setId;
        $this->options['query']['SetId'] = $setId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withFaceIdA() instead.
     *
     * @param string $faceIdA
     *
     * @return $this
     */
    public function setFaceIdA($faceIdA)
    {
        return $this->withFaceIdA($faceIdA);
    }

    /**
     * @param string $faceIdA
     *
     * @return $this
     */
    public function withFaceIdA($faceIdA)
    {
        $this->data['FaceIdA'] = $faceIdA;
        $this->options['query']['FaceIdA'] = $faceIdA;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withFaceIdB() instead.
     *
     * @param string $faceIdB
     *
     * @return $this
     */
    public function setFaceIdB($faceIdB)
    {
        return $this->withFaceIdB($faceIdB);
    }

    /**
     * @param string $faceIdB
     *
     * @return $this
     */
    public function withFaceIdB($faceIdB)
    {
        $this->data['FaceIdB'] = $faceIdB;
        $this->options['query']['FaceIdB'] = $faceIdB;

        return $this;
    }
}
