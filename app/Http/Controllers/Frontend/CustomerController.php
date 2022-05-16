<?php

namespace App\Http\Controllers;

use App\Core\Utilities\SecurityUtility;
use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CustomerController extends Controller
{
    /**
     * @param Request $request
     * @return false|string
     */
    public function register(Request $request)
    {
        $fullname = SecurityUtility::removeXSS($request->get('fullname_register'));
        $email = SecurityUtility::removeXSS($request->get('email_register'));
        $telephone = SecurityUtility::removeXSS($request->get('telephone_register'));
        $organization = SecurityUtility::removeXSS($request->get('organization_register'));
        $messageSuccess = 'Gửi thông tin đăng ký thành công';
        $messageError = 'Gửi thông tin đăng ký thất bại. Vui lòng thử lại sau ít phút nữa!';
        try {
            $customer = new Customer([
                'fullname' => $fullname,
                'email' => $email,
                'telephone' => $telephone,
                'organization' => $organization
            ]);
            $customer->save();
            $result = json_encode(array('error' => 0, 'message' => $messageSuccess, 'data' => array()));
            return $result;
        } catch (Exception $exception) {
            Log::error('Không gửi được thông tin đăng ký: ' . $exception->getMessage());
            return json_encode(array('error' => 1, 'message' => $messageError, 'data' => array()));
        }
    }

    /**
     * @param Request $request
     * @return false|string
     */
    public function registerV2(Request $request)
    {
        $fullname = SecurityUtility::removeXSS($request->get('fullname_register'));
        $email = SecurityUtility::removeXSS($request->get('email_register'));
        $telephone = SecurityUtility::removeXSS($request->get('telephone_register'));
        $organization = SecurityUtility::removeXSS($request->get('organization_register'));
        $position = SecurityUtility::removeXSS($request->get('position_register'));
        $number_of_employees = SecurityUtility::removeXSS($request->get('number_of_employees_register'));
        $messageSuccess = 'Gửi thông tin đăng ký thành công';
        $messageError = 'Gửi thông tin đăng ký thất bại. Vui lòng thử lại sau ít phút nữa!';
        try {
            $customer = new Customer([
                'fullname' => $fullname,
                'email' => $email,
                'telephone' => $telephone,
                'organization' => $organization,
                'position' => $position,
                'number_of_employees' => $number_of_employees
            ]);
            $customer->save();
            $result = json_encode(array('error' => 0, 'message' => $messageSuccess, 'data' => array()));
            return $result;
        } catch (Exception $exception) {
            Log::error('Không gửi được thông tin đăng ký: ' . $exception->getMessage());
            return json_encode(array('error' => 1, 'message' => $messageError, 'data' => array()));
        }
    }
}
