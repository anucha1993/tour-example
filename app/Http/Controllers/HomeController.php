<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Backend\CityModel;
use App\Models\Backend\AmupurModel;
use App\Models\Backend\FooterModel;
use App\Models\Backend\CountryModel;
use App\Models\Backend\CalendarModel;
use App\Models\Backend\ProvinceModel;
use App\Models\Backend\BannerAdsModel;
use App\Models\Backend\ThankInfoModel;
use App\Models\Backend\FooterListModel;
use App\Models\Backend\BannerSlideModel;
use App\Models\Backend\StatusSlideModel;
use App\Models\Backend\CustomerInfoModel;
use App\Models\Backend\KeywordSearchModel;
use App\Models\Backend\TourModel;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
   public function index()
    {
      
        $slide = BannerSlideModel::where('status','on')->orderBy('id','desc')->get();
        $ads = BannerAdsModel::where('status','on')->orderBy('id','desc')->get();
        $customer = CustomerInfoModel::where('type_id',2)->where('status','on')->get();
        $check = ThankInfoModel::where('status','on')->orderBy('id','desc')->get();
         
        $re_country = array();
        foreach($check as $re){
            $re_country = array_merge($re_country,json_decode($re->country_id,true));
        }
        
        $re_country = array_unique($re_country);
        $review = ThankInfoModel::where('country_id','!=',$re_country)->where('status','on')->orderBy('id','desc')->limit(6)->get();
        $calendar = CalendarModel::where(['status'=>'on','deleted_at'=>null])->where('start_date','>=',date('Y-m-d'))->orderby('start_date','asc')->get();
        $footer = FooterModel::find(1);
        $footer_list = FooterListModel::get();

        $country = CountryModel::where(['status'=>'on','deleted_at'=>null])->orderby('country_views','desc')->limit(6)->get();

        // Get tours with special prices using a subquery for the earliest start date
        $tour_special = DB::select("
            SELECT DISTINCT t.* 
            FROM tb_tour t
            INNER JOIN (
                SELECT tour_id, MIN(start_date) as earliest_start_date
                FROM tb_tour_period
                WHERE status_display = 'on'
                AND count > 0
                AND start_date >= CURRENT_DATE()
                AND deleted_at IS NULL
                AND status_period != 3
                GROUP BY tour_id
            ) p ON t.id = p.tour_id
            WHERE t.status = 'on'
            AND t.deleted_at IS NULL
            AND t.special_price > 0
            ORDER BY p.earliest_start_date ASC, t.special_price DESC
            LIMIT 4
        ");

        $tour_views = DB::select("
            SELECT DISTINCT t.* 
            FROM tb_tour t
            INNER JOIN (
                SELECT tour_id, MIN(start_date) as start_date
                FROM tb_tour_period
                WHERE status_display = 'on'
                AND count > 0
                AND start_date >= CURRENT_DATE()
                AND deleted_at IS NULL
                AND status_period != 3
                GROUP BY tour_id
            ) p ON t.id = p.tour_id
            WHERE t.status = 'on'
            AND t.deleted_at IS NULL
            ORDER BY p.start_date ASC, t.tour_views DESC
            LIMIT 4
        ");

        $status = StatusSlideModel::find(1);

        $data_country = CountryModel::where(['status'=>'on','deleted_at'=>null])->whereNotNull('country_name_th')->get();
        $data_city = CityModel::where(['status'=>'on','deleted_at'=>null])->whereNotNull('city_name_th')->get();
        $data_province = ProvinceModel::where(['status'=>'on','deleted_at'=>null])->whereNotNull('name_th')->get();
        $data_amupur= AmupurModel::where(['status'=>'on','deleted_at'=>null])->whereNotNull('name_th')->get();

        $country_famus = CountryModel::where('count_search','!=',0)->orderBy('count_search','desc')->limit(3)->get();
        $keyword_famus = KeywordSearchModel::orderBy('count_search','desc')->limit(10)->get();
        // dd($keyword_famus);
        $data = array(
          'slide' => $slide,
          'ads' => $ads,
          'customer' => $customer,
          'review' => $review,
          'calendar' => $calendar,
          'footer' => $footer,
          'footer_list' => $footer_list,
          'country' => $country,
          'tour_views' => $tour_views,
          'status' => $status,
          'data_country' => json_encode($data_country),
          'data_city' => json_encode($data_city),
          'country_famus' => json_encode($country_famus),
          'keyword_famus' => json_encode($keyword_famus),
          'data_province' => json_encode($data_province),
          'data_amupur' => json_encode($data_amupur),

        );
        
        return view('welcome',$data);
    }
}
