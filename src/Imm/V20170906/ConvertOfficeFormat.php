<?php

namespace AlibabaCloud\Imm\V20170906;

use AlibabaCloud\Rpc;

/**
 * @method string getSrcType()
 * @method $this withSrcType($value)
 * @method string getModelId()
 * @method $this withModelId($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getMaxSheetRow()
 * @method $this withMaxSheetRow($value)
 * @method string getMaxSheetCount()
 * @method $this withMaxSheetCount($value)
 * @method string getEndPage()
 * @method $this withEndPage($value)
 * @method string getTgtFileSuffix()
 * @method $this withTgtFileSuffix($value)
 * @method string getPdfVector()
 * @method $this withPdfVector($value)
 * @method string getSheetOnePage()
 * @method $this withSheetOnePage($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getStartPage()
 * @method $this withStartPage($value)
 * @method string getMaxSheetCol()
 * @method $this withMaxSheetCol($value)
 * @method string getTgtType()
 * @method $this withTgtType($value)
 * @method string getFitToPagesWide()
 * @method $this withFitToPagesWide($value)
 * @method string getHidecomments()
 * @method $this withHidecomments($value)
 * @method string getTgtFilePrefix()
 * @method $this withTgtFilePrefix($value)
 * @method string getFitToPagesTall()
 * @method $this withFitToPagesTall($value)
 * @method string getSrcUri()
 * @method $this withSrcUri($value)
 * @method string getTgtFilePages()
 * @method $this withTgtFilePages($value)
 * @method string getTgtUri()
 * @method $this withTgtUri($value)
 */
class ConvertOfficeFormat extends Rpc
{
    public $product = 'imm';

    public $version = '2017-09-06';

    public $method = 'POST';

    public $serviceCode = 'imm';
}
