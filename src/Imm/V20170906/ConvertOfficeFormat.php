<?php

namespace AlibabaCloud\Imm\V20170906;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ConvertOfficeFormat
 *
 * @method string getSrcType()
 * @method string getModelId()
 * @method string getProject()
 * @method string getMaxSheetRow()
 * @method string getMaxSheetCount()
 * @method string getEndPage()
 * @method string getTgtFileSuffix()
 * @method string getPdfVector()
 * @method string getSheetOnePage()
 * @method string getPassword()
 * @method string getStartPage()
 * @method string getMaxSheetCol()
 * @method string getTgtType()
 * @method string getFitToPagesWide()
 * @method string getTgtFilePrefix()
 * @method string getFitToPagesTall()
 * @method string getSrcUri()
 * @method string getTgtFilePages()
 * @method string getTgtUri()
 */
class ConvertOfficeFormat extends RpcRequest
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
    public $action = 'ConvertOfficeFormat';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'imm';

    /**
     * @deprecated deprecated since version 2.0, Use withSrcType() instead.
     *
     * @param string $srcType
     *
     * @return $this
     */
    public function setSrcType($srcType)
    {
        return $this->withSrcType($srcType);
    }

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
     * @deprecated deprecated since version 2.0, Use withModelId() instead.
     *
     * @param string $modelId
     *
     * @return $this
     */
    public function setModelId($modelId)
    {
        return $this->withModelId($modelId);
    }

    /**
     * @param string $modelId
     *
     * @return $this
     */
    public function withModelId($modelId)
    {
        $this->data['ModelId'] = $modelId;
        $this->options['query']['ModelId'] = $modelId;

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
     * @deprecated deprecated since version 2.0, Use withMaxSheetRow() instead.
     *
     * @param string $maxSheetRow
     *
     * @return $this
     */
    public function setMaxSheetRow($maxSheetRow)
    {
        return $this->withMaxSheetRow($maxSheetRow);
    }

    /**
     * @param string $maxSheetRow
     *
     * @return $this
     */
    public function withMaxSheetRow($maxSheetRow)
    {
        $this->data['MaxSheetRow'] = $maxSheetRow;
        $this->options['query']['MaxSheetRow'] = $maxSheetRow;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withMaxSheetCount() instead.
     *
     * @param string $maxSheetCount
     *
     * @return $this
     */
    public function setMaxSheetCount($maxSheetCount)
    {
        return $this->withMaxSheetCount($maxSheetCount);
    }

    /**
     * @param string $maxSheetCount
     *
     * @return $this
     */
    public function withMaxSheetCount($maxSheetCount)
    {
        $this->data['MaxSheetCount'] = $maxSheetCount;
        $this->options['query']['MaxSheetCount'] = $maxSheetCount;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withEndPage() instead.
     *
     * @param string $endPage
     *
     * @return $this
     */
    public function setEndPage($endPage)
    {
        return $this->withEndPage($endPage);
    }

    /**
     * @param string $endPage
     *
     * @return $this
     */
    public function withEndPage($endPage)
    {
        $this->data['EndPage'] = $endPage;
        $this->options['query']['EndPage'] = $endPage;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTgtFileSuffix() instead.
     *
     * @param string $tgtFileSuffix
     *
     * @return $this
     */
    public function setTgtFileSuffix($tgtFileSuffix)
    {
        return $this->withTgtFileSuffix($tgtFileSuffix);
    }

    /**
     * @param string $tgtFileSuffix
     *
     * @return $this
     */
    public function withTgtFileSuffix($tgtFileSuffix)
    {
        $this->data['TgtFileSuffix'] = $tgtFileSuffix;
        $this->options['query']['TgtFileSuffix'] = $tgtFileSuffix;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPdfVector() instead.
     *
     * @param string $pdfVector
     *
     * @return $this
     */
    public function setPdfVector($pdfVector)
    {
        return $this->withPdfVector($pdfVector);
    }

    /**
     * @param string $pdfVector
     *
     * @return $this
     */
    public function withPdfVector($pdfVector)
    {
        $this->data['PdfVector'] = $pdfVector;
        $this->options['query']['PdfVector'] = $pdfVector;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSheetOnePage() instead.
     *
     * @param string $sheetOnePage
     *
     * @return $this
     */
    public function setSheetOnePage($sheetOnePage)
    {
        return $this->withSheetOnePage($sheetOnePage);
    }

    /**
     * @param string $sheetOnePage
     *
     * @return $this
     */
    public function withSheetOnePage($sheetOnePage)
    {
        $this->data['SheetOnePage'] = $sheetOnePage;
        $this->options['query']['SheetOnePage'] = $sheetOnePage;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPassword() instead.
     *
     * @param string $password
     *
     * @return $this
     */
    public function setPassword($password)
    {
        return $this->withPassword($password);
    }

    /**
     * @param string $password
     *
     * @return $this
     */
    public function withPassword($password)
    {
        $this->data['Password'] = $password;
        $this->options['query']['Password'] = $password;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withStartPage() instead.
     *
     * @param string $startPage
     *
     * @return $this
     */
    public function setStartPage($startPage)
    {
        return $this->withStartPage($startPage);
    }

    /**
     * @param string $startPage
     *
     * @return $this
     */
    public function withStartPage($startPage)
    {
        $this->data['StartPage'] = $startPage;
        $this->options['query']['StartPage'] = $startPage;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withMaxSheetCol() instead.
     *
     * @param string $maxSheetCol
     *
     * @return $this
     */
    public function setMaxSheetCol($maxSheetCol)
    {
        return $this->withMaxSheetCol($maxSheetCol);
    }

    /**
     * @param string $maxSheetCol
     *
     * @return $this
     */
    public function withMaxSheetCol($maxSheetCol)
    {
        $this->data['MaxSheetCol'] = $maxSheetCol;
        $this->options['query']['MaxSheetCol'] = $maxSheetCol;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTgtType() instead.
     *
     * @param string $tgtType
     *
     * @return $this
     */
    public function setTgtType($tgtType)
    {
        return $this->withTgtType($tgtType);
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
     * @deprecated deprecated since version 2.0, Use withFitToPagesWide() instead.
     *
     * @param string $fitToPagesWide
     *
     * @return $this
     */
    public function setFitToPagesWide($fitToPagesWide)
    {
        return $this->withFitToPagesWide($fitToPagesWide);
    }

    /**
     * @param string $fitToPagesWide
     *
     * @return $this
     */
    public function withFitToPagesWide($fitToPagesWide)
    {
        $this->data['FitToPagesWide'] = $fitToPagesWide;
        $this->options['query']['FitToPagesWide'] = $fitToPagesWide;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTgtFilePrefix() instead.
     *
     * @param string $tgtFilePrefix
     *
     * @return $this
     */
    public function setTgtFilePrefix($tgtFilePrefix)
    {
        return $this->withTgtFilePrefix($tgtFilePrefix);
    }

    /**
     * @param string $tgtFilePrefix
     *
     * @return $this
     */
    public function withTgtFilePrefix($tgtFilePrefix)
    {
        $this->data['TgtFilePrefix'] = $tgtFilePrefix;
        $this->options['query']['TgtFilePrefix'] = $tgtFilePrefix;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withFitToPagesTall() instead.
     *
     * @param string $fitToPagesTall
     *
     * @return $this
     */
    public function setFitToPagesTall($fitToPagesTall)
    {
        return $this->withFitToPagesTall($fitToPagesTall);
    }

    /**
     * @param string $fitToPagesTall
     *
     * @return $this
     */
    public function withFitToPagesTall($fitToPagesTall)
    {
        $this->data['FitToPagesTall'] = $fitToPagesTall;
        $this->options['query']['FitToPagesTall'] = $fitToPagesTall;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSrcUri() instead.
     *
     * @param string $srcUri
     *
     * @return $this
     */
    public function setSrcUri($srcUri)
    {
        return $this->withSrcUri($srcUri);
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
     * @deprecated deprecated since version 2.0, Use withTgtFilePages() instead.
     *
     * @param string $tgtFilePages
     *
     * @return $this
     */
    public function setTgtFilePages($tgtFilePages)
    {
        return $this->withTgtFilePages($tgtFilePages);
    }

    /**
     * @param string $tgtFilePages
     *
     * @return $this
     */
    public function withTgtFilePages($tgtFilePages)
    {
        $this->data['TgtFilePages'] = $tgtFilePages;
        $this->options['query']['TgtFilePages'] = $tgtFilePages;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTgtUri() instead.
     *
     * @param string $tgtUri
     *
     * @return $this
     */
    public function setTgtUri($tgtUri)
    {
        return $this->withTgtUri($tgtUri);
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
