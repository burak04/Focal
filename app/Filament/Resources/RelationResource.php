<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RelationResource\Pages;
use App\Filament\Resources\RelationResource\RelationManagers;
use App\Models\Relation;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Columns\CheckboxColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RelationResource extends Resource
{
    protected static ?string $model = Relation::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make([
                    TextInput::make("name")->hint("Enter Relation Name")->required(),
                    TextInput::make("link")->hint("Enter Relation Link")->required(),
                    FileUpload::make("image")->hint("Upload Relation Image"),
                    Toggle::make("is_company")->required()
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make("id")->sortable(),
                TextColumn::make("name")->limit(50)->sortable(),
                TextColumn::make("link")->limit(50)->sortable(),
                ImageColumn::make("image")
                    ->circular()
                    ->label("Relation Image"),
                IconColumn::make("is_company")->boolean("is_company")->label("Primary")
            ])
            ->filters([
                //
            ])
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
            'index' => Pages\ListRelations::route('/'),
            'create' => Pages\CreateRelation::route('/create'),
            'edit' => Pages\EditRelation::route('/{record}/edit'),
        ];
    }
}
