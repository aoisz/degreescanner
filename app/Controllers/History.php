<?php

namespace App\Controllers;
use App\Libraries\APICall;
use CodeIgniter\HTTP\RedirectResponse;

class History extends BaseController
{
    public function index(): string
    {
        $data = $this->getCertificateByStudentId();
        return view('Pages/History/index', $data);
    }

    public function getAllCertificate(): string
    {
        $api = new APICall();
        $response = $api->get('/student_certificate/getAll');
        $data = array(
            'response' => $response->getBody(),
        );
        return view('Pages/History/index', $data);
    }

    public function getCertificateByStudentId(): array
    {
        $student = session()->get("student_id");
        $api = new APICall();
        $response = $api->get('/student_certificate/getCertificateByStudentId/'.$student);
        $data = array(
            'response' => $response->getBody(),
        );
        // echo $data;
        return $data;
    }

    
    public function delete()
    {
        $api = new APICall();
        $certificateId = $this->request->getPost("id");
        echo $certificateId;
        $response = $api->get('/student_certificate/delete/'.$certificateId);
        if($response->getBody()) {
            return redirect()->to("/history");
        }
    }

}