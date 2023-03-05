<?php

declare(strict_types=1);

/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */

use Hyperf\HttpServer\Router\Router;

\Crayoon\HyperfGrpc\GrpcHelper::RegisterRoutes(function () {
    // 注意服务名称、方法名称需要与proto声明的服务一致
    Router::addGroup("/mall.ProductSrv", function () {
        Router::post("/create", [\App\Controller\ProductSrvController::class, 'create']);
        Router::post("/getList", [\App\Controller\ProductSrvController::class, 'getList']);
        Router::post("/getStock", [\App\Controller\ProductSrvController::class, 'getStock']);
        Router::post("/incStock", [\App\Controller\ProductSrvController::class, 'incStock']);
        Router::post("/decStock", [\App\Controller\ProductSrvController::class, 'decStock']);
    });
});