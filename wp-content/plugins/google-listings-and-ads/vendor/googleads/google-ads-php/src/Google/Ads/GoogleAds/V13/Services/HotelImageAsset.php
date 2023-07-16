<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/services/travel_asset_suggestion_service.proto

namespace Google\Ads\GoogleAds\V13\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A single image asset suggestion for a hotel.
 *
 * Generated from protobuf message <code>google.ads.googleads.v13.services.HotelImageAsset</code>
 */
class HotelImageAsset extends \Google\Protobuf\Internal\Message
{
    /**
     * URI for the image.
     *
     * Generated from protobuf field <code>string uri = 1;</code>
     */
    protected $uri = '';
    /**
     * The Image asset type. For example, MARKETING_IMAGE,
     * PORTRAIT_MARKETING_IMAGE, etc.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.enums.AssetFieldTypeEnum.AssetFieldType asset_field_type = 2;</code>
     */
    protected $asset_field_type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $uri
     *           URI for the image.
     *     @type int $asset_field_type
     *           The Image asset type. For example, MARKETING_IMAGE,
     *           PORTRAIT_MARKETING_IMAGE, etc.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V13\Services\TravelAssetSuggestionService::initOnce();
        parent::__construct($data);
    }

    /**
     * URI for the image.
     *
     * Generated from protobuf field <code>string uri = 1;</code>
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * URI for the image.
     *
     * Generated from protobuf field <code>string uri = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->uri = $var;

        return $this;
    }

    /**
     * The Image asset type. For example, MARKETING_IMAGE,
     * PORTRAIT_MARKETING_IMAGE, etc.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.enums.AssetFieldTypeEnum.AssetFieldType asset_field_type = 2;</code>
     * @return int
     */
    public function getAssetFieldType()
    {
        return $this->asset_field_type;
    }

    /**
     * The Image asset type. For example, MARKETING_IMAGE,
     * PORTRAIT_MARKETING_IMAGE, etc.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.enums.AssetFieldTypeEnum.AssetFieldType asset_field_type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setAssetFieldType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V13\Enums\AssetFieldTypeEnum\AssetFieldType::class);
        $this->asset_field_type = $var;

        return $this;
    }

}

