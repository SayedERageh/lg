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

class HomeController extends Controller
{
    public function index()
    {
        $company = CompanySetting::current();

        $heroSlides = HeroSlide::query()
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        $services = Service::query()
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        $categories = Category::query()
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        $products = Product::query()
            ->with('category')
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        $coreValues = CoreValue::query()
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        $projects = Project::query()
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        $homeSections = HomeSection::query()
            ->where('is_active', true)
            ->get()
            ->keyBy('key');

        return view('pages.home', compact(
            'company',
            'heroSlides',
            'services',
            'categories',
            'products',
            'coreValues',
            'projects',
            'homeSections'
        ));
    }
}
       
