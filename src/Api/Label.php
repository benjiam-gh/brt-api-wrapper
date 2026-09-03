<?php

namespace Andyts93\BrtApiWrapper\Api;

class Label
{
    /**
     * @var int
     */
    public $dataLength;

    /**
     * @var string
     */
    public $parcelID;

    /**
     * @var string
     */
    public $stream;

    /**
     * @var string
     */
    public $trackingByParcelID;

    /**
     * @var string
     */
    public $parcelNumberGeoPost;

    public function __construct(
        $dataLength,
        $parcelID,
        $stream,
        $trackingByParcelID = null,
        $parcelNumberGeoPost = null
    ) {
        $this->dataLength = $dataLength;
        $this->parcelID = $parcelID;
        $this->trackingByParcelID = $trackingByParcelID;
        $this->parcelNumberGeoPost = $parcelNumberGeoPost;
        $this->stream = $stream !== null ? base64_decode($stream) : null;
    }
}
