<!DOCTYPE html>
<html>
<head>
	<title>Daftar Menu Obat</title>
	<link rel="stylesheet" type="text/css" href="./css/customku.css">
	<script type="text/javascript">
	function displayResult(frm){   
	 	var selectedobatku="";
	    for (i = 0; i < frm.obatku.length; i++){ //menghitung jumlah panjang array
	  		if (frm.obatku[i].checked){   
	   		selectedobatku += frm.obatku[i].value +", ";
	  		}
	    }
	}
	function displayAlert(frm){   
	var hasil=0.0;
	var selectedobatku="";
			for (i = 0; i < frm.obatku.length; i++){   
			  	if (frm.obatku[i].checked)
			  	{   
			   		selectedobatku = frm.obatku[i].value;
			   		data= parseInt(frm.obatku[i].value);
			   		hasil += data;
	  			}
	  		}
	    if (selectedobatku==""){ 
	  		alert("Tidak Ada Obat Terpilih !");
	        form.obatku[0].focus();
	        return false;
	    }
	    else
	    alert("Jumlah Biaya : " + hasil);
	}
</script>
</head>
<body bgcolor="pink">

<h1 align="center" class="header"><marquee> KIMIA FARMA YOGYAKARTA </marquee></h1>

	<p id="menukita" align="center">Pilih Obat yang Anda Beli</p>
<div id="wrappermain" align="center">
	<!-- <div id="bc"> -->
	<div id="wrapper">
		<div id="kotak">
			<form>
			<input type="checkbox" name="obatku" value="15000" id="bodrex" onclick="displayResult(this.form)"> BODREX <br>
			<img src="bodrex.jpg" class="gambarmenu" width="15%">
			<p class ="Ket">Obat Sakit Kepala<br>
				Cara Pemakaian : 3x1 <br>
				Harga : Rp 15.000,-<br>
			</p>
		</div><br><br>

		<div id="kotak">
			<input type="checkbox" name="obatku" value="50000" id="polysilane" onclick="displayResult(this.form)"> POLYSILANE <br>
			<img src="sp.jpg" class="gambarmenu" width="20%">
			<p class ="Ket">Obat Sakit Maag<br>
				Cara Pemakaian : 3x1 <br>
				Harga : Rp 50.000,-<br>
			</p>
		</div><br><br>

		<div id="kotak">
			<input type="checkbox" name="obatku" value="25000" id="SALICYL"  onclick="displayResult(this.form)"> SALICYL <br>
			<img src="sal.jpg" class="gambarmenu" width="15%">
			<p class ="Ket">Obat Gatal-Gatal<br>
				Cara Pemakaian : Bila Gatal Saja<br>
				Harga : Rp 25.000,-<br>
			</p>
		</div><br><br>

		<div id="kotak">
			<input type="checkbox" name="obatku" value="10000" id="GPU" onclick="displayResult(this.form)"> GPU <br>
			<img src="gpu.jpg" class="gambarmenu" width="15%">
			<p class ="Ket">Minyak Urut Orang Tua<br>
				Cara Pemakaian : Bila Ingin Tidur<br>
				Harga : Rp 10.000,-<br>
			</p>
		</div><br><br>

		<div id="kotak">
			<input type="checkbox" name="obatku" value="25000" id="ANTIMO" onclick="displayResult(this.form)"> ANTIMO <br>
			<img src="antimo.jpg" class="gambarmenu" width="15%">
			<p class ="Ket">Obat Anti Mabuk<br>
				Cara Pemakaian : Sebelum Berkendaraan<br>
				Harga : Rp 25.000,-<br>
			</p>
		</div><br><br>
		

		<div id="kotak">
			<input type="checkbox" name="obatku" value="20000" id="SALONPAS" onclick="displayResult(this.form)"> SALONPAS <br>
			<img src="koyo.jpg" class="gambarmenu" width="15%">
			<p class ="Ket">Obat Sakit Pegal-Pegal<br>
				Cara Pemakaian : Bila Capek <br>
				Harga : Rp 20.000,-<br>
			</p>
		</div><br><br>

		<button name="hitung" id="hitung" onclick="displayAlert(this.form)">Hitung Total Biaya</button>
		</form>
		<a href="masuk.html"><button name="hitung" id="keluar">Keluar</button></a>
	</div>

</div>
</div>
<div id="footer" align="center">
	<p id="footerku">Create By Mirta</p>
</body>
</html>