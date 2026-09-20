<?php

namespace App\Filament\Resources\Products\Schemas;

use App\Models\Category;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('بيانات المنتج')
                    ->schema([

                        TextInput::make('name_ar')
                            ->label('اسم المنتج بالعربي')
                            ->required()
                            ->maxLength(255),

                        TextInput::make('name_en')
                            ->label('اسم المنتج بالإنجليزي')
                            ->required()
                            ->maxLength(255),

                        Select::make('category_id')
                            ->label('القسم')
                            ->options(
                                Category::where('is_active', true)
                                    ->orderBy('sort_order')
                                    ->pluck('name_ar', 'id')
                            )
                            ->required(),

                        TextInput::make('slug')
                            ->label('الرابط')
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->maxLength(255),

                        Textarea::make('description_ar')
                            ->label('الوصف بالعربي')
                            ->rows(5),

                        Textarea::make('description_en')
                            ->label('الوصف بالإنجليزي')
                            ->rows(5),

                        FileUpload::make('image')
                            ->label('صورة المنتج')
                            ->image()
                            ->disk('public')
                            ->directory('products')
                            ->imageEditor()
                            ->columnSpanFull(),

                        TextInput::make('price')
                            ->label('السعر')
                            ->numeric()
                            ->prefix('جنيه')
                            ->nullable(),

                        TextInput::make('sort_order')
                            ->label('ترتيب العرض')
                            ->numeric()
                            ->default(0),

                        Toggle::make('is_active')
                            ->label('المنتج نشط')
                            ->default(true),

                    ])
                    ->columns(2),

            ]);
    }
}