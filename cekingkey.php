<?php

public function keysc(){
        self::xip();
        if(!file_exists(".key")){
            while(true):
            self::clr($this->ban);
            echo self::col(">> ","m").self::col("link-key:》 ","k").self::col("https://semawur.com/FOJ26","c").PHP_EOL;
            echo self::col("》","k").self::col("Key: ","h");
            $key =trim(fgets(STDIN));
            self::loading("generate key");
            $c = self::s_key($key);self::strip("c");
            if($c["status"] != 0){
                echo self::col("》》》》","k").self::col($c["message"],"h").PHP_EOL;
                file_put_contents(".key",$key);
                sleep(4);break;
            }else{
                echo self::col("《!》","k").self::col($c["message"],"m").PHP_EOL;self::strip("m");
                sleep(4);continue;
            }
            endwhile;
        }
    }
    public function ceking(){
        $a = file_get_contents(".key");
        if(empty($a)){exit(0);}
        $c = self::s_key($a);
        if($c["status"] == "update"){
            unlink(".key");
            exit(self::col("key kadaluarsa"));
        }elseif($c["status"] != 1){
            unlink(".key");
            exit(self::col($c["message"],"m"));
        }
    }