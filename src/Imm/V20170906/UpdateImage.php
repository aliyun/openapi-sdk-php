<?php

namespace AlibabaCloud\Imm\V20170906;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of UpdateImage
 *
 * @method string getImageUri()
 * @method string getSourceUri()
 * @method string getSourcePosition()
 * @method string getRemarksB()
 * @method string getProject()
 * @method string getSetId()
 * @method string getRemarksA()
 * @method string getSourceType()
 */
class UpdateImage extends RpcRequest
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
    public $action = 'UpdateImage';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'imm';

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
     * @param string $sourceUri
     *
     * @return $this
     */
    public function withSourceUri($sourceUri)
    {
        $this->data['SourceUri'] = $sourceUri;
        $this->options['query']['SourceUri'] = $sourceUri;

        return $this;
    }

    /**
     * @param string $sourcePosition
     *
     * @return $this
     */
    public function withSourcePosition($sourcePosition)
    {
        $this->data['SourcePosition'] = $sourcePosition;
        $this->options['query']['SourcePosition'] = $sourcePosition;

        return $this;
    }

    /**
     * @param string $remarksB
     *
     * @return $this
     */
    public function withRemarksB($remarksB)
    {
        $this->data['RemarksB'] = $remarksB;
        $this->options['query']['RemarksB'] = $remarksB;

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
     * @param string $remarksA
     *
     * @return $this
     */
    public function withRemarksA($remarksA)
    {
        $this->data['RemarksA'] = $remarksA;
        $this->options['query']['RemarksA'] = $remarksA;

        return $this;
    }

    /**
     * @param string $sourceType
     *
     * @return $this
     */
    public function withSourceType($sourceType)
    {
        $this->data['SourceType'] = $sourceType;
        $this->options['query']['SourceType'] = $sourceType;

        return $this;
    }
}
