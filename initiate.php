<?php

include 'functions.php';

$token = generateToken("user1");
echo "Generate Token:" .$token. "<br>";

$isValid = verifyToken('user1', $token);
echo "Token is Valid:" .($isValid ? 'Yes' : 'No'). "<br>";

$siswa = new Siswa('123456','John Doe');

$conn = connectToDatabase();
$sql = "INSERT INTO siswa (nrp, nama) VALUES ('$siswa->nrp','$siswa->nama')";

if ($conn->query($sql) !== TRUE) {
    echo "Error:" .$sql . "<br>" .$conn->error;
} else {
    echo "Siswa ditambahkan";
}

closeDatabaseConnection($conn);

// Generate 10 random Siswa instancess
for ($i = 0; $i < 10; $i++) {
    $randomNrp = rand(100000, 999999);
    $randomName = "Student" . $i;
    
    $randomSiswa = new Siswa($randomNrp, $randomName);
    $siswaInstances[] = $randomSiswa;
}


// Traffic Light Sequence
echo "Current Light:" . getLight() . "<br>";
echo "Current Light:" . getLight() . "<br>";
echo "Current Light:" . getLight() . "<br>";
echo "Current Light:" . getLight() . "<br>";

// Second largent number in array
$numbers = [5, 10, 15, 20, 25, 30, 35, 40, 45, 50];

echo "Second largest number: " . getSecondLargets($numbers) . "<br>";

// Most Frequency character in word
echo "Most frequent character in 'hello': " . getMostFrequentChar("hello") . "<br>";
echo "Most frequent character in 'world': " . getMostFrequentChar("world") . "<br>";
?>