<?php

if (! function_exists('db')) {
    function db($connection=null)
    {
        $factory = app('db');

        if (func_num_args() === 0) {
            return $factory;
        }

        return $factory->connection($connection);
    }
}

if (! function_exists('db_raw')) {
    function db_raw($sql, $connection=null)
    {
        return db($connection)->raw($sql);
    }
}

if (! function_exists('redis')) {
    function redis($connection=null)
    {
        return Redis::connection($connection);
    }
}

if (! function_exists('carbon')) {
    /**
     * @author Jim Rubenstein
     * @see https://twitter.com/jrubsc/status/907776591320764416
     */
    function carbon(...$args)
    {
        return new Carbon\Carbon(...$args);
    }
}
