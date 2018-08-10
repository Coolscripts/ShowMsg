<?php
/**
 * ShowMsg Library
 * =====================
 *
 * ShowMsg is great and easy to use to show success or errors messages in your PHP code.
 *
 * @author      Cool Scripts <support@cool-scripts.com>
 *
 * @license     Code and contributions have 'MIT License'
 *              More details: https://github.com/Coolscripts/ShowMsg/LICENSE.txt
 *
 * @link        Homepage:     http://cool-scripts.com
 *              GitHub Repo:  https://github.com/Coolscripts/ShowMsg
 *              README:       https://github.com/Coolscripts/ShowMsg/blob/master/README.md
 *
 * @version     1.0.0
 */

namespace CoolScripts;

class ShowMsg {

    protected $errors = array();
    protected $success = array();

    public function success($msg) {
        return array_push($this->success, $msg);
    }

    public function errors($msg) {
        return array_push($this->errors, $msg);
    }

    public function display_error($style = '') {
        if (count($this->errors) > 0){
            echo '<div class="alert alert-danger" '.$style.' withe>';
                foreach ($this->errors as $error){
                    echo $error .'<br>';
                }
            echo '</div>';
        }
    }
    
    public function display_success($style = '') {
        if (count($this->success) > 0){
            echo '<div class="alert alert-success" '.$style.' withe>';
                foreach ($this->success as $succes){
                    echo $succes .'<br>';
                }
            echo '</div>';
        }
    }
    
    public function display() {
        if ($this->display_error()) {
            return $this->display_error();
        } elseif ($this->display_success()) {
            return $this->display_success();
        }
    }
}


?>