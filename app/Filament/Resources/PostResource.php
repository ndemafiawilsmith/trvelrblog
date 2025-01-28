<?php

namespace App\Filament\Resources;

use App\Filament\Clusters\SiteSettings;
use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Category;
use App\Models\Post;
use App\Models\Resource as ModelsResource;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Illuminate\Support\Facades\Auth;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-m-pencil-square';

    // protected static ?string $cluster = SiteSettings::class;
    protected static ?string $navigationGroup = 'Blog';


    public static function form(Form $form): Form
    {
        return $form->schema([


            Tabs::make('Tabs')
                ->tabs([
                    Tabs\Tab::make('Main Content')
                        ->icon('heroicon-m-pencil-square')
                        ->schema([
                            Section::make('Main Content')->columns(2)->schema([


                                FileUpload::make('featured_image')
                                    ->label('Featured Image (565 x 370)')
                                    ->image()
                                    ->columnSpan(2)
                                    // ->imageCropAspectRatio('4:3')
                                    // ->imageResizeTargetWidth('565')
                                    // ->imageResizeTargetHeight('370')
                                    ->imageEditor()
                                    ->imageEditorAspectRatios([
                                        '16:9',
                                        '4:3',
                                        '1:1',
                                    ])
                                    ->directory('uploads/images')
                                    ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/jpg']) // Optionally restrict accepted file types
                                    ->rules('image'), // Optional validation rule to ensure it's an image



                                TextInput::make('title')
                                    ->required()
                                    ->label('Post Title'),

                                Select::make('category_id')
                                    ->label('Category')
                                    ->label('Select Blog Category')
                                    ->options(Category::pluck('name', 'id')),

                                TagsInput::make('tags')
                                    ->label('Tags')
                                ->placeholder('type and press enter'),
                                Repeater::make('content')
                                    ->label('Content Blocks')
                                    ->schema([
                                        Select::make('type')
                                            ->label('Block Type')
                                            ->options([
                                                'text' => 'Text',
                                                'image' => 'Image',
                                                'map' => 'Google Map',
                                                'pdf' => 'PDF Guide',
                                                'video' => 'Youtube Video',
                                                'advert' => 'Advertisement',
                                            ])
                                            ->required()
                                            ->reactive(),

                                        RichEditor::make('text')
                                            ->label('Text')
                                            ->columns(2)
                                            ->visible(fn(callable $get) => $get('type') === 'text'),

                                        FileUpload::make('image')
                                            ->label('Image')
                                            ->directory('uploads/images')
                                            ->visible(fn(callable $get) => $get('type') === 'image'),

                                        TextInput::make('map')
                                            ->label('Google Maps Embed Link')
                                            ->placeholder('Paste Google Maps embed link here...')
                                            ->visible(fn(callable $get) => $get('type') === 'map'),

                                            
                                        TextInput::make('video')
                                            ->label('Youtube Link')
                                            ->placeholder('Paste Youtube Video link here...')
                                            ->visible(fn(callable $get) => $get('type') === 'video'),

                                        // Conditionally show the resource dropdown for PDF type
                                        Select::make('pdf')
                                            ->label('Related Resource')
                                            ->options(fn() => ModelsResource::all()->pluck('name', 'id'))  // Assuming you want to display the resource names
                                            ->visible(fn(callable $get) => $get('type') === 'pdf')
                                            ->nullable(),

                                        FileUpload::make('advert')
                                            ->label('Advertisement Banner (529 x 265)')
                                            ->directory('uploads/advert')
                                            ->visible(fn(callable $get) => $get('type') === 'advert'),
                                    ])
                                    ->collapsible()
                                    ->defaultItems(1)
                                    ->minItems(1)
                                    ->columnSpan(2)
                                    ->maxItems(20),
                            ]),
                        ]),


                    Tabs\Tab::make('SEO')
                        ->icon('heroicon-m-magnifying-glass')
                        ->schema([

                            TextInput::make('meta_title')
                                ->label('Meta Title'),

                            Textarea::make('meta_description')
                                ->label('Meta Description'),

                            TagsInput::make('seo_keywords')
                                ->label('SEO Keywords')
                                ->placeholder('type and press enter'),
                        ]),
                    // ...
                ])->contained(false)
                ->columnSpan(2),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->label('Title')->searchable(),
                TextColumn::make('slug')->label('Slug')
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('created_at')->label('Created At')->date(),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
