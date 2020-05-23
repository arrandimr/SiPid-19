<?php
   include "koneksi.php";
    //Jika Tombol Jawab Ditekan
    if (isset($_POST ['Jawab'])) {        
        //Menyimpan variabel dari "name"
        $Respon1 = $_POST['jawaban1'];
        $Respon2 = $_POST['jawaban2'];
        $Respon3 = $_POST['jawaban3'];
        $Respon4 = $_POST['jawaban4'];
        $Respon5 = $_POST['jawaban5'];
        $Respon6 = $_POST['jawaban6'];
        $Respon7 = $_POST['jawaban7'];
    
        //Menulis query disimpan dalam string $MyString 
        $MyString = "Select * from survey where V1='$Respon1' 
                                            and V2='$Respon2' 
                                            and V3='$Respon3' 
                                            and V4='$Respon4' 
                                            and V5='$Respon5' 
                                            and V6='$Respon6' 
                                            and V7='$Respon7'";

                                            
		$result = mysqli_query($conn, $MyString);
if (mysqli_num_rows($result)>0){
	while($row = mysqli_fetch_row($result)){
		echo '<META HTTP-EQUIV="Refresh" Content="0; URL='.$row[8].'">';
		$_SESSION['ceksehat'];
	}
}  else {
              header ("location:rulekosong.php");
           }    
        
       
    }
?>