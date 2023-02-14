<?php

namespace Drupal\demoproduct;

use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelHigh;
use Endroid\QrCode\Label\Alignment\LabelAlignmentCenter;
use Endroid\QrCode\Label\Font\NotoSans;
use Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeModeMargin;
use Endroid\QrCode\Writer\PngWriter;

/**
 * Class GenerateQR.
 * to generate the QRCode
 */
class GenerateQR {

  /**
   * Returns calculated QR code image.
   *
   * @return QR Code image
   */
  public function getQrData(string $qr_content) {

    $result = Builder::create()
      ->writer(new PngWriter())
      ->writerOptions([])
      ->data($qr_content)
      ->encoding(new Encoding('UTF-8'))
      ->errorCorrectionLevel(new ErrorCorrectionLevelHigh())
      ->size(300)
      ->margin(10)
      ->build();

    return $result->getDataUri();

  }
}
