<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CompanyDetailResource\Pages;
use App\Filament\Resources\CompanyDetailResource\RelationManagers;
use App\Models\CompanyDetail;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CompanyDetailResource extends Resource
{
    protected static ?string $model = CompanyDetail::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make([
                    TextInput::make("title")->hint("Enter Title")->required(),
                    RichEditor::make("company_definition")->hint("Enter Company Definition")->required(),
                    RichEditor::make("description")->hint("Enter Service Description")->required(),
                    TextInput::make("employee_number")->hint("Enter Employee Number")->numeric()->minValue(1)->required(),
                    TextInput::make("items_number")->hint("Enter Items Number")->numeric()->minValue(1)->required(),
                    TextInput::make("partners_number")->hint("Enter Partners Number")->numeric()->minValue(1)->required(),
                    TextInput::make("clients_number")->hint("Enter Partners Number")->numeric()->minValue(1)->required(),
                    TextInput::make("copyright")->hint("Enter Copyright")->required(),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make("id")->sortable(),
                TextColumn::make("title")->sortable(),
                TextColumn::make("company_definition")->limit(50)->sortable(),
                TextColumn::make("description")->limit(50)->sortable(),
                TextColumn::make("employee_number")->sortable(),
                TextColumn::make("items_number")->sortable(),
                TextColumn::make("partners_number")->sortable(),
                TextColumn::make("clients_number")->sortable(),
                TextColumn::make("copyright")->sortable(),
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
            'index' => Pages\ListCompanyDetails::route('/'),
            'create' => Pages\CreateCompanyDetail::route('/create'),
            'edit' => Pages\EditCompanyDetail::route('/{record}/edit'),
        ];
    }
}
