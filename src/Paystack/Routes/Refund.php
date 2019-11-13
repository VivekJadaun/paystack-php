<?php

namespace Yabacon\Paystack\Routes;

use Yabacon\Paystack\Contracts\RouteInterface;

class Refund implements RouteInterface
{

    public static function root()
    {
        return '/refund';
    }

    public static function create()
    {
        return [
            RouteInterface::METHOD_KEY => RouteInterface::POST_METHOD,
            RouteInterface::ENDPOINT_KEY => Refund::root(),
            RouteInterface::PARAMS_KEY => [
                'transaction',
                'amount',
                'currency',
                'customer_note',
                'merchant_note',
            ],
        ];
    }

    public static function fetch()
    {
        return [
            RouteInterface::METHOD_KEY => RouteInterface::GET_METHOD,
            RouteInterface::ENDPOINT_KEY => Refund::root() . '/{id}',
            RouteInterface::ARGS_KEY => ['id'],
            RouteInterface::REQUIRED_KEY => [RouteInterface::ARGS_KEY => ['id']],
        ];
    }

    public static function getList()
    {
        return [
            RouteInterface::METHOD_KEY => RouteInterface::GET_METHOD,
            RouteInterface::ENDPOINT_KEY => Refund::root(),
            RouteInterface::PARAMS_KEY => [
                'perPage',
                'page',
                'reference',
                'currency'
            ],
        ];
    }
}
