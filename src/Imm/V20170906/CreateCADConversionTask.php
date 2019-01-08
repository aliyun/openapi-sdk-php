<?php

namespace AlibabaCloud\Imm\V20170906;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateCADConversionTask
 *
 * @method string getSrcType()
 * @method string getBaseCol()
 * @method string getNotifyTopicName()
 * @method string getUnitWidth()
 * @method string getZoomLevel()
 * @method string getBaseRow()
 * @method string getProject()
 * @method string getZoomFactor()
 * @method string getTgtType()
 * @method string getUnitHeight()
 * @method string getNotifyEndpoint()
 * @method string getSrcUri()
 * @method string getThumbnails()
 * @method string getTgtUri()
 */
class CreateCADConversionTask extends RpcRequest
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
    public $action = 'CreateCADConversionTask';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'imm';

    /**
     * @param string $srcType
     *
     * @return $this
     */
    public function withSrcType($srcType)
    {
        $this->data['SrcType'] = $srcType;
        $this->options['query']['SrcType'] = $srcType;

        return $this;
    }

    /**
     * @param string $baseCol
     *
     * @return $this
     */
    public function withBaseCol($baseCol)
    {
        $this->data['BaseCol'] = $baseCol;
        $this->options['query']['BaseCol'] = $baseCol;

        return $this;
    }

    /**
     * @param string $notifyTopicName
     *
     * @return $this
     */
    public function withNotifyTopicName($notifyTopicName)
    {
        $this->data['NotifyTopicName'] = $notifyTopicName;
        $this->options['query']['NotifyTopicName'] = $notifyTopicName;

        return $this;
    }

    /**
     * @param string $unitWidth
     *
     * @return $this
     */
    public function withUnitWidth($unitWidth)
    {
        $this->data['UnitWidth'] = $unitWidth;
        $this->options['query']['UnitWidth'] = $unitWidth;

        return $this;
    }

    /**
     * @param string $zoomLevel
     *
     * @return $this
     */
    public function withZoomLevel($zoomLevel)
    {
        $this->data['ZoomLevel'] = $zoomLevel;
        $this->options['query']['ZoomLevel'] = $zoomLevel;

        return $this;
    }

    /**
     * @param string $baseRow
     *
     * @return $this
     */
    public function withBaseRow($baseRow)
    {
        $this->data['BaseRow'] = $baseRow;
        $this->options['query']['BaseRow'] = $baseRow;

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
     * @param string $zoomFactor
     *
     * @return $this
     */
    public function withZoomFactor($zoomFactor)
    {
        $this->data['ZoomFactor'] = $zoomFactor;
        $this->options['query']['ZoomFactor'] = $zoomFactor;

        return $this;
    }

    /**
     * @param string $tgtType
     *
     * @return $this
     */
    public function withTgtType($tgtType)
    {
        $this->data['TgtType'] = $tgtType;
        $this->options['query']['TgtType'] = $tgtType;

        return $this;
    }

    /**
     * @param string $unitHeight
     *
     * @return $this
     */
    public function withUnitHeight($unitHeight)
    {
        $this->data['UnitHeight'] = $unitHeight;
        $this->options['query']['UnitHeight'] = $unitHeight;

        return $this;
    }

    /**
     * @param string $notifyEndpoint
     *
     * @return $this
     */
    public function withNotifyEndpoint($notifyEndpoint)
    {
        $this->data['NotifyEndpoint'] = $notifyEndpoint;
        $this->options['query']['NotifyEndpoint'] = $notifyEndpoint;

        return $this;
    }

    /**
     * @param string $srcUri
     *
     * @return $this
     */
    public function withSrcUri($srcUri)
    {
        $this->data['SrcUri'] = $srcUri;
        $this->options['query']['SrcUri'] = $srcUri;

        return $this;
    }

    /**
     * @param string $thumbnails
     *
     * @return $this
     */
    public function withThumbnails($thumbnails)
    {
        $this->data['Thumbnails'] = $thumbnails;
        $this->options['query']['Thumbnails'] = $thumbnails;

        return $this;
    }

    /**
     * @param string $tgtUri
     *
     * @return $this
     */
    public function withTgtUri($tgtUri)
    {
        $this->data['TgtUri'] = $tgtUri;
        $this->options['query']['TgtUri'] = $tgtUri;

        return $this;
    }
}
