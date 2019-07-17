<?php namespace Meisam\Contact\Components;

use Cms\Classes\ComponentBase;
use Input;
use Validator;
use Redirect;
use Flash;
use ValidationException;
use Meisam\Contact\Models\Contact;

class Contactform extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'contactform Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }
    
        public function onSave(){
      $data = post();

      $rules =
          [
//              'name' => 'required',
              'email' => 'required|email',
              'comment' => 'required',
//              'phonenumber' => 'required|min:11 , max:11'
];

          $validator = Validator::make($data, $rules);
      if($validator->fails()){
        throw new ValidationException($validator);
      } else {
      $contact = new Contact();
      $contact->name = Input::get('name');
      $contact->email = Input::get('email');
      $contact->comment = Input::get('comment');
      $contact->phonenumber = Input::get('phonenumber');
      $contact->save();
     Flash::success('پیام شما با موفقیت ارسال شد');
     return Redirect::back();
    }

}
}
