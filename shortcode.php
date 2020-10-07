// function that runs when shortcode is called
function w3villa_shortcode() { 
 
// Things that you want to do. 
$message = 'Hello world!'; 
 
// Output needs to be return
return $message;
} 
// register shortcode
add_shortcode('greeting', 'w3villa_shortcode'); 


// call the shortcode
echo do_shortcode("[greeting]");
