<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array</title>
</head>
<body>
    <h1>Berlatih Array</h1>
        
    <?php 
        echo "<h3> Soal 1 </h3>";
        /* 
            SOAL NO 1
            Kelompokkan nama-nama di bawah ini ke dalam Array.
            Kids : "Mike", "Dustin", "Will", "Lucas", "Max", "Eleven" 
            Adults: "Hopper", "Nancy",  "Joyce", "Jonathan", "Murray"
        */
        $kids = array("Mike","Dustin","Will","Lucas","Max","Eleven"); // Lengkapi di sini
        $adults = array("Hopper","Nancy","Joyce","Jonathan","Murray"); 

        echo "<h4>Kids</h2>";
        foreach($kids as $data_kids){
            echo "<li>$data_kids</li>";
        }

        echo "<h4>Adults</h2>";
        foreach($adults as $data_adults){
            echo "<li>$data_adults</li>";
        }
        echo "<hr>";


        echo "<h3> Soal 2</h3>";
        /* 
            SOAL NO 2
            Tunjukkan panjang Array di Soal No 1 dan tampilkan isi dari masing-masing Array.
        */
        echo "Cast Stranger Things: ";
        echo "<br>";
        $total_kids = count($kids);
        echo "Total Kids: $total_kids" ; // Berapa panjang array kids
        echo "<br>";
        echo "<ol>"; 
        echo "<li> $kids[0] </li>";
        echo "<li> $kids[1] </li>";
        echo "<li> $kids[2] </li>";
        echo "<li> $kids[3] </li>";
        echo "<li> $kids[4] </li>";
        echo "<li> $kids[5] </li>";
        // Lanjutkan

        echo "</ol>";
        $total_adults = count($adults);
        echo "Total Adults: $total_adults" ;// Berapa panjang array adults
        echo "<br>";
        echo "<ol>";
        echo "<li> $adults[0] </li>";
        echo "<li> $adults[1] </li>";
        echo "<li> $adults[2] </li>";
        echo "<li> $adults[3] </li>";
        echo "<li> $adults[4] </li>";
        // Lanjutkan

        echo "</ol>";
        echo "<hr>";
        /*
            SOAL No 3
            Susun data-data berikut ke dalam bentuk Asosiatif Array (Array Multidimensi)
            
            Name: "Will Byers"
            Age: 12,
            Aliases: "Will the Wise"
            Status: "Alive"

            Name: "Mike Wheeler"
            Age: 12,
            Aliases: "Dungeon Master"
            Status: "Alive"

            Name: "Jim Hopper"
            Age: 43,
            Aliases: "Chief Hopper"
            Status: "Deceased"

            Name: "Eleven"
            Age: 12,
            Aliases: "El"
            Status: "Alive"
            
        */
        $soal3 = array(
            array(
                'name' => "Will Byers",
                'age' => 12,
                'aliases' => "Will the Wise",
                'status' => "Alive"
            ),
            array(
                'name' => "Mike Wheeler",
                'age' => 12,
                'aliases' => "Dungon Master",
                'status' => "Alive"
            ),
            array(
                'name' => "Jim Hopper",
                'age' => 43,
                'aliases' => "Chief Hopper",
                'status' => "Deceased"
            ),
            array(
                'name' => "Eleven",
                'age' => 12,
                'aliases' => "EL",
                'status' => "Alive"
            )
        );
        echo "<h3>Soal 3</h3>";
        foreach($soal3 as $data1){
                echo "Name : ".$data1['name']."<br>";
                echo "Age : ".$data1['age']."<br>";
                echo "Aliases : ".$data1['aliases']."<br>";
                echo "Status : ".$data1['status']."<br>";
                echo "<br>";
        }
        
    ?>
</body>
</html>