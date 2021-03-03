<?php
    namespace App\Objects;

    class StateManager {

        // User nieautoryzowany
        public function unauthorized()
        {
            return response()->json([
                'code' => 401,
                'msg' => 'unauthorized'
            ], 401);
        }

        // User autoryzowany
        public function authorized()
        {
            return response()->json([
                'code' => 200,
                'msg' => 'ok'
            ], 200);
        }

        // Nie odnaleziono treści
        public function notFound()
        {
            return response()->json([
                'code' => 404,
                'msg' => 'Not found'
            ], 404);
        }

    }
?>