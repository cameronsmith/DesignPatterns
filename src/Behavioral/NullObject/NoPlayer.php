<?php namespace UKCASmith\DesignPatterns\Behavioral\NullObject;

use UKCASmith\DesignPatterns\Behavioral\NullObject\Contracts\PlayerMovement;

class NoPlayer implements PlayerMovement
{

    /**
     * Turn player right.
     *
     * @return null
     */
    public function right()
    {
        return null;
    }

    /**
     * Turn player left.
     *
     * @return null
     */
    public function left()
    {
        return null;
    }

    /**
     * Move player top.
     *
     * @return null
     */
    public function top()
    {
        return null;
    }

    /**
     * Move player down.
     *
     * @return null
     */
    public function bottom()
    {
        return null;
    }
}