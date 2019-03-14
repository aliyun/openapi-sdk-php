<?php

namespace AlibabaCloud\Imm\V20170906;

use AlibabaCloud\Rpc;

/**
 * Api UpdateImage
 *
 * @method string getRemarksB()
 * @method string getProject()
 * @method string getRemarksA()
 * @method string getExternalId()
 * @method string getImageUri()
 * @method string getSourceUri()
 * @method string getSourcePosition()
 * @method string getRemarksD()
 * @method string getRemarksC()
 * @method string getSetId()
 * @method string getSourceType()
 */
class UpdateImage extends Rpc
{
    public $product = 'imm';

    public $version = '2017-09-06';

    public $method = 'POST';

    public $serviceCode = 'imm';

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
     * @param string $externalId
     *
     * @return $this
     */
    public function withExternalId($externalId)
    {
        $this->data['ExternalId'] = $externalId;
        $this->options['query']['ExternalId'] = $externalId;

        return $this;
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
     * @param string $remarksD
     *
     * @return $this
     */
    public function withRemarksD($remarksD)
    {
        $this->data['RemarksD'] = $remarksD;
        $this->options['query']['RemarksD'] = $remarksD;

        return $this;
    }

    /**
     * @param string $remarksC
     *
     * @return $this
     */
    public function withRemarksC($remarksC)
    {
        $this->data['RemarksC'] = $remarksC;
        $this->options['query']['RemarksC'] = $remarksC;

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
