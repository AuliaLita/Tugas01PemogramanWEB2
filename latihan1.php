<form action="" method="POST">
      PROGRAM CEK KELULUSAN<br>
      Nilai Ujian : <input type="text" name="nilai">
      <input type="submit" value="Hasil">
    </form>
    <?php
      if ($_POST)
      {
        $nilai = $_POST['nilai'];
        if ($nilai >= 90)
        {
          $grade = "A+";
        }
        elseif ($nilai >= 80)
        {
          $grade = "A";
        }
        elseif ($nilai >= 70)
        {
          $grade = "B";
        }
        elseif ($nilai >= 60)
        {
          $grade = "C";
          
        }
        else
        {
          $grade = "D";
          
        }
        echo "Hasil Kelulusan";
        echo "<br>";
        echo "Nilai : " . $nilai;
        echo "<br>";
        echo "Indeks Prestasi : " . $grade;
      }
    ?>