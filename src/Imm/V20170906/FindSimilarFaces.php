<?php

namespace AlibabaCloud\Imm\V20170906;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of FindSimilarFaces
 *
 * @method string getImageUri()
 * @method string getLimit()
 * @method string getProject()
 * @method string getSetId()
 * @method string getFaceId()
 */
class FindSimilarFaces extends RpcRequest
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
    public $action = 'FindSimilarFaces';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'imm';

    /**
     * @deprecated deprecated since version 2.0, Use withImageUri() instead.
     *
     * @param string $imageUri
     *
     * @return $this
     */
    public function setImageUri($imageUri)
    {
        return $this->withImageUri($imageUri);
    }

    /**
     * @param string $imageUri
     *
     * @return $this
     */
    public function withImageUri($imageUri)
    {
        $this->data['ImageUri'] = $imageUri;
        $this->options['query']['ImageUri'] = $imageUri;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withLimit() instead.
     *
     * @param string $limit
     *
     * @return $this
     */
    public function setLimit($limit)
    {
        return $this->withLimit($limit);
    }

    /**
     * @param string $limit
     *
     * @return $this
     */
    public function withLimit($limit)
    {
        $this->data['Limit'] = $limit;
        $this->options['query']['Limit'] = $limit;

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
     * @deprecated deprecated since version 2.0, Use withFaceId() instead.
     *
     * @param string $faceId
     *
     * @return $this
     */
    public function setFaceId($faceId)
    {
        return $this->withFaceId($faceId);
    }

    /**
     * @param string $faceId
     *
     * @return $this
     */
    public function withFaceId($faceId)
    {
        $this->data['FaceId'] = $faceId;
        $this->options['query']['FaceId'] = $faceId;

        return $this;
    }
}
