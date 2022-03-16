<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;

class Asset extends Model
{
    use HasFactory;
    
    public function setEmpIdAttribute($value)
    {
        $this->attributes['emp_id'] = Crypt::encryptString($value);
    }
    public function setEmpNameAttribute($value)
    {
        $this->attributes['emp_name'] = Crypt::encryptString($value);
    }
    public function setEmpEmailAttribute($value)
    {
        $this->attributes['emp_email'] = Crypt::encryptString($value);
    }
    public function setEmpAssetNumAttribute($value)
    {
        $this->attributes['emp_asset_num'] = Crypt::encryptString($value);
    }
    public function setEmpOsAttribute($value)
    {
        $this->attributes['emp_os'] = Crypt::encryptString($value);
    }
    public function setEmpBrowserAttribute($value)
    {
        $this->attributes['emp_browser'] = Crypt::encryptString($value);
    }
    public function setEmpIpAddressAttribute($value)
    {
        $this->attributes['emp_ip_address'] = Crypt::encryptString($value);
    }
    public function setEmpCityAttribute($value)
    {
        $this->attributes['emp_city'] = Crypt::encryptString($value);
    }
    public function setEmpStateAttribute($value)
    {
        $this->attributes['emp_state'] = Crypt::encryptString($value);
    }
    public function setEmpCountryAttribute($value)
    {
        $this->attributes['emp_country'] = Crypt::encryptString($value);
    }

    

    public function getEmpIdAttribute($value)
    {
        try {
            return Crypt::decryptString($value);
            }
        catch(\Exception $e)
        {
            return $e;
        }    
    }
    public function getEmpNameAttribute($value)
    {
        try {
            return Crypt::decryptString($value);
            }
        catch(\Exception $e)
        {
            return $e;
        }   
    }
    public function getEmpEmailAttribute($value)
    {
        try {
            return Crypt::decryptString($value);
            }
        catch(\Exception $e)
        {
            return $e;
        }   
    }
    public function getEmpAssetNumAttribute($value)
    {
        try {
            return Crypt::decryptString($value);
            }
        catch(\Exception $e)
        {
            return $e;
        }   
    }
    public function getEmpOsAttribute($value)
    {
        try {
            return Crypt::decryptString($value);
            }
        catch(\Exception $e)
        {
            return $e;
        }   
    }
    public function getEmpBrowserAttribute($value)
    {
        try {
            return Crypt::decryptString($value);
            }
        catch(\Exception $e)
        {
            return $e;
        }   
    }
    public function getEmpIpAddressAttribute($value)
    {
        try {
            return Crypt::decryptString($value);
            }
        catch(\Exception $e)
        {
            return $e;
        }   
    }
    public function getEmpCityAttribute($value)
    {
        try {
            return Crypt::decryptString($value);
            }
        catch(\Exception $e)
        {
            return $e;
        }   
    }
    public function getEmpStateAttribute($value)
    {
        try {
            return Crypt::decryptString($value);
            }
        catch(\Exception $e)
        {
            return $e;
        }   
    }
    public function getEmpCountryAttribute($value)
    {
        try {
            return Crypt::decryptString($value);
            }
        catch(\Exception $e)
        {
            return $e;
        }   
    }
}
