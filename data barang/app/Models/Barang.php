<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
	use HasFactory;

	protected $table = 'barang';

	protected $fillable = ['kode_barang', 'nama_barang', 'id_kategori', 'harga', 'jumlah'];

    public function barang()
	{
		return $this->hasMany(Barang::class, 'id_kategori');
    }

	public function kategori()
	{
		return $this->belongsTo(Kategori::class, 'id_kategori');
	}
}
