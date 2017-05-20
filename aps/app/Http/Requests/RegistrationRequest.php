<?php
namespace App\Http\Requests;

use App\Http\Request\Request;

class RegistrationRequest extends Request
{

  public function authorize()
  {
    return true;
  }

  public function rules()
  {
    return [
    'name'=>'required|max:255',
    'email'=>'required|email|max:255|unique:users',
    'password'=>'required|confirmed|min:6'
  ];
  }
}
