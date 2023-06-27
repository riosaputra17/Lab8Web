<?php
 

namespace App\Controllers;

class Page extends BaseController
{

    public function home(){

        $data = [
            'title'=> 'Home | Pemrograman Web2',
            'tes' => ['satu','dua','tiga']
        ];
        return view ('page/home', $data);
    }
    public function about()
    {
        $data = [
            'title'=> 'About Me'
        ];
      
        echo view ('page/about',$data);
       
    }
    public function contact()
    {

        $data =[
            'title' => 'Contact Us',
            'alamat' => [
                [
                'tipe' => 'rumah',
                'alamat' => 'Kp. Bulak Kunyit',
                'kota' => 'Bandung'
            ],
            [
                'tipe' => 'Kantor',
                'alamat' => 'Kp. Sasak Bakar',
                'kota' => 'Bekasi'
            ]

            ]
        ];

        return view ('page/contact',$data);
    }
    public function faqs()
    {
        echo "ini halaman FAQ";
    }
}

?>