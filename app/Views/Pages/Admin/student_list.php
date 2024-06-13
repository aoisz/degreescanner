<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Degree Scanner</title>
        <meta name="description" content="Degree Scanner">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="<?php echo base_url("bootstrap/bootstrap.min.css")?>" rel="stylesheet">
        <script src="<?php echo base_url("bootstrap/bootstrap.bundle.min.js")?>" async defer></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <style>
            html {
                height: -webkit-fill-available;
            }
            .list_item {
                height: 7rem;
            }
        </style>
    </head>
    <body class="h-100">
        <div class="d-flex flex-norwrap p-0 h-100 ">
            <?php 
                echo view("components/sidebar/index");
            ?>
            <div class="h-100 w-100 d-flex justify-content-center bg-white">
                <?php
                    $data1 = [];
                    // echo $data;
                    // $data = json_decode($data);
                    echo $data;
                    // foreach($data as $item) {
                    //     $temp = [
                    //         'id' => $item->id,
                    //         'name' => $item->certificate->name,
                    //         'studentName' => $item->student->lastName . $item->student->firstName,
                    //         'startDate'=> new DateTime($item->startDate),
                    //         'expiredDate' => explode("T", $item->expiredDate)[0],
                    //         'grade'=> null,
                    //         'totalScore' => $item->totalScore,
                    //         'listening' => $item->listeningScore,
                    //         'reading' => $item->readingScore,
                    //         'status' => $item->status->name
                    //     ];
                    //     array_push($data1, $temp);
                    // }
                    // echo view_cell("CertificateList::showAllList", $data1);
                ?>
            </div>
        </div>
        <script src="" async defer></script>
    </body>
</html>