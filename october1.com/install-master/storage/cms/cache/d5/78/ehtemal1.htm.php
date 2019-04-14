<?php 
class Cms5caf10a101600093138638_bcc84b337b131f86ff94ad3b287a681cClass extends Cms\Classes\PageCode
{
public function onStart() {
    
    
    $x=10;
    $y=1;
    $b=1;
    
    //tekrar mojaz
    
    if (Request::isMethod('post')) {
    
      
      
      
                  
        if (empty(post("word"))) {
            
            $this["wordErr"] = "number is required";
        } else {
           $word = post("word");
            
             $word =  pow(26, $word);
            
        }
    
       
        if (empty(post("number"))) {
            $this["numberErr"] = "number is required";
        } else {
            $number= post("number");
            
            
            $number =  pow(10, $number);
               
             $javab = $word * $number;  
             
           
           
        }
        
        
     }
     
   
     
    
    //tekrar namojaz
    
    
     
    
    
    
     
        if (empty(post("word"))) {
            $this["wordErr"] = "number is required";
        } else {
            $word = post("word");
            
            $word =  pow(26, $word);
            
            
        }
        
        
        if (empty(post("number"))) {
            $this["numberErr"] = "number is required";
        } else {
           $number = post("number");
            
            
            $number = 11 - $number;
            
            
           for ($x =10; $x >=$number; $x--) { 
               
             
              $y = $x * $y;
              
              
              
        
     }
     
      
     if (Request::isMethod('post')) {
        if (empty(post("word"))) {
            $this["wordErr"] = "number is required";
        } else {
            $word = post("word");
            
            $word = 27-$word;
            
            
            for ($a =26; $a >=$word; $a--) { 
               
             
              $b = $a * $b;
            }
            
            
            $result = $b * $y;
        }
     
     }
     
     
        }
        
        //checking radio input if select doing something
        
        
        if(post("radio1") == "radio1") {
            
        $this["a1"] = $javab;
        }
        if(post("radio1") == "radio2") {
            
            $this["a1"] = $result;
        }

        
        
        
        
        
        
        
        
    
    }
}
