<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\DB;
class ReportUserController extends Controller
{
   public function report_user()
    {
        try {
            $data_user = DB::table('users')
                    ->select(
                        'users.id',
                        'users.name',
                        'users.email',
                        'users.role_id',
                        'users.created_at'
                    )
                    ->get();


            $data = [
                'data_user' => $data_user
            ];


            return view('penjual.report_user', $data);
        } catch (Exception $e) {
            return $e;
        }
    }

}
