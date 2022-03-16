<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Asset;
use Stevebauman\Location\Facades\Location;
use hisorange\BrowserDetect\Parser as Browser;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use RealRashid\SweetAlert\Facades\Alert;

class EmployeeController extends Controller
{
    public function add_asset_data()
    {
        return view("assets");
    }
    
    public function post_asset_data(Request $req)
    {
        // Client IP && Browser && Platfrom Detection

        $ip = trim(shell_exec("dig +short myip.opendns.com @resolver1.opendns.com"));
        $client_location = Location::get($ip);
        $client_city = $client_location->cityName;
        $client_region = $client_location->regionName;
        $client_country = $client_location->countryName;
        $browser_name = Browser::browserFamily();
        $platform_name = Browser::platformName();
        
        // --End 

        $rules = array(
            'Image' => 'mimes:jpeg,jpg,png | max:2048'
                );
        $validator = Validator::make($req->all(), $rules );
        if ($validator->fails()) 
        {
            $req->flash();
            return  redirect()->back()->with(['errors'=>$validator->errors()->all()]);

        }

        else 
        {
            if ($req->file('Image') == null) {
                $path = "File Empty";
            }else{
                $path = $req->file('Image')->storeAs(
                    'emp_img_uploads', $req->emp_name);  
            }
            
            // Post Data
            $asset_obj = new Asset;
            $asset_obj->emp_id = $req->emp_id;
            $asset_obj->emp_name= $req->emp_name;
            $asset_obj->emp_email = $req->emp_email;
            $asset_obj->emp_asset_num = $req->emp_asset_num;
            $asset_obj->emp_comments = $req-> emp_comments;
            $asset_obj->emp_file_upload = $path;
            $asset_obj->emp_ip_address = $ip;
            $asset_obj->emp_city = $client_city;
            $asset_obj->emp_state = $client_region;
            $asset_obj->emp_country = $client_country;
            $asset_obj->emp_os = $platform_name;
            $asset_obj->emp_browser = $browser_name;
            $asset_obj->save();
            return redirect()->action([EmployeeController::class, 'submitted_response']);

        }


     
         
        // 

     
       
    }

    public function submitted_response()
    {
        Alert::success('Success', 'Your Response has been Taken...');

        return view("thanks");
    }
    
}   
