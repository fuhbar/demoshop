<?php

/*
 * (c) Copyright Spryker Systems GmbH 2015
 */

namespace Pyz\Zed\Locale\Business;

use SprykerFeature\Zed\Category\Dependency\Facade\CategoryToLocaleInterface;
use SprykerFeature\Zed\Product\Dependency\Facade\ProductToLocaleInterface;
use SprykerFeature\Zed\ProductCategory\Dependency\Facade\ProductCategoryToLocaleInterface;
use SprykerFeature\Zed\ProductSearch\Dependency\Facade\ProductSearchToLocaleInterface;
use SprykerEngine\Zed\Locale\Business\LocaleFacade as SprykerLocaleFacade;
use SprykerFeature\Zed\Glossary\Dependency\Facade\GlossaryToLocaleInterface;
use SprykerFeature\Zed\Url\Dependency\UrlToLocaleInterface;

class LocaleFacade extends SprykerLocaleFacade implements
    CategoryToLocaleInterface,
    GlossaryToLocaleInterface,
    ProductCategoryToLocaleInterface,
    ProductSearchToLocaleInterface,
    ProductToLocaleInterface,
    UrlToLocaleInterface
{

}
