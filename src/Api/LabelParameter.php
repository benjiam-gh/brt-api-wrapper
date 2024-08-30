<?php

namespace Andyts93\BrtApiWrapper\Api;

class LabelParameter
{
    /**
     * @var string
     */
    private $outputType;

    /**
     * @var string
     */
    private $offsetX;

    /**
     * @var string
     */
    private $offsetY;

    /**
     * @var string
     */
    private $isBorderRequired;

    /**
     * @var string
     */
    private $isLogoRequired;

    /**
     * @var string
     */
    private $isBarcodeControlRowRequired;

    /**
     * @var string
     */
    private $labelFormat;

    public function __construct(
        $outputType = 'ZPL',
        $offsetX = 0,
        $offsetY = 0,
        $isBorderRequired = 0,
        $isLogoRequired = 0,
        $isBarcodeControlRowRequired = 0,
        $labelFormat = ''
    ) {

        $this->outputType = $outputType;
        $this->offsetX = $offsetX;
        $this->offsetY = $offsetY;
        $this->isBorderRequired = $isBorderRequired;
        $this->isLogoRequired = $isLogoRequired;
        $this->isBarcodeControlRowRequired = $isBarcodeControlRowRequired;
        $this->labelFormat = $labelFormat;
    }

    /**
     * @param string $outputType
     * @return LabelParameter
     */
    public function setOutputType($outputType)
    {
        $this->outputType = $outputType;
        return $this;
    }

    /**
     * @param string $offsetX
     * @return LabelParameter
     */
    public function setOffsetX($offsetX)
    {
        $this->offsetX = $offsetX;
        return $this;
    }

    /**
     * @param string $offsetY
     * @return LabelParameter
     */
    public function setOffsetY($offsetY)
    {
        $this->offsetY = $offsetY;
        return $this;
    }

    /**
     * @param string $isBorderRequired
     * @return LabelParameter
     */
    public function setIsBorderRequired($isBorderRequired)
    {
        $this->isBorderRequired = $isBorderRequired;
        return $this;
    }

    /**
     * @param string $isLogoRequired
     * @return LabelParameter
     */
    public function setIsLogoRequired($isLogoRequired)
    {
        $this->isLogoRequired = $isLogoRequired;
        return $this;
    }

    /**
     * @param string $isBarcodeControlRowRequired
     * @return LabelParameter
     */
    public function setIsBarcodeControlRowRequired($isBarcodeControlRowRequired)
    {
        $this->isBarcodeControlRowRequired = $isBarcodeControlRowRequired;
        return $this;
    }

    /**
     * @param string $labelFormat
     * @return LabelParameter
     */
    public function setLabelFormat($labelFormat)
    {
        $this->labelFormat = $labelFormat;
        return $this;
    }

    public function toArray()
    {
        return [
            'outputType' => $this->outputType,
            'offsetX' => $this->offsetX,
            'offsetY' => $this->offsetY,
            'isBorderRequired' => $this->isBorderRequired ? 1 : 0,
            'isLogoRequired' => $this->isLogoRequired ? 1 : 0,
            'isBarcodeControlRowRequired' => $this->isBarcodeControlRowRequired ? 1 : 0,
            'labelFormat' => $this->labelFormat
        ];
    }
}
