<?php

namespace App\Filament\Resources;

use App\Actions\UploadImageAction;
use App\Filament\Resources\PlantResource\Pages;
use App\Models\Plant;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class PlantResource extends Resource
{
    protected static ?string $model = Plant::class;

    protected static ?string $navigationIcon = 'heroicon-o-archive-box';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('latin_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('icon_plant')
                    ->image()
                    ->columnSpanFull(),
                // ->saveUploadedFileUsing(function (TemporaryUploadedFile $file) {
                //     return UploadImageAction::resolve()->execute(
                //         file: $file,
                //         path: 'plants',
                //     );
                // }),
                Forms\Components\TextInput::make('fun_fact')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('duration_plant')
                    ->required()
                    ->integer(),
                Forms\Components\Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('planting_guide')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('fertilizer_type')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('latin_name')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('icon_plant'),
                Tables\Columns\TextColumn::make('fun_fact'),
                Tables\Columns\TextColumn::make('duration_plant')
                    ->suffix(' Days'),
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
                Tables\Actions\EditAction::make()
                    ->mutateRecordDataUsing(function (array $data) {
                        $data['icon_plant'] = basename($data['icon_plant']);

                        return $data;
                    }),
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
            'index' => Pages\ListPlants::route('/'),
        ];
    }
}
