<?php

namespace Bravo3\ImageManager\Entities;

/**
 * A set of rules for resampling images.
 */
class ImageCropDimensions
{
    /**
     * @var int
     */
    protected $x;

    /**
     * @var int
     */
    protected $y;

    /**
     * @var int
     */
    protected $width;

    /**
     * @var int
     */
    protected $height;

    /**
     * @param int $width  width of the crop
     * @param int $height height of the crop
     * @param int $x      crop start pixel in the x-axis of the image
     * @param int $y      crop start pixel in the y-axis of the image
     */
    public function __construct($width, $height, $x = 0, $y = 0)
    {
        $this->width  = $width;
        $this->height = $height;
        $this->x      = $x;
        $this->y      = $y;
    }

    /**
     * Creates a signature containing the crop-dimension specification.
     *
     * @return string
     */
    public function __toString()
    {
        return 'x'.($this->getX() ?: '-').
               'y'.($this->getY() ?: '-').
               'w'.($this->getWidth() ?: '-').
               'h'.($this->getHeight() ?: '-');
    }

    /**
     * Set x.
     *
     * @param int $x
     *
     * @return $this
     */
    public function setX($x)
    {
        $this->x = $x;

        return $this;
    }

    /**
     * Set y.
     *
     * @param int $y
     *
     * @return $this
     */
    public function setY($y)
    {
        $this->y = $y;

        return $this;
    }

    /**
     * Set width.
     *
     * @param int $width
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Set height.
     *
     * @param int $height
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get $x crop start pixel in the x-axis of the image.
     *
     * @return int
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * Get $y crop start pixel in the x-axis of the image.
     *
     * @return int
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * Get crop width.
     *
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Get crop height.
     *
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }
}
