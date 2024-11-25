<?php

namespace App\Filament\Resources;

use App\Actions\UploadImageAction;
use App\Filament\Resources\DiagnosticResource\Pages;
use App\Models\Diagnostic;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class DiagnosticResource extends Resource
{
    protected static ?string $model = Diagnostic::class;

    protected static ?string $navigationIcon = 'heroicon-o-beaker';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('disease_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('disease_label')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('image_disease')
                    ->columnSpanFull()
                    ->multiple()
                    ->saveUploadedFileUsing(function (TemporaryUploadedFile $file) {
                        return UploadImageAction::resolve()->execute(
                            file: $file,
                            path: 'diagnostics',
                        );
                    }),
                Forms\Components\Textarea::make('indication')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('cause')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('solution')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('disease_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('disease_label')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image_disease'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListDiagnostics::route('/'),
        ];
    }
}
