<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Interfaces\CreateUserInterface;
use App\Services\CreateUserService;
use App\Repositories\Interfaces\ProductRepositoryInterface;
use App\Repositories\ProductRepository;
use App\Services\Interfaces\CheckIfUserHasPermissionToCommentInterface;
use App\Services\CheckIfUserHasPermissionToCommentService;
use App\Repositories\Interfaces\ProductAttributeValueRepositoryInterface;
use App\Repositories\ProductAttributeValueRepository;
use App\Repositories\Interfaces\OrderedItemRepositoryInterface;
use App\Repositories\OrderedItemRepository;
use App\Repositories\Interfaces\OrderRepositoryInterface;
use App\Repositories\OrderRepository;
use App\Repositories\Interfaces\OrderDetailRepositoryInterface;
use App\Repositories\OrderDetailRepository;
use App\Services\Interfaces\GetDataForAfterOrderMailInterface;
use App\Services\GetDataForAfterOrderMailService;
use App\Repositories\Interfaces\ProductCategoryRepositoryInterface;
use App\Repositories\ProductCategoryRepository;
use App\Repositories\Interfaces\CommentRepositoryInterface;
use App\Repositories\CommentRepository;
use App\Repositories\Interfaces\RatingRepositoryInterface;
use App\Repositories\RatingRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(CreateUserInterface::class, CreateUserService::class);
        $this->app->bind(ProductRepositoryInterface::class, ProductRepository::class);
        $this->app->bind(CheckIfUserHasPermissionToCommentInterface::class, CheckIfUserHasPermissionToCommentService::class);
        $this->app->bind(ProductAttributeValueRepositoryInterface::class, ProductAttributeValueRepository::class);
        $this->app->bind(OrderedItemRepositoryInterface::class, OrderedItemRepository::class);
        $this->app->bind(OrderRepositoryInterface::class, OrderRepository::class);
        $this->app->bind(OrderedItemRepositoryInterface::class, OrderedItemRepository::class);
        $this->app->bind(OrderDetailRepositoryInterface::class, OrderDetailRepository::class);
        $this->app->bind(OrderedItemRepositoryInterface::class, OrderedItemRepository::class);
        $this->app->bind(GetDataForAfterOrderMailInterface::class, GetDataForAfterOrderMailService::class);
        $this->app->bind(ProductCategoryRepositoryInterface::class, ProductCategoryRepository::class);
        $this->app->bind(CommentRepositoryInterface::class, CommentRepository::class);
        $this->app->bind(RatingRepositoryInterface::class, RatingRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
