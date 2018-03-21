<?php namespace UKCASmith\DesignPatterns\Behavioral\NullObject;

use UKCASmith\DesignPatterns\Behavioral\NullObject\Contracts\PlayerMovement;

class PlayerOne implements PlayerMovement
{

    /**
     * Do no action.
     *
     * @return string
     */
    public function right()
    {
        return 'right';
    }

    /**
     * Do no action.
     *
     * @return string
     */
    public function left()
    {
        return 'left';
    }

    /**
     * Do no action.
     *
     * @return string
     */
    public function top()
    {
        return 'top';
    }

    /**
     * Do no action.
     *
     * @return string
     */
    public function bottom()
    {
        return 'bottom';
    }
}