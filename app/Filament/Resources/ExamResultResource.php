<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExamResultResource\Pages;
use App\Models\ExamResult;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ExamResultResource extends Resource
{
    protected static ?string $model = ExamResult::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';

    protected static ?string $navigationLabel = 'Examination Results';

    protected static ?string $pluralModelLabel = 'Examination Results';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->label('Examination Name (Example: Mid-Term Examination)')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),

                Select::make('form_level')
                    ->label('Form')
                    ->options([
                        'Form One' => 'Form One',
                        'Form Two' => 'Form Two',
                        'Form Three' => 'Form Three',
                        'Form Four' => 'Form Four',
                        'Form Five' => 'Form Five',
                        'Form Six' => 'Form Six',
                    ])
                    ->required(),

                TextInput::make('year')
                    ->label('Year (Example: 2026)')
                    ->required()
                    ->default(date('Y')),

                FileUpload::make('file_path')
                    ->label('Upload Document/PDF ya Matokeo')
                    ->acceptedFileTypes(['application/pdf'])
                    ->directory('exam-results')
                    ->nullable(),

                TextInput::make('external_link')
                    ->label('Or Put link of Examination Results (URL)')
                    ->url()
                    ->placeholder('https://...')
                    ->nullable(),

                Toggle::make('is_published')
                    ->label('Visible on the website')
                    ->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label('Examination Name')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('form_level')
                    ->label('Form')
                    ->sortable(),

                TextColumn::make('year')
                    ->label('Year')
                    ->sortable(),

                IconColumn::make('is_published')
                    ->label('Visible on the website')
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
            'index' => Pages\ListExamResults::route('/'),
            'create' => Pages\CreateExamResult::route('/create'),
            'edit' => Pages\EditExamResult::route('/{record}/edit'),
        ];
    }
}