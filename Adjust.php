<!DOCTYPE html>

<html lang="en">

<head> 
<meta charset="UTF-8"> 

<meta http-equiv="X-UA-Compatible" content="IE=edge">

 <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/3ea3574147.js" crossorigin="anonymous"></script>
  
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Coming Loots</title> 
    <link rel="stylesheet" href="master.css">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Righteous&display=swap');

@font-face {
  font-family: Conto-Bold;
  src: url(Conto-Bold.ttf);
}

*{
   margin: 0;
   padding: 0;
   font-family: Conto-Bold;
   box-sizing: border-box;
}

body{
   background-color: rgb(238, 238, 238);
}

.content{
   width: 100%;
   padding: 30px;
}

.content h1{
   font-size: 18px;
   margin-top: 50px;
   margin-bottom: 50px;
   letter-spacing: 1px;
   text-transform: uppercase;
   text-align: center;
   font-family: 'Righteous', cursive;
   font-weight: 100;
   text-shadow: 0px 0px 1px #16161778;
}



.content .input{
   width: 100%;
   height: 60px;
   margin: 10px 0;
   background-color: transparent;
   border: 2px solid #dedede;
   padding: 10px 15px;
   font-family: Conto-Bold;
   border-radius: 10px;
   border-left: 4px solid #d3d3d3;
   border-right: 4px solid #d3d3d3;
   outline: none;
   letter-spacing: 1px;
   transition: 0.5s ease-in-out;
   font-size: 14px;
   background-color: rgb(238, 238, 238);
}

.input:focus{
   border-left: 4px solid rgb(0, 141, 146);
   border-right: 4px solid rgb(0, 141, 146);
}


.content .formBtn{
   position: relative;
   transition: all .25s ease;
   overflow: hidden;
   width: 100%;
   height: 60px;
   margin: 15px 0;
   background-color: rgb(0, 141, 146);
   border: none;
   padding: 10px 15px;
   font-family: Conto-Bold;
   border-radius: 7px;
   outline: none;
   letter-spacing: 1px;
   transition: 0.5s ease-in-out;
   color: #fff;
   box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.582);
   cursor: pointer;
   font-size: 15px;
   border-left: 4px solid rgb(2, 127, 131);
   border-right: 4px solid rgb(2, 127, 131);
}

.content .formBtn:hover{
   background-color: rgb(2, 130, 134);
}

.load {
   position: absolute;
   left: 0px;
   top: 0px;
   width: 100%;
   height: 100%;
   background: inherit;
   display: flex;
   align-items: center;
   justify-content: center;
   border-radius: inherit
}

.load::after {
   content: '';
   position: absolute;
   border-radius: 50%;
   border: 3px solid #fff;
   width: 25px;
   height: 25px;
   border-left: 3px solid transparent;
   border-bottom: 3px solid transparent;
   animation: loading1 1s ease infinite;
   z-index: 10
}

.load::before {
   content: '';
   position: absolute;
   border-radius: 50%;
   border: 3px dashed #fff;
   width: 25px;
   height: 25px;
   border-left: 3px solid transparent;
   border-bottom: 3px solid transparent;
   animation: loading1 2s linear infinite;
   z-index: 5
}

@keyframes loading1 {
   0% {
      transform: rotate(0deg)
   }

   100% {
      transform: rotate(360deg)
   }
}

.shine{
   background-image: linear-gradient(112deg, rgba(255,255,255,0) 0%,rgba(255,255,255,0) 50%, rgba(248, 248, 248, 0.39) 70%, rgba(255,255,255,0) 80%, rgba(255,255,255,0) 100%);
   background-size: 200% 200%;
   background-repeat: no-repeat;
   animation: shine-animation 4s ease-in-out infinite;
 }

@keyframes shine-animation{
   from{
      background-position: 200% 0;
   }to{
      background-position: -200% 0;
   }
}

.content .telBtn{
   width: 100%;
   height: 60px;
   margin-top: 30px;
   background-color: rgb(0, 141, 146);
   border: none;
   padding: 0px 15px;
   font-family: Conto-Bold;
   border-radius: 7px;
   outline: none;
   letter-spacing: 1px;
   transition: 0.5s ease-in-out;
   color: #fff;
   cursor: pointer;
   font-size: 16px;
   display: flex;
   justify-content: space-around;
   align-items: center;
   text-align: center;
   text-transform: capitalize;
   box-shadow: 0px 0px 2px rgba(0, 0, 0, 0.39);
   border-left: 4px solid rgb(2, 127, 131);
   border-right: 4px solid rgb(2, 127, 131);
   position: relative;
   text-decoration: none;
}

.content .telBtn .fa-paper-plane{
   position: absolute;
   left: 20px;
   padding: 15px;
   font-size: 20px;
   border-radius: 0px;
}

.content .telBtn span{
   margin-left: 25px;
}

.logo_text{
   text-align: center;
   font-family: 'Righteous', cursive;
   text-transform: uppercase;
   letter-spacing: 1px;
   font-size: 35px;
   opacity: 0.1;
   user-select: none;
}

.bg_image{
   width: 100%;
   height: 100vh;
   position: absolute;
   top: 30%;
   background-image: url('http://ind-scripter.000.pe/indian.jpg');
   background-size: 80px;
   position: absolute;
   top: 0px;
   z-index: 1;
   opacity: 0.2;
   background-position: center;
}

.success{
   font-size: 13px;
   letter-spacing: 1px;
   padding: 18px 10px;
   margin: 10px 0;
   border-radius: 7px;
   background-color: #d1e6dd;
   color: #105133;
   border: 1px solid #9fcfba;
   text-align: center;
}

 .success_text{
   font-size: 13px;
   letter-spacing: 1px;
   padding: 18px 10px;
   margin: 10px 0;
   border-radius: 50px;
   color: #105133;
   text-align: center;
 }

.error{
   font-size: 13px;
   letter-spacing: 1px;
   background-color: #f7d7da;
   color: #84200a;
   border: 1px solid #f5c2c7;
   padding: 18px 10px;
   margin: 10px 0;
   border-radius: 7px;
   text-align: center;
}

.error_text{
   font-size: 13px;
   letter-spacing: 1px;
   padding: 18px 10px;
   margin: 10px 0;
   border-radius: 50px;
   color: #84200a;
   text-align: center;
}

.white{
   font-size: 13px;
   letter-spacing: 1px;
   margin: 10px 0;
   background-color: #e2e3e5;
   color: #41464a;
   border: 1px solid #d5dbdb;
   padding: 18px 10px;
   border-radius: 7px;
   text-align: center;
}

.blue{
   font-size: 13px;
   letter-spacing: 1px;
   margin: 10px 0;
   background-color: #cfe2ff;
   color: #084195;
   border: 1px solid #d7d4fe;
   padding: 18px 10px;
   border-radius: 7px;
   text-align: center;
}



select, option{
   width: 100%;
   height: 65px;
   margin: 10px 0;
   background-color: transparent;
   border: 2px solid #dedede;
   padding: 10px 25px;
   font-family: Conto-Bold;
   border-radius: 10px;
   border-left: 4px solid #d3d3d3;
   border-right: 4px solid #d3d3d3;
   outline: none;
   letter-spacing: 1px;
   transition: 0.5s ease-in-out;
   font-size: 13px;
}
</style>
    </head>
    <body> <div class="content">
    <h1> Adjust Link Bypass</h1>
        <?php
        if (!isset($_POST['submit'])) {
    echo "<form method='POST' action=''>
        <input type='link' name='url' class='input' placeholder='Enter :-  https://app.adjust.com' required />
        <button type='submit' value='SUBMIT' name='submit' class='formBtn'>SUBMIT</button>
    </form>";
} elseif (isset($_POST['submit'])) {
           $url = $_POST['url'];
    
            $parsed_url = parse_url($url);
            parse_str($parsed_url['query'], $query_params);

            $install_callback = $query_params['install_callback'];

            // Initialize cURL session for install_callback
            $ch = curl_init();

            curl_setopt_array($ch, [
                CURLOPT_URL => $install_callback,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_SSL_VERIFYPEER => false,
                CURLOPT_SSL_VERIFYHOST => false
            ]);

            $response = curl_exec($ch);
            $error = curl_error($ch);
            curl_close($ch);

            
            if ($error) {
                
            } else {
                 
                echo "<div class='success'>Response : $response</div>";
                echo"<meta http-equiv='refresh' content=1;url=tg://resolve?domain=earning_zone_777>";
            }
            
            $event_callbacks = array_filter($query_params, function($key) {
                return strpos($key, 'event_callback') === 0;
            }, ARRAY_FILTER_USE_KEY);

            foreach ($event_callbacks as $key => $event_url) {
                $ch = curl_init();

                curl_setopt_array($ch, [
                    CURLOPT_URL => $event_url,
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_SSL_VERIFYPEER => false,
                    CURLOPT_SSL_VERIFYHOST => false
                ]);

                $response = curl_exec($ch);
                $error = curl_error($ch);
                curl_close($ch);

                if ($error) {
                    
                } else {
                	
               echo "<div class='success'>Response : $response</div>";
               echo"<meta http-equiv='refresh' content=1;url=tg://resolve?domain=earning_zone_777>";
}
}
}
?>
	
	<a href="https://telegram.dog/Comingloots" class="telBtn shine">
    <i class="fa-regular fa-paper-plane"></i>
    <span>Join Telegram Channel ?</span>
</a>
<center>
</body>
</html>
