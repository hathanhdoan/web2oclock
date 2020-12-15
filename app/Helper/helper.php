<?php
use Illuminate\Support\Facades\Mail;

function normalizing($owner_row = null){
    $array_filter = array_filter($owner_row,function($rating){
        return $rating != '-';
    });

    $avg = array_sum($array_filter)/count($array_filter);
    $avg = round($avg,2);
    $owner_row = array_map(function($rating) use($avg){
        return ($rating == '-') ? '-' : ($rating - $avg);
    }, $owner_row);

    return $owner_row;

}
function echo_now($s)
{
    echo $s . PHP_EOL;

    flush();
}
function calculateDistance($destinations = '', $origin = ''){
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_RETURNTRANSFER => 0,
        CURLOPT_URL => 'https://maps.googleapis.com/maps/api/distancematrix/json?units=imperial&origins='.$origin.'&destinations='.$destinations.'&key=AIzaSyCzlVX517mZWArHv4Dt3_JVG0aPmbSE5mE',
        CURLOPT_USERAGENT => '',
        CURLOPT_SSL_VERIFYPEER => false
    ));

    $resp = curl_exec($curl);

    $weather = json_decode($resp);
    var_dump($weather);

    curl_close($curl);
}
function sendEmail($data = [])
{
    try {
        $data['from'] = config('mail.from.address');
        if (isset($data['cc']) && !empty($data['cc'])) {
            Mail::send($data['view'], $data['information'], function ($messages) use ($data) {
                $messages->from($data['from'], config('mail.from.name'));
                $messages->to($data['to'])
                    ->bcc($data['cc'])
                    ->subject($data['subject']);
            });
        } else {
            Mail::send($data['view'], $data['information'], function ($messages) use ($data) {
                $messages->from($data['from'], config('mail.from.name'));
                $messages->to($data['to'])
                    ->subject($data['subject']);
            });
        }
        return [
            'success' => true,
            'message' => __('please_check_email_at', ['email' => $data['to']])
        ];
    } catch (\Exception $exception) {

        return [
            'success' => false,
            'message' => $exception->getMessage(),
        ];
    }

}
if (!function_exists('_trans')) {
    /**
     * Translate the given message.
     *
     * @param string|null $key
     * @param array $replace
     * @param string|null $locale
     * @return string|array|null
     */
    function _trans($default = null, $key = null, $replace = [], $locale = null)
    {
        if (is_null($key)) {
            return $default;
        }

        return trans($key, $replace, $locale);
    }
}
