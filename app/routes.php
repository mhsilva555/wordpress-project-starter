<?php

Routes::map('ENDPOINT', function(){
    Routes::load(VIEWS . 'BLADE_TEMPLATE', null, null, 200);
});