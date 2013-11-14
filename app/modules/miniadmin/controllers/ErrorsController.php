<?php


namespace MiniAdmin\Controllers {

    class ErrorsController extends BaseController
    {

        public function error404Action()
        {
            $this->response->setStatusCode(404 , 'Not found');

            if ( $this->request->isAjax() ) {
                $this->jsonResponse([ 'success' => false , 'message' => '404' ]);
            }
        }

        public function error403Action()
        {
            $this->response->setStatusCode(403 , 'Forbidden');

            if ( $this->request->isAjax() ) {
                $this->jsonResponse([ 'success' => false , 'message' => '403' ]);
            }
        }

    }
}
