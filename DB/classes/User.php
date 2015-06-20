<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 20.06.15
 * Time: 17:29
 */

namespace WorkTracker\DB\classes;
use WorkTracker\DB\classes\Job;
use WorkTracker\DB\DataProvider;

class User
{
    private $jobs;

    public function getJobs()
    {
        if (!($this->jobs[0] instanceof Job))
        {
            DataProvider
        }
    }

}