<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Larinfo;
use App\Models\Count;

class DashboardController extends Controller
{
    public function index()
    {
        abort(404);
  //   	$larinfo = Larinfo::getInfo();
  //   	$count =  new Count;
  //   	$count = $count->getCount();
		// dd($count);die;
    	return view('auth.login');
    }

        public function dashboard()
    {
        return view ('admin.dashboard');
    }

        public function statistics(Request $request)
    {
    $count_model = new Count(); //модель Count

    $condition = [];
    $days_ago = null;
    $stat_ip = false;

    //Получение данных из формы для модели Count
    $count_model = $request->all();
    if (empty($count_model) != null){

        //Сброс фильтров    
        // if($count_model->reset()){
        //     $condition = [];
        // }
        //Вывод по дате
        if(!empty($count_model->date_ip)){
            $timeUnix = strtotime($count_model->date_ip);
            $time_max = $timeUnix + 86400;
            $condition = ["between", "date_ip", $timeUnix , $time_max];
        }
        //За период
        if(!empty($count_model->start_time)){

        $timeStartUnix = strtotime($count_model->start_time);
        //Если не передана дата конца - ставим текущую
        if(!$count_model->stop_time) {
            $timeStopUnix = time();
        } else {
            $timeStopUnix = strtotime($count_model->stop_time);
        }
        $timeStopUnix += 86400; //целый день (до конца суток)
        $condition = ["between", "date_ip", $timeStartUnix , $timeStopUnix];    
        }
        //По IP
        if(!empty($count_model->ip)){
            $condition = ["ip" => $count_model->ip];
            $days_ago = 86400 * 30; //за 30 дней
            $stat_ip = true;
        }
        //Добавить в черный список
        // if($count_model->add_black_list){
        //     $count_model->set_black_list($count_model->ip, $count_model->comment);
        //     $condition = [];
        //    $days_ago = null;
        // }
        //Удалить из черного списка
        // if($count_model->del_black_list){
        //     $count_model->remove_black_list($count_model->ip);
        //     $condition = [];
        //     $days_ago = null;
        // }
        //Удалить старые данные
        if(!empty($count_model->del_old)){
            $count_model->remove_old();
            // Yii::$app->end();  //PJAX
        }
        $count_model = new Count(); //новый объект модели для очистки формы
    }



    //Получение списка статистики
    $count_ip = $count_model->getCount($condition, $days_ago);
    /*
     * Устанавливаем значение полей по-умолчанию для вывода в полях формы
     */
    $count_model->date_ip = time(); //сегодня
    $count_model->start_time = date('Y-m-01'); //первое число текущего месяца
    $count_model->stop_time = time(); //сегодня
    
    return view('admin.statistics',['count_model' => $count_model,'count_ip' => $count_ip,'stat_ip' => $stat_ip]);
    }
}
