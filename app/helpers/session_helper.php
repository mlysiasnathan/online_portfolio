<?php
    session_start();

    function isLoggedIn() {
        if (isset($_SESSION['usernameBlog'])) {
            return true;
        } else {
            return false;
        }
    }
