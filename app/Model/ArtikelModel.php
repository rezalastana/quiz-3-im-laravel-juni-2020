<?php
    namespace App\Model;
    use Illuminate\Support\Facades\DB;

    class ArtikelModel {
        public static function getAll() {
            $artikel = DB::table('artikel')->get();
            return $artikel;
        }

        public static function save($data) {
            $new_artikel = DB::table('artikel')->insert($data);
            return $new_artikel;
        }

        public static function find($id_artikel) {
            $artikel = DB::table('artikel')->where('id_artikel',$id_artikel)->first();
            return $artikel;
        }

        public static function update($data) {
            $update = DB::table('artikel')->where('id_artikel',$data['id_artikel'])->update($data);
            return $update;
        }

        public static function delete($id_artikel) {
            $artikel = DB::table('artikel')->where('id_artikel',$id_artikel)->delete();
            return 'deleted';
        }
        
    }
?>