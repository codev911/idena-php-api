<?php
    require_once("rlp/autoload.php");
    require_once("php-keccak/vendor/autoload.php");
    require_once("moontoast/vendor/autoload.php");
    // require_once("phpdecimal/autoload.php");
    
    use Web3p\RLP\RLP;
    use Web3p\RLP\Types\Str;
    use kornrunner\Keccak;
    // use Decimal\Decimal;

    class Idena{
        private $result;
        private $host = "localhost:12233";
        private $pathapi = "/var/www/idena-node/datadir/api.key";
        private $pathnode = "/var/www/idena-node/datadir/keystore/nodekey";
        
        private function getcontent($path){
            $content = file_get_contents ($path);
            return $content;
        }

        function rpcapi($method,$param){
            $ch = curl_init('http://'.$this->host.'/');
            $getapi = $this->getcontent($this->pathapi);
            $data = '';
            
            if(!empty($param)){
                if(is_array($param) !== false){
                    $newparam = json_encode($param);
                    if(strpos($newparam,"{") !== false){
                        $param = [ $param ];
                    }
                }else{
                    $param = [ $param ];
                }
                $data = array(
                    "key" => $getapi,
                    "method" => $method,
                    "params" => $param,
                    "id" => 1
                );
            }else{
                $data = array(
                    "key" => $getapi,
                    "method" => $method,
                    "id" => 1
                );
            }
            
            $payload = json_encode( $data );
            
            curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Host: ' . $this->host,
                'Content-Type: application/json',
                'Content-Length: ' . strlen($payload))
            );
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            
            $result = curl_exec($ch);
            
            curl_close($ch);
            
            $this->result = $result;
        }
        
        function encodeRlp($data){
            $rlp = new RLP;
            // usage may "text"or 0 or ["text"] or ["text1",0,"text2"]
            $encoded = $rlp->encode($data);
            return "0x" . $encoded;
        }
        
        function decodeRlp($data){
            $rlp = new RLP;
            // usage must include 0x value
            $decoded = $rlp->decode($data);
            return $decoded;
            // return hex2bin($decoded);
            // return Str::decodeHex($decoded);
        }

        public function getData(){
            header("Content-type: application/json");
            echo $this->result;
        }
        
	    public function getReturnData(){
            return $this->result;
        }
    }
    
    class checkAddress{
        function isAddress($address) {
            $dataid = str_replace("0x","",$address);
            $res = preg_replace("/[^a-fA-F0-9]/", "", $dataid);
            if (strpos($address,'0x') !== false) {
                if (strlen($res) == 40) {
                    return true;
                }else{
                    return false;
                }
            } else {
                return false;
            }
        }
    }
    
    class EthereumValidator{
        public function isAddress($address){
            if ($this->matchesPattern($address)) {
                return $this->isAllSameCaps($address) ?: $this->isValidChecksum($address);
            }
    
            return false;
        }
    
        protected function matchesPattern($address){
            return preg_match('/^(0x)?[0-9a-f]{40}$/i', $address);
        }
    
        protected function isAllSameCaps($address){
            return preg_match('/^(0x)?[0-9a-f]{40}$/', $address) || preg_match('/^(0x)?[0-9A-F]{40}$/', $address);
        }
    
        protected function isValidChecksum($address){
            $address = str_replace('0x', '', $address);
            $hash = Keccak::hash(strtolower($address), 256);

            for ($i = 0; $i < 40; $i++ ) {
                if (ctype_alpha($address{$i})) {
                    $charInt = intval($hash{$i}, 16);
                    if ((ctype_upper($address{$i}) && $charInt <= 7) || (ctype_lower($address{$i}) && $charInt > 7)) {
                        return false;
                    }
                }
            }
    
            return true;
        }
    }
?>
