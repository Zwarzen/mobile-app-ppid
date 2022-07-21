<?php

  

namespace App\Models;

  

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

  

class Product extends Model

{

    use HasFactory;

  

    protected $fillable = [

        'nama', 'no_identitas', 'organisasi', 'alamat', 'kontak', 'detail_info_diminta', 'tujuan_penggunaan', 'cara_memperoleh_info', 
        'cara_mendapat_salinan', 'tujuan_skpd',  'date','image'

    ];

}