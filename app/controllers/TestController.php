<?php

class TestController extends BaseController {

    public function postAuth()
      
    {
       	
Input::post('url');
      $rules = array(
    'url' => 'required|url'
);
 
//Then we run the form validation
$validation = Validator::make(Input::all(),$rules);
      if($validation->fails()) {
         
        return Redirect::to('/')
        ->withInput()
        ->withErrors($validation);
    }
    
      $url = Url::where('url','=',Input::get('url'))->first();
      if($url) {
    return Redirect::to('result')
    ->withInput()
    ->with('url',$url->hash);
    //Else we create a new unique URL
}
        
      
          
    }
  
}
    

    


?>