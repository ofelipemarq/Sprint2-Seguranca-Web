<?php
/**
 * @throws CsrfException
 */
public function validate(Request $request) {
    $token = $request->getParam('__elgg_token');
    $ts = $request->getParam('__elgg_ts');
    $session_id = $this->session->getID();
}
