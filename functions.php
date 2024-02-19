<?php 

include 'configDb.php';

$token = [];

function generateToken($user) {
    global $token;
    $token[$user][] = bin2hex(random_bytes(32));
    return $token[$user][count($token[$user]) - 1];
}

function verifyToken($user, $token) {
    global $token;
        if(!isset($token[$user])) {
            return false;
        }
        $index = array_search($token, $token[$user]);
        if($index !== false) {
            unset($token[$user][$index]);
            return true;
        }
        return false;
}

class Siswa {
    public $nrp;
    public $nama;
    public $daftarNilai;

    public function __construct($nrp, $nama, $daftarNilai = []) {
        $this->nrp = $nrp;
        $this->nama = $nama;
        $this->daftarNilai = $daftarNilai;
    }
}

$light = ['red', 'yellow', 'green'];
$currentLight = [0];

function getLight() {
    global $light, $currentLight;
    $currentLight[0] = ($currentLight[0] + 1) % count($light);
    return $light[$currentLight[0]];
}

function getSecondLargets($arr) {
    rsort($arr);
    return $arr[1];
}

function getMostFrequentChar($word) {
    $freq = array_count_values(str_split($word));
    arsort($freq);
    return key($freq). '' .current($freq). 'x';
}
?>