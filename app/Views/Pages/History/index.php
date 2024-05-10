<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Degree Scanner</title>
        <meta name="description" content="Degree Scanner">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="<?php echo base_url("bootstrap/bootstrap.min.css")?>" rel="stylesheet">
        <script src="<?php echo base_url("bootstrap/bootstrap.bunlde.min.js")?>"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <style>
            html {
                height: -webkit-fill-available;;
            }
        </style>
    </head>
    <body class="h-100">
        <div class="d-flex flex-norwrap bg-body-secondary p-0 h-100 w-100">
            <?php
                $data = [];
                $response = json_decode($response);
                foreach($response as $item) {
                    $temp = [
                        'id' => $item->id,
                        'name' => $item->certificate->name,
                        'studentId' => $item->student->lastName . $item->student->firstName,
                        'startDate'=> new DateTime($item->startDate),
                        'expiredDate' => explode("T", $item->expiredDate)[0],
                        'grade'=> null,
                        'score' => $item->score
                    ];
                    array_push($data, $temp);
                }
                echo view("components/sidebar/index");
                echo view_cell("CertificateList::showList", $data);
            ?>
        </div>
        <script src="" async defer></script>
    </body>
</html>