<?php

namespace AlibabaCloud\Imm\V20170906;

use AlibabaCloud\Rpc;

/**
 * @method string getGender()
 * @method $this withGender($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getExternalId()
 * @method $this withExternalId($value)
 * @method string getImageSizeRange()
 * @method $this withImageSizeRange($value)
 * @method string getRemarksBPrefix()
 * @method $this withRemarksBPrefix($value)
 * @method string getLocationBoundary()
 * @method $this withLocationBoundary($value)
 * @method string getImageTimeRange()
 * @method $this withImageTimeRange($value)
 * @method string getOCRContentsMatch()
 * @method $this withOCRContentsMatch($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getRemarksDPrefix()
 * @method $this withRemarksDPrefix($value)
 * @method string getSourceType()
 * @method $this withSourceType($value)
 * @method string getAgeRange()
 * @method $this withAgeRange($value)
 * @method string getOrder()
 * @method $this withOrder($value)
 * @method string getRemarksAPrefix()
 * @method $this withRemarksAPrefix($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getOrderBy()
 * @method $this withOrderBy($value)
 * @method string getTagNames()
 * @method $this withTagNames($value)
 * @method string getSourceUriPrefix()
 * @method $this withSourceUriPrefix($value)
 * @method string getEmotion()
 * @method $this withEmotion($value)
 * @method string getMarker()
 * @method $this withMarker($value)
 * @method string getRemarksCPrefix()
 * @method $this withRemarksCPrefix($value)
 * @method string getCreateTimeRange()
 * @method $this withCreateTimeRange($value)
 * @method string getSetId()
 * @method $this withSetId($value)
 * @method string getModifyTimeRange()
 * @method $this withModifyTimeRange($value)
 */
class FindImages extends Rpc
{
    public $product = 'imm';

    public $version = '2017-09-06';

    public $method = 'POST';

    public $serviceCode = 'imm';
}
