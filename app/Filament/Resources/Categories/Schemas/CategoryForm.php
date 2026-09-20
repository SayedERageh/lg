<?php

namespace App\Filament\Resources\Categories\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class CategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('بيانات التصنيف')
                    ->schema([

                        TextInput::make('name_ar')
                            ->label('اسم التصنيف بالعربي')
                            ->required()
                            ->maxLength(255),

                        TextInput::make('name_en')
                            ->label('اسم التصنيف بالإنجليزي')
                            ->required()
                            ->maxLength(255),

                        TextInput::make('slug')
                            ->label('الرابط المختصر')
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->maxLength(255)
                            ->helperText('مثال: lg-parts'),

                        Textarea::make('description_ar')
                            ->label('الوصف بالعربي')
                            ->rows(4)
                            ->columnSpanFull(),

                        Textarea::make('description_en')
                            ->label('الوصف بالإنجليزي')
                            ->rows(4)
                            ->columnSpanFull(),

                        FileUpload::make('image')
                            ->label('صورة التصنيف')
                            ->image()
                            ->disk('public')
                            ->directory('categories')
                            ->imageEditor()
                            ->columnSpanFull(),

                        Toggle::make('is_active')
                            ->label('التصنيف فعال')
                            ->default(true),

                        TextInput::make('sort_order')
                            ->label('ترتيب التصنيف')
                            ->numeric()
                            ->default(0)
                            ->minValue(0),

                    ])
                    ->columns(2),

            ]);
    }
}