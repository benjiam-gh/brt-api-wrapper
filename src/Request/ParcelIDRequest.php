<?php

namespace Andyts93\BrtApiWrapper\Request;

use Andyts93\BrtApiWrapper\Response\ParcelIDResponse;

class ParcelIDRequest extends BaseRequest
{
    protected $endpoint = 'tracking/parcelID/';
    protected $method = 'GET';
    protected $mandatoryFields = [];

    /**
     * @var string
     */
    private $parcelID;

    public function call()
    {
        return new ParcelIDResponse(parent::call());
    }

    /**
     * @param string $parcelID
     */
    public function setParcelId($parcelID)
    {
        $this->parcelID = $parcelID;
        $this->endpoint = $this->endpoint . '/' . $parcelID;
    }
}
