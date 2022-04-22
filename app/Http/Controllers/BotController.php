<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BotController extends Controller
{
    public function main()
	{
		//$response = Http::get('https://api.telegram.org/bot5194685330:AAHmccbVRi2cF7Bk8HWGw-vRhEg5TSHoyCc/getMe');
		$response = Http::get('https://api.telegram.org/bot5194685330:AAHmccbVRi2cF7Bk8HWGw-vRhEg5TSHoyCc/sendMessage?chat_id=315799454&text=erfan');
		return $response;
	}
}
