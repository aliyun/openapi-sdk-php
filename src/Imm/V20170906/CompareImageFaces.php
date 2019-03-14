<?php

namespace AlibabaCloud\Imm\V20170906;

use AlibabaCloud\Rpc;

/**
 * Api CompareImageFaces
 *
 * @method string getImageUriB()
 * @method string getImageUriA()
 * @method string getProject()
 * @method string getSetId()
 * @method string getFaceIdA()
 * @method string getFaceIdB()
 */
class CompareImageFaces extends Rpc
{
    public $product = 'imm';

    public $version = '2017-09-06';

    public $method = 'POST';

    public $serviceCode = 'imm';

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
