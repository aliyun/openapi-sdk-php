<?php

namespace AlibabaCloud\Imm\V20170906;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateOfficeConversionTask
 *
 * @method string getSrcType()
 * @method string getProject()
 * @method string getIdempotentToken()
 * @method string getPdfVector()
 * @method string getPassword()
 * @method string getStartPage()
 * @method string getNotifyEndpoint()
 * @method string getFitToPagesWide()
 * @method string getTgtFilePrefix()
 * @method string getNotifyTopicName()
 * @method string getModelId()
 * @method string getMaxSheetRow()
 * @method string getMaxSheetCount()
 * @method string getEndPage()
 * @method string getTgtFileSuffix()
 * @method string getSheetOnePage()
 * @method string getMaxSheetCol()
 * @method string getTgtType()
 * @method string getFitToPagesTall()
 * @method string getSrcUri()
 * @method string getTgtFilePages()
 * @method string getTgtUri()
 */
class CreateOfficeConversionTask extends RpcRequest
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
    public $action = 'CreateOfficeConversionTask';

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
     * @param string $idempotentToken
     *
     * @return $this
     */
    public function withIdempotentToken($idempotentToken)
    {
        $this->data['IdempotentToken'] = $idempotentToken;
        $this->options['query']['IdempotentToken'] = $idempotentToken;

        return $this;
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
