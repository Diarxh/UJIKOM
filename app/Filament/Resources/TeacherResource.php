<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TeacherResource\Pages;
use App\Filament\Resources\TeacherResource\RelationManagers;
use App\Models\Teacher;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Forms\Components;
use Filament\Tables\Columns;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Actions\Action;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;


class TeacherResource extends Resource
{
    protected static ?string $model = Teacher::class;

    protected static ?string $navigationGroup = 'Administrasi';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Components\TextInput::make('name')->required(),
            Components\TextInput::make('subject')->required(),
            Components\DatePicker::make('hire_date')->required(),
            Components\TextInput::make('phone')->nullable(),
            Components\TextInput::make('email')->email()->nullable(),
            Components\TextInput::make('gaji_pokok')->numeric()->suffix('Rp')->required(),
            Components\TextInput::make('tunjangan')->numeric()->suffix('Rp')->nullable(),
            Components\TextInput::make('potongan')->numeric()->suffix('Rp')->nullable(),
            Components\TextInput::make('total_gaji')
                ->numeric()
                ->suffix('Rp')
                ->readOnly() // Hanya bisa dibaca, dihitung otomatis
                ->afterStateHydrated(function (Components\TextInput $component, $state, $record) {
                    $component->state(($record->gaji_pokok ?? 0) + ($record->tunjangan ?? 0) - ($record->potongan ?? 0));
                }),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Columns\TextColumn::make('name'),
                Columns\TextColumn::make('subject'),
                Columns\TextColumn::make('hire_date')->date(),
                Columns\TextColumn::make('phone'),
                Columns\TextColumn::make('email'),
                Columns\TextColumn::make('gaji_pokok')->formatStateUsing(fn($state) => 'Rp ' . number_format($state, 0, ',', '.')),
                Columns\TextColumn::make('tunjangan')->formatStateUsing(fn($state) => 'Rp ' . number_format($state, 0, ',', '.') ?? '-'),
                Columns\TextColumn::make('potongan')->formatStateUsing(fn($state) => 'Rp ' . number_format($state, 0, ',', '.') ?? '-'),
                Columns\TextColumn::make('total_gaji')->formatStateUsing(fn($state) => 'Rp ' . number_format($state, 0, ',', '.'))->sortable(),
                Columns\TextColumn::make('created_at')->dateTime(),
            ])
            ->filters([
                // Anda bisa menambahkan filter jika diperlukan
                Filter::make('created_at')
                    ->form([
                        Components\DatePicker::make('created_from'),
                        Components\DatePicker::make('created_until'),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when(
                                $data['created_from'],
                                fn(Builder $query, $date): Builder => $query->whereDate('created_at', '>=', $date),
                            )
                            ->when(
                                $data['created_until'],
                                fn(Builder $query, $date): Builder => $query->whereDate('created_at', '<=', $date),
                            );
                    }),
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                DeleteBulkAction::make(),
            ])
            ->modifyQueryUsing(function (Builder $query) {
                // Anda bisa menyesuaikan query jika diperlukan
            });
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
            'index' => Pages\ListTeachers::route('/'),
            'create' => Pages\CreateTeacher::route('/create'),
            'edit' => Pages\EditTeacher::route('/{record}/edit'),
        ];
    }
}