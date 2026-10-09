<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JoiningInstructionResource\Pages;
use App\Models\JoiningInstruction;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class JoiningInstructionResource extends Resource
{
    protected static ?string $model = JoiningInstruction::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationLabel = 'Joining Instructions';

    protected static ?string $pluralModelLabel = 'Joining Instructions';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->label('Instruction Title (Example: Form One Joining Instruction)')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),

                TextInput::make('academic_year')
                    ->label('Academic Year (Example: 2026/2027)')
                    ->required()
                    ->placeholder('2026/2027'),

                Toggle::make('is_active')
                    ->label('Is Active for Students')
                    ->default(true),

                FileUpload::make('file_path')
                    ->label('Upload PDF File')
                    ->acceptedFileTypes(['application/pdf'])
                    ->directory('joining-instructions')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label('Title')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('academic_year')
                    ->label('Academic Year')
                    ->sortable(),

                IconColumn::make('is_active')
                    ->label('Active')
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
            'index' => Pages\ListJoiningInstructions::route('/'),
            'create' => Pages\CreateJoiningInstruction::route('/create'),
            'edit' => Pages\EditJoiningInstruction::route('/{record}/edit'),
        ];
    }
}