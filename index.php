<!DOCTYPE html>
<html>
<head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Noto+Serif:wght@700&display=swap');
    h1 {
        font-family: 'Arial', sans-serif;
        text-align: center;
        color: #FFFFFF;
        background-color: #FF6701;
    }

    @import url('https://fonts.googleapis.com/css2?family=Bitter:wght@300&display=swap');
    table {
    font-family: 'Bitter', serif;
    width: 1050px;
    border-radius: 8px;
    border-collapse: collapse;
    margin: 50px auto;
    background-color: #F5FFFA;
    overflow: hidden;
    box-shadow:
    0 12.3px 8.4px rgba(0, 0, 0, 0.056),
    0 22px 40px rgba(0, 0, 0, 0.019)
    }

    th {
        background: #FF6701;
        color: #FFFFFF;
        font-weight: bold;
    }

    th, td {
     font-family: 'Poppins', sans-serif;
     text-align: left;
     font-size: 14px;
     padding: 10px;
    }
    
    thead th {
     background-color: #FF6701;
     color: white;
     position: sticky;
     top: 0;
    }
}
 
</style>
</head>  

<body style ="background-color:#F3F1F5;">
<h1>Data Karyawan</h1>

<!-- hitung haji -->
<?php
$senior = array(5000000, 5000000, 5000000, 5000000, 5000000);
$amateur = array(3500000, 3500000, 3500000, 3500000, 3500000);
$junior = array(2000000, 2000000, 2000000, 2000000, 2000000);
$partsenior = array();
$partamateur = array();
$partjunior = array();

for($x = 0; $x <= 4; $x++) {
    $partsenior[$x] = $senior[$x]/2;
    $partamateur[$x] = $amateur[$x]/2;
    $partjunior[$x] = $junior[$x]/2; 
}

abstract class karyawan {
    public $nama;
    public function __construct($nama)
    {
        $this->nama = $nama;
    }
    abstract public function intro() : string;
}

class fulltime extends karyawan {
    public function intro() : string {
        return $this->nama;
    }
}

class parttime extends karyawan {
    public function intro() : string {
        return $this->nama;
    }
}

class senior extends karyawan {
    public function intro() : string {
        return $this->nama;
    }
}

class amateur extends karyawan {
    public function intro() : string {
        return $this->nama;
    }
}

class junior extends karyawan {
    public function intro() : string {
        return $this->nama;
    }
}

$full = new fulltime("Full time");
$part = new parttime("Part time");
$status = array($full->intro(), $part->intro());

$seniorlvl = new senior("Senior");
$amateurlvl = new amateur("Amateur");
$juniorlvl = new junior("Junior");
$level = array($seniorlvl->intro(), $amateurlvl->intro(), $juniorlvl->intro());

$gender = array("Pria", "Pria", "Wanita", "Pria", "Wanita");
$dob = array("jakarta - 03/04/2001", "Depok - 27/11/2007", "Batavia - 23/10/2005", "Bandung - 03/12/2001", "Depok - 06/07/2000");

$array = [
array("1","Naufal Luthfi Malik", "$dob[0]", "$gender[0]", "$level[0]", "$status[0]", "$senior[0]"),
array("2","Sedna Arsenaldy", "$dob[1]", "$gender[1]", "$level[1]", "$status[1]", "$partamateur[0]"),
array("3","Aulia Firyal Syarifa", "$dob[2]", "$gender[2]", "$level[2]", "$status[0]", "$junior[2]"),
array("4","Daniel Rachman", "$dob[3]", "$gender[3]", "$level[2]", "$status[1]", "$partjunior[3]"),
array("5","Michelle Angelica", "$dob[4]", "$gender[4]", "$level[1]", "$status[0]", "$amateur[4]")
];
 
echo "<table border='1'";
echo "<tr><th>No</th><th>Nama Karyawan</th><th>Tempat Tanggal Lahir</th><th>Jenis Kelamin</th><th>Level Karyawan</th><th>Status</th><th>Gaji Karyawan</th></tr>";
foreach ($array as $rows => $row)
{
	echo "<tr>";
	foreach ($row as $col => $cell)
	{
		echo "<td>" . $cell . "</td>";
	}	
 
}	
  echo "</tr></table>";
?>