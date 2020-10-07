<?php

$transportasi=[
    
    ["bus","Bejeu",230000],
    ["bus","Shantika",210000],
    ["bus","Haryanto",250000],
    ["bus",'Muji Jaya',240000],

    ["pesawat","Lion Air",1500000],
    ["pesawat","Garuda",2500000],
    ["pesawat","Air Asia",2000000],
    ["pesawat","Batik Air",2000000],
    
    ["Kapal","Kapal Pesiar",1000000],
    ["Kapal","Kapal Feri",250000],
    ["Kapal","Kapal Cepat",500000]
    
    ];

    $temp_arr=[];

    foreach ($transportasi as $key) {
    //    var_dump($key[0]);
       $temp_arr[]=$key[0];
    }
    $menu=array_unique($temp_arr);
    // var_dump($pilihan);

    $menu_jenis=[];
    if(isset($_POST['filter']))
    {
        // var_dump($_POST['filter']);
        $filter=$_POST['filter'];
        if($filter == "")
        {
            $menu_jenis=$transportasi;
        }else{
            foreach($transportasi as $key)
            {
                if($key[0] == $filter){
                    $menu_jenis[]=[$key[0],$key[1],$key[2]];
                }
            }
        }
    }else{
        $menu_jenis=$transportasi;
    }
    // var_dump($tampilkan_merk);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="d-flex mt-5">
    <h2 class="d-flex mx-auto" >Daftar Transportasi di Indonesia</h2>
    </div>
    <div class="container mt-3">

            <table class="table table-striped">
            <thead class="bg-info">
            <tr>
                <th scope="col">Moda Transportasi</th>
                <th scope="col">Nama</th>
                <th scope="col">Harga Tiket</th>
            </tr>
        </thead>
        <?php $grand_total=0; ?>
        <?php foreach ($menu_jenis as $key => $value): ?>
        <tbody>
            <tr>
                <td><?php echo $value[0]; ?></td>
                <td><?php echo $value[1]; ?></td>
                <td><?php echo $value[2]; ?></td>
            </tr>
        </tbody>
        <?php $grand_total+=$value[2]; ?>
        <?php endforeach; ?>
        <thead class="thead-light">
                <tr>
                <th scope="col">Total Keseluruhan</th>
                <th scope="col"></th>
                <th scope="col"><?php echo $grand_total; ?></th>
            </tr>
        </thead>
        </table>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h4><i>Cari Moda Transportasi</i></h4>
                <form action="remidi.php" method="post">
                <select name="filter">
                    <option value="">
                        Tampilkan Semua
                    </option>
                    <?php foreach ($menu as $key): ?>
                        <option value="<?php echo $key; ?>"><?php echo $key; ?></option>
                    <?php endforeach; ?>      
                </select>
                <button class="btn btn-primary" type="submit" value="filter">Cari</button>
                </form>
                </div>
            </div>
         </div>
    </div>
</body>
</html>