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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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
                $data = [
                    [
                        'id' => 1,
                        'name' => 'TOEIC',
                        'studentId' => '3120410019',
                        'startDate' => '26/03/2024',
                        'expiredDate' => '31/12/2024',
                        'grade' => null,
                        'score' => 990
                    ],
                    [
                        'id' => 2,
                        'name' => 'B1',
                        'studentId' => '3120410019',
                        'startDate' => '26/03/2024',
                        'expiredDate' => '31/12/2024',
                        'grade' => null,
                        'score' => 260
                    ],
                    [
                        'id' => 3,
                        'name' => 'IELTS',
                        'certificateId' => '1',
                        'studentId' => '3120410019',
                        'startDate' => '26/03/2024',
                        'expiredDate' => '31/12/2024',
                        'grade' => null,
                        'score' => 9
                    ],
                ];
                echo view("components/sidebar/index");
                echo view_cell("CertificateList::showList", $data);
            ?>
        </div>
        <script src="" async defer></script>
    </body>
</html>