<?php

global $db;
if (!session('id') || !get('id')){
    header('Location:'.site_url());
}else{
    
}
