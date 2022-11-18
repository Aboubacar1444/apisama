<?php

namespace App\Controller;

use App\Service\FileService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class FileController extends AbstractController
{
    #[Route('/file', name: 'app_file')]
    public function index(Request $request ,FileService $fileService, SerializerInterface $serializer): JsonResponse
    {
        ini_set('upload_max_filesize', "800M");
        ini_set('post_max_size', "800M");
        ini_set('max_input_time', 2000);
        ini_set('max_execution_time', 2000);


        return $fileService->excelToStudent($_FILES['file']['name'], $_FILES['file']['tmp_name'], $this->getParameter('kernel.project_dir'));



    }
}
