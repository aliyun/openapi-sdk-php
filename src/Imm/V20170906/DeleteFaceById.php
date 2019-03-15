<?php

namespace AlibabaCloud\Imm\V20170906;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method string getProject()
 * @method string getSetId()
 * @method string getSrcUri()
 * @method string getFaceIds()
 */
class DeleteFaceById extends RpcRequest
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
    public $action = 'DeleteFaceById';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'imm';

    /**
     * @param string $project
     *
     * @return $this
     */
    public function withProject($project)
    {
        $this->data['Project']             = $project;
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
        $this->data['SetId']             = $setId;
        $this->options['query']['SetId'] = $setId;

        return $this;
    }

    /**
     * @param string $srcUri
     *
     * @return $this
     */
    public function withSrcUri($srcUri)
    {
        $this->data['SrcUri']             = $srcUri;
        $this->options['query']['SrcUri'] = $srcUri;

        return $this;
    }

    /**
     * @param string $faceIds
     *
     * @return $this
     */
    public function withFaceIds($faceIds)
    {
        $this->data['FaceIds']             = $faceIds;
        $this->options['query']['FaceIds'] = $faceIds;

        return $this;
    }
}
