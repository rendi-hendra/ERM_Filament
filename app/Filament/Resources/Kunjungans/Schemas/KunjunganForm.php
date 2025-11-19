<?php

namespace App\Filament\Resources\Kunjungans\Schemas;

use App\Models\Dokter;
use App\Models\Pasien;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Illuminate\Support\Carbon;

class KunjunganForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('pasien_id')->label('Pasien')->options(Pasien::query()->pluck('nama', 'id'))->searchable()->required(),
                DateTimePicker::make('tanggal_kunjungan')->label('Tanggal Kunjungan')->native(false)->default(Carbon::now())->required(),
                TextInput::make('keluhan')->label('Keluhan')->required(),
                Select::make('dokter_id')->label('Dokter')->options(Dokter::query()->pluck('nama', 'id'))->searchable()->required(),
                Select::make('metode_pembayaran')
                    ->label('Metode Pembayaran')
                    ->options([
                        'tunai' => 'Tunai',
                        'asuransi' => 'Asuransi',
                    ])
                    ->reactive(), // WAJIB agar Filament update visibility real-time

                Select::make('asuransi_pasien_id')
                    ->label('Asuransi')
                    ->relationship('asuransi', 'asuransi.nama_asuransi')
                    ->searchable()
                // ->visible(fn(callable $get) => $get('metode_pembayaran') === 'asuransi')
                // ->required(fn(callable $get) => $get('metode_pembayaran') === 'asuransi'),
            ]);
    }
}
