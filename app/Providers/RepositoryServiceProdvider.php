<?php
/**
 * Created by PhpStorm.
 * User: Andi
 * Date: 29.11.2017
 * Time: 15:26
 */

namespace Gomedo\Providers;

use Gomedo\Repositories\AssetGroupRepository;
use Gomedo\Repositories\AssetRepository;
use Gomedo\Repositories\CategoryRepository;
use Gomedo\Repositories\EntityRepository;
use Gomedo\Repositories\ImageRepository;
use Gomedo\Repositories\ImageTransformRepository;
use Gomedo\Repositories\Interfaces\AssetGroupRepositoryInterface;
use Gomedo\Repositories\Interfaces\AssetRepositoryInterface;
use Gomedo\Repositories\Interfaces\CategoryRepositoryInterface;
use Gomedo\Repositories\Interfaces\EntityRepositoryInterface;
use Gomedo\Repositories\Interfaces\ImageRepositoryInterface;
use Gomedo\Repositories\Interfaces\ImageTransformRepositoryInterface;
use Gomedo\Repositories\Interfaces\PageLayoutRepositoryInterface;
use Gomedo\Repositories\Interfaces\PageRepositoryInterface;
use Gomedo\Repositories\Interfaces\PathRepositoryInterface;
use Gomedo\Repositories\Interfaces\PaymentMethodRepositoryInterface;
use Gomedo\Repositories\Interfaces\ProductFieldDataRepositoryInterface;
use Gomedo\Repositories\Interfaces\ProductFieldRepositoryInterface;
use Gomedo\Repositories\Interfaces\ProductGroupRepositoryInterface;
use Gomedo\Repositories\Interfaces\ProductGroupTypeRepositoryInterface;
use Gomedo\Repositories\Interfaces\ProductPriceRepositoryInterface;
use Gomedo\Repositories\Interfaces\ProductTesterRepositoryInterface;
use Gomedo\Repositories\Interfaces\ProductTestRepositoryInterface;
use Gomedo\Repositories\Interfaces\ProviderRepositoryInterface;
use Gomedo\Repositories\Interfaces\ReviewRepositoryInterface;
use Gomedo\Repositories\Interfaces\UserProductListRepositoryInterface;
use Gomedo\Repositories\Interfaces\UserRepositoryInterface;
use Gomedo\Repositories\Interfaces\VideoRepositoryInterface;
use Gomedo\Repositories\PageLayoutRepository;
use Gomedo\Repositories\PageRepository;
use Gomedo\Repositories\PathRepository;
use Gomedo\Repositories\PaymentMethodRepository;
use Gomedo\Repositories\ProductFieldDataRepository;
use Gomedo\Repositories\ProductFieldRepository;
use Gomedo\Repositories\ProductGroupRepository;
use Gomedo\Repositories\ProductGroupTypeRepository;
use Gomedo\Repositories\ProductPriceRepository;
use Gomedo\Repositories\ProductTesterRepository;
use Gomedo\Repositories\ProductTestRepository;
use Gomedo\Repositories\ProviderRepository;
use Gomedo\Repositories\ReviewRepository;
use Gomedo\Repositories\UserProductListRepository;
use Gomedo\Repositories\UserRepository;
use Gomedo\Repositories\VideoRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProdvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(AssetGroupRepositoryInterface::class, AssetGroupRepository::class);
        $this->app->singleton(AssetRepositoryInterface::class, AssetRepository::class);
        $this->app->singleton(CategoryRepositoryInterface::class, CategoryRepository::class);
        $this->app->singleton(EntityRepositoryInterface::class, EntityRepository::class);
        $this->app->singleton(ImageRepositoryInterface::class, ImageRepository::class);
        $this->app->singleton(ImageTransformRepositoryInterface::class, ImageTransformRepository::class);
        $this->app->singleton(PageLayoutRepositoryInterface::class, PageLayoutRepository::class);
        $this->app->singleton(PageRepositoryInterface::class, PageRepository::class);
        $this->app->singleton(PathRepositoryInterface::class, PathRepository::class);
        $this->app->singleton(PaymentMethodRepositoryInterface::class, PaymentMethodRepository::class);
        $this->app->singleton(ProductFieldDataRepositoryInterface::class, ProductFieldDataRepository::class);
        $this->app->singleton(ProductFieldRepositoryInterface::class, ProductFieldRepository::class);
        $this->app->singleton(ProductGroupRepositoryInterface::class, ProductGroupRepository::class);
        $this->app->singleton(ProductGroupTypeRepositoryInterface::class, ProductGroupTypeRepository::class);
        $this->app->singleton(ProductPriceRepositoryInterface::class, ProductPriceRepository::class);
        $this->app->singleton(ProductTesterRepositoryInterface::class, ProductTesterRepository::class);
        $this->app->singleton(ProductTestRepositoryInterface::class, ProductTestRepository::class);
        $this->app->singleton(ProviderRepositoryInterface::class, ProviderRepository::class);
        $this->app->singleton(ReviewRepositoryInterface::class, ReviewRepository::class);
        $this->app->singleton(UserProductListRepositoryInterface::class, UserProductListRepository::class);
        $this->app->singleton(UserRepositoryInterface::class, UserRepository::class);
        $this->app->singleton(VideoRepositoryInterface::class, VideoRepository::class);
    }

}