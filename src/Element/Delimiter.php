<?php

/*
 * This file is part of the commonmark-php package.
 *
 * (c) Colin O'Dell <colinodell@gmail.com>
 *
 * Original code based on stmd.js
 *  - (c) John MacFarlane
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ColinODell\CommonMark\Element;

class Delimiter
{
    /** @var String */
    protected $char;

    /** @var int */
    protected $numDelims;

    /** @var int */
    protected $pos;

    /** @var Delimiter|null */
    protected $previous;

    /** @var Delimiter|null */
    protected $next;

    /** @var bool */
    protected $canOpen;

    /** @var bool */
    protected $canClose;

    /** @var int|null */
    protected $index;

    /**
     * @param string    $char
     * @param int       $numDelims
     * @param int       $pos
     * @param bool      $canOpen
     * @param bool      $canClose
     * @param int|null  $index
     */
    public function __construct($char, $numDelims, $pos, $canOpen, $canClose, $index = null)
    {
        $this->char = $char;
        $this->numDelims = $numDelims;
        $this->pos = $pos;
        $this->canOpen = $canOpen;
        $this->canClose = $canClose;
        $this->index = $index;
    }

    /**
     * @return boolean
     */
    public function canClose()
    {
        return $this->canClose;
    }

    /**
     * @return boolean
     */
    public function canOpen()
    {
        return $this->canOpen;
    }

    /**
     * @return String
     */
    public function getChar()
    {
        return $this->char;
    }

    /**
     * @return int|null
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * @return Delimiter|null
     */
    public function getNext()
    {
        return $this->next;
    }

    /**
     * @param Delimiter|null $next
     *
     * @return $this
     */
    public function setNext($next)
    {
        $this->next = $next;

        return $this;
    }

    /**
     * @return int
     */
    public function getNumDelims()
    {
        return $this->numDelims;
    }

    /**
     * @param int $numDelims
     *
     * @return $this
     */
    public function setNumDelims($numDelims)
    {
        $this->numDelims = $numDelims;

        return $this;
    }

    /**
     * @return int
     */
    public function getPos()
    {
        return $this->pos;
    }

    /**
     * @return Delimiter|null
     */
    public function getPrevious()
    {
        return $this->previous;
    }

    /**
     * @param Delimiter|null $previous
     *
     * @return $this
     */
    public function setPrevious($previous)
    {
        $this->previous = $previous;

        return $this;
    }
}
