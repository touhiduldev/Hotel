<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BookanTableController;
use App\Http\Controllers\BreakfastController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\FoodmenuController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HeaderTopController;
use App\Http\Controllers\LRmenuController;
use App\Http\Controllers\OurChefController;
use App\Http\Controllers\OurStoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SpecialDealController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\TeamDetailsController;
use App\Http\Controllers\TestimonialController;

Auth::routes();

// FRONTEND SECTION

Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/shop', [FrontendController::class, 'shop'])->name('shop');
Route::get('/shop/product/{slug_id}', [FrontendController::class, 'shop_product'])->name('shop.product');

// CART SECTION HERE

Route::post('/add/cart', [CartController::class, 'add_cart'])->name('add.cart');
Route::get('/cart/page', [CartController::class, 'cart_page'])->name('cart.page');
//USER INFORMATION

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/profile', [UserController::class, 'user_profile'])->name('user.profile');
Route::post('/profile/update', [UserController::class, 'profile_update'])->name('profile.update');
Route::post('/password/update', [UserController::class, 'password_update'])->name('password.update');
Route::get('/user/list', [UserController::class, 'user_list'])->name('user.list');
Route::get('/user/delete/{user_id}', [UserController::class, 'user_delete'])->name('user.delete');

// HEADER TOP SECTION START

Route::get('/header/top', [HeaderTopController::class, 'header_top'])->name('header.top');
Route::post('/email/opening/hours', [HeaderTopController::class, 'email_opening_hours'])->name('email.opening.hours');
Route::get('/header/top/delete/{header_id}', [HeaderTopController::class, 'header_top_delete'])->name('header.top.delete');

//LOGOS SECTION HERE

Route::get('/logo', [HeaderTopController::class, 'logo'])->name('logo');
Route::post('/logo/store', [HeaderTopController::class, 'logo_store'])->name('logo.store');
Route::get('/logo/edit/{logo_id}', [HeaderTopController::class, 'logo_edit'])->name('logo.edit');
Route::post('/logo/update', [HeaderTopController::class, 'logo_update'])->name('logo.update');
Route::get('/logo/delete/{logo_id}', [HeaderTopController::class, 'logo_delete'])->name('logo.delete');

// HEADER TOP SECTION END

//CATEGORIES

Route::get('/category', [CategoryController::class, 'category'])->name('category');
Route::post('/category/store', [CategoryController::class, 'category_store'])->name('category.store');
Route::get('/category/delete/{category_id}', [CategoryController::class, 'category_delete'])->name('category.delete');

//SUBCATEGORIES

Route::get('/subcategory', [SubcategoryController::class, 'subcategory'])->name('subcategory');
Route::post('/subcategory/store', [SubcategoryController::class, 'subcategory_store'])->name('subcategory.store');
Route::post('/subcategory/delete/{subcategory_id}', [SubcategoryController::class, 'subcategory_delete'])->name('subcategory.delete');

// BANNER SECTION

Route::get('/banner', [BannerController::class, 'banner'])->name('banner');
Route::post('/banner/store', [BannerController::class, 'banner_store'])->name('banner.store');
Route::get('/banner/edit/{banner_id}', [BannerController::class, 'banner_edit'])->name('banner.edit');
Route::post('/banner/update', [BannerController::class, 'banner_update'])->name('banner.update');
Route::get('/banner/delete/{bannr_id}', [BannerController::class, 'banner_delete'])->name('banner.delete');

Route::post('/shape/store', [BannerController::class, 'shape_store'])->name('shape.store');
Route::get('/shape/delete/{shape_id}', [BannerController::class, 'shape_delete'])->name('shape.delete');

// OUR STORY SECTION

Route::get('/story', [OurStoryController::class, 'story'])->name('story');
Route::post('/story/store', [OurStoryController::class, 'story_store'])->name('story.store');
Route::get('/list/story', [OurStoryController::class, 'story_list'])->name('story.list');
Route::get('/story/delete/{story_id}', [OurStoryController::class, 'story_delete'])->name('story.delete');

// PRODUCT, CATEGORY AND SUBCATEGORY

Route::get('/product/category', [ProductController::class, 'p_category'])->name('p.category');
Route::post('/product/category/store', [ProductController::class, 'pcategory_store'])->name('p.category.store');
Route::get('/product/category/delete{pcategory_id}', [ProductController::class, 'pcategory_delete'])->name('p.category.delete');

Route::get('/product/subcategory', [ProductController::class, 'p_subcategory'])->name('p.subcategory');
Route::post('/product/subcategory/store', [ProductController::class, 'p_subcategory_store'])->name('p.subcategory.store');
Route::get('/product/subcategory/delete/{psubcategory_id}', [ProductController::class, 'p_subcategory_delete'])->name('p.subcategory.delete');

Route::get('/product', [ProductController::class, 'product'])->name('product');
Route::post('/product/store', [ProductController::class, 'product_store'])->name('product.store');
Route::get('/list/product', [ProductController::class, 'product_list'])->name('product.list');
Route::get('/product/delete/{product_id}', [ProductController::class, 'product_delete'])->name('product.delete');
Route::get('/product/force/delete/{dlt_trashed}', [ProductController::class, 'delete_trashed'])->name('delete.trashed');
Route::get('/product/restore/{restore_id}', [ProductController::class, 'restore'])->name('restore');

Route::post('/getsubcategory', [ProductController::class, 'getsubcategory']);
Route::post('/getpsubcategory', [ProductController::class, 'getpsubcategory']);

// WEEKLY MENU ROUTE SECTION

Route::get('/menu/left/right', [LRmenuController::class, 'lr_menu'])->name('lr.menu');
Route::post('/menu/left/right/store', [LRmenuController::class, 'lrmenu_store'])->name('lrmenu.store');
Route::get('/weekly/list/menu', [LRmenuController::class, 'weekly_menu_list'])->name('weekly.menu.list');

Route::get('/left/menu/edit/{lmenu_id}', [LRmenuController::class, 'lmenu_edit'])->name('lmenu.edit');
Route::post('/left/menu/update', [LRmenuController::class, 'lmenu_update'])->name('lmenu.update');
Route::get('/left/menu/delete/{lmenu_id}', [LRmenuController::class, 'lmenu_delete'])->name('lmenu.delete');

Route::get('/right/menu/edit/{rmenu_id}', [LRmenuController::class, 'rmenu_edit'])->name('rmenu.edit');
Route::post('/right/menu/update', [LRmenuController::class, 'rmenu_update'])->name('rmenu.update');
Route::get('/right/menu/delete/{rmenu_id}', [LRmenuController::class, 'rmenu_delete'])->name('rmenu.delete');

// BREAKFAST ITEM SECTION

Route::get('/breakfast', [BreakfastController::class, 'breakfast'])->name('breakfast');
Route::post('/breakfast/store', [BreakfastController::class, 'breakfast_store'])->name('breakfast.store');
Route::get('/breakfast/delete/{breakfast_id}', [BreakfastController::class, 'breakfast_delete'])->name('breakfast.delete');

// PROMOTION SECTION

Route::get('/summer/promo', [PromotionController::class, 'summer_promo'])->name('summer.promo');
Route::post('/summer/promo/store', [PromotionController::class, 'promo_store'])->name('promo.store');
Route::get('/list/summer/promo', [PromotionController::class, 'promo_list'])->name('promo.list');
Route::get('/promo/top/delete/{promo_top_id}', [PromotionController::class, 'promo_top_dlt'])->name('promo.top.dlt');
Route::get('/promo/bottom/delete/{promo_bottom_id}', [PromotionController::class, 'promo_bottom_dlt'])->name('promo.bottom.dlt');

// TESTIMONIALS SECTION

Route::get('/testimonials', [TestimonialController::class, 'testimonials'])->name('testimonials');
Route::post('/testimonials/store', [TestimonialController::class, 'test_store'])->name('test.store');
Route::get('/testimonial/list', [TestimonialController::class, 'test_list'])->name('test.list');
Route::get('/testimonial/delete/{test_id}', [TestimonialController::class, 'test_delete'])->name('test.delete');

// DISCOUNT SECTION

Route::get('/discount', [DiscountController::class, 'discount'])->name('discount');
Route::post('/discount/store', [DiscountController::class, 'discount_store'])->name('discount.store');
Route::get('/discount/delete/{discount_id}', [DiscountController::class, 'delete_discount'])->name('delete.discount');

// TICROU BLOG SECTION HERE

Route::get('/blog/heading', [BlogController::class, 'heading'])->name('heading');
Route::post('/heading/title/store', [BlogController::class, 'heading_title_store'])->name('heading.title.store');
Route::get('/heading/title/delete/{head_id}', [BlogController::class, 'head_title_delete'])->name('head.title.delete');

Route::get('/blog/category', [BlogController::class, 'blog_category'])->name('blog.category');
Route::post('/blog/category/store', [BlogController::class, 'blog_category_store'])->name('blog.category.store');
Route::get('/blog/category/delete/{blog_category_id}', [BlogController::class, 'b_cat_delete'])->name('b.cat.delete');

Route::get('/post/new/blog', [BlogController::class, 'blog'])->name('blog');
Route::post('/blog/store', [BlogController::class, 'blog_store'])->name('blog.store');
Route::get('/all/blog', [BlogController::class, 'all_blogs'])->name('all.blogs');

Route::get('/blog/edit/{blog_id}', [BlogController::class, 'blog_edit'])->name('blog.edit');
Route::post('/blog/update', [BlogController::class, 'blog_update'])->name('blog.update');
Route::get('/blog/delete/{blog_id}', [BlogController::class, 'blog_delete'])->name('blog.delete');

// FOOD MENU SECTION HERE

Route::get('/food/menu/category', [FoodmenuController::class, 'food_menu_category'])->name('food.menu.category');
Route::post('/food/category/store', [FoodmenuController::class, 'food_category_store'])->name('food.category.store');

Route::get('/person/booking/type', [FoodmenuController::class, 'person_booking_type'])->name('person.booking.type');
Route::post('/number/booking/store', [FoodmenuController::class, 'number_booking_store'])->name('number.booking.store');

Route::get('/number/person/delete/{person_id}', [FoodmenuController::class, 'person_delete'])->name('person.delete');
Route::get('/booking/type/delete/{booking_id}', [FoodmenuController::class, 'booking_delete'])->name('booking.delete');

Route::get('/food/item', [FoodmenuController::class, 'food_item'])->name('food.item');
Route::post('/food/item/store', [FoodmenuController::class, 'item_store'])->name('item.store');
Route::get('/food/item/edit/{item_id}', [FoodmenuController::class, 'item_edit'])->name('item.edit');
Route::post('/food/item/update', [FoodmenuController::class, 'item_update'])->name('item.update');
Route::get('/food/item/delete/{item_id}', [FoodmenuController::class, 'item_delete'])->name('item.delete');

Route::post('/getfoodcategory', [FoodmenuController::class, 'getfood_category']);

Route::get('/add/food/menu', [FoodmenuController::class, 'food_menu'])->name('food.menu');
Route::post('/food/menu/store', [FoodmenuController::class, 'food_menu_store'])->name('food.menu.store');
Route::get('/food/menu/list', [FoodmenuController::class, 'menu_list'])->name('menu.list');

// BOOK AN TABLE SECTION HERE

Route::post('/book/table/store', [BookanTableController::class, 'book_table_store'])->name('book.table.store');

// ROLE CONTROLLER

// Route::get('/role/datatable', [RoleController::class, 'role_datatable'])->name('role.datatable');
Route::get('/create/role', [RoleController::class, 'create_role'])->name('create.role');
Route::post('/permissions/store', [RoleController::class, 'permissions_store'])->name('permissions.store');
Route::post('/role/store', [RoleController::class, 'role_store'])->name('role.store');

Route::get('/assign/role', [RoleController::class, 'assign_role'])->name('assign.role');
Route::post('/assign/role/store', [RoleController::class, 'assign_role_store'])->name('assign.role.store');


Route::get('/remove/assign/{user_id}', [RoleController::class, 'remove_assign'])->name('remove.assign');

// Route::get('/role/edit/{role_id}', [RoleController::class, 'role_edit'])->name('role.edit');
// Route::post('/role/update', [RoleController::class, 'role_update'])->name('role.update');

// Gallery SECTION

Route::get('/gallery', [GalleryController::class, 'gallery'])->name('gallery');
Route::get('/add/gallery', [GalleryController::class, 'add_gallery'])->name('add.gallery');
Route::post('/gallery/store', [GalleryController::class, 'gallery_store'])->name('gallery.store');
Route::get('/gallery/details', [GalleryController::class, 'gallery_details'])->name('gallery.details');

// SPECIAL DEAL

Route::get('/special/deal/items', [SpecialDealController::class, 'special_deal_items'])->name('special.deal.items');
Route::post('/specail/item/store', [SpecialDealController::class, 'special_item_store'])->name('special.items.store');

Route::get('/special/item/list', [SpecialDealController::class, 'special_item_list'])->name('special.item.list');


Route::get('/special/deal/item/edit/{special_id}', [SpecialDealController::class, 'special_deal_item_edit'])->name('special.deal.item.edit');
Route::post('/special/item/update', [SpecialDealController::class, 'special_item_update'])->name('special.item.update');

Route::get('/special/item/delete/{special_id}', [SpecialDealController::class, 'special_item_delete'])->name('special.item.delete');

Route::get('/special/deal/details/{slug_id}', [SpecialDealController::class, 'special_deal_details'])->name('special.deal.details');


// OUR CHEF SECTION HERE

Route::get('/chef/details', [OurChefController::class, 'chef_details'])->name('chef.details');
Route::post('/chef/details/store', [OurChefController::class, 'chef_details_store'])->name('chef.details.store');
Route::get('/all/chef', [OurChefController::class, 'all_chef'])->name('all.chef');
Route::get('/chef/delete/{chef_id}', [OurChefController::class, 'chef_delete'])->name('chef.delete');

Route::get('/chef/percentage', [OurChefController::class, 'chef_percentage'])->name('chef.percentage');
Route::post('/percentage/store', [OurChefController::class, 'percentage_store'])->name('percentage.store');

// TEAM DETAILS

Route::get('/team/details/{slug_id}', [TeamDetailsController::class, 'team_details'])->name('team.details');
Route::get('/our/team/members', [TeamDetailsController::class, 'all_team'])->name('all.team');


// customer controller

Route::get('/customer/account/register', [CustomerController::class, 'customer_register'])->name('customer.register');
Route::post('/customer/account/registration', [CustomerController::class, 'customer_acc_register'])->name('customer.acc.register');
Route::get('/customer/account/login', [CustomerController::class, 'customer_login'])->name('customer.login');
Route::post('/customer/login', [CustomerController::class, 'customer_acc_login'])->name('customer.acc.login');
