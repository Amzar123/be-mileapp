<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Package extends Eloquent
{
    // use HasFactory;
    protected $connection = "mongodb";
    protected $collection = "packages";

    protected $fillable = [
        'customer_name',
        "transaction_id",
        "customer_name",
        "customer_code",
        "transaction_amount",
        "transaction_discount",
        "transaction_additional_field",
        "transaction_payment_type",
        "transaction_state",
        "transaction_code",
        "transaction_order",
        "location_id",
        "organization_id",
        "created_at",
        "updated_at",
        "transaction_payment_type_name",
        "transaction_cash_amount",
        "transaction_cash_change",
        "customer_attribute.Nama_Sales",
        "customer_attribute.TOP",
        "customer_attribute.Jenis_Pelanggan",
        "connote_id",
        "connote",
        "origin_data",
        "destination_data",
        "koli_data",
        "custom_field",
    ];

}
