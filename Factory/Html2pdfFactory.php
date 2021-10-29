<?php

declare(strict_types=1);

namespace Noni\Html2pdfBundle\Factory;

use Spipu\Html2Pdf\Html2Pdf;

final class Html2pdfFactory
{
    private string $orientation;
    private string $format;
    private string $lang;
    private bool $unicode;
    private string $encoding;
    private array $margin;

    public function __construct(string $orientation, string $format, string $lang, bool $unicode, string $encoding, array $margin)
    {
        $this->orientation = $orientation;
        $this->format = $format;
        $this->lang = $lang;
        $this->unicode = $unicode;
        $this->encoding = $encoding;
        $this->margin = $margin;
    }

    public function create(string $orientation = null, string $format = null, string $lang = null, bool $unicode = null, string $encoding = null, array $margin = null): Html2Pdf
    {
        return new Html2Pdf(
            $orientation ?? $this->orientation,
            $format ?? $this->format,
            $lang ?? $this->lang,
            $unicode ?? $this->unicode,
            $encoding ?? $this->encoding,
            $margin ?? $this->margin
        );
    }
}
