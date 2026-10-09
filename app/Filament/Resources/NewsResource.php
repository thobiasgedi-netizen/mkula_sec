<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NewsResource\Pages;
use App\Models\News;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class NewsResource extends Resource
{
    protected static ?string $model = News::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    protected static ?string $navigationLabel = 'News & Announcements';

    protected static ?string $pluralModelLabel = 'News & Announcements';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->label('Title')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),

                // Imerekebishwa hapa: Imeondolewa ->image() ili kuruhusu PDF, Docs, Video na Picha zote
                FileUpload::make('image')
                    ->label('Attachment (Image, PDF, Document, Video)')
                    ->directory('news-attachments')
                    ->nullable()
                    ->columnSpanFull(),

                RichEditor::make('content')
                    ->label('Content')
                    ->required()
                    ->columnSpanFull(),

                Toggle::make('is_published')
                    ->label('Visible on the website')
                    ->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // Imebadilishwa kutoka ImageColumn kwenda TextColumn ili kuzuia error iwapo faili siyo picha (kama PDF)
                TextColumn::make('image')
                    ->label('Attachment')
                    ->limit(30),

                TextColumn::make('title')
                    ->label('News Title')
                    ->searchable()
                    ->sortable()
                    ->limit(50),

                IconColumn::make('is_published')
                    ->label('Published')
                    ->boolean(),

                TextColumn::make('created_at')
                    ->label('Date Posted')
                    ->dateTime('d M Y')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListNews::route('/'),
            'create' => Pages\CreateNews::route('/create'),
            'edit' => Pages\EditNews::route('/{record}/edit'),
        ];
    }
}