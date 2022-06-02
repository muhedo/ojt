<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cluster;

class ClusterCtrl extends Controller
{
    function index(){

        $data = [
            "title"=>"Data Cluster",
            "page_title"=>"Data Cluster",
            "clusters" => Cluster::All()
        ];

        return view('cluster.data_cluster',$data);
    }

    function form(Request $req){

        $data = [
            "title"=>"Data Cluster",
            "page_title"=>"Data Cluster",
        ];

        return view('cluster.data_cluster',$data);
    }
    function save(Request $req){
        //proses save
        Cluster::UpdateorCreate(
            [
            "id_cluster" => $req->input("id_cluster"),
            "nm_cluster"=>$req->input("nm_cluster"),
            "kat_cluster"=>$req->input("kat_cluster")
            ]
        );

        // try {
            
        
            // Proses Save
            // Cluster::UpdateorCreate(4
            //     [
            //         "id_cluster" => $req->input("id_cluster")
            //     ],
            //     [
            //     "nm_cluster"=>$req->input("nm_cluster"),
            //     "kat_cluster"=>$req->input("kat_cluster")
            //     ]
        
            // //Data Yg dibawa ketika berhasil
            //     $mess = ["type"=>"success","text"=>"Data Berhasil Disimpan !"];
            //     } catch (Exception $err) {
            //     $mess = ["type"=>"error","text"=>"Data Gagal Disimpan !"];
            // }
    
            //Redirect
            return redirect('cluster');
    }

    function delete(Request $req){
        Cluster::where("id_cluster",$req->id)->delete();
        
        //Redirect
        return redirect('cluster');
    }

    
}
