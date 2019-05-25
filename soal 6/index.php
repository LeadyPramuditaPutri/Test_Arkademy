<!DOCTYPE html>
<html>
<head>
	<title>Data Programmer</title>
</head>
<body>
	
	<h3>Data Programmer</h3>
	
	<table cellpadding="5" cellspacing="0" border="1">
		<tr bgcolor="#CCCCCC">
			<th>No.</th>
			<th>ID</th>
			<th>Nama</th>
			<th>Skill</th>

		</tr>
		
		<?php
		//iclude file koneksi ke database
		include('koneksi.php');
		
		//query ke database dg SELECT table siswa diurutkan berdasarkan NIS paling besar
		$query = "SELECT * FROM users ORDER BY id ASC";
     	 $result = mysqli_query($link, $query);
      //mengecek apakah ada error ketika menjalankan query
      		if(!$result){
       		 die ("Query Error: ".mysqli_errno($link).
          		 " - ".mysqli_error($link));
		
			//jika data kosong, maka akan menampilkan row kosong
			echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
			
		} else{	//else ini artinya jika data hasil query ada (data diu database tidak kosong)
			
			//jika data tidak kosong, maka akan melakukan perulangan while
			$no = 1;	//membuat variabel $no untuk membuat nomor urut
			while($data = mysqli_fetch_assoc($result))
			{	//perulangan while dg membuat variabel $data yang akan mengambil data di database
				
				//menampilkan row dengan data di database
				echo '<tr>';
					echo '<td>'.$no.'</td>';	//menampilkan nomor urut
					echo '<td>'.$data['id'].'</td>';	//menampilkan data nis dari database
					echo '<td>'.$data['name'].'</td>';	//menampilkan data nama lengkap dari database
					$sql = "SELECT  COUNT (name) FROM skills where users ON id=user_id";
					$jumlah = mysqli_query($sql);
					$hasil = mysqli_fetch_array($jumlah);
					echo '<td>'.$hasil.'</td>';
					
				
				$no++;	//menambah jumlah nomor urut setiap row
				
			}
			
		}

		?>
	</table>
</body>
</html>