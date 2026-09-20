<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CompanySetting;
use App\Models\CoreValue;
use App\Models\HeroSlide;
use App\Models\HomeSection;
use App\Models\Product;
use App\Models\Project;
use App\Models\Service;

class PageController extends Controller
{
    /**
     * البيانات المشتركة لكل صفحات الموقع
     */
    private function sharedData(): array
    {
        return [
            'company' => CompanySetting::current(),

            'heroSlides' => HeroSlide::query()
                ->where('is_active', true)
                ->orderBy('sort_order')
                ->get(),

            'services' => Service::query()
                ->where('is_active', true)
                ->orderBy('sort_order')
                ->get(),

            /*
            |--------------------------------------------------------------------------
            | الأقسام
            |--------------------------------------------------------------------------
            */
            'categories' => Category::query()
                ->where('is_active', true)
                ->orderBy('sort_order')
                ->get(),

            /*
            |--------------------------------------------------------------------------
            | المنتجات
            |--------------------------------------------------------------------------
            */
            'products' => Product::query()
                ->with('category')
                ->where('is_active', true)
                ->orderBy('sort_order')
                ->get(),

            'coreValues' => CoreValue::query()
                ->where('is_active', true)
                ->orderBy('sort_order')
                ->get(),

            'projects' => Project::query()
                ->where('is_active', true)
                ->orderBy('sort_order')
                ->get(),

            'homeSections' => HomeSection::query()
                ->where('is_active', true)
                ->get()
                ->keyBy('key'),

            'locale' => app()->getLocale(),
        ];
    }


    /**
     * الصفحة الرئيسية
     */
    public function index()
    {
        return view('pages.home', $this->sharedData());
    }


    /**
     * من نحن
     */
    public function about()
    {
        return view('pages.about', $this->sharedData());
    }


    /**
     * الخدمات
     */
    public function services()
    {
        return view('pages.services', $this->sharedData());
    }


    /**
     * تفاصيل الخدمة
     */
    public function service($slug)
    {
        $data = $this->sharedData();

        $service = Service::query()
            ->where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();

        $data['service'] = $service;

        return view('pages.service', $data);
    }


    /**
     * المنتجات
     */
    public function products()
    {
        return view('pages.products', $this->sharedData());
    }


    /**
     * تفاصيل المنتج
     */
    public function product($slug)
    {
        $data = $this->sharedData();

        $product = Product::query()
            ->with('category')
            ->where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();

        $data['product'] = $product;

        return view('pages.product', $data);
    }


    /**
     * المشروعات
     */
    public function projects()
    {
        return view('pages.projects', $this->sharedData());
    }


    /**
     * تفاصيل المشروع
     */
    public function project($slug)
    {
        $data = $this->sharedData();

        $project = Project::query()
            ->where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();

        $data['project'] = $project;

        return view('pages.project', $data);
    }


    /**
     * تواصل معنا
     */
    public function contact()
    {
        return view('pages.contact', $this->sharedData());
    }
}
   
