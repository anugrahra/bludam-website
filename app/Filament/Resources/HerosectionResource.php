<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HerosectionResource\Pages;
use App\Filament\Resources\HerosectionResource\RelationManagers;
use App\Models\Herosection;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Storage;

class HerosectionResource extends Resource
{
    protected static ?string $model = Herosection::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    Forms\Components\TextInput::make('title')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('subtitle')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\FileUpload::make('background')
                        ->required()->image()->disk('public')
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('subtitle')->sortable()->searchable(),
                Tables\Columns\ImageColumn::make('background'),
                Tables\Columns\TextColumn::make('updated_at')->sortable()
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make()->after(function (Collection $records) {
                    foreach($records as $key => $value) {
                        if($value->background) {
                            Storage::disk('public')->delete($value->background);
                        }
                    }
                }),
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
            'index' => Pages\ListHerosections::route('/'),
            'create' => Pages\CreateHerosection::route('/create'),
            'edit' => Pages\EditHerosection::route('/{record}/edit'),
        ];
    }    
}
